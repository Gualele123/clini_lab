<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

use App\Http\Requests;

class UsuarioController extends Controller
{
    public function show() 
    { 
        $currentUrl = url()->current(); // Alternativa para obtener la URL actual 
        $user = Auth::user(); 
        
        return view('bienvenida.mensaje', compact('currentUrl', 'user')); }
}
