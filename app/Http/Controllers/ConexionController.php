<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class ConexionController extends Controller
{
    public function testConnection()
    {
        try {
            // Ejecutar una consulta simple para probar la conexión
            $result = DB::select('SELECT 1');
            return response()->json($result);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()]);
        }
    }
}
