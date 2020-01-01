<?php

namespace App;

use Throwable;
use Mild\Http\HttpException;
use Mild\ErrorHandler as BaseHandler;
use Mild\Validation\ValidationException;

class ErrorHandler extends BaseHandler
{
    /**
     * @var array
     */
    protected $dontReport = [
        HttpException::class,
        ValidationException::class
    ];

    /**
     * @param Throwable $e
     * @return void
     */
    public function report(Throwable $e)
    {
        if ($this->shouldReport($e)) {
            parent::report($e);
        }
    }

    /**
     * @param Throwable $e
     * @return bool
     */
    protected function shouldReport($e)
    {
        foreach ($this->dontReport as $value) {
            if ($e instanceof $value) {
                return false;
            }
        }

        return true;
    }
}