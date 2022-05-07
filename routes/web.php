<?php

use App\Http\Controllers\CountriesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'home']);

Route::get('/{continent}/index', [CountriesController::class, 'index']);

Route::get('/{continent}/quiz', [CountriesController::class, 'quiz']);
