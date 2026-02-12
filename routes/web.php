<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutmeController;
use App\Http\Controllers\AcadbackgroundController;
use App\Http\Controllers\IndexController;

Route::get('/', [IndexController::class, 'index']);
Route::get('/aboutme', [AboutmeController::class, 'index']);
Route::get('/acadbackground', [AcadbackgroundController::class, 'index']);
