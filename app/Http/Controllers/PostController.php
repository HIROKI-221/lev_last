<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class PostController extends Controller
{
    public function index(Task $task){
        return $task->get();
    }
}
