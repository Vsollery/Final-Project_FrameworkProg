<?php

use App\Models\Task;
use Illuminate\Http\Request;
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

Route::post('/dashboard/mytasks/{id}',function(Request $request){
    // dd($request);
    $id = $request->id;
    $task = Task::where('id', '=', ($id))->first();
    // dd($task);
    if ($task) {
        $task->is_completed = 1;
        $task->save();
        return redirect('/dashboard/mytasks');
    }
    

});