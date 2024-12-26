<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\File;
// use PDF;

use App\Http\Requests;

class PdfAnalisisController extends Controller
{
    public function generarPdf()
    {   // Leer el archivo JSON 
        $json = File::get(public_path('report_data.json')); 
        // Convertir JSON a un array 
        // $report_data = (object)json_decode($json, true);
        $report_data = ['hola mundo'=>123456];
        $report_data = (object)(array_merge($report_data, json_decode($json, true)));
        // dd($report_data);
        
        // Generar el PDF 
        $pdf = PDF::loadView('pdf.resultado_data', compact('report_data'));
        // $pdf = PDF::loadView('pdf.resultado_analisis', ['report_data'=>$report_data]);
        // $pdf = PDF::loadView('pdf.resultado_data', compact('report_data'));
        return $pdf->stream('reporte_analisis.pdf');
    }
}
