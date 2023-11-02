@extends('layouts/main')
@section('head')
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="keywords" content="Projects">
    <meta name="description" content="">
    <title>{{  $blog->post_title }}</title>
    <link rel="stylesheet" href="{{ css_path('bt.css') }}" media="screen">

    <link id="u-theme-google-font" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster:400">





@endsection
</head>

{{-- ['post_title', 'post_content', 'image', 'description', 'category', 'tags', 'str_url']; --}}
{{-- @php

echo '<pre>';
print_r($blog);
echo '</pre>';
@endphp --}}
@section('main-section')
<section class="u-align-center u-clearfix u-gradient u-section-1" src="" id="sec-b810">
    <div class="u-clearfix u-sheet u-valign-middle-lg u-sheet-1">
      <h1 class="u-text u-text-body-alt-color u-title u-text-1">{{  $blog->post_title }}</h1>
      <p class="u-large-text u-text u-text-body-alt-color u-text-variant u-text-2">{{ $blog->description }}</p>
    </div>
  </section>
  <section class="u-clearfix u-section-2" id="sec-6d33">
    <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
      <div class="u-clearfix u-custom-html u-expanded-width u-custom-html-1">
@php
        echo $blog->post_content;
@endphp
      </div>
    </div>
  </section>
    <section class="u-clearfix u-section-3" id="sec-2c6d">
        <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
            <h1 class="u-align-center u-text u-title u-text-1" data-animation-name="flipIn" data-animation-duration="1000"
                data-animation-direction="X">popular Posts<br>
            </h1>
        </div>
    </section>
    <section class="u-clearfix u-section-4" id="sec-203f">
        <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
          <div class="u-expanded-width u-layout-horizontal u-list u-list-1">
            <div class="u-repeater u-repeater-1">

                    @php
                        $blog = app('App\Http\Controllers\Index_Controller')->blog_popular_post_data();
                    @endphp

                    @foreach ($blog as $item)

                              <div class="u-align-center u-border-1 u-border-grey-30 u-container-style u-list-item u-radius-10 u-repeater-item u-shape-round u-white u-list-item-1" data-animation-name="customAnimationIn" data-animation-duration="1000" data-animation-direction="X">
                                <div class="u-container-layout u-similar-container u-valign-bottom u-container-layout-1">
                                  <img class="u-expanded-width u-image u-image-round u-radius-10 u-image-1" src="{{ url('/uploads/Blog_Image/' . $item->image) }}" alt="" data-image-width="1280" data-image-height="853">
                                  <div class="u-align-center u-clearfix u-expanded-width u-group-elements u-group-elements-1" data-animation-name="" data-animation-duration="0" data-animation-direction="">
                                    <p class="u-small-text u-text u-text-variant u-text-1">{{ $item->post_title }}</p>
                                    <a href="{{ url('/blogs/' . $item->str_url) }}" class="u-align-center u-btn u-button-style u-none u-text-custom-color-6 u-text-hover-palette-1-base u-btn-1">Read More&nbsp; </a>
                                  </div>
                                </div>
                              </div>
                            {{-- <div class="u-container-layout u-similar-container u-valign-bottom u-container-layout-1">
                                <img class="u-expanded-width u-image u-image-round u-radius-10 u-image-1"
                                    src="{{ url('/uploads/Blog_Image/' . $item->image) }}" alt=""
                                    data-image-width="1280" data-image-height="853">
                                <div class="u-align-center u-clearfix u-expanded-width u-group-elements u-group-elements-1"
                                    data-animation-name="" data-animation-duration="0" data-animation-direction="">
                                    <p class="u-small-text u-text u-text-variant u-text-1">{{ $item->post_title }}</p>
                                    <a href="{{ url('/blogs/' . $item->str_url) }}"
                                        class="u-align-center u-btn u-button-style u-none u-text-hover-palette-1-base u-text-palette-2-base u-btn-1">Read
                                        More&nbsp;<span class="u-icon u-text-palette-2-base u-icon-1"><svg
                                                class="u-svg-content" viewBox="0 0 412.72 412.72" x="0px"
                                                y="0px" style="width: 1em; height: 1em;">
                                                <path
                                                    d="M404.72,82.944c-0.027,0-0.054,0-0.08,0h0h-27.12v-9.28c0.146-3.673-2.23-6.974-5.76-8    c-18.828-4.934-38.216-7.408-57.68-7.36c-32,0-75.6,7.2-107.84,40c-32-33.12-75.92-40-107.84-40    c-19.464-0.048-38.852,2.426-57.68,7.36c-3.53,1.026-5.906,4.327-5.76,8v9.2H8c-4.418,0-8,3.582-8,8v255.52c0,4.418,3.582,8,8,8    c1.374-0.004,2.724-0.362,3.92-1.04c0.8-0.4,80.8-44.16,192.48-16h1.2h0.72c0.638,0.077,1.282,0.077,1.92,0    c112-28.4,192,15.28,192.48,16c2.475,1.429,5.525,1.429,8,0c2.46-1.42,3.983-4.039,4-6.88V90.944    C412.72,86.526,409.139,82.944,404.72,82.944z M16,333.664V98.944h19.12v200.64c-0.05,4.418,3.491,8.04,7.909,8.09    c0.432,0.005,0.864-0.025,1.291-0.09c16.55-2.527,33.259-3.864,50-4c23.19-0.402,46.283,3.086,68.32,10.32    C112.875,307.886,62.397,314.688,16,333.664z M94.32,287.664c-14.551,0.033-29.085,0.968-43.52,2.8V79.984    c15.576-3.47,31.482-5.241,47.44-5.28c29.92,0,71.2,6.88,99.84,39.2l0.24,199.28C181.68,302.304,149.2,287.664,94.32,287.664z     M214.32,113.904c28.64-32,69.92-39.2,99.84-39.2c15.957,0.047,31.863,1.817,47.44,5.28v210.48    c-14.354-1.849-28.808-2.811-43.28-2.88c-54.56,0-87.12,14.64-104,25.52V113.904z M396.64,333.664    c-46.496-19.028-97.09-25.831-146.96-19.76c22.141-7.26,45.344-10.749,68.64-10.32c16.846,0.094,33.663,1.404,50.32,3.92    c4.368,0.663,8.447-2.341,9.11-6.709c0.065-0.427,0.095-0.859,0.09-1.291V98.944h19.12L396.64,333.664z">
                                                </path>
                                            </svg><img></span>
                                    </a>
                                </div>
                            </div> --}}
                        </div>
                    @endforeach

                </div>
                <a class="u-absolute-vcenter u-gallery-nav u-gallery-nav-prev u-grey-70 u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-gallery-nav-1"
                    href="#" role="button">
                    <span aria-hidden="true">
                        <svg viewBox="0 0 451.847 451.847">
                            <path
                                d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z">
                            </path>
                        </svg>
                    </span>
                    <span class="sr-only">
                        <svg viewBox="0 0 451.847 451.847">
                            <path
                                d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z">
                            </path>
                        </svg>
                    </span>
                </a>
                <a class="u-absolute-vcenter u-gallery-nav u-gallery-nav-next u-grey-70 u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-gallery-nav-2"
                    href="#" role="button">
                    <span aria-hidden="true">
                        <svg viewBox="0 0 451.846 451.847">
                            <path
                                d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z">
                            </path>
                        </svg>
                    </span>
                    <span class="sr-only">
                        <svg viewBox="0 0 451.846 451.847">
                            <path
                                d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z">
                            </path>
                        </svg>
                    </span>
                </a>
            </div>
        </div>
    </section>







@endsection
