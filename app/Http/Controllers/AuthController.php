<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

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

    public function storeRegister(Request $request)
    {
        // Validate form input
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',
        ]);
        // Create the user with validated data
        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => bcrypt($validated['password']),
        ]);

        // Log the user in
        auth()->login($user);

        // Redirect to home
        return redirect()->route('home');
    }

    public function logout(){

    }
}
