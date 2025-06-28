<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehiculoController;
use App\Http\Controllers\EntradaController;
use App\Http\Controllers\EspacioController;
use App\Http\Controllers\PagoController;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
//UserCRUD
Route::get('/user', [UserController::class, 'index'])->name('user.index');
Route::post('/user', [UserController::class, 'store'])->name('user.store');

//RolCRUD
Route::get('/rol', [RolController::class, 'index'])->name('rol.index');

//ReservaCRUD
Route::get('/reserva', [ReservaController::class, 'index'])->name('reserva.index');
Route::post('/reserva', [ReservaController::class, 'store'])->name('reserva.store');

//PagoCRUD
Route::get('/pago', [PagoController::class, 'index'])->name('pago.index');
Route::post('/pago', [PagoController::class, 'store'])->name('pago.store');

//EspacioCRUD
Route::get('/espacio', [EspacioController::class, 'index'])->name('espacio.index');
Route::post('/espacio', [EspacioController::class, 'store'])->name('espacio.store');

//EntradaCRUD
Route::get('/entrada', [EntradaController::class, 'index'])->name('entrada.index');
Route::post('/entrada', [EntradaController::class, 'store'])->name('entrada.store');

//vehiculoCRUD
Route::get('/vehiculo', [VehiculoController::class, 'index'])->name('vehiculo.index');
Route::post('/vehiculo', [VehiculoController::class, 'store'])->name('vehiculo.store');