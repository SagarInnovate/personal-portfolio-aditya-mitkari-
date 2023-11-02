@extends('layouts/main')
@section('head')
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Add New Project Post">
    <meta name="description" content="">
    <title>Add_New_Project</title>
    <link rel="stylesheet" href="{{ css_path('Add_New_Project.css', 'admin') }}" media="screen">
    <meta name="generator" content="Nicepage 4.17.10, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster:400">


    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/Untitleddesign.png",
		"sameAs": [
				"https://facebook.com/name",
				"https://twitter.com/name",
				"https://instagram.com/name"
		]
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta name="twitter:site" content="@">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Add_New_Project">
    <meta name="twitter:description" content="">
    <meta property="og:title" content="Add_New_Project">
    <meta property="og:type" content="website">
@endsection



@section('main-section')
    @php
        
        if ($title != 'update project') {
            $action = '/sagar/projects';
            $method = 'POST';
            $title = '';
            $project_img = '';
            $desc = '';
            $catego = '';
            $techno = '';
            $tags = '';
            $github = '';
            $url = '';
            $main_url = '';
            $project_files = '';
            $date = '';
            $str_url = '';
        } else {
            $action = '/sagar/projects/' . $project->id;
            $method = 'PATCH';
            $title = $project->project_title;
            $project_img = $project->project_img;
            $desc = $project->description;
            $catego = $project->category;
            $techno = $project->technologies_used;
            $tags = $project->tags;
            $github = $project->github;
            $url = $project->url_no_url;
            $main_url = $project->main_url;
            $project_files = $project->project_files;
            $date = $project->date;
            $str_url = $project->str_url;
        }
        
    @endphp

