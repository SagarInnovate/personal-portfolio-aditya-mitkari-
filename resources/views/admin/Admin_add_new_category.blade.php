@extends('layouts/main')
@section('head')
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Add New Category">
    <meta name="description" content="">
    <title>Admin_add_new_category</title>
    <link rel="stylesheet" href="{{ css_path('Admin_add_new_category.css', 'admin') }}" media="screen">
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
    <meta name="twitter:title" content="Admin_add_new_category">
    <meta name="twitter:description" content="">
    <meta property="og:title" content="Admin_add_new_category">
    <meta property="og:type" content="website">
@endsection

@section('main-section')
    @php
        
        if ($title != 'update category') {
            $action = '/sagar/categories';
            $method = 'POST';
            $name = '';
            $slug = '';
            $description = '';
        } else {
            $action = '/sagar/categories/' . $category->id;
            $method = 'PATCH';
            $name = $category->category_name;
            $slug = $category->slug;
            $description = $category->description;
        }
        
    @endphp

    <section class="u-clearfix u-gradient u-section-1" id="sec-d0ee">
        <div
            class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-sheet-1">
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
                            source="custom" name="form" style="padding: 23px;" redirect="true">
                            @csrf
                            @method($method);
                            <div class="u-form-group u-form-group-1">
                                <label for="text-1836" class="u-label u-text-body-alt-color u-label-1">Category
                                    Name</label>
                                <input type="text" placeholder="" id="text-1836" name="category_name"
                                    value="{{ $name }}"
                                    class="u-border-3 u-border-grey-10 u-input u-input-rectangle u-radius-9 u-white"
                                    required="required">
                            </div>
                            <div class="u-form-group u-form-group-2">
                                <label for="text-f1de" class="u-label u-text-body-alt-color u-label-2">category
                                    slug</label>
                                <input type="text" placeholder="" id="text-f1de" name="slug"
                                    value="{{ $slug }}"
                                    class="u-border-3 u-border-grey-10 u-input u-input-rectangle u-radius-9 u-white"
                                    required="required">
                            </div>
                            <div class="u-form-group u-form-textarea u-form-group-3">
                                <label for="textarea-d9b0"
                                    class="u-label u-text-body-alt-color u-label-3">Description</label>
                                <textarea rows="4" cols="50" id="textarea-d9b0" name="description"
                                    class="u-border-3 u-border-grey-10 u-input u-input-rectangle u-radius-9 u-white" required="">{{ $description }}</textarea>
                            </div>
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
@endsection
