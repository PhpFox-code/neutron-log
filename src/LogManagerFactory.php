<?php

namespace Phpfox\Log;

/**
 * Class LogManagerFactory
 *
 * @package Phpfox\Log
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