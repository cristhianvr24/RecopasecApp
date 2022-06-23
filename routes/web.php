<?php

use App\Http\Controllers\CarreraPController;
use App\Http\Controllers\CarreraSController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServicioComController;
use App\Http\Controllers\PasantiaController;

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
Route::get('/', HomeController::class)->name('home');

//servicio comunitario
Route::resource('serviciocom', ServicioComController::class)->parameters(['serviciocom'=>'estudiante']);
Route::view('informacionsc', 'ServicioCom.informacion')->name('informacionsc');
Route::resource('carrerass', CarreraSController::class)->parameters(['carrerass'=>'carrera']);

//pasantias
Route::resource('pasantias', PasantiaController::class)->parameters(['pasantias'=>'estudiante']);
Route::view('informacionp', 'Pasantias.informacion')->name('informacionp');
Route::resource('carrerasp', CarreraPController::class)->parameters(['carrerasp'=>'carrera']);

//bootstrap
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

