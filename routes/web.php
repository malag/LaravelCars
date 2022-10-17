<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cars', function () {
    return view('cars', [
        'title' => 'Cars',
        'movies' => Car::all()
    ]);
});

Route::get('/car/{id}', function ($id) {
    return view('car', [
        
        'car' => Car::find($id)
    ]);
});