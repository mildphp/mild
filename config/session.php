<?php

use Mild\Session\DatabaseSessionHandler;

return [

    'name' => env('SESSION_NAME', 'MILDSESSID'),

    'flash' => env('SESSION_FLASH_NAME', '_flash'),

    'prefix' => env('SESSION_PREFIX'),

    'lifetime' => env('SESSION_LIFETIME', 7200),

    'lottery' => [2, 100],

    'driver' => env('SESSION_DRIVER', 'file'),

    'drivers' => [
        'file' => path('storage/framework/sessions'),
        'cookie' => [
            'path' => null,
            'domain' => null,
            'secure' => false,
            'http_only' => true,
            'same_site' => null
        ],
        'database' => [
            'table' => 'sessions',
            'columns' => [
                DatabaseSessionHandler::COL_PAYLOAD => DatabaseSessionHandler::COL_PAYLOAD,
                DatabaseSessionHandler::COL_LIFETIME => DatabaseSessionHandler::COL_LIFETIME,
                DatabaseSessionHandler::COL_SESSION_ID => DatabaseSessionHandler::COL_SESSION_ID
            ]
        ]
    ]
];