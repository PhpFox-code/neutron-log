<?php

namespace Phpfox\LogManager;

/**
 * Class LogContainer
 *
 * @package Phpfox\LogManager
 */
class LogContainer
{
    /**
     * @var LoggerInterface[]
     */
    protected $writers;

    /**
     * @param LoggerInterface $writer
     *
     * @return $this
     */
    public function add($writer)
    {
        $this->writers[] = $writer;
        return $this;
    }

    /**
     * System is unusable
     *
     * @param string $message
     *
     * @return $this
     */
    public function emergency($message)
    {
        foreach ($this->writers as $writer) {
            $writer->emergency($message);
        }
        return $this;
    }

    /**
     * action must be taken immediately
     *
     * @param string $message
     *
     * @return mixed
     */
    public function alert($message)
    {
        foreach ($this->writers as $writer) {
            $writer->alert($message);
        }
        return $this;
    }

    /**
     * Write alert-level messages
     *
     * @param string $message
     *
     * @return $this
     */
    public function critical($message)
    {
        foreach ($this->writers as $writer) {
            $writer->critical($message);
        }
        return $this;
    }

    /**
     * Write error-level messages
     *
     * @param string $message
     *
     * @return $this
     */
    public function error($message)
    {
        foreach ($this->writers as $writer) {
            $writer->error($message);
        }
        return $this;
    }

    /**
     * Write warning-level messages
     *
     * @param string $message
     *
     * @return $this
     */
    public function warning($message)
    {
        foreach ($this->writers as $writer) {
            $writer->warning($message);
        }
        return $this;
    }

    /**
     * Write notice-level messages
     *
     * @param string $message
     *
     * @return $this
     */
    public function notice($message)
    {
        foreach ($this->writers as $writer) {
            $writer->notice($message);
        }
        return $this;
    }

    /**
     * Write information-level messages
     *
     * @param string $message
     *
     * @return $this
     */
    public function info($message)
    {
        foreach ($this->writers as $writer) {
            $writer->info($message);
        }
        return $this;
    }

    /**
     *
     * Write debug-level messages
     *
     * @param string $message
     *
     * @return $this
     */
    public function debug($message)
    {
        foreach ($this->writers as $writer) {
            $writer->debug($message);
        }
        return $this;
    }
}