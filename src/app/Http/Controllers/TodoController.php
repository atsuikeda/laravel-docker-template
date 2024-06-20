<?php

namespace App\Http\Controllers;

use App\Todo;

use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $todo = new Todo();
        $todoList = $todo->all();

        dd($todoList);

        return view('todo.index');
    }
}
