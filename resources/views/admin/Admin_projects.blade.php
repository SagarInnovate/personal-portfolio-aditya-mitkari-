@extends('layouts.admin-main')
@section('m_name')
    {{ 'Projects' }}
@endsection

@section('head')
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Projects">
    <meta name="description" content="">
    <title>Admin_projects</title>
    <link rel="stylesheet" href="{{ css_path('Admin_projects.css', 'admin') }}" media="screen">
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
    <meta name="twitter:title" content="Admin_projects">
    <meta name="twitter:description" content="">
    <meta property="og:title" content="Admin_projects">
    <meta property="og:type" content="website">
@endsection

@section('main-section')
    <section class="u-align-center u-clearfix u-gradient u-section-2" id="sec-b5a3">
        <div class="u-clearfix u-sheet u-valign-middle-sm u-valign-middle-xs u-sheet-1">
            <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
                <div class="u-layout" style="">
                    <div class="u-layout-row" style="">
                        <div class="u-container-style u-layout-cell u-size-40 u-layout-cell-1">
                            <div class="u-container-layout u-container-layout-1">
                                <form action="#" method="get"
                                    class="u-border-1 u-border-grey-30 u-radius-15 u-search u-search-left u-white u-search-1">
                                    <button class="u-search-button" type="submit">
                                        <span class="u-search-icon u-spacing-10">
                                            <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice"
                                                viewBox="0 0 56.966 56.966">
                                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-248b">
                                                </use>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="svg-248b"
                                                x="0px" y="0px" viewBox="0 0 56.966 56.966"
                                                style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve"
                                                class="u-svg-content">
                                                <path
                                                    d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z">
                                                </path>
                                            </svg>
                                        </span>
                                    </button>
                                    <input class="u-search-input" type="search" name="search" value=""
                                        placeholder="Search">
                                    <input type="hidden" name="formServices" value="2fee015ca6b35814c2ecb12a9ad370a8">
                                </form>
                            </div>
                        </div>
                        <div class="u-container-style u-layout-cell u-size-20 u-layout-cell-2">
                            <div class="u-container-layout u-container-layout-2">
                                <a href="{{ url('/sagar/projects/create') }}" data-page-id="244925417"
                                    class="u-align-center-sm u-align-center-xs u-align-right-lg u-align-right-md u-align-right-xl u-border-2 u-border-custom-color-2 u-border-hover-palette-1-base u-btn u-btn-round u-button-style u-hover-custom-color-2 u-none u-radius-50 u-btn-1">Add
                                    new Project</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="u-align-center u-clearfix u-gradient u-section-3" id="sec-ed4f">
        <div class="u-table u-table-responsive u-table-1">
            <table class="u-table-entity u-table-entity-1">
                <colgroup>
                    <col width="4.5%">
                    <col width="29.6%">
                    <col width="24.7%">
                    <col width="16.8%">
                    <col width="15.2%">
                    <col width="9.2%">
                </colgroup>
                <thead class="u-align-center u-black u-table-header u-table-header-1">
                    <tr style="height: 40px;">
                        <th class="u-border-1 u-border-black u-table-cell">Sr.no</th>
                        <th class="u-border-1 u-border-black u-table-cell">Project Title</th>
                        <th class="u-border-1 u-border-black u-table-cell"> technologies used</th>
                        <th class="u-border-1 u-border-black u-table-cell">category</th>
                        <th class="u-border-1 u-border-black u-table-cell">Update&nbsp;</th>
                        <th class="u-border-1 u-border-black u-table-cell">Delete</th>
                    </tr>
                </thead>
                <tbody class="u-align-center u-table-body u-white u-table-body-1">

                    @foreach ($project as $item)
                        <tr style="height: 26px;">
                            <td class="u-border-1 u-border-grey-30 u-table-cell u-table-cell-7"><a
                                    href="{{ url('/sagar/projects/' . $item->id) }}">{{ $item->id }}</a> </td>
                            <td class="u-border-1 u-border-grey-30 u-table-cell u-table-cell-8"><a
                                    href="{{ url('/sagar/projects/' . $item->id) }}">{{ $item->project_title }}</a>
                            </td>
                            <td class="u-border-1 u-border-grey-30 u-table-cell u-table-cell-9">
                                {{ $item->technologies_used }}</td>
                            <td class="u-border-1 u-border-grey-30 u-table-cell u-table-cell-10">{{ $item->category }}</td>
                            <td class="u-border-1 u-border-grey-30 u-table-cell u-table-cell-11">
                                <a class="u-border-none u-btn u-button-style u-gradient u-hover-palette-1-dark-1 u-none u-text-body-alt-color u-btn-1"
                                    href="{{ url('/sagar/projects/' . $item->id . '/edit') }}">update</a>
                            </td>
                            <td class="u-border-1 u-border-grey-30 u-table-cell u-table-cell-12">
                                <form action="{{ url('/sagar/projects/' . $item->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <a class="u-border-none u-btn u-button-style u-custom-color-2 u-hover-palette-1-dark-1 u-btn-2"
                                        onclick="dltclick({{ $item->id }})"><input style="display: none"
                                            type="submit" id='{{ 'sub-' . $item->id }}' value="Delete"
                                            name="delete">Delete</a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </section>
    <script>
        function dltclick(a) {

            document.getElementById('sub-' + a).click();
        }
    </script>
@endsection
