<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class Admin
{
    public function handle($request, Closure $next)
    {
        if (Auth::check() && !Auth::user()->admin){
            return Redirect::back();
        } else {
            return $next($request);
        }
    }
}
