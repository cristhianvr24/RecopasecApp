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
Route::get('serviciocom', [ServicioComController::class, 'index'])->name('serviciocom.index');
Route::get('serviciocom/create', [ServicioComController::class, 'create'])->name('serviciocom.create');
Route::post('serviciocom', [ServicioComController::class, 'store'])->name('serviciocom.store');
Route::get('serviciocom/{id}', [ServicioComController::class, 'show'])->name('serviciocom.show');

//pasantias

Route::get('pasantias', [PasantiaController::class, 'index'])->name('pasantias.index');
Route::get('pasantias/create', [PasantiaController::class, 'create'])->name('pasantias.create');
Route::post('pasantias', [PasantiaController::class, 'store'])->name('pasantias.store');
Route::get('pasantias/{id}', [PasantiaController::class, 'show'])->name('pasantias.show');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
