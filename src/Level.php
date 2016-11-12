<?php

namespace Phpfox\LogManager;

/**
 * Describe log levels
 *
 * http://www.php-fig.org/psr/psr-3/#5-psr-log-loglevel
 *
 * Define log level
 * EMERGENCY, ALERT, CRITICAL, ERROR, WARNING, NOTICE, INFO, DEBUG
 *
 * @package Phpfox\LogManager
 */
final class Level
{
    const EMERGENCY = 'emergency';
    const ALERT     = 'alert';
    const CRITICAL  = 'critical';
    const ERROR     = 'error';
    const WARNING   = 'warning';
    const NOTICE    = 'notice';
    const INFO      = 'info';
    const DEBUG     = 'debug';
}