<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return response()->json([
        'sucess' => true,
    ]);
});

Route::middleware('auth:sanctum')->get('/usesr', function (Request $request) {
    return $request->user();
});
