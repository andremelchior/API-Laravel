<?php

use App\Http\Controllers\TesteController;
use App\Http\Controllers\ExampleController;
use Illuminate\Support\Facades\Route;

Route::get('/teste', [TesteController::class, 'minhaPrimeiraRota']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test/{id}', [ExampleController::class, 'index']);
