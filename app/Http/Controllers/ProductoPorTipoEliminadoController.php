<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class ProductoPorTipoEliminadoController extends Controller
{
    public function productoTipoEliminado($tipo, $eliminado) 
    {
        // Usar SQL puro para llamar al procedimiento almacenado con un parámetro 
        $productosTEs = DB::select('CALL medicamentoPorTipoYEliminado(?, ?)', [$tipo, $eliminado]); 
        return view('productosalmacenados.productoTE', compact('productosTEs')); 
    }
}
