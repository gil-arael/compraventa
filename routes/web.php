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

Route::group(['middleware' => ['guest']], function(){
    
    Route::get('/', 'Auth\LoginController@showLoginForm');
    
    Route::post('/login', 'Auth\LoginController@login')->name('login');
});

Route::group(['middleware' => ['auth']], function(){
    
    Route::post('/logout', 'Auth\LoginController@logout')->name('logout');
    
    Route::get('/home', 'HomeController@index');
    
    Route::group(['middleware' => ['Comprador']], function(){
    
        Route::resource('categoria', 'CategoriaController');
        Route::resource('producto', 'ProductoController');
        Route::resource('proveedor', 'ProveedorController');
        Route::resource('compra', 'CompraController');
    
    });
    
     Route::group(['middleware' => ['Vendedor']], function(){
    
        Route::resource('categoria', 'CategoriaController');
        Route::resource('producto', 'ProductoController');
        Route::resource('cliente', 'ClienteController');
    
    });
    
    Route::group(['middleware' => ['Administrador']], function(){
    
        Route::resource('categoria', 'CategoriaController');
        Route::resource('producto', 'ProductoController');
        Route::resource('proveedor', 'ProveedorController');
        Route::resource('compra', 'CompraController');
        Route::resource('cliente', 'ClienteController');
        Route::resource('rol', 'RolController');
        Route::resource('user', 'UserController');
    
    });
    
});

/*Route::get('/', function () {
    return view('principal');
});*/



