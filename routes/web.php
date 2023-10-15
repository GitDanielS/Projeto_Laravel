<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/teste', function () {
    return ('testado');
});

Route::get('/lista-usuarios', function () {
    $usuarios = User::all();

    return view('listaUsuarios', compact('usuarios'));
})->name('lista-usuario');


Route::view('/cadastroUsuarios', 'cadastroUsuarios');


Route::post("/salva-usuario", function(Request $request){
    $usuario = new User();
    $usuario->usuario = $request->input('usuario');
    $usuario->bio = $request->input('bio');
    $usuario->name = $request->input('nome');
    $usuario->email = $request->input('email');
    $usuario->password = $request->input('senha');
    $usuario->save();

    return "Salvo com sucesso!!";
})->name('salva-usuario');