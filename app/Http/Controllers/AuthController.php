<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class AuthController extends Controller
{
    public function showRegistration()
    {
        return view('registration');
    }

    public function showLogin()
    {
        return view('login');
    }

    public function registration(Request $request)
    {
        if ($request->check == 1) {
            if ($request->password == $request->password_repeat) {
                User::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'login' => $request->login,
                    'password' => Hash::make($request->password),
                ]);
                return redirect(route('login'));
            } else {
                echo 'Пароль подтвержден неверно';
            }
        } else {
            echo 'Согласитесь на обработку персональных данных для регистрации';
        }
    }

    public function login(Request $request)
    {
        Auth::attempt([
            'login' => $request->login,
            'password' => $request->password,
        ]);
        return redirect(route('profile'));
    }

    public function logout()
    {
        Auth::logout();
        return Redirect::back();
    }
}
