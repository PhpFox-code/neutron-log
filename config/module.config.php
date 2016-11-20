<?php

namespace Phpfox\Log;

return [
    'log.drivers'    => [
        'filesystem' => FilesystemLogger::class,
    ],
    'log.containers' => [
        'default' => [
            [
                'driver'   => 'filesystem',
                'filename' => 'main.log',
            ],
        ],
    ],
    'services'   => [
        'log' => [LogContainerFactory::class, null, 'default'],
    ],
];