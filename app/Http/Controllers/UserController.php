<?php

namespace App\Http\Controllers;

use App\Application;
use App\User;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    public function profile()
    {
        return view('profile.main',[
            'categories'=>Category::all(),
            'applications'=>Application::where('user_id', Auth::user()->id)->get(),
        ]);
    }

//    public function update(Request $request)
//    {
//        Auth::user()->update([
//            'name' => $request->name,
//            'email' => $request->email,
//            'login' => $request->login,
//        ]);
//        if ($request->password != null) {
//            if ($request->password == $request->password_repeat) {
//                Auth::user()->update([
//                    'password' => Hash::make($request->password),
//                ]);
//            }
//        }
//        return Redirect::back();
//    }
}
