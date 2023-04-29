<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarefa;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function index(Request $request){        
        if($request->date){
            $filtrarData = $request->date;
        }else{
            $filtrarData = date('Y-m-d'); 
        }; 
        
        $carbonDate = Carbon::createFromDate($filtrarData);
        $dataSlide = $carbonDate->translatedFormat('d').' de '. ucfirst($carbonDate->translatedFormat('M'));
        $data_botao_anterior = $carbonDate->addDay(-1)->format('Y-m-d');
        $data_botao_proximo = $carbonDate->addDay(2)->format('Y-m-d');

        $tarefas = Tarefa::whereDate('due_data', $filtrarData)->get()->take(5);
        $autenticacao = Auth::user();
        
        return view('home', ['tarefas' => $tarefas, 'autenticacao' => $autenticacao, 'dataSlide' => $dataSlide,'data_botao_anterior' => $data_botao_anterior, 'data_botao_proximo' => $data_botao_proximo]);
    }
}
