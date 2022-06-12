<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PasantiaController;
use App\Http\Controllers\ServicioComController;

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
//pagina principal
Route::get('/', HomeController::class);
//servicio comunitario
Route::get('serviciocom', [ServicioComController::class, 'index']);
Route::get('serviciocom/create', [ServicioComController::class, 'create']);
Route::get('serviciocom/{estudiante}', [ServicioComController::class, 'show']);

//pasantias

Route::get('pasantias', [PasantiaController::class, 'index']);
Route::get('pasantias/create', [PasantiaController::class, 'create']);
Route::get('pasantias/{estudiante}', [PasantiaController::class, 'show']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
