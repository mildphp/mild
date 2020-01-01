<?php

use Mild\Translation\DatabaseRepository;

return [

    'driver' => 'file',

    'fallback_locale' => 'id',

    'drivers' => [
        'file' => path('resources/lang'),
        'database' => [
            'table' => 'translations',
            'columns' => [
                DatabaseRepository::COL_KEY => DatabaseRepository::COL_KEY,
                DatabaseRepository::COL_VALUE => DatabaseRepository::COL_VALUE,
                DatabaseRepository::COL_LOCALE => DatabaseRepository::COL_LOCALE
            ]
        ]
    ],
];