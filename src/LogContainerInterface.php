<?php
namespace Neutron\Log;


/**
 * Class LogContainer
 *
 * @package Neutron\Log
 */
interface LogContainerInterface extends LoggerInterface
{
    /**
     * @param LoggerInterface $logger
     *
     * @return $this
     */
    public function add(LoggerInterface $logger);


}