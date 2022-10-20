<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Con auth
Route::middleware(['auth'])->group(function () {
    Route::get('/car/{car}/edit', [CarController::class, 'edit']);
    Route::delete('/car/{car}', [CarController::class, 'destroy']);
    Route::post('/car', [CarController::class, 'save']);
    Route::put('/car/{car}', [CarController::class, 'update']);
    //user
    Route::post('/logout', [UserController::class, 'logout']);
});

Route::get('/car/create', [CarController::class, 'create']);
Route::get('/', [CarController::class, 'index']);
Route::get('/cars', [CarController::class, 'index']);
Route::get('/car/{car}', [CarController::class, 'show']);

//USER
Route::middleware(['guest'])->group(function () {
    Route::get('/register', [UserController::class, 'create']);
    Route::get('/login', [UserController::class, 'login'])->name('login');
    Route::post('/users/authenticate', [UserController::class, 'authenticate']);
});
Route::post('/users', [UserController::class, 'store']);