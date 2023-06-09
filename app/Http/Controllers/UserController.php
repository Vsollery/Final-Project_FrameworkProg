<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function create(){
        return view('users.register',[
            'title' => 'Register'
        ]);
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required| email:dns| unique:users',
            'password' => 'required| min:5| max:255'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        $user = User::create($validatedData);
        auth()->login($user);

        return redirect('/')->with('success', 'User created and logged in');
        
    }

    public function login(){
        return view('users.login',[
            'title' => 'Login',
        ]);
    }
}
