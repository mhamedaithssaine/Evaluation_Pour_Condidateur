<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CourseController;

Route::get('/home', function () {
    return response()->json([
        'message' => 'Welcome to the API',
        'laravel_version' => app()->version(),
        'status' => 'success'
    ]);
});


Route::post('/register', [AuthController::class, 'registre']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:api')->group(function () {
    Route::get('/user', [AuthController::class, 'user']);
    Route::get('/courses', [CourseController::class, 'index']);
    Route::get('/courses/{id}', [CourseController::class, 'show']);
    Route::post('/courses/{id}/subscribe', [CourseController::class, 'subscribe']);
});