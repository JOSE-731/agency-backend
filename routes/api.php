<?php

use App\Http\Controllers\AboutController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

//Rutas de about
Route::get('/about', [AboutController::class,'index']);
Route::post('/about', [AboutController::class,'store']);
Route::put('/about/{id}', [AboutController::class,'update']);
Route::delete('/about/{id}', [AboutController::class,'destroy']);