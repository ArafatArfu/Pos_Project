<?php

use App\Http\Controllers\UserController;
use App\Http\Middleware\UserMiddleware;
use Illuminate\Support\Facades\Route;

Route::post('/user-registration',[UserController::class,'UserRegistration']);