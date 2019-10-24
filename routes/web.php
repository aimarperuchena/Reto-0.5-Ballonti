

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

Route::get('/', function () {
    return view('inicio');
});

Route::get("inicio", function(){
    return view('inicio');
});
Route::get('tiendas', function () {
    return view('tiendas');
});

Route::get('tienda', function () {
    return view('tienda');
});

Route::get('localizacion',function(){
    return view('localizacion');
});

Route::get('ocio',function(){
    return view('ocio');
});

Route::get('informacion', function () {
    return view('informacion');
});

Route::get('insertar', function() {
    return view('insertar');
});

Route::get('modificar', function() {
    return view('modificar');
});

Route::get('eliminar', function() {
    return view('eliminar');
});

Route::get('administrador', function() {
    return view('administrador');
});
Route::get('insertar','TiendasController@verTiendas');

   
Route::post("insertar","ProductosController@store")->name("insertar"); 

Route::get('administrador', 'TiendasController@listarTiendas');
Route::get('modificar', 'ProductosController@verProductosMod');

Route::post("modificar", "ProductosController@updateStore")->name("update");


Route::get('productos','ProductosController@index');
Route::get('productos/{id}',[
    'uses' => 'ProductosController@listar'
]);  

Route::get('post/{id}',[
    'uses' => 'PostController@show'
]);

Route::get('post/create', 'PostController@create');

Route::post('post', 'PostController@store');
    
