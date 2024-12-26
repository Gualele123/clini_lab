<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class SystemInfoController extends Controller
{
    public function index(Request $request) 
    { 
        $username = getenv('USERNAME') ?: getenv('USER');
        $hostname = gethostname();
        $ipAddress = gethostbyname($hostname);
        $fullName = $this->getSystemFullName();
        $currentUrl = url()->current();
        // $currentUrl = $request->fullUrl();

        $authUser = Auth::user();//obtener el usuario autenticado, si lo hay

        return view('sistema.systeminfo', compact('username', 'hostname', 'currentUrl', 'authUser', 'ipAddress', 'fullName'));
    }

    private function getSystemFullName() 
    { 
        // Este es un ejemplo simple para obtener el nombre completo desde variables de entorno 
        // Puedes ajustar esto según cómo tu sistema almacene la información del usuario 
        $firstName = getenv('USER_FIRST_NAME');
        $lastName = getenv('USER_LAST_NAME'); 
        
        if ($firstName && $lastName) { 
            return $firstName . ' ' . $lastName; 
        } 
        
        return 'Nombre completo no disponible'; 
    }
}
