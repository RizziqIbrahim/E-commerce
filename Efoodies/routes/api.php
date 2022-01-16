<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\FoodController;

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

Route::get('/show', [FoodController::class, 'show']);
Route::post('/list_by_category', [FoodController::class, 'list_by_category']);
Route::post('/list_by_harga', [FoodController::class, 'list_by_harga']);


    // Route::middleware('auth:api')->get('/user', function (Request $request) {
    //     return $request->user();
    // });