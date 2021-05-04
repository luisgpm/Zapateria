<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('perfil');
});


Route::get('/historialVentas', function () {
    return view('tablaVentas');
});

Route::get('/lista_prodcutos', function () {
    return view('listaProductos');
});
Route::get('/lista_proveedores', function () {
    return view('listaProveedores');
});
Route::get('/venta', function () {
    return view('realizarVenta');
});
Route::get('/estanteria', function () {
    return view('listaEstanterias');
});
Route::get('/altaProducto', function () {
    return view('altaProductos');
});