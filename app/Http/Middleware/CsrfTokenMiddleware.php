<?php

namespace App\Http\Middleware;

use Mild\Http\CsrfTokenMiddleware as Middleware;

class CsrfTokenMiddleware extends Middleware
{
    /**
     * @var array
     */
    protected $excepts = [];
}