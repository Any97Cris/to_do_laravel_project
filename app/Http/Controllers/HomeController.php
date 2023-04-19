<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarefa;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(Request $request){        
        if($request->date){
            $filtrarData = $request->date;
        }else{
            $filtrarData = date('Y-m-d'); 
        }; 
        
        $tarefas['data_slide'] = '15 de Dez';
        $tarefas['data_botao_anterior'] = '1999-07-25';
        $tarefas['data_botao_proximo'] = '2023-04-19';

        $tarefas = Tarefa::whereDate('due_data', $filtrarData)->get()->take(5);
        $autenticacao = Auth::user();
        
        return view('home', ['tarefas' => $tarefas, 'autenticacao' => $autenticacao]);
    }
}
