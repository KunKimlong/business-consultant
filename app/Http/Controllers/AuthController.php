<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function createLogin(){
        return view('auth.login');
    }
    public function storeLogin(Request $request){

    }
    public function createRegister(){
        return view('auth.register');
    }
    public function storeRegister(Request $request){

    }
    public function logout(){

    }
}
