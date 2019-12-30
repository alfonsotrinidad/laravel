<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class PagesController extends Controller
{
    public function inicio(){
        return view('welcome');
    }

    public function productos(){
        return view('productos');
    }

    public function nosotros(){
     //   $usuarios = App\Usuario::all();
     //   return view('nosotros',compact('usuarios'));
    }
    public function contacto(){
        return view('contacto');
    }
    
}

