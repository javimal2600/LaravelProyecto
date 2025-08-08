<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    
    //
    public function index()
    {
        return "hola pagina de listado de registros desde el controlador";
    }

    public function create()
    {
        return "aqui se mostrara el formulario para crear un registro desde el controlador";
    }

    public function store(Request $request)
    {
        // Aqui se procesara el formulario para crear un registro
        return "aqui se procesara el formulario para crear un registro desde el controlador";
    }

    public function show($post)
    {
        return "aqui se mostrara el registro con nombre: $post desde el controlador";
    }

    public function edit($post)
    {
        return "aqui se mostrara el formulario para editar un registro: $post desde el controlador";
    }

    public function update(Request $request, $post)
    {
        // Aqui se procesara el formulario para actualizar un registro
        return "aqui se procesara el formulario para actualizar un registro: $post desde el controlador";
    }

    public function destroy($post)
    {
        // Aqui se procesara la eliminacion del registro
        return "aqui se procesara la eliminacion del registro: $post desde el controlador";
    }
}
