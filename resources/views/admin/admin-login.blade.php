<!DOCTYPE html>
<html style="font-size: 16px;" lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>admin-login</title>
    <link rel="stylesheet" href="{{ css_path('theme.css') }}" media="screen">
    <link rel="stylesheet" href="{{ css_path('admin-login.css', 'admin') }}" media="screen">
    <script class="u-script" type="text/javascript" src="{{ js_path('jquery.js') }}" "="" defer=""></script>
    <script class="u-script" type="text/javascript" src="{{ js_path('theme.js') }}" "="" defer=""></script>
    <meta name="generator" content="Nicepage 4.17.10, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Roboto+Slab:100,200,300,400,500,600,700,800,900|Lobster:400">


</head>

<body class="u-body u-xl-mode" data-lang="en">
    <section class="u-clearfix u-image u-shading u-section-1" id="sec-e867" data-image-width="1020"
        data-image-height="672">
        <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
            <div class="u-container-style u-group u-radius-50 u-shape-round u-white u-group-1">
                <div class="u-container-layout u-container-layout-1"><span
                        class="u-custom-color-6 u-icon u-icon-circle u-text-white u-icon-1"><svg class="u-svg-link"
                            preserveAspectRatio="xMidYMin slice" viewBox="0 0 60 60" style="">
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-b1f7"></use>
                        </svg><svg class="u-svg-content" viewBox="0 0 60 60" x="0px" y="0px"
                            id="svg-b1f7" style="enable-background:new 0 0 60 60;">
                            <path
                                d="M48.014,42.889l-9.553-4.776C37.56,37.662,37,36.756,37,35.748v-3.381c0.229-0.28,0.47-0.599,0.719-0.951
	c1.239-1.75,2.232-3.698,2.954-5.799C42.084,24.97,43,23.575,43,22v-4c0-0.963-0.36-1.896-1-2.625v-5.319
	c0.056-0.55,0.276-3.824-2.092-6.525C37.854,1.188,34.521,0,30,0s-7.854,1.188-9.908,3.53C17.724,6.231,17.944,9.506,18,10.056
	v5.319c-0.64,0.729-1,1.662-1,2.625v4c0,1.217,0.553,2.352,1.497,3.109c0.916,3.627,2.833,6.36,3.503,7.237v3.309
	c0,0.968-0.528,1.856-1.377,2.32l-8.921,4.866C8.801,44.424,7,47.458,7,50.762V54c0,4.746,15.045,6,23,6s23-1.254,23-6v-3.043
	C53,47.519,51.089,44.427,48.014,42.889z M51,54c0,1.357-7.412,4-21,4S9,55.357,9,54v-3.238c0-2.571,1.402-4.934,3.659-6.164
	l8.921-4.866C23.073,38.917,24,37.354,24,35.655v-4.019l-0.233-0.278c-0.024-0.029-2.475-2.994-3.41-7.065l-0.091-0.396l-0.341-0.22
	C19.346,23.303,19,22.676,19,22v-4c0-0.561,0.238-1.084,0.67-1.475L20,16.228V10l-0.009-0.131c-0.003-0.027-0.343-2.799,1.605-5.021
	C23.253,2.958,26.081,2,30,2c3.905,0,6.727,0.951,8.386,2.828c1.947,2.201,1.625,5.017,1.623,5.041L40,16.228l0.33,0.298
	C40.762,16.916,41,17.439,41,18v4c0,0.873-0.572,1.637-1.422,1.899l-0.498,0.153l-0.16,0.495c-0.669,2.081-1.622,4.003-2.834,5.713
	c-0.297,0.421-0.586,0.794-0.837,1.079L35,31.623v4.125c0,1.77,0.983,3.361,2.566,4.153l9.553,4.776
	C49.513,45.874,51,48.28,51,50.957V54z">
                            </path>
                        </svg></span>
                    <h3 class="u-align-center u-custom-font u-font-montserrat u-text u-text-default u-text-1">Welcome
                        Back Aditya</h3>
                    <div class="u-align-left u-form u-radius-37 u-white u-form-1">
                        <form action="{{ url('/sagar/login') }}" method="POST"
                            class="u-clearfix u-form-custom-backend u-form-spacing-14 u-form-vertical u-inner-form"
                            source="custom" name="form" style="padding: 21px;" redirect="true">
                            @csrf
                            <div class="u-form-group u-form-group-1">
                                <label for="text-6e34" class="u-label">Username</label>
                                <input type="text" placeholder="Hey Aditya! Plz enter your user name" id="text-6e34"
                                    name="username"
                                    class="u-border-3 u-border-grey-10 u-input u-input-rectangle u-radius-10 u-white u-input-1">
                            </div>
                            <div class="u-form-group u-form-group-2">
                                <label for="text-b0fd" class="u-label">Password</label>
                                <input type="password" placeholder="please enter your password aadi!" id="text-b0fd"
                                    name="password"
                                    class="u-border-3 u-border-grey-10 u-input u-input-rectangle u-radius-10 u-white u-input-2">
                            </div>
                            <div class="u-form-group u-form-group-3">
                                <label for="text-0f5c" class="u-label">Secret Key</label>
                                <input type="password" placeholder="sagar please enter secret key" id="text-0f5c"
                                    name="sk"
                                    class="u-border-3 u-border-grey-10 u-input u-input-rectangle u-radius-10 u-white u-input-3"
                                    required="required">
                            </div>
                            <div class="u-align-center u-form-group u-form-submit">
                                <a href="#"
                                    class="u-border-none u-btn u-btn-round u-btn-submit u-button-style u-custom-color-6 u-custom-font u-font-roboto-slab u-radius-10 u-btn-1">Admin
                                    Login</a>
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




</body>

</html>
