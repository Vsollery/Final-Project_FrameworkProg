<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function create(){
        return view('users.register',[
            'active' => 'register',
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

        return redirect('/')->with('message', 'User Created and Logged In');
        
    }

    public function login(){
        return view('users.login',[
            'active' => 'login',
            'title' => 'Login',
        ]);
    }

    public function authenticate(Request $request){
        $formField = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']       
        ]);

        if(auth()->attempt($formField)){
            if(auth()->user()->is_admin == 1){
                $request->session()->regenerate();
                
                return redirect('/manage-users')->with('message', 'Admin logged in');   
            }else{
                $request->session()->regenerate();
                
                return redirect('/dashboard')->with('message', 'User logged in');          
            }
        }

        // return back()->with('message', 'Login Failed.');
        return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
