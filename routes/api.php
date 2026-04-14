<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/test', function () {
//     return response()->json([
//         'message' => 'API jalan'
//     ]);
// });

Route::post('/users', [UserController::class, 'register']);
