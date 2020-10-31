<?php

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

// use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', 'WelcomeController@welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/products', 'ProductController@index');//Listar productos
    Route::get('/products/create', 'ProductController@create');//Formulario para Crear productos
    Route::post('/products', 'ProductController@store');// Crear productos en la BBDD
    Route::get('/products/{id}/edit', 'ProductController@edit');//Formulario para editar productos
    Route::post('/products/{id}/edit', 'ProductController@update');//Actualizar productos
    Route::post('/products/{id}/delete', 'ProductController@destroy');//Eliminar productos

    Route::get('/products/{id}/images', 'ImageController@index');//Listar imagenes
    Route::post('/products/{id}/images', 'ImageController@store');//Guardar imagenes en BBDD
    Route::delete('/products/{id}/images', 'ImageController@destroy');//Borrar Imagenes
    Route::get('/products/{id}/images/select/{image}', 'ImageController@select');//Destacar una Imagen
});



