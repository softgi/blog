<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function task(){
        $task=['name'=>'Task1','due_date'=>'2022-03-03 17:00:01'];
        return view('task')->with('task',$task);
    }
}
