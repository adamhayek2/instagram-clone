<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\USerController;

//Does not require Authentication

Route::group(["prefix" => "guest"], function() {

    Route::get('unauthorized', [AuthController::class, 'unauthorized']) -> name("unauthorized");
    Route::post('login', [AuthController::class, "login"]);
    Route::post('register', [AuthController::class, "register"]);

});

//Require Authentication

Route::group(["middleware" => "auth:api"], function() {

    Route::group(["prefix" => "user"], function() {

        Route::post('posts', [UserController::class, 'postsFromFollowing']);
        Route::post('logout', [AuthController::class, 'logout']);
        Route::post('refresh', [AuthController::class, 'refresh']);
    });
    
});