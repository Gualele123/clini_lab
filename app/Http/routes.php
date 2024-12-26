<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



// Route::get('/', function () {
//     return view('welcome');
// });

use App\Http\Controllers\PdfController;
use App\Http\Controllers\MedicamentoController;
use App\Http\Controllers\UrlController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\SystemInfoController;

Route::get('generar-pdf', 'PdfController@generarPDF');

//ruta de la conexion a la BD
Route::get('test-connection', 'ConexionController@testConnection');

//ruta a los medicamentos en la BD

Route::get('medicamento', 'MedicamentoController@index');

//url y nombre de usuario desde laravel
Route::get('/', 'UrlController@show');
Route::get('/', 'UsuarioController@show');

//equipo, url y nombre de usuario desde el sistema
// Route::get('system-info', [SystemInfoController::class, 'index']);
Route::get('systeminfo', 'SystemInfoController@index');


//ruta de la tabla producto
use App\Http\Controllers\ProductoController;
Route::get('producto', 'ProductoController@index');

//ruta de producto con procedimiento almacenado
use App\Http\Controllers\ProductoEliminadosController;
Route::get('productos-eliminados/{eliminado}', 'ProductoEliminadosController@verProductosEliminados');

use App\Http\Controllers\ProductoPorCategoriaController;
Route::get('productos-por-categoria/{categoria}', 'ProductoPorCategoriaController@verProductosPorCategoria');

use App\Http\Controllers\VerProductosController;
Route::get('misproductos', 'VerProductosController@verProductos');

use App\Http\Controllers\ProductoPorTipoEliminadoController;
Route::get('producto-por-tipo/{tipo}/eliminado/{eliminado}', 'ProductoPorTipoEliminadoController@productoTipoEliminado');

//ruta de report_data de analisis de laboratorio
use App\Http\Controllers\PdfAnalisisController;
Route::get('analisislab', 'PdfAnalisisController@generarPdf');








// Route::get('/', function () {
//     return view('vista1', ['nombre'=>'mauricio']);
// });

// Route::get('/laboratorio', function(){
//     return view('laboratorio');
// });



// Route::get('/nombre/{nombre}', function($nombre){
//     return '<h1>El nombre es: '.$nombre.'</h1>';
// });

// Route::get('/ruta1', function(){
//     return '<h1>esta es la ruta 1</h1>';
// })->name('rutaNro1');

// Route::get('/ruta2', function(){
//     return redirect()->route('rutaNro1');
// });

// Route::get('/libros/pdf', [LibrosController::class, 'GenerarPDF'])->name('libros.pdf');