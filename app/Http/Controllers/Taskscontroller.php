<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class Taskscontroller extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));   
    }

    public function show(Task $task) // Route Model Binding *****+
    {
        // $task = Task::find($id);

        return view('tasks.show', compact('task'));
    }
}
