<?php

namespace App\Http\Controllers;

use App\Models\contact;
use Illuminate\Http\Request;

class Contact_Controller extends Controller
{

    public function index()
    {
        $contact = contact::all();
        return view('admin.Admin_contact_forms')->with('contact', $contact);
    }


    public function create()
    {
    }


    public function store(Request $request)
    {
        $input = $request->all();
        contact::create($input);
        return redirect("/contact")->with('message', 'thanks for contact us');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        if (contact::destroy($id)) {
            return redirect('/sagar/project_requests')->with('flash_message', 'Student deleted!');
        } else {
            return abort(401);
        }
    }
}