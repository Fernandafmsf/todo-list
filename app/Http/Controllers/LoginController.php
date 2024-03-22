<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(): View
    {
        return View('login.login');
    }

    public function auth(LoginRequest $request): RedirectResponse
    {
        $credenciais = $request->validated();
        $user['password'] = Hash::make($request->password);

        if (Auth::attempt($credenciais)) {
            return redirect()->intended('/');
        }

        return redirect()->back()->with('erro', 'Usuário ou senha inválida.');
    }

    public function logout(): RedirectResponse
    {
        Auth::logout();

        return redirect(route('site.home'));
    }


}
