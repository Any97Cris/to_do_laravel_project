<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarefa;

class HomeController extends Controller
{
    public function index(Request $request){
        
        $tarefas = Tarefa::all()->take(3);
        
        return view('home', ['tarefas' => $tarefas]);
    }
}
