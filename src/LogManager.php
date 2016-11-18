<?php

namespace Phpfox\Log;


/**
 * Class LogManager
 *
 * @see     http://www.php-fig.org/psr/psr-3/
 * @package Phpfox\Log
 */
class LogManager implements LogManagerInterface
{
    /**
     * @var LogContainerInterface[]
     */
    protected $containers = [];

    /**
     * @var array
     */
    protected $map = [];

    public function has($id)
    {
        return isset($this->map[$id]);
    }

    public function get($id)
    {
        return isset($this->containers[$id]) ? $this->containers[$id]
            : $this->containers[$id] = $this->build($id);
    }

    public function build($id)
    {
        if ($id) {
            ;
        }
        return new LogContainer();
    }

    public function set($id, LogContainer $container)
    {
        $this->containers[$id] = $container;
    }
}