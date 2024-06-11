<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');


Route::group(['prefix' => 'auth'], function ($router) {

    Route::post('login', [AuthController::class, 'login']);
    Route::post('register', [AuthController::class, 'register']);
    Route::post('refresh', [AuthController::class, 'refresh']);
    Route::post('logout', [AuthController::class, 'logout']);
    Route::post('me', [AuthController::class, 'me']);
});

Route::middleware(['auth:api'])->group(function () {

    // Route::post('refresh',[AuthController::class,'refresh']);
    // Route::post('logout',[AuthController::class,'logout']);
    // Route::post('me', [AuthController::class,'me']);    
});


// Route::group([

//     // 'middleware' => 'api',
//     'prefix' => 'auth'

// ], function ($router) {

   
//     Route::post('register', [AuthController::class,'register']);
//     Route::post('login', [AuthController::class,'login']);
//     Route::post('refresh',[AuthController::class,'refresh']);
//     Route::post('logout',[AuthController::class,'logout']);
//     Route::post('me', [AuthController::class,'me']);  
// });