<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MedicamentoModel;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class MedicamentoController extends Controller
{
    public function indexs()
    {
        // Realizar la consulta SQL
        $posts = DB::select("SELECT * FROM medicamento");

        // Pasar los datos a la vista
        return view('farmacia.medicamento', compact('posts'));
    }
}
