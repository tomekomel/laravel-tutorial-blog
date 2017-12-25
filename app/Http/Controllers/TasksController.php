<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TasksController extends Controller
{
    public function index()
    {
    	$name = 'Tomasz';
		$tasks = Task::all();
		//return $tasks;
		return view('tasks.index', compact('tasks', 'name'));
    }

    public function show(Task $task)
    {
		return view('tasks.show', compact('task'));
    }

    public function incompleted()
    {
        $name = 'Taski nieskończone';
        $tasks = Task::incomplete()->where('id', '>=', 2)->get();
        return view('tasks.index', compact('tasks', 'name'));
    }
}
