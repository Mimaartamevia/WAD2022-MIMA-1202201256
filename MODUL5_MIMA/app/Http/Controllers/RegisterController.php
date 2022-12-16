<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller

{
    public function index(){
        return view('Registrasi-Mima');
    }
    public function store(Request $request)
    {
        User::create([
            'name' => $request -> name,
            'email' => $request -> email,
            'password' => $request -> password,
            'no_hp' => $request -> no_hp
        ]);
        return redirect('/login');
    }
}