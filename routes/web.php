<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('users')->group(function () {

    Route::get('/{id}', [UserController::class, 'findById']);
    Route::get('/', [UserController::class, 'findAll']);

    Route::post('/', [UserController::class, 'create']);

    Route::put('/{id}', [UserController::class, 'update']);

    Route::delete('/{id}', [UserController::class, 'delete']);

});