<?php

use App\Http\Controllers\Blog_Controller;
use App\Http\Controllers\Category_Controller;
use App\Http\Controllers\Contact_Controller;
use App\Http\Controllers\Index_Controller;
use App\Http\Controllers\Login_Auth_Controller;
use App\Http\Controllers\Project_Controller;
use App\Http\Controllers\Project_Request_Controller;
use App\Http\Controllers\Resume_controller;
use App\Http\Middleware\Login_Auth;
use App\Models\contact;
use App\Models\resume;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('public/home');
});

Route::get('/blogs', function () {
    return view('public/blogs');
});

Route::get('/about', function () {
    return view('public/about');
});

Route::get('/bt', function () {
    return view('public/bt');
});

Route::get('/contact', function () {
    return view('public/contact');
});

Route::get('/projects', function () {
    return view('public/projects');
});

Route::get('/resume', [Resume_controller::class, 'public_resume']);

Route::get('/services', function () {
    return view('public/services');
});

Route::any('/blogs/{id}', [Index_Controller::class, 'blog_post_data']);

Route::post('/project_request', [Project_Request_Controller::class, 'store_project_request']);
Route::post('/contact', [Contact_Controller::class, 'store']);


Route::get('/project_request', function () {
    return redirect("/contact");
});

Route::get("/sagar", function () {

    if (isset($_SESSION["admin"])) {
        return redirect("/sagar/project");
    } else {
        return redirect("/sagar/login");
    }
});

Route::get("/sagar/login", [Login_Auth_Controller::class, 'login']);
Route::post("/sagar/login", [Login_Auth_Controller::class, 'login_s']);

Route::middleware([Login_Auth::class])->group(function () {
    Route::resource('/sagar/projects', Project_Controller::class);
    Route::resource('/sagar/blog', Blog_Controller::class);
    Route::get("/sagar/resume", [Resume_controller::class, 'index']);
    Route::post("/sagar/resume", [Resume_controller::class, 'store']);
    Route::get('/sagar/project_requests', [Project_Request_Controller::class, 'index']);
    Route::delete('/sagar/project_requests/{id}', [Project_Request_Controller::class, 'delete']);


    Route::resource('/sagar/contact', Contact_Controller::class);
    Route::resource('/sagar/categories', Category_Controller::class);
    Route::get("/sagar/logout", [Login_Auth_Controller::class, 'logout']);
});