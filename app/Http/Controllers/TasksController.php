<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TasksController extends Controller
{
    // показать все задачи
    public function index(){
        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));
    }
    // показать одну задачу
    public function show($id){
        $task = Task::find($id);
        return view('tasks.show', compact('task'));
    }
}
