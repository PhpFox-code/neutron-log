<?php

namespace Phpfox\LogManager;

/**
 * Class JsonFormatter
 *
 * @package Phpfox\LogManager
 */
class JsonFormatter implements FormatterInterface
{
    /**
     * @param mixed $data
     *
     * @return string
     */
    public function format($data)
    {
        return json_encode($data, JSON_PRETTY_PRINT);
    }
}