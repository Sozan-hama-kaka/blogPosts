<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\ExampleController::class, "homepage"]);
Route::get('/about', [\App\Http\Controllers\ExampleController::class, "aboutPage"]);
