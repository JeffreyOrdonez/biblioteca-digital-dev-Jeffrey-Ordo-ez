<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuariomodel;

class UsuarioController extends Controller
{
    public function index() {

        $usuarios = Usuariomodel::all();
        return view ('usuarios', compact('usuarios'));
    }
}
