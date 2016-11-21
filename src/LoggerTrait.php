<?php

namespace Phpfox\Log;


/**
 * Class LoggerTrait
 *
 * @package Phpfox\Log
 */
trait LoggerTrait
{
    /**
     * Default accept level is maximum
     *
     * @var
     */
    protected $level = 4;

    public function setLevel($level)
    {
        $this->level = Level::getNumber(strtolower($level));
    }

    public function emergency($message, $context = [])
    {
        $this->write($this->format(Level::EMERGENCY, $message, $context));
        return $this;
    }

    public function alert($message, $context = [])
    {
        if ($this->accept(Level::ALERT)) {
            $this->write($this->format(Level::ALERT, $message, $context));
        }

        return $this;
    }

    /**
     * @param mixed $level Available values EMERGENCY, ALERT, CRITICAL, ERROR,
     *                     WARNING, NOTICE, INFO, DEBUG
     *
     * @return bool
     */
    public function accept($level)
    {
        return Level::getNumber($level) <= $this->level;
    }

    public function critical($message, $context = [])
    {
        if ($this->accept(Level::CRITICAL)) {
            $this->write($this->format(Level::CRITICAL, $message, $context));
        }

        return $this;
    }

    public function error($message, $context = [])
    {
        if ($this->accept(Level::ERROR)) {
            $this->write($this->format(Level::ERROR, $message, $context));
        }
        return $this;
    }

    public function warning($message, $context = [])
    {
        if ($this->accept(Level::WARNING)) {
            $this->write($this->format(Level::WARNING, $message, $context));
        }
        return $this;
    }

    public function notice($message, $context = [])
    {
        if ($this->accept(Level::CRITICAL)) {
            $this->write($this->format(Level::CRITICAL, $message, $context));
        }
        return $this;
    }

    public function info($message, $context = [])
    {
        if ($this->accept(Level::INFO)) {
            $this->write($this->format(Level::INFO, $message, $context));
        }
        return $this;
    }

    public function debug($message, $context = [])
    {
        if ($this->accept(Level::DEBUG)) {
            $this->write($this->format(Level::DEBUG, $message, $context));
        }
        return $this;
    }

    public function log($level, $message, $context = [])
    {
        if ($this->accept(Level::DEBUG)) {
            $this->write($this->format($level, $message, $context));
        }
        return $this;
    }

    /**
     * @param string $message
     * @param array  $context
     *
     * @return string
     */
    protected function interpolate($message, $context = [])
    {
        $replace = [];
        foreach ($context as $key => $val) {
            $replace['{' . $key . '}'] = $val;
        }
        return strtr($message, $replace);
    }
}