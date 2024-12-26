<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;


class PdfController extends Controller
{

    public function generarPDF()
    {
        // Datos a pasar a la vista
        

        // $data = [
        //     ['name' => 'Juan', 'lastname' => 'Reyes', 'age' => 28],
        //     ['name' => 'Ana', 'lastname' => 'Paz', 'age' => 34],
        //     ['name' => 'Pedro', 'lastname' => 'Suerez', 'age' => 40],
        // ];

        $laboratorio = 'Laboratorio Nro 5';

        $report_data = 
            [['laboratorio' => $laboratorio]];

        // Cargar una vista y pasar los datos a ella
        $pdf = PDF::loadView('pdf.view', compact('report_data'));

        // Descargar el PDF
        return $pdf->stream('archivo.pdf');
    }

}
