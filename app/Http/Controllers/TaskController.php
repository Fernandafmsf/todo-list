<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        $count = 0;

        return view('site.home', compact('tasks', 'count'));
    }

    public function store(Request $request)
    {
        Task::create($request->all());

        return redirect()->route('site.home');
    }
}
