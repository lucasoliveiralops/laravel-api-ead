<?php

use App\Http\Controllers\Api\CourseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('courses', [CourseController::class, 'index'])
    ->name('v1.courses');

Route::middleware('auth:sanctum')->get('/usesr', function (Request $request) {
    return $request->user();
});
