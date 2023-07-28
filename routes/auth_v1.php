<?php

use App\Http\Controllers\Api\V1\AuthController;
use Illuminate\Support\Facades\Route;


Route::group([
    "prefix" => "user"
], function () {


    Route::post('register', [AuthController::class, 'register']);
    Route::post('login', [AuthController::class, 'login']);


Route::group([
    "middleware" => "auth:api"
], function () {

    Route::post('logout', [AuthController::class, 'logout']);
});

});


