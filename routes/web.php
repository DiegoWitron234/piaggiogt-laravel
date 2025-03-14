<?php

use App\Http\Controllers\ContactoController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiciosController;
use App\Http\Controllers\VehiculoController;
use App\Http\Controllers\RepuestosController;
use App\Http\Controllers\DistribuidorController;
use App\Http\Controllers\DistribuidoresController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('inicio');
Route::get('/empresa', [EmpresaController::class, 'index'])->name('empresa');
Route::get('/vehiculos', [VehiculoController::class, 'index'])->name('vehiculos');
Route::get('/servicios', [ServiciosController::class, 'index'])->name('servicios');
Route::get('/contacto', [ContactoController::class, 'index'])->name('contacto');
Route::post('/contacto', [ContactoController::class, 'send'])->name('contacto.send');
Route::get('/repuestos', [RepuestosController::class, 'index'])->name('repuestos');
Route::get('/distribuidor', [DistribuidorController::class, 'index'])->name('distribuidor');
Route::get('/distribuidores', [DistribuidoresController::class, 'index'])->name('distribuidores');
