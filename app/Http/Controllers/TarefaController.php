<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Tarefa;
use Illuminate\Http\Request;

class TarefaController extends Controller
{
    public function index(){
        return view('home');
    }

    public function criar(Request $request){
        $categorias = Categoria::all();
        $data['categorias'] = $categorias;

        return view('tarefas.criar', $data);
    }

    public function criar_action(Request $request){
        $tarefas = $request->only(['titulo', 'categoria_id', 'descricao']);
        $tarefas['user_id'] = 1;
        $dbTarefa = Tarefa::create($tarefas);
        return redirect(route('home'));
    }

    public function editar(Request $request){
        $id = $request->id;
        $tarefa = Tarefa::find($id);

        if(!$tarefa){
           return redirect(route('home'));
        }

        $categorias = Categoria::all();
        $data['categorias'] = $categorias;

        $data['tarefa'] = $tarefa;

        return view('tarefas.editar', $data);
    }

    public function editar_action(Request $request){
        
        $data_request = $request->only(['titulo', 'due_data', 'categoria_id', 'descricao']);
        
        $tarefa = Tarefa::find($request->id);

        $data_request['esta_feito'] = $request->esta_feito ? true : false;
       
        if(!$tarefa){
            return redirect(route('home'));
        }

        $tarefa->update($data_request);
        
        $tarefa->save();
        return redirect(route('home'));

    }

    public function excluir(Request $request){
        $id = $request->id;

        $tarefa = Tarefa::find($id);

        if($tarefa){
            $tarefa->delete();
        }


        return redirect(route('home'));
    }
}
