<?php

namespace App\Http\Controllers;

use App\Models\blogs;
use App\Models\projects;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Index_Controller extends Controller
{
    function get_recent_6_project_records()
    {
        return projects::orderby('id', 'desc')->take(6)->get();
    }

    function get_recent_9_blog_records()
    {
        return blogs::orderby('id', 'desc')->take(9)->get();
    }

    function blog_post_data($id)
    {
        if (blogs::where("str_url", $id)->count() > 0) {
            $post_data = blogs::where("str_url", $id)->get()->first();
            return view('public.bt')->with('blog', $post_data);
        } else {
            return redirect("/");
        }
    }

    public function blog_popular_post_data()
    {
        if (blogs::get()->count() > 0) {
            $b = blogs::take(20)->get();
            return $b;
        } else {
            return abort(404);
        }
    }


    public function all_post_data_recent()
    {
        if (blogs::orderBy('id', "desc")->get()->count() > 0) {
            $b = blogs::orderBy('id', "desc")->get();
            return $b;
        } else {
            return abort(404);
        }
    }

    public function all_project_data_recent()
    {
        if (projects::orderBy('id', "desc")->get()->count() > 0) {
            $b = projects::orderBy('id', "desc")->get();
            return $b;
        } else {
            return abort(404);
        }
    }
}