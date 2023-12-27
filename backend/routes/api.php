<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\UserAccountController;
use App\Http\Controllers\UserSettingController;



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('todos', TodoController::class);
Route::apiResource('user-accounts', UserAccountController::class);
Route::apiResource('user-settings', UserSettingController::class);
