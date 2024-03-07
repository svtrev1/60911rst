<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientSessionController;
use App\Http\Controllers\CosmetologistSessionController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\SessionCrudController;


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

Route::get('/sessionPages', [ClientSessionController::class, 'index'])->middleware('auth');
Route::get('/clients/session/{session}', [ClientSessionController::class, 'show'])->middleware('auth');

Route::get('/cosmetologists/sessions', [CosmetologistSessionController::class, 'index'])->middleware('auth');
Route::get('/cosmetologists/session/{session}', [CosmetologistSessionController::class, 'show'])->middleware('auth');



Route::get('/services/{id}', [ServiceController::class, 'show'])->name('serviceMany')->middleware('auth');
Route::get('/sessions/{id}', [SessionController::class, 'show'])->name('sessionMany')->middleware('auth');

Route::get('/session/create', [SessionCrudController::class, 'create'])->middleware('auth');
 Route::post('/session', [SessionCrudController::class,'store'])->middleware('auth');

Route::get('/session/edit/{id}', [SessionCrudController::class,'edit'])->middleware('auth');
Route::post('/session/update/{id}', [SessionCrudController::class,'update'])->middleware('auth');
Route::get('/session/destroy/{id}', [SessionCrudController::class,'destroy'])->middleware('auth');


Route::get('/login', [LoginController::class,'login'])->name('login');
Route::get('/logout', [LoginController::class,'logout']);
Route::post('/auth', [LoginController::class,'authenticate']);
Route::get('/error', function () {
    return view('error', ['message' => session('message')]);
});