<?php
/**
 * PortMap Config
 */

return [
    'server' => [
        'host' => '127.0.0.1',
        'port' => 9100
    ],
    'port_map' => [
        [
            'protocol' => 'tcp', // tcp udp
            'remote_port' => 9101,
            'local_host' => '127.0.0.1',
            'local_port' => 22,
        ],
        [
            'protocol' => 'tcp',
            'remote_port' => 9102,
            'local_host' => '127.0.0.1',
            'local_port' => 3306,
        ]
    ],
];