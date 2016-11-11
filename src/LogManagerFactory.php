<?php

namespace Phpfox\LogManager;

/**
 * Class LogManagerFactory
 *
 * @package Phpfox\LogManager
 */
class LogManagerFactory
{
    /**
     * @return LogManager
     */
    public function factory()
    {
        return new LogManager();
    }

    /**
     * @return bool
     */
    public function shouldCache()
    {
        return true;
    }
}