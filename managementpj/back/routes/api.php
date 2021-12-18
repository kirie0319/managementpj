<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/product', [ProductController::class, 'index']);
Route::post('/product/store', [ProductController::class, 'store']);
Route::post('/product/update', [ProductController::class, 'update']);
Route::post('/product/destroy', [ProductController::class, 'destroy']);
Route::post('/product/other', [ProductController::class, 'other']);
Route::post('/user', [ProductController::class, 'create']);
Route::get('/user/{id}', [UserController::class, 'show']);
Route::get('/list', [UserController::class, 'index']);
Route::post('/user/register', [UserController::class, 'create']);