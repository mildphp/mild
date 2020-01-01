<?php

namespace App\Providers;

use Mild\Support\Facades\Route;
use Mild\Session\StartSessionMiddleware;
use App\Http\Middleware\CookieMiddleware;
use Mild\Http\ValidatePostSizeMiddleware;
use App\Http\Middleware\CsrfTokenMiddleware;
use Mild\View\ShareErrorsFromFlashMiddleware;
use Mild\Routing\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * @var array
     */
    protected $apiMiddleware = [
        //
    ];

    /**
     * @var array
     */
    protected $webMiddleware = [
        CookieMiddleware::class,
        StartSessionMiddleware::class,
        ValidatePostSizeMiddleware::class,
        CsrfTokenMiddleware::class,
        ShareErrorsFromFlashMiddleware::class
    ];

    /**
     * @var string
     */
    protected $namespace = 'App\\Http\\Controllers';

    /**
     * @return void
     */
    protected function mapRoute()
    {
        $this->apiRoute();
        $this->webRoute();
    }

    /**
     * @return void
     */
    protected function webRoute()
    {
        Route::namespace($this->namespace)->middleware($this->webMiddleware)
            ->group(path('routes/web.php'));
    }

    /**
     * @return void
     */
    protected function apiRoute()
    {
        Route::namespace($this->namespace)->prefix('api')
            ->middleware($this->apiMiddleware)
            ->group(path('routes/api.php'));
    }
}