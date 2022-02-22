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

//Rutas About
Route::post('/about', [AboutController::class,'store']);
Route::put('/about/{id}', [AboutController::class,'update']);
Route::delete('/about/{id}', [AboutController::class,'destroy']);
