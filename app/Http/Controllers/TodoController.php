<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('tasks.todos.index',[
            'tasks' => Task::latest()->where('user_id', auth()->user()->id)->get()
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
        $formFields = $request->validate([
            'title' => 'required | max: 200',
            'description' => ['required', 'max:1000']
        ]);

        $formFields['user_id'] = auth()->user()->id;
        // $formFields['user_id'] = 1;
        Task::create($formFields);

        return redirect('/dashboard/mytasks')->with('message', 'New Task Added Successfully!');
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
        return back()->with('message', 'Task Deleted');
    }

    public function dashboard(){
        return view('tasks.index');
    }

    public function finished(){
        $tasks = auth()->user()->tasks()->where('is_completed', 1)->latest()->get();
        return view('tasks.todos.finished',[
            'tasks' => $tasks
        ]);
    }

    public function unfinished(){
        $tasks = auth()->user()->tasks()->where('is_completed', 0)->latest()->get();
        return view('tasks.todos.unfinished', [
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
            return back()->with('message','Task Completed');
        }
    }
}
