<?php

use Mild\Cache\DatabaseHandler;

return [
    
    'driver' => env('CACHE_DRIVER', 'file'),

    'prefix' => env('CACHE_PREFIX'),

    'drivers' => [
        'file' => path('storage/framework/cache'),
        'database' => [
            'table' => 'cache',
            'columns' => [
                DatabaseHandler::COL_KEY => DatabaseHandler::COL_KEY,
                DatabaseHandler::COL_PAYLOAD => DatabaseHandler::COL_PAYLOAD,
                DatabaseHandler::COL_EXPIRATION => DatabaseHandler::COL_EXPIRATION
            ]
        ]
    ]
];