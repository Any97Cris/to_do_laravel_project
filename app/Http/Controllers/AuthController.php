<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index(Request $request){
        return view('login');
    }

    public function registrar(Request $request){
        return view('registrar');
    }
}