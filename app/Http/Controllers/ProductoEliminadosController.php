<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;

class ProductoEliminadosController extends Controller
{
    public function verProductosEliminados($eliminado) 
    {
        // Usar SQL puro para llamar al procedimiento almacenado con un parámetro 
        $productos = DB::select('CALL verMedicamentoEliminados(?)', [$eliminado]); 
        return view('productosalmacenados.productosEliminados', compact('productos')); 
    }
}
