<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /*public function index()
    {
        // Aquí puedes retornar una vista o un mensaje
        return "Bienvenido a la página de inicio";
    }*/

    public function __invoke()
    {
        return view('welcome');
    }
}
