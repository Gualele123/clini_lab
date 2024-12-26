<?php

namespace App\Http\Controllers; 
use Illuminate\Http\Request;

use App\Http\Requests;

class UrlController extends Controller
{
    public function show(Request $request) 
    { 
        $currentUrl = $request->fullUrl(); 
        return view('bienvenida.mensaje', compact('currentUrl'));
    }
}
