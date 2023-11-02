@extends('layouts/main')
@section('head')
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="​Sample Title">
    <meta name="description" content="">
    <title>PROJECTS</title>
    <link rel="stylesheet" href="{{ css_path('PROJECTS.css') }}" media="screen">
    <link id="u-theme-google-font" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster:400">




@endsection

@section('main-section')


    <section class="u-align-center u-clearfix u-gradient u-section-1" src="" id="sec-9f38">
        <div class="u-clearfix u-sheet u-sheet-1">
          <h1 class="u-align-center u-text u-text-body-alt-color u-title u-text-1">Projects<br>
          </h1>
        </div>
      </section>
      <section class="u-clearfix u-section-2" id="sec-39ac">
        <div class="u-clearfix u-sheet u-sheet-1">
          <div class="u-expanded-width u-list u-list-1">
            <div class="u-repeater u-repeater-1">
                @php
                $project = app('App\Http\Controllers\Index_Controller')->all_project_data_recent();
            @endphp
            @foreach ($project as $item)

              <div class="u-container-style u-list-item u-repeater-item u-list-item-1">
                <div class="u-container-layout u-similar-container u-container-layout-1">
                  <img class="u-expanded-width u-image u-image-round u-radius-10 u-image-1" src="{{ url('/uploads/project_img/' . $item->project_img) }}" alt="" data-image-width="1280" data-image-height="853">
                  <h1 class="u-align-center u-text u-title u-text-1">{{ $item->project_title }}</h1>
                  <p class="u-align-center u-text u-text-2">{{ $item->date . '|' . $item->category }}</p>
                  <p class="u-align-center u-text u-text-custom-color-6 u-text-3">---------- Technologies Used ----------</p>
                  <p class="u-align-center u-text u-text-4">{{ $item->technologies_used }}</p>
                  <a href="{{ $item->main_url }}" class="u-align-center u-border-2 u-border-custom-color-6 u-btn u-btn-round u-button-style u-hover-custom-color-6 u-none u-radius-6 u-text-body-color u-text-hover-white u-btn-1">MORE ABOUT PROJECT</a>

                  @if (!$item->github == '')
                  <span
                      class="u-border-2 u-border-custom-color-6 u-file-icon u-icon u-text-black u-icon-1"
                      data-href="{{ $item->github }}"><img src="{{ img_path('1051326-bc0389e6.png') }}"
                          alt=""></span>
              @endif


                </div>
              </div>

              @endforeach

            </div>
          </div>
        </div>
      </section>





{{--
    <section class="u-clearfix u-section-2" id="sec-39ac">
        <div class="u-clearfix u-sheet u-sheet-1">
            <div class="u-expanded-width u-list u-list-1">
                <div class="u-repeater u-repeater-1">


                        <div class="u-container-style u-list-item u-repeater-item u-list-item-1"
                            data-animation-name="customAnimationIn" data-animation-duration="1000">
                            <div class="u-container-layout u-similar-container u-container-layout-1">
                                <img class="u-expanded-width u-image u-image-round u-radius-10 u-image-1"
                                    src="{{ url('/uploads/project_img/' . $item->project_img) }}" alt=""
                                    data-image-width="1280" data-image-height="853">
                                <h1 class="u-align-center u-text u-title u-text-1">{{ $item->project_title }}</h1>
                                <p class="u-align-center u-text u-text-2">{{ $item->date . '|' . $item->category }}</p>
                                <p class="u-align-center u-text u-text-custom-color-6 u-text-3">---------- Technologies
                                    Used ----------</p>
                                <p class="u-align-center u-text u-text-4">{{ $item->technologies_used }}</p>
                                <a href="{{ $item->main_url }}"
                                    class="u-align-center u-border-2 u-border-custom-color-6 u-btn u-btn-round u-button-style u-hover-custom-color-6 u-none u-radius-6 u-text-body-color u-text-hover-white u-btn-1">MORE
                                    ABOUT PROJECT</a>
                                @if (!$item->github == '')
                                    <span
                                        class="u-border-2 u-border-custom-color-6 u-file-icon u-icon u-text-black u-icon-1"
                                        data-href="{{ $item->github }}"><img src="{{ img_path('1051326-bc0389e6.png') }}"
                                            alt=""></span>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section> --}}
@endsection
