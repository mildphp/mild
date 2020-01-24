<?php

return [

    'name' => env('APP_NAME', 'Mild'),

    'debug' => env('APP_DEBUG', true),

    'locale' => env('APP_LOCALE', 'id'),

    'timezone' => env('APP_TIMEZONE', 'Asia/Jakarta'),

    'asset_path' => env('ASSET_PATH', '/assets'),

    'providers' => [
        \Mild\View\ViewServiceProvider::class,
        \Mild\Mail\MailServiceProvider::class,
        \Mild\Http\HttpServiceProvider::class,
        \Mild\Cache\CacheServiceProvider::class,
        \Mild\Cookie\CookieServiceProvider::class,
        \Mild\Session\SessionServiceProvider::class,
        \Mild\Hashing\HashingServiceProvider::class,
        \Mild\Database\DatabaseServiceProvider::class,
        \Mild\Validation\ValidationServiceProvider::class,
        \Mild\Encryption\EncryptionServiceProvider::class,
        \Mild\Translation\TranslationServiceProvider::class,
        \App\Providers\AppServiceProvider::class,
        \App\Providers\RouteServiceProvider::class,
        \App\Providers\EventServiceProvider::class,
    ],

    'aliases' => [
        'App' => \Mild\Support\Facades\App::class,
        'Log' => \Mild\Support\Facades\Log::class,
        'Mail' => \Mild\Support\Facades\Mail::class,
        'View' => \Mild\Support\Facades\View::class,
        'Event' => \Mild\Support\Facades\Event::class,
        'Flash' => \Mild\Support\Facades\Flash::class,
        'Route' => \Mild\Support\Facades\Route::class,
        'Cache' => \Mild\Support\Facades\Cache::class,
        'Config' => \Mild\Support\Facades\Config::class,
        'Cookie' => \Mild\Support\Facades\Cookie::class,
        'Session' => \Mild\Support\Facades\Session::class,
        'Request' => \Mild\Support\Facades\Request::class,
        'Hashing' => \Mild\Support\Facades\Hashing::class,
        'Database' => \Mild\Support\Facades\Database::class,
        'Container' => \Mild\Support\Facades\Container::class,
        'Validator' => \Mild\Support\Facades\Validation::class,
        'Encryption' => \Mild\Support\Facades\Encryption::class,
        'Translation' => \Mild\Support\Facades\Translation::class,
        'ViewCompiler' => \Mild\Support\Facades\ViewCompiler::class,
        'ViewVariable' => \Mild\Support\Facades\ViewVariable::class,
        'ViewRepository' => \Mild\Support\Facades\ViewRepository::class,
        'DatabaseCompiler' => \Mild\Support\Facades\DatabaseCompiler::class
    ]
];