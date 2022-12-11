<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller

{
    public function index(){
        return view('Registrasi-Mima');
    }
    public function kirim(Request $request)
    {
        $masuk = $request->validate([
            'name' => 'string',
            'email' => 'string',
            'password' => 'string',
            'no_hp' => 'string',
        ]);
        User::create($masuk);
        return redirect('/login');
    }
}