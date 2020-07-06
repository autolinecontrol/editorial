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
    return view('home');
});

Route::get('/sucursales', function () {
    return view('sucursal');
})->name('sucursales');

Route::get('/empleados', function () {
    return view('home');
})->name('empleados');

Route::get('/revistas', function () {
    return view('home');
})->name('revistas');

Route::get('/periodistas', function () {
    return view('home');
})->name('periodistas');;


Route::get('admin/sucursales/crear', 'SucursalesController@crear')->name('admin/sucursales/crear');
Route::put('admin/sucursales/store', 'SucursalesController@store')->name('admin/sucursales/store');

/* Leer */
Route::get('admin/sucursales', 'SucursalesController@index')->name('admin/sucursales');
 
/* Actualizar */
Route::get('admin/sucursales/actualizar/{id}', 'SucursalesController@actualizar')->name('admin/sucursales/actualizar');
Route::put('admin/sucursales/update/{id}', 'SucursalesController@update')->name('admin/sucursales/update');
 
/* Eliminar */
Route::put('admin/sucursales/eliminar/{id}', 'SucursalesController@eliminar')->name('admin/sucursales/eliminar');
 


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
