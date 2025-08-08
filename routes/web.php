<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);

/*
//ruta para mostrar el listado de registros
route::get('/posts',[PostController::class, 'index'])
->name('posts.index');

//ruta para mostar el formulario de crear un registro
route::get('/posts/create', [PostController::class, 'create'])
->name('posts.create');

///ruta para guardar un registro
route::post('/posts', [PostController::class, 'store'])
->name('posts.store');

//ruta para mostrar un registro
Route::get('/posts/{post}', [PostController::class, 'show'])
->name('posts.show');

//ruta para mostrar el formulario de editar un registro
route::get('/posts/{post}/edit', [PostController::class, 'edit'])
->name('posts.edit');

//ruta para actualizar un registro
route::put('/posts/{post}',  [PostController::class, 'update'])
->name('posts.update');

//ruta para eliminar un registro
route::delete('/posts/{post}',  [PostController::class, 'destroy'])
->name('posts.destroy');
*/

// Ruta de recursos para el controlador PostController para hacer las rutas mas cortas
Route::Resource('articulos',PostController::class)
->parameters(['articulos' => 'post'])
->names('posts');