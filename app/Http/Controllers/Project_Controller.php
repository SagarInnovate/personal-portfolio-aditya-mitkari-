<?php

namespace App\Http\Controllers;

use App\Models\projects;
use Illuminate\Http\Request;
use ZipArchive;

class Project_Controller extends Controller
{

    public function index()
    {
        $projects = projects::all();
        return view('admin.Admin_projects')->with("project", $projects);
    }

    public function create()
    {
        return view('admin.Add_New_Project', ['title' => 'Add New Project', "btn_text" => 'Add Project']);
    }

    public function store(Request $request)
    {
        $input = $request->all();

        if ($request->file('project_img')) {
            $file = $request->file('project_img');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/project_img'), $filename);
            $input['project_img'] = $filename;
        }




        if ($request->file('project_files')) {
            $file = $request->file('project_files');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/project_files/zips'), $filename);

            $zipfile = public_path('uploads/project_files/zips/' . $filename);
            $path = public_path('uploads/project_files/extracted/' . $filename);
            $zip = new ZipArchive;
            $res = $zip->open($zipfile);
            if ($res === TRUE) {
                $zip->extractTo($path);
                $zip->close();
            }
            $input['project_files'] = $filename;
        }


        $input['str_url'] = str_replace(" ", "-", $input['project_title']);
        if ($input['url_no_url'] != "yes") {
            $input['main_url'] = 'uploads/project_files/extracted/' . $input['project_files'] . '/';
        }



        projects::create($input);
        return redirect('/sagar/projects')->with('flash_message', '');
    }

    public function show($id)
    {
        $project = projects::find($id);
        // print_r($project);
        return view("public.show")->with("project", $project);
    }


    public function edit($id)
    {
        $project = projects::find($id);
        $title = ['update blog'];
        return view('admin.Add_New_Project', ['title' => 'update project', "btn_text" => 'update'])->with('project', $project);
    }


    public function update(Request $request, $id)
    {
        if ($project = projects::find($id)->count() > 0) {

            $project = projects::find($id);
            $input = $request->all();
            if ($request->file('project_img')) {
                $file = $request->file('project_img');
                $filename = date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('uploads/project_img'), $filename);
                $input['project_img'] = $filename;
            }


            if ($request->file('project_files')) {
                $file = $request->file('project_files');
                $filename = date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('uploads/project_files/zips'), $filename);

                $zipfile = public_path('uploads/project_files/zips/' . $filename);
                $path = public_path('uploads/project_files/extracted/' . $filename);
                $zip = new ZipArchive;
                $res = $zip->open($zipfile);
                if ($res === TRUE) {
                    $zip->extractTo($path);
                    $zip->close();
                }
                $input['project_files'] = $filename;
            }


            $input['str_url'] = str_replace(" ", "-", $input['project_title']);
            if ($input['url_no_url'] != "yes") {
                $input['main_url'] = 'uploads/project_files/extracted/' . $input['project_files'] . '/' .   $input['eu'];
            }


            $project->update($input);
            return redirect('/sagar/projects')->with('flash_message', 'student Updated!');
        } else {
            return abort(403);
        }
    }


    public function destroy($id)
    {
        if (projects::destroy($id)) {
            return redirect('/sagar/projects')->with('flash_message', 'Student deleted!');
        } else {
            return abort(401);
        }
    }
}