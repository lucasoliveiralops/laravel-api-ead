<?php

use App\Http\Controllers\Api\CourseController;
use App\Http\Controllers\Api\ModuleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('courses', [CourseController::class, 'index'])->name('v1.courses.all');
Route::get('courses/{id}', [CourseController::class, 'show'])->name('v1.courses.byId');
Route::get('courses/{id}/modules', [ModuleController::class, 'index'])->name('v1.courses.modules');

Route::middleware('auth:sanctum')->get('/usesr', function (Request $request) {
    return $request->user();
});
