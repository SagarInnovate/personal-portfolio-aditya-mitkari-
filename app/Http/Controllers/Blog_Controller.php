<?php

namespace App\Http\Controllers;

use App\Models\blogs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class Blog_Controller extends Controller
{
    public function index()
    {
        $blogs = blogs::all();

        return view('admin.admin-Blog')->with('blogs', $blogs);
    }

    public function create()
    {
        return view('admin.Admin-add_new_blog', ['title' => 'Add New Blog', "btn_text" => 'Add Blog']);
    }


    public function store(Request $request)
    {
        $data = new blogs();

        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('uploads/Blog_Image'), $filename);
            $data['image'] = $filename;
        }



        $data['post_title'] = $request->input('post_title');
        $data['post_content'] = $request->input('post_content');
        $data['description'] = $request->input('description');
        $data['category'] = $request->input('category');
        $data['tags'] = $request->input('tags');
        $str = str_replace(" ", "-", $data['post_title']);
        $data['str_url'] = $str;
        $data->save();
        return redirect('/sagar/blog')->with('flash_message', 'Student Addedd!');
    }


    public function show($id)
    {
        $blog = blogs::find($id);

        echo "<pre>";
        print_r($blog);
        echo "</pre>";
    }


    public function edit($id)
    {
        $blog = blogs::find($id);
        $title = ['update blog'];
        return view('admin.Admin-add_new_blog', ['title' => 'update blog', "btn_text" => 'update'])->with('blog', $blog);
    }


    public function update(Request $request, $id)
    {
        if ($blog = blogs::find($id)->count() > 0) {

            $input = $request->all();
            $blog = blogs::find($id);


            if ($request->file('image')) {
                $file = $request->file('image');
                $filename = date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('uploads/Blog_Image'), $filename);
                $input['image'] = $filename;
            }
            // $input['str_url'] = str_replace(" ", "-", $input['project_title']);
            // $input["str_url"] = str_replace(" ", "-", $input['post_title']);


            $input['str_url'] = str_replace(" ", "-", $input['post_title']);


            // echo  $input['str_url'];
            // echo "<pre>";
            // print_r($input);
            // echo "</pre>";

            $blog->update($input);
            return redirect('/sagar/blog')->with('flash_message', 'student Updated!');
        } else {
            return abort(403);
        }
    }


    public function destroy($id)
    {
        if (blogs::destroy($id)) {
            return redirect('/sagar/blog')->with('flash_message', 'Student deleted!');
        } else {
            return abort(401);
        }
    }
}