<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

Route::get('/', fn() => to_route('jobs.index'));

Route::resource('jobs', JobController::class)
    ->only('index', 'show');

Route::resource('icon', JobController::class)
    ->only('index', 'show');
