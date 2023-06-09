<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create(){
        return view('users.register',[
            'title' => 'Register'
        ]);
    }

    public function login(){
        return view('users.login',[
            'title' => 'Login',
        ]);
    }
}
