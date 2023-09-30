<?php

use Illuminate\Http\Request;
use App\Http\Controllers\GameController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController; // manggil controller sesuai bawaan laravel 8
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::post('login', 'AuthController@login');
// Route::group(['prefix' => 'auth', 'middleware' => 'auth:sanctum'], function () {
//     // manggil controller sesuai bawaan laravel 8
//     Route::post('logout', [AuthController::class, 'logout']);
//     // manggil controller dengan mengubah namespace di RouteServiceProvider.php biar bisa kayak versi2 sebelumnya
//     Route::post('logoutall', 'AuthController@logoutall');
// });

// Route::resource('boardgame', GameController::class);

//public routes
Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);
Route::get('boardgame', [GameController::class, 'index']);
Route::get('boardgame/{id}', [GameController::class, 'show']);
Route::get('boardgame/{name}', [GameController::class, 'search']);

//protected routes
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('boardgame', [GameController::class, 'store']);
    Route::put('boardgame/{id}', [GameController::class, 'update']);
    Route::delete('boardgame/{id}', [GameController::class, 'destroy']);
    Route::post('logout', [AuthController::class, 'logout']);
});
