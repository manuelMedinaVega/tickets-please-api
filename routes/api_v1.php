<?php

use App\Http\Controllers\Api\V1\TicketController;
use App\Http\Controllers\Api\V1\AuthorsController;
use App\Http\Controllers\Api\V1\AuthorTicketsController;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->middleware('auth:sanctum')->group(function() {
    
    Route::apiResource('tickets', TicketController::class);

    Route::apiResource('authors', AuthorsController::class);

    Route::apiResource('authors.tickets', AuthorTicketsController::class);

});

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
