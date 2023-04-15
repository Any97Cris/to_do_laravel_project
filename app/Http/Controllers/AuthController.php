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
        $email = $request->email;

        $data = User::find($email);

        if(!$data){
            return redirect(route('login'));
        }

        return redirect(route('home'));
    }
}
