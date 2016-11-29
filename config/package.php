<?php

namespace Neutron\Log;

return [
    'log.drivers'    => [
        'filesystem' => FilesystemLogger::class,
        'db'         => DbLogger::class,
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