<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientSessionController;
use App\Http\Controllers\CosmetologistSessionController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SessionController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/clients/sessions', [ClientSessionController::class, 'index']);
Route::get('/clients/session/{session}', [ClientSessionController::class, 'show']);

Route::get('/cosmetologists/sessions', [CosmetologistSessionController::class, 'index']);
Route::get('/cosmetologists/session/{session}', [CosmetologistSessionController::class, 'show']);



Route::get('/services/{id}', [ServiceController::class, 'show'])->name('serviceMany');
Route::get('/sessions/{id}', [SessionController::class, 'show'])->name('sessionMany');
