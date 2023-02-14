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
        return view('todos.index', compact('todos'));
    }

    // menampilkan halaman form create todo
    public function create ()
    {
        return view('todos.create');
    }

    // proses store data todo
    public function store (Request $request)
    {
        $todo =  Todo::create([
            'name' => $request->name,
            'user_id' => Auth::user()->id,
        ]);

        return redirect()->route('todo.index');
    }

    // menampilkan halaman form edit todo
    public function edit ($id)
    {
        $todo = Todo::where('user_id', Auth::user()->id)->where('id', $id)->first();

        return view('todos.edit', compact('todo'));
    }

    // proses update data todo
    public function update($id, Request $request)
    {
        Todo::where('user_id', Auth::user()->id)->where('id', $id)->update([
            'name' => $request->name,
            'status' => $request->status,
        ]);

        return redirect()->route('todo.index');
    }

    // proses delete data todo
}
