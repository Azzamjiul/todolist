<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TodoController extends Controller
{
    // menampilkan semua todos
    public function index ()
    {
        $todos = Todo::where('user_id', Auth::user()->id)->get();
        // return $todos;
        return view('todos.index', compact('todos'));
    }
}
