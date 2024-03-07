<?php

namespace App\Http\Controllers;

use App\Models\Lista;

use Illuminate\Http\Request;

class ListaController extends Controller
{
    public function index()
    {
        $tasks = Lista::all();
        $count=0;
        
        return view('site.home', compact('tasks', 'count'));
    }
}
