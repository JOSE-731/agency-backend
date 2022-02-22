<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PortafolioController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\TeamController;
use App\Models\Services;
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

//Rutas de About
Route::get('/about', [AboutController::class,'index']);

//Rutas de Contact
Route::get('/contact', [ContactController::class,'index']);
Route::post('/contact', [ContactController::class,'store']);

//Rutas de Portafolio
Route::get('/portafolio', [PortafolioController::class,'index']);

//Rutas de Services
Route::get('/services', [ServicesController::class,'index']);

//Rutas de Team
Route::get('/teams', [TeamController::class,'index']);