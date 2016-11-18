<?php
namespace Phpfox\Log;


/**
 * Class LogContainer
 *
 * @package Phpfox\Log
 */
interface LogContainerInterface
{
    /**
     * @param LoggerInterface $logger
     *
     * @return $this
     */
    public function add(LoggerInterface $logger);

    /**
     * @param string $message
     * @param array  $context
     *
     * @return $this
     */
    public function emergency($message, $context = []);

    /**
     * @param string $message
     * @param array  $context
     *
     * @return $this
     */
    public function alert($message, $context = []);

    /**
     * @param string $message
     * @param array  $context
     *
     * @return $this
     */
    public function critical($message, $context = []);

    /**
     * @param string $message
     * @param array  $context
     *
     * @return $this
     */
    public function error($message, $context = []);

    /**
     * @param string $message
     * @param array  $context
     *
     * @return $this
     */
    public function warning($message, $context = []);

    /**
     * @param string $message
     * @param array  $context
     *
     * @return $this
     */
    public function notice($message, $context = []);

    /**
     * @param string $message
     * @param array  $context
     *
     * @return $this
     */
    public function info($message, $context = []);

    /**
     * @param string $message
     * @param array  $context
     *
     * @return $this
     */
    public function debug($message, $context = []);

    /**
     * @param string $message
     * @param array  $context
     *
     * @return $this
     */
    public function log($level, $message, $context = []);
}