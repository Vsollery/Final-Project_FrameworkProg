<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('tasks.todos.index',[
            'tasks' => Task::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tasks.todos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $mytask)
    {
        return view('tasks.todos.show', [
            'task' => $mytask
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $mytask)
    {
        return view('tasks.todos.edit', [
            'task' => $mytask,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $mytask)
    {
        $formFields = $request->validate([
            'title' => 'required|max:200',
            'description' => ['required', 'max:1000']
        ]);

        $mytask->update($formFields);
        return redirect('/dashboard/mytasks')->with('message', 'Task Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $mytask)
    {
        $mytask->delete();
        return redirect('/dashboard/mytasks')->with('message', 'Task Deleted');
    }

    public function finished(){
        $tasks = Task::where('is_completed', 1)->get();
        return view('tasks.todos.finished',[
            'tasks' => $tasks
        ]);
    }

    public function unfinished(){
        $tasks = Task::where('is_completed', 0)->get();
        return view('tasks.todos.unfinished',[
            'tasks' => $tasks
        ]);
    }

    public function checklist(Request $request)
    {
        $id = $request->id;
        $task = Task::where('id', '=', ($id))->first();
        // dd($task);
        if ($task) {
            $task->is_completed = 1;
            $task->save();
            return back();
        }
    }
}
