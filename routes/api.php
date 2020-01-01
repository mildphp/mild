<?php

/*
|--------------------------------------------------------------------------
| Api Route (App\Providers\RouteServiceProvider)
|--------------------------------------------------------------------------
|
| Disini anda bisa mendefinisikan route. anda bisa menambahkan middleware
| sesuai kebutuhan anda, gunakan route cache untuk performance yang lebih
| baik ketika anda akan masuk dalam tahap production.
|
*/

Route::get('/', function () {
    return response()->json([
        'content' => app()->getName()
    ]);
})->name('welcome.api');