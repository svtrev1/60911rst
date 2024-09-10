<?php

use App\Http\Controllers\SessionApiController;
use App\Http\Controllers\CLientApiController;
use App\Http\Controllers\CosmetologistApiController;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/session', [SessionApiController::class, 'index']);
Route::get('/session/{id}', [SessionApiController::class, 'show']);

Route::get('/client', [ClientApiController::class, 'index']);
Route::get('/client/{id}', [ClientApiController::class, 'show']);

Route::get('/cosmetologist', [CosmetologistApiController::class, 'index']);
Route::get('/cosmetologist/{id}', [CosmetologistApiController::class, 'show']);

Route::group(['middleware' => ['auth:sanctum']], function (){
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
    Route::get('/logout', [AuthController::class, 'logout']);
});
Route::post('/login', [AuthController::class, 'login']);
