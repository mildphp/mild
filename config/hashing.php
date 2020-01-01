<?php

use Mild\Hashing\BcryptHasher;
use Mild\Hashing\Argon2IHasher;

return [
    
    'driver' => env('HASHING_DRIVER', 'bcrypt'),

    'drivers' => [
        'bcrypt' => [
            'cost' => BcryptHasher::DEFAULT_COST
        ],
        'argon21'  => [
            'threads'     => Argon2IHasher::DEFAULT_THREADS,
            'time_cost'   => Argon2IHasher::DEFAULT_TIME_COST,
            'memory_cost' => Argon2IHasher::DEFAULT_MEMORY_COST
        ],
        'argon2ID' => [
            'threads'     => Argon2IHasher::DEFAULT_THREADS,
            'time_cost'   => Argon2IHasher::DEFAULT_TIME_COST,
            'memory_cost' => Argon2IHasher::DEFAULT_MEMORY_COST
        ]
    ]
];