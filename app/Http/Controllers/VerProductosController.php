<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class VerProductosController extends Controller
{
    public function verProductos() 
    {
        // Usar SQL puro para llamar al procedimiento almacenado con un parámetro 
        $productos = DB::select('CALL verProducto()'); 
        return view('productosalmacenados.productos', compact('productos')); 
    }
}
