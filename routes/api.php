<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CustomerController;



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// Route::post('/register', [CustomerController::class, 'register']);

// Route::middleware('telegram.verify')->group(function () {
//     Route::get('/recipes', [RecipeController::class, 'index']);
// });
