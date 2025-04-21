<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Add your custom API routes here (e.g., for fields/reservations)
Route::apiResource('fields', \App\Http\Controllers\FieldController::class);
Route::apiResource('reservations', \App\Http\Controllers\ReservationController::class);