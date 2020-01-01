<?php

namespace App\Http\Middleware;

use Mild\Cookie\CookieMiddleware as Middleware;

class CookieMiddleware extends Middleware
{
    /**
     * @var array
     */
    protected $dontEncrypt = [];
}