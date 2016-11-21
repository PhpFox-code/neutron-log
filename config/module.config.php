<?php

namespace Phpfox\Log;

return [
    'log.drivers'    => [
        'filesystem' => FilesystemLogger::class,
        'db' => DbLoger::class,
    ],
    'log.containers' => [
        'log.main' => [
            [
                'driver'   => 'filesystem',
                'filename' => 'main.log',
            ],
        ],
    ],
    'services'       => [
        'log.main' => [LogContainerFactory::class, null, 'log.main'],
    ],
];