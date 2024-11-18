<?php
                                                                                                           use App\Http\Controllers\SessionApiController;
use App\Http\Controllers\CLientApiController;
use App\Http\Controllers\CosmetologistApiController;
use App\Http\Controllers\ServiceApiController;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


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

Route::get('/services', [ServiceApiController::class, 'index']);
Route::get('/service/{id}', [ServiceApiController::class, 'show']);
Route::get('/services_total', [ServiceApiController::class, 'total']);
Route::post('/service', [ServiceApiController::class, 'store']);

Route::group(['middleware' => ['auth:sanctum']], function (){
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
   


});
Route::post('/login', [AuthController::class, 'login']);

// Route::middleware('auth:sanctum')->get('/session', [SessionApiController::class, 'index']);
