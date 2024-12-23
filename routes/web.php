<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\API\ProductController;

Route::apiResource('products', ProductController::class);

Route::get('/tes', function () {
    dd('testtttt');
});