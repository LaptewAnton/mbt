<?php

namespace App\Http\Controllers\Admin;

use App\Application;
use App\Http\Controllers\Controller;
use App\Status;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ApplicationController extends Controller
{
    public function showUpdate($id)
    {
        return view('admin.application', [
            'application' => Application::find($id),
            'statuses' => Status::all(),
        ]);
    }

    public function update($id, Request $request)
    {
        $application = Application::find($id);
        if ($application->status_id == 1) {
            if ($request->status_id == '2') {

                $file = $request->file('photo_after')->getClientOriginalName();
                $application->update([
                    'status_id' => 2,
                    'photo_after' => time() . '_' . $file,
                ]);
                $request->file('photo_after')->move(public_path('/img/'), time() . '_' . $file);
            } elseif ($request->status_id == '3') {
                $application->update([
                    'status_id' => 3,
                    'comment' => $request->comment,
                ]);
            }
            return Redirect::back();
        }
    }
}