@section('main-section')
    <section class="u-clearfix u-gradient u-section-1" id="sec-ea10">
        <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
            <div
                class="u-align-center u-container-style u-expanded-width-md u-expanded-width-sm u-group u-shape-rectangle u-group-1">
                <div
                    class="u-container-layout u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-container-layout-1">
                    <span class="u-file-icon u-icon u-text-white u-icon-1"><img src="{{ img_path('4922073-59876fda.png') }}"
                            alt=""></span>
                    <h2 class="u-text u-text-body-alt-color u-text-default u-text-1">{{ $title }}</h2>
                    <div
                        class="u-align-center-sm u-align-center-xs u-align-left-lg u-align-left-md u-align-left-xl u-expanded-width-xs u-form u-form-1">
                        <form action="{{ $action }}" method="POST"
                            class="u-clearfix u-form-custom-backend u-form-spacing-11 u-form-vertical u-inner-form"
                            source="custom" name="form" style="padding: 23px;" redirect="true"
                            enctype="multipart/form-data">
                            @csrf
                            @method($method)
                            <div class="u-form-group u-form-group-1">
                                <label for="text-1836" class="u-label u-text-body-alt-color u-label-1">Project
                                    Title</label>
                                <input type="text" placeholder="" id="text-1836" name="project_title"
                                    value="{{ $title }}"
                                    class="u-border-3 u-border-grey-10 u-input u-input-rectangle u-radius-9 u-white"
                                    required="required">
                            </div>
                            <div class="u-form-group u-form-group-2">
                                <label for="text-2e9f" class="u-label u-text-body-alt-color u-label-2">Project
                                    Image</label>
                                <input type="file" placeholder="" id="text-2e9f" name="project_img"
                                    value="{{ $project_img }}"
                                    class="u-border-3 u-border-grey-10 u-input u-input-rectangle u-radius-9 u-white">
                                <img src="{{ url('/uploads/project_img/' . $project_img) }}" width="30%" />
                            </div>
                            <div class="u-form-group u-form-group-3">
                                <label for="text-f1de" class="u-label u-text-body-alt-color u-label-3">Meta
                                    Description</label>
                                <input type="text" placeholder="" id="text-f1de" name="description"
                                    value="{{ $desc }}"
                                    class="u-border-3 u-border-grey-10 u-input u-input-rectangle u-radius-9 u-white"
                                    required="required">
                            </div>
                            <div class="u-form-group u-form-select u-form-group-4">
                                <label for="select-6b01" class="u-label u-text-body-alt-color u-label-4">Category</label>
                                <div class="u-form-select-wrapper">
                                    <select id="select-6b01" name="category"
                                        class="u-border-3 u-border-grey-10 u-input u-input-rectangle u-radius-9 u-white"
                                        required="required">
                                        @php
                                            $category = app('App\Http\Controllers\Category_Controller')->all_category();
                                            // foreach ($a as $value) {
                                            // echo $value->category_name;}
                                        @endphp

                                        <option disabled selected>please select your category
                                        </option>
                                        @foreach ($category as $item)
                                            <option value="{{ $item->category_name }}"
                                                {{ $item->category_name == $catego ? 'selected' : 'hello' }}>
                                                {{ $item->category_name }}</option>
                                        @endforeach
                                    </select>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" version="1"
                                        class="u-caret">
                                        <path fill="currentColor" d="M4 8L0 4h8z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="u-form-group u-form-textarea u-form-group-5">
                                <label for="textarea-137e" class="u-label u-text-body-alt-color u-label-5">Technologies
                                    Used</label>
                                <textarea rows="4" cols="50" id="textarea-137e" name="technologies_used"
                                    class="u-border-3 u-border-grey-10 u-input u-input-rectangle u-radius-9 u-white" required="">{{ $techno }}</textarea>
                            </div>
                            <div class="u-form-group u-form-textarea u-form-group-6">
                                <label for="textarea-d9b0" class="u-label u-text-body-alt-color u-label-6">Tags</label>
                                <textarea rows="4" cols="50" id="textarea-d9b0" name="tags"
                                    class="u-border-3 u-border-grey-10 u-input u-input-rectangle u-radius-9 u-white" required="">{{ $tags }}</textarea>
                            </div>
                            <div class="u-form-group u-form-group-7">
                                <label for="text-756c" class="u-label u-text-body-alt-color u-label-7">Github
                                    Link</label>
                                <input type="url" placeholder="" id="text-756c" name="github"
                                    value="{{ $github }}"
                                    class="u-border-3 u-border-grey-10 u-input u-input-rectangle u-radius-9 u-white">
                            </div>
                            <div class="u-form-group u-form-select u-form-group-8">
                                <label for="select-d964" class="u-label u-text-body-alt-color u-label-8">Select
                                    Type</label>
                                <div class="u-form-select-wrapper">
                                    <select id="select-d964" name="url_no_url" onclick="hello(this)" required
                                        class="u-border-3 u-border-grey-10 u-input u-input-rectangle u-radius-9 u-white">
                                        <option value="yes" {{ $url == 'yes' ? 'selected' : '' }}>URL</option>
                                        <option value="no" {{ $url == 'no' ? 'selected' : '' }}>Non-URL</option>
                                    </select>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" version="1"
                                        class="u-caret">
                                        <path fill="currentColor" d="M4 8L0 4h8z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="u-form-group u-form-group-9" id="a1">
                                <label for="text-b7d5" class="u-label u-text-body-alt-color u-label-9">Project Main
                                    URL</label>
                                <input type="text" placeholder="" id="text-b7d5" name="main_url"
                                    value="{{ $main_url }}"
                                    class="u-border-3 u-border-grey-10 u-input u-input-rectangle u-radius-9 u-white">
                            </div>
                            <div class="u-form-group u-form-group-9" id="a3">
                                <label for="text-b7d5eu" class="u-label u-text-body-alt-color u-label-9">Entering File
                                    Name</label>
                                <input type="text" placeholder="" id="text-b7d5eu" name="eu" value=""
                                    class="u-border-3 u-border-grey-10 u-input u-input-rectangle u-radius-9 u-white">
                            </div>
                            <div class="u-form-group u-form-group-9" id="a2">
                                <label for="text-b7d5a" class="u-label u-text-body-alt-color u-label-9">Upload Project
                                    Files
                                </label>
                                <input type="file" placeholder="" id="text-b7d5a" name="project_files"
                                    accept=".zip" value="{{ $project_files }}"
                                    class="u-border-3 u-border-grey-10 u-input u-input-rectangle u-radius-9 u-white">
                            </div>
                            <span style="color: white">{{ $project_files }}</span>
                            <div class="u-form-date u-form-group u-form-group-10">
                                <br>
                                <label for="date-34a2" class="u-label u-text-body-alt-color u-label-10"
                                    required>Date</label>
                                <input type="date" placeholder="MM/DD/YYYY" id="date-34a2" name="date"
                                    class="u-border-3 u-border-grey-10 u-input u-input-rectangle u-radius-9 u-white"
                                    value="{{ $date }}">
                            </div>
                            <input type="hidden" name="str_url" value="{{ $str_url }}">
                            <div class="u-align-center u-form-group u-form-submit">
                                <a href="#"
                                    class="u-border-none u-btn u-btn-round u-btn-submit u-button-style u-custom-color-2 u-radius-17 u-btn-1">{{ $btn_text }}</a>
                                <input type="submit" value="submit" class="u-form-control-hidden">
                            </div>
                            <div class="u-form-send-message u-form-send-success"> Thank you! Your message has been
                                sent. </div>
                            <div class="u-form-send-error u-form-send-message"> Unable to send your message. Please fix
                                errors then try again. </div>
                            <input type="hidden" value="" name="recaptchaResponse">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        document.getElementById('a2').style.display = "none";
        document.getElementById('a1').style.display = "none";
        document.getElementById('a3').style.display = "none";


        function hello(select) {
            $a = select.options[select.selectedIndex].text;
            if ($a == 'Non-URL') {
                document.getElementById('a2').style.display = "block";
                document.getElementById('a1').style.display = "none";
                document.getElementById('a3').style.display = "block";

            } else {
                document.getElementById('a1').style.display = "block";
                document.getElementById('a2').style.display = "none";
                document.getElementById('a3').style.display = "none";

            }
        }
    </script>


@endsection
