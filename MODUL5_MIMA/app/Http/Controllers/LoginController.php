<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    public function index(){
        return view('Login-Mima');
    }
    public function store(Request $request){
        $email = $request -> email;
        $password = $request->password;
        $login = User::where(['email' => $email, 'password' => $password])->first();
        if(!empty($login)){
            return view('Home-Mima');
        }else{
            return view('Login-Mima');
        }
    }
}
