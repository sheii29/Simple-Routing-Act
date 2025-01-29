<?php


use App\Http\Controllers\GreetController;

Route::get('/', function () {
    return 'Hello, Laravel!';
});

Route::get('/greet', [GreetController::class, 'show']);
