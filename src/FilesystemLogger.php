<?php

namespace Phpfox\Log;

/**
 * Class FilesystemWriter
 *
 * @package Phpfox\Log
 */
class FilesystemLogger implements LoggerInterface
{
    use LoggerTrait;

    protected $filename = '';

    /**
     * FilesystemLogger constructor.
     *
     * @param string $filename
     * @param string $levels
     */
    public function __construct($filename, $levels = '*')
    {
        if (!file_exists($filename)) {
            if (!is_dir($dir = dirname($filename))
                && !@mkdir($dir, 0777, true)
            ) {
            }
        }
        $this->filename = $filename;
        $this->setAccepts($levels);
    }

    /**
     * @param string $level
     * @param string $message
     * @param array  $context
     *
     * @return string
     */
    public function format($level, $message, $context = [])
    {
        if ($context) {
            $message = $this->interpolate($message, $context);
        }
        return $level . ': ' . date('Y-m-d H:i:s') . PHP_EOL . $message . PHP_EOL
        . PHP_EOL . PHP_EOL;
    }

    protected function write($message)
    {
        file_put_contents($this->filename, (string)$message, FILE_APPEND);
    }
}