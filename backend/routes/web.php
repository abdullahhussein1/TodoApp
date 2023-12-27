<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\UserAccountController;
use App\Http\Controllers\UserSettingController;


Route::group(['middleware' => ['web']], function () {
    // Your web routes here
Route::get('/', function () {
    return view('welcome');
});

Route::apiResource('todos', TodoController::class);
Route::apiResource('user-accounts', UserAccountController::class);
Route::apiResource('user-settings', UserSettingController::class);
});
