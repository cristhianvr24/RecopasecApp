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
Route::get('serviciocom/{estudiante}', [ServicioComController::class, 'show'])->name('serviciocom.show');
Route::get('serviciocom/{estudiante}/edit', [ServicioComController::class, 'edit'])->name('serviciocom.edit');
Route::put('serviciocom/{estudiante}', [ServicioComController::class, 'update'])->name('serviciocom.update');
Route::delete('serviciocom/{estudiante}', [ServicioComController::class, 'destroy'])->name('serviciocom.destroy');

//pasantias

Route::get('pasantias', [PasantiaController::class, 'index'])->name('pasantias.index');
Route::get('pasantias/create', [PasantiaController::class, 'create'])->name('pasantias.create');
Route::post('pasantias', [PasantiaController::class, 'store'])->name('pasantias.store');
Route::get('pasantias/{estudiante}', [PasantiaController::class, 'show'])->name('pasantias.show');
Route::get('pasantias/{estudiante}/edit', [PasantiaController::class, 'edit'])->name('pasantias.edit');
Route::put('pasantias/{estudiante}', [PasantiaController::class, 'update'])->name('pasantias.update');
Route::delete('pasantias/{estudiante}', [PasantiaController::class, 'destroy'])->name('pasantias.destroy');

//bootstrap
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
