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

Route::get('/sessions', [SessionApiController::class, 'index']);
Route::get('/session/{id}', [SessionApiController::class, 'show']);
Route::get('/sessions_total', [SessionApiController::class, 'total']);

Route::get('/clients', [ClientApiController::class, 'index']);
Route::get('/client/{id}', [ClientApiController::class, 'show']);
Route::get('/clients_total', [CLientApiController::class, 'total']);

Route::get('/cosmetologs', [CosmetologistApiController::class, 'index']);
Route::get('/cosmetolog/{id}', [CosmetologistApiController::class, 'show']);
Route::get('/cosmetologs_total', [CosmetologistApiController::class, 'total']);


Route::group(['middleware' => ['auth:sanctum']], function (){
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
    Route::get('/logout', [AuthController::class, 'logout']);
    
    Route::get('/session', [SessionApiController::class, 'index']);
    Route::get('/session/{id}', [SessionApiController::class, 'show']);

    Route::get('/client', [ClientApiController::class, 'index']);
    Route::get('/client/{id}', [ClientApiController::class, 'show']);

    Route::get('/cosmetologist', [CosmetologistApiController::class, 'index']);
    Route::get('/cosmetologist/{id}', [CosmetologistApiController::class, 'show']);


});
Route::post('/login', [AuthController::class, 'login']);

// Route::middleware('auth:sanctum')->get('/session', [SessionApiController::class, 'index']);
