<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    
    //
    public function index()
    {
        return view('posts.index');
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        return "aqui se procesara el formulario para crear un registro desde el controlador";
    }

    public function show($post)
    {
        //compact('post') => ['post' => $post]
        return view('posts.show',compact('post'));
    }

    public function edit($post)
    {
        return view('posts.edit',compact('post'));
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
