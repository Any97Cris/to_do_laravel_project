<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TarefaController extends Controller
{
    public function index(){
        return view('home');
    }

    public function criar(Request $request){
        return view('tarefas.criar');
    }

    public function editar(Request $request){
        return view('tarefas.editar');
    }

    public function excluir(Request $request){
        return redirect(route('home'));
    }
}
