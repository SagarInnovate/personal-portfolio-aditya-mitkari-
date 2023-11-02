@extends('layouts/main')
@section('head')
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="keywords" content="Blogs">
    <meta name="description" content="">
    <title>BLOGS</title>
    <link rel="stylesheet" href="{{ css_path('BLOGS.css') }}" media="screen">

    <link id="u-theme-google-font" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,400i,700,700i,900,900i|Lobster:400">



@endsection

@section('main-section')
<section class="u-align-center u-clearfix u-gradient u-section-1" src="" id="sec-94a0">
    <div class="u-clearfix u-sheet u-sheet-1">
      <h1 class="u-align-center u-text u-text-body-alt-color u-title u-text-1">Blogs<br>
      </h1>
    </div>
  </section>

  <section class="u-clearfix u-section-2" id="sec-74c2">
    <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
      <div class="u-expanded-width u-list u-list-1">
        <div class="u-repeater u-repeater-1">

                    {{-- ["post_title", "post_content", "image", "description", "category", "tags", 'str_url'] --}}
                    @php
                        $blog = app('App\Http\Controllers\Index_Controller')->all_post_data_recent();
                    @endphp
                    @foreach ($blog as $item)
                        {{-- <div class="u-container-style u-list-item u-repeater-item" data-animation-name="pulse"
                            data-animation-duration="1000" data-animation-direction="">
                            <div class="u-container-layout u-similar-container u-container-layout-1">
                                <img class="u-expanded-width u-image u-image-round u-radius-10 u-image-1"
                                    src="{{ url('/uploads/Blog_Image/' . $item->image) }}" alt=""
                                    data-image-width="1280" data-image-height="853">
                                <p class="u-custom-font u-font-merriweather u-text u-text-1">
                                    {{ substr($item->updated_at, 0, 2 + 2 + 2 + 1 + 4) . '|' . $item->category }}<br>
                                </p>
                                <p class="u-custom-font u-font-merriweather u-large-text u-text u-text-variant u-text-2">
                                    {{ $item->post_title }}</p>
                                <p
                                    class="u-align-justify u-custom-font u-font-merriweather u-small-text u-text u-text-variant u-text-3">
                                    {{ $item->description }}</p>
                                <a href="{{ url('/blogs/' . $item->str_url) }}"
                                    class="u-align-center u-border-2 u-border-custom-color-6 u-btn u-btn-round u-button-style u-hover-custom-color-6 u-none u-radius-6 u-text-body-color u-text-hover-white u-btn-1">READ
                                    MORE</a>
                            </div>
                        </div> --}}


              <div class="u-container-style u-list-item u-repeater-item">
                <div class="u-container-layout u-similar-container u-container-layout-1">
                  <img class="u-expanded-width u-image u-image-round u-radius-10 u-image-1" src="{{ url('/uploads/Blog_Image/' . $item->image) }}" alt="" data-image-width="1280" data-image-height="853">
                  <p class="u-align-center u-custom-font u-font-merriweather u-text u-text-1">   {{ substr($item->updated_at, 0, 2 + 2 + 2 + 1 + 4) . '|' . $item->category }}<br>
                  </p>
                  <p class="u-align-center u-custom-font u-font-merriweather u-large-text u-text u-text-variant u-text-2">     {{ $item->post_title }}</p>
                  <p class="u-align-justify u-custom-font u-font-merriweather u-small-text u-text u-text-variant u-text-3">  {{ $item->description }}</p>
                  <a href="{{ url('/blogs/' . $item->str_url) }}" class="u-align-center u-border-2 u-border-custom-color-6 u-btn u-btn-round u-button-style u-hover-custom-color-6 u-none u-radius-6 u-text-body-color u-text-hover-white u-btn-1">READ MORE</a>
                </div>
              </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>




@endsection
