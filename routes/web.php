<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PortafolioController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\Index;
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

//Index
Route::get('/index', [Index::class, 'index'])->name('index');

//Rutas about
Route::get('/about', [AboutController::class,'indexv2'])->name('about');
Route::get('about/create', [AboutController::class,'create'])->name('create.about');
Route::post('about/registro', [AboutController::class,'store'])->name('store.about');
Route::get('about/{id}', [AboutController::class,'edit'])->name('edit.about');
Route::put('about/{id}', [AboutController::class,'update'])->name('update.about');
Route::delete('about/{id}', [AboutController::class,'destroy'])->name('delete.about');


//Rutas contact
Route::get('/contact', [ContactController::class,'indexv2'])->name('contact');

//Rutas portafolio
Route::get('/portafolio', [PortafolioController::class,'indexv2'])->name('portafolio');
Route::get('portafolio/create', [PortafolioController::class,'create'])->name('create.portafolio');

//Rutas services
Route::get('/services', [ServicesController::class,'indexv2'])->name('services');
Route::get('services/create', [ServicesController::class,'create'])->name('create.services');

//Rutas team
Route::get('/team', [TeamController::class,'indexv2'])->name('team');
Route::get('team/create', [TeamController::class,'create'])->name('create.team');