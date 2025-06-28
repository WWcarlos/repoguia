<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EspacioController;
use App\Http\Controllers\EntradaController;
use App\Http\Controllers\PagoController;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\VehiculoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/actualizar-estado-espacios', [EspacioController::class, 'actualizarEstadoEspacios'])->name('actualizar.estado.espacios');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');

Route::resource('/espacios', EspacioController::class)->middleware('auth');
Route::resource('/entradas', EntradaController::class)->middleware('auth');
Route::resource('/pagos', PagoController::class)->middleware('auth');
Route::resource('/reservas', ReservaController::class)->middleware('auth');
Route::resource('/users', UserController::class)->middleware('auth');
Route::resource('/roles', RolController::class)->middleware('auth');
Route::resource('/vehiculos', VehiculoController::class)->middleware('auth');