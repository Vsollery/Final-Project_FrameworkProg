<?php

use App\Models\Task;
use Illuminate\Http\Request;
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
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about',[
        "title" => "about"
    ]);
});


Route::get('dashboard', function(){
    return view('tasks.index');
});

Route::get('/dashboard/mytasks/finished',[TodoController::class, 'finished']);
Route::get('/dashboard/mytasks/unfinished',[TodoController::class, 'unfinished']);
Route::post('/dashboard/mytasks/{id}',[TodoController::class, 'checklist']);
Route::resource('/dashboard/mytasks',TodoController::class);

Route::get('/register', [UserController::class, 'create']);
Route::get('/login', [UserController::class, 'login']);