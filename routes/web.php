<?php

use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home',[
        "title" => "Home",
        "active" => 'home'
    ]);
});

Route::get('/about', function () {
    return view('about',[
        "user" => Auth::user(),
        "title" => "about",
        "active" => 'about'
    ]);
});

Route::get('dashboard', function(){
    return view('tasks.index');
})->middleware('auth');

Route::get('/discover', function () {
    return view('discover',[
        "title" => "Discover",
        "active" => 'discover',
        "users" => User::latest()->paginate(3)->withQueryString()
    ]);
});

Route::get('/discover/{user}', function (User $user) {
    // dd($user);
    return view('show',[
        "title" => "Discover",
        "user" => $user,
        "tasks" => Task::where('user_id', $user->id)->get()
    ]);
});

Route::get('/dashboard/mytasks/finished',[TodoController::class, 'finished']);
Route::get('/dashboard/mytasks/unfinished',[TodoController::class, 'unfinished']);
Route::post('/dashboard/mytasks/{id}',[TodoController::class, 'checklist']);
Route::resource('/dashboard/mytasks',TodoController::class);

Route::get('/register', [UserController::class, 'create']);
Route::post('/register',[UserController::class, 'store']);
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/login',[UserController::class, 'authenticate']);
Route::post('/logout',[UserController::class, 'logout'])->middleware('auth');