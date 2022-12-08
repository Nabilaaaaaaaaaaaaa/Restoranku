<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\MenuController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return view('layout');
});

Route::get('/makanan', function () {
    return view('makanan.index');
});

Route::get('/minuman',[MenuController::class, 'tampilMinuman']);
