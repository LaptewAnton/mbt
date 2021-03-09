<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CategoryController extends Controller
{
    public function create(Request $request)
    {
        Category::create([
            'name' => $request->name,
        ]);
        return redirect(route('admin'));
    }

    public function showUpdate($id)
    {
        return view('admin.category_update', ['category' => Category::find($id)]);
    }

    public function update($id, Request $request)
    {
        Category::find($id)->update([
            'name' => $request->name,
        ]);
        return redirect(route('admin'));
    }

    public function delete($id)
    {
        Category::find($id)->delete();
        return Redirect::back();
    }
}
