<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;

class ProductoPorCategoriaController extends Controller
{
    public function verProductosPorCategoria($categoria) 
    {
        // Usar SQL puro para llamar al procedimiento almacenado con un parámetro 
        $productosPorCategorias = DB::select('CALL verMedicamentoPorCategoria(?)', [$categoria]); 
        return view('productosalmacenados.productoPorCategoria', compact('productosPorCategorias')); 
    }
}
