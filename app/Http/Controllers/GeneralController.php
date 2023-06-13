<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GeneralController extends Controller
{
    public function index(){
        return view('home',[
            'title' => 'Home',
            'active' => 'home'
        ]);
    }

    public function about(){
        return view('about',[
            'user' => Auth::user(),
            "title" => "about",
            "active" => 'about'
        ]);
    }

    public function discover(){
        return view('discover',[
            "title" => "Discover",
            "active" => 'discover',
            "users" => User::latest()->paginate(3)->withQueryString()
        ]);
    }

    public function show(User $user){
        return view('show',[
            "title" => "Discover",
            "user" => $user,
            "active" => 'discover',
            "tasks" => Task::where('user_id', $user->id)->get()
        ]);
    }
}
