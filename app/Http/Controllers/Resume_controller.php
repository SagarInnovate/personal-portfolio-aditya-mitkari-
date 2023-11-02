<?php

namespace App\Http\Controllers;

use App\Models\resume;
use Illuminate\Http\Request;

class Resume_controller extends Controller
{

    function public_resume()
    {
        $resume = resume::find(1);
        //  print_r($resume);
        return view('public.resume')->with('resume', $resume);
    }

    function index()
    {
        return view('admin.Admin_resume_customize');
    }

    function store(Request $request)
    {
        $resume = resume::find(1);
        $input = $request->all();
        if ($request->file('resume')) {

            $file = $request->file('resume');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/Resume'), $filename);
            $input['resume'] = $filename;
        }

        $resume->update($input);
        return redirect("/sagar");
    }
}