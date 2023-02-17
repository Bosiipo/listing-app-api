<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ListingController;

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

// Protected routes
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('/create-listing', [ListingController::class, 'create']);
    Route::put('/listings/{id}', [ListingController::class, 'update']);
    Route::delete('/listings/{id}', [ListingController::class, 'destroy']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/listings/manage', [ListingController::class, 'manage']);
    Route::get('/listings/{id}', [ListingController::class, 'show']);
});

// Unprotected routes
Route::get('/listings', [ListingController::class, 'index']);
// Route::resource('listings', ListingController::class);
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/listings/search/{name}', [ListingController::class, 'search'])





