<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Http\Requests\TaskRequest;

class PostController extends Controller
{
    public function index(Task $task)
    {
        return view('posts.top')->with(['tasks' => $task->get()]);
    }
    
    public function show(Task $task)
    {
        return view('posts.each')->with(['task' => $task]);
    }
    
    public function create()
    {
        return view('posts.create');
    }
    
    public function store(TaskRequest $request, Task $task)
    {
        $input = $request['task'];
        $task->fill($input)->save();
        return redirect('/tasks/' . $task->id);
    }
    
    public function edit(Task $task)
    {
        return view('posts.edit')->with(['task' => $task]);
    }
    
    public function update(TaskRequest $request, Task $task)
    {
        $input_task = $request['task'];
        $task->fill($input_task)->save();
        
        return redirect('/tasks/' . $task->id);
    }
    
    public function delete(Task $task)
    {
        $task->delete();
        return redirect('/');
    }
}
