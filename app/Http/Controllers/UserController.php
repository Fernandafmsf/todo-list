<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function create(): View
    {
        return view('login.user-create');
    }

    public function store(Request $request): RedirectResponse
    {
        $user = $request->all();
   
        $user['password']= Hash::make($request->password);
        $user = User::create($user);
        
        //fazer login 
        Auth::login($user);

        return redirect()->route('site.home');
    }
}
