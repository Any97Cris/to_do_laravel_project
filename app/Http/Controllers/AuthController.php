<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index(Request $request){
        return view('login');
    }

    public function registrar(Request $request){
        return view('registrar');
    }

    public function registrar_action(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed'
        ]);
        
        $dados_conta = $request->only(['name', 'email', 'password']);
        $data = User::create($dados_conta);
        return redirect(route('login'));
    }

    public function login_action(Request $request){
        
        $validador = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        return redirect(route('home'));
    }
}
