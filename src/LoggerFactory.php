<?php
namespace Neutron\Log;

/**
 * Class LoggerFactory
 *
 * @package Neutron\Log
 */
class LoggerFactory
{
    /**
     * @param $class
     * @param $options
     *
     * @return LoggerInterface
     */
    public function factory($class, $options)
    {
        $logOptions = config('log.containers', $options);

        if (!$class) {
            $drivers = config('log.drivers');
            $class = $drivers[$logOptions['driver']];
        }

        return new $class($logOptions);
    }
}