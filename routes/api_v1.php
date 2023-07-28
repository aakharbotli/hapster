<?php

use App\Http\Controllers\Api\V1\AuthController;
use App\Http\Controllers\Api\V1\UserController;
use Illuminate\Support\Facades\Route;

Route::get('test',[AuthController::class, 'test']);
Route::post('create-capturer',[UserController::class,'createCapturerOrAdmin']);



