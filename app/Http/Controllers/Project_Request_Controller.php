<?php

namespace App\Http\Controllers;

use App\Models\project_request;
use Illuminate\Http\Request;
use ZipArchive;

class Project_Request_Controller extends Controller
{
    function store_project_request(Request $request)
    {
        $input = $request->all();
        if ($request->file('assets_file')) {
            $file = $request->file('assets_file');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/Request_project_assets/zips'), $filename);

            $zipfile = public_path('uploads/Request_project_assets/zips/' . $filename);
            $path = public_path('uploads/Request_project_assets/extracted/' . $filename);
            $zip = new ZipArchive;
            $res = $zip->open($zipfile);
            if ($res === TRUE) {
                $zip->extractTo($path);
                $zip->close();
            }
            $input['assets_file'] = $filename;
        }
        $input['project_description'] = $input['message'];

        // echo "<pre>";
        // print_r($input);
        // echo "</pre>";

        project_request::create($input);
        return redirect('/contact');
    }

    function index()
    {
        $request = project_request::all();
        return view("admin.Admin_all_project_requests")->with('request', $request);
    }

    function delete($id)
    {
        if (project_request::destroy($id)) {
            return redirect('/sagar/project_requests')->with('flash_message', 'Student deleted!');
        } else {
            return abort(401);
        }
    }
}