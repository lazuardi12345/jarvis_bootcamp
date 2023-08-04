<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index() {
        $tasks = Task::getAll();

        return view('tasks.index',[
            'tasks' => $tasks
        ]);
    }
    
    public function show($id){
        $task = Task::getId($id);

        return view('tasks.show', [
            'task' => $task
        ]);
    }
}
