<?php

use App\Http\Controllers\api\ControladorCategoria;
use App\Http\Controllers\api\ControladorCliente;
use App\Http\Controllers\api\ControladorMetodoPago;
use App\Http\Controllers\api\ControladorProducto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/clientes', [ControladorCliente::class, 'store'])->name('clientes.store');
Route::get('/clientes', [ControladorCliente::class, 'index'])->name('clientes');
Route::delete('/clientes/{cliente}', [ControladorCliente::class, 'destroy'])->name('clientes.destroy');
Route::get('/clientes/{cliente}', [ControladorCliente::class, 'show'])->name('clientes.show');
Route::put('/clientes/{cliente}', [ControladorCliente::class, 'update'])->name('clientes.update');

Route::get('/metodos', [ControladorMetodoPago::class, 'index'])->name('metodos');
Route::post('/metodos', [ControladorMetodoPago::class, 'store'])->name('metodos.store');
Route::delete('/metodos/{metodo}', [ControladorMetodoPago::class, 'destroy'])->name('metodos.destroy');
Route::get('/metodos/{metodo}', [ControladorMetodoPago::class, 'show'])->name('metodos.show');
Route::put('/metodos/{metodo}', [ControladorMetodoPago::class, 'update'])->name('metodos.update');

Route::get('/productos', [ControladorProducto::class, 'index'])->name('productos');
Route::post('/productos', [ControladorProducto::class, 'store'])->name('productos.store');
Route::delete('/productos/{producto}', [ControladorProducto::class, 'destroy'])->name('productos.destroy');
Route::get('/productos/{producto}', [ControladorProducto::class, 'show'])->name('productos.show');
Route::put('/productos/{producto}', [ControladorProducto::class, 'update'])->name('productos.update');


Route::get('/categorias', [ControladorCategoria::class, 'index'])->name('categorias');
Route::post('/categorias', [ControladorCategoria::class, 'store'])->name('categorias.store');
Route::delete('/categorias/{categoria}', [ControladorCategoria::class, 'destroy'])->name('categorias.destroy');
Route::get('/categorias/{categoria}', [ControladorCategoria::class, 'show'])->name('categorias.show');
Route::put('/categorias/{categoria}', [ControladorCategoria::class, 'update'])->name('categorias.update');