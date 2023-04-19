<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index(Request $request){
        if(Auth::check()){
            return redirect()->route('home');
        }
        return view('login');
    }

    public function registrar(Request $request){
        if(Auth::check()){
            return redirect()->route('home');
        }
        return view('registrar');
    }

    public function registrar_action(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed'
        ]);
        
        $dados_conta = $request->only(['name', 'email', 'password']);
        $dados_conta['password'] = Hash::make($dados_conta['password']);
        $data = User::create($dados_conta);
        return redirect(route('login'));
    }

    public function login_action(Request $request){
        
        $validador = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        if(Auth::attempt($validador)){
            return redirect()->route('home');
        }
    }

    public function logout(){
        Auth::logout();

        return redirect()->route('login');
    }
}
