<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

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

Route::get('dashboard', function(){
    return view('tasks.index');
});

Route::get('/dashboard/mytasks/finished',[TodoController::class, 'finished']);
Route::get('/dashboard/mytasks/unfinished',[TodoController::class, 'unfinished']);
Route::resource('/dashboard/mytasks',TodoController::class);