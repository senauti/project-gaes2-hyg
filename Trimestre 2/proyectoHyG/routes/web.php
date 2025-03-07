<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/catalogo', function () {
    return view('Catalogo');
});
Route::get('/Contacto', function () {
    return view('Contacto');
});
Route::get('/DashboardAdmin', function () {
    return view('DashboardAdmin');
});
Route::get('/DashBoardCliente', function () {
    return view('DashBoardCliente');
});
Route::get('/DashboardEmpleado', function () {
    return view('DashboardEmpleado');
});
Route::get('/Catalogo', function () {
    return view('Catalogo');
});
Route::get('/error404', function () {
    return view('E404');
});
Route::get('/error500', function () {
    return view('E500');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/InicioCliente', function () {
    return view('InicioCliente');
});
Route::get('/InicioFuncionarios', function () {
    return view('InicioFuncionarios');
});
Route::get('/Inventario', function () {
    return view('Inventario');
});
Route::get('/Nosotros', function () {
    return view('Nosotros');
});
Route::get('/Pconstrucción', function () {
    return view('Pconstrucción');
});
Route::get('/Pedidos', function () {
    return view('Pedidos');
});
Route::get('/regInfProveedores', function () {
    return view('regInfProveedores');
});
Route::get('/RegistCompra', function () {
    return view('RegistCompra');
});
Route::get('/registroCliente', function () {
    return view('registroCliente');
});
Route::get('/RegVenta', function () {
    return view('RegVenta');
});
Route::get('/resgistroEmpleado', function () {
    return view('resgistroEmpleado');
});
