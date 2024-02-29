<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login()
    {
        return View('login.login');
    }

    public function auth(LoginRequest $request)
    {
        $credenciais = $request->validated();
        $user['password'] = Hash::make($request->password);

        if (Auth::attempt($credenciais)) {
            return redirect()->intended('/');
        }

        return redirect()->back()->with('erro', 'Usuário ou senha inválida.');
    }


}
