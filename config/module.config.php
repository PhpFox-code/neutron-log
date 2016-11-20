<?php

namespace Phpfox\Log;

return [
    'log'      => [
        'drivers'    => [
            'filesystem' => FilesystemLogger::class,
        ],
        'containers' => [
            'default' => [
                [
                    'driver'   => 'filesystem',
                    'filename' => 'main.log',
                ],
            ],
        ],
    ],
    'services' => [
        'map' => [
            'log' => [LogContainerFactory::class, null, 'default'],
        ],
    ],
];