<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class usuarioController extends Controller
{
    public function index(){
       $usuarios=Usuario::all();
       return view('usuarios.index',compact('usuarios'));
    }
    public function create(){
        return view("usuarios.create");

    }

    public function store(Request $request){
        Usuario::create($request->all());
            return redirect()-> route('usuario.index');
        }

}
