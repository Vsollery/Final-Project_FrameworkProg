<?php

use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GeneralController;

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

Route::get('/',[GeneralController::class,'index']);
Route::get('/about',[GeneralController::class,'about']);
Route::get('/discover', [GeneralController::class,'discover']);
Route::get('/discover/{user}', [GeneralController::class, 'show']); 

Route::get('/dashboard',[TodoController::class, 'dashboard'])->middleware('auth');
Route::get('/dashboard/mytasks/finished',[TodoController::class, 'finished'])->middleware('auth');
Route::get('/dashboard/mytasks/unfinished',[TodoController::class, 'unfinished'])->middleware('auth');
Route::post('/dashboard/mytasks/{id}',[TodoController::class, 'checklist'])->middleware('auth');
Route::resource('/dashboard/mytasks',TodoController::class)->middleware('auth');

Route::get('/register', [UserController::class, 'create']);
Route::post('/register',[UserController::class, 'store']);
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/login',[UserController::class, 'authenticate']);
Route::post('/logout',[UserController::class, 'logout'])->middleware('auth');

Route::get('/manage-users', [AdminController::class,'index'])->middleware('admin');
Route::delete('/manage-users/{user}', [AdminController::class,'destroy'])->middleware('admin');
Route::post('/manage-users/{id}', [AdminController::class,'changeStats'])->middleware('admin');