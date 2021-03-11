<?php

namespace App\Http\Controllers;

use App\Application;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('main',[
            'applications' => Application::with('category')
                ->where('status_id', '1')->latest()
                ->take(4)->get(),
        ]);
    }
}
