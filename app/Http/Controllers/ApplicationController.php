<?php

namespace App\Http\Controllers;

use App\Application;
use App\Category;
use App\Status;
use App\Filters\ApplicationFilter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class ApplicationController extends Controller
{

    public function index(ApplicationFilter $filters){
        return view('applications',[
            'applications' => Application::filter($filters)->get(),
        ]);
    }


    public function showCreate()
    {
        return view('profile.application-create', [
            'categories' => Category::all(),
        ]);
    }

    public function create(Request $request)
    {
        $file = $request->file('photo_before')->getClientOriginalName();
        Application::create([
            'title' => $request->title,
            'description' => $request->description,
            'category_id' => $request->category_id,
            'photo_before' => time() . '_' . $file,
            'user_id' => Auth::user()->id,
        ]);
        $request->file('photo_before')->move(public_path('/img/'), time() . '_' . $file);
        return redirect(route('profile'));
    }


    public function show($id)
    {
        return view('application', [
            'application' => Application::find($id),
            'statuses' => Status::all(),
        ]);
    }

    public function delete($id)
    {
        $application = Application::find($id);
        if ($application->status_id == 1) {
            $application->delete();
            File::delete(public_path('/img/' . $application->photo_before));
            return redirect(route('profile'));
        }
    }
}
