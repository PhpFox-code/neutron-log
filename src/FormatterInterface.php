<?php
namespace Phpfox\LogManager;

/**
 * Interface FormatterInterface
 *
 * @package Phpfox\LogManager
 */
interface FormatterInterface
{
    /**
     * @param $data
     */
    public function format($data);
}