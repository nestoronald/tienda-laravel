<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	//return View::make('hello');
	
	// Con la funcion with() podemos traer todos los vendedores
    // con sus respectivos productos. Esta funcion recibe como parametro
    // alguna relacion que tenga el modelo al que se este llamando y
    // la incluye en los resultados que devuelve el get()
    $vendedores = vendedor::with('productos')->get();
    return View::make('inicio', array('vendedores'=> $vendedores));
});

Route::get('vendedor', array('uses'=>'VendedorController@mostrarVendedores'));
 
Route::post('vendedor', 'VendedorController@crearVendedor');
 
Route::get('producto', 'ProductoController@mostrarProductos');
 
Route::post('producto', 'ProductoController@crearProducto');