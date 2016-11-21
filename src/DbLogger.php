<?php

namespace Phpfox\Log;


class DbLogger implements LoggerInterface
{
    use LoggerTrait;

    /**
     * @var string
     */
    protected $model;

    /**
     * FilesystemLogger constructor.
     *
     * @param array $config
     */
    public function __construct($config)
    {
        $config = array_merge([
            'model' => '',
            'level' => 'debug',
        ], (array)$config);

        $this->model = $config['model'];
        $this->setLevel($config['level']);
    }

    /**
     * @param string $level
     * @param string $message
     * @param array  $context
     *
     * @return array
     */
    public function format($level, $message, $context = [])
    {
        if ($context) {
            $message = $this->interpolate($message, $context);
        }
        return [
            'level'   => $level,
            'message' => $message,
            'created' => date('Y-m-d H:i:s'),
        ];
    }

    protected function write($data)
    {
        service('models')->get($this->model)->insert($data);
    }

}