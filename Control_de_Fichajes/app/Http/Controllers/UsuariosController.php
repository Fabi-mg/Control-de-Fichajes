<?php

namespace App\Http\Controllers;

use App\Models\Usuario;

class UsuariosController extends Controller
{
    public function index(){
        $usuarios=Usuario::all();

        foreach ($usuarios as $usuario) {
            echo $usuario->nombre . '<br/>';
        }
    }
}
