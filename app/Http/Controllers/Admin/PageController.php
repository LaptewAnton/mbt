<?php

namespace App\Http\Controllers\Admin;

use App\Application;
use App\Category;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('admin\main', [
            'applications' => Application::all(),
            'categories' => Category::all(),
        ]);
    }
}
