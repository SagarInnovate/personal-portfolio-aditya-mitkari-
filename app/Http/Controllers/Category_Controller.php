<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class Category_Controller extends Controller
{
    public function all_category()
    {
        $category = category::all();
        return $category;
    }

    public function index()
    {
        $category = category::all();

        return view('admin.admin-Categories')->with('category', $category);
    }


    public function create()
    {
        return view('admin.Admin_add_new_category', ['title' => 'Add New Category', "btn_text" => 'Add New']);
    }


    public function store(Request $request)
    {
        $input = $request->all();
        category::create($input);
        return redirect('/sagar/categories')->with('flash_message', '');
    }


    public function show($id)
    {
        redirect("/sagar/categories");
    }


    public function edit($id)
    {
        $category = category::find($id);
        $title = ['update category'];
        return view('admin.Admin_add_new_category', ['title' => 'update category', "btn_text" => 'update'])->with('category', $category);
    }


    public function update(Request $request, $id)
    {
        $category = category::find($id);
        $input = $request->all();

        $category->update($input);
        return redirect('/sagar/categories')->with('flash_message', 'student Updated!');
    }


    public function destroy($id)
    {
        category::destroy($id);
        return redirect('/sagar/categories')->with('flash_message', 'Student deleted!');
    }
}