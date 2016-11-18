<?php
/**
 * Created by PhpStorm.
 * User: namnv
 * Date: 11/18/16
 * Time: 3:03 PM
 */
namespace Phpfox\Log;


/**
 * Class LogManager
 *
 * @see     http://www.php-fig.org/psr/psr-3/
 * @package Phpfox\Log
 */
interface LogManagerInterface
{
    /**
     * @param string $id
     *
     * @return bool
     */
    public function has($id);

    /**
     * @param string $id
     *
     * @return LogContainerInterface
     */
    public function get($id);

    /**
     * @param string       $id
     * @param LogContainer $container
     */
    public function set($id, LogContainer $container);

    /**
     * @param string $id
     *
     * @return  LogContainerInterface
     */
    public function build($id);
}