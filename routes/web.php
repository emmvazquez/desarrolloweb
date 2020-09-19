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

Route::get('/','Categorias@index')->name('categorias.index');

Route::get('categorias','Categorias@index')->name('categorias.index');

Route::get('categorias/crear','Categorias@crear')->name('categorias.crear');
Route::post('categorias','Categorias@insert')->name('categorias.insert');
Route::get('categorias/editar/{Id}','Categorias@editar')->name('categorias.editar');
Route::match(['put', 'patch'],'categorias/{categoria}','Categorias@update')->name('categorias.update');



Route::get('categorias/detalle/{IdCategoria}/{Variable}','Categorias@detalle')->name('categorias.detalle');

Route::get('categorias/show/{IdCategoria}','Categorias@show')->name('categorias.show');



// rutas personas
Route::get('personas', 'PersonController@index')->name('personas.index');
Route::get('personas/detalle/{Id}', 'PersonController@detalle')->name('personas.detalle');
Route::get('personas/crear','PersonController@crear')->name('personas.crear');
Route::post('personas/insert','PersonController@insert')->name('personas.insert');


Route::get('personas/actualizar/{id}','PersonController@actualizar')->name('personas.actualizar');
Route::match(['put','patch'],'PersonController/{person}','PersonController@update')->name('personas.update');


//////
Route::get('products', function () {
    return "Aquí estarán los productos";
})->name('products.index');

Route::get('products/create', function () {
    return "Aquí estarán el formulario para crear productos";
})->name('products.index');


Route::get('products/{product}', function ($product) {
    return "Aquí estará el detalle del producto $product";
})->name('products.show');






