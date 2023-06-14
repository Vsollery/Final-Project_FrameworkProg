<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index(){
        return view('tasks.admin.index',[
            'title' => 'Admin',
            'users' => User::where('id','!=', auth()->user()->id)->where('email', '!=', 'admin@gmail.com')->latest()->get()
        ]);
    }

    public function destroy(User $user)
    {
        // dd(request()->id);
        $user->delete();
        return redirect('/manage-users')->with('message', 'User Deleted');
    }

    public function changeStats(Request $request){
        $id = $request->id;
        $user = User::where('id', '=', ($id))->first();
        // dd($task);
        if ($user->is_admin == 0) {
            $user->is_admin = 1;
            $user->save();
            return back()->with('message','Role Changed to Admin Successfully');
        }else{
            $user->is_admin = 0;
            $user->save();
            return back()->with('message','Role Changed to Normal User Successfully');
        }
    }   
}
