<?php
function css_path($a, $b = "public")
{
    if ($b == 'public') {
        return url('frontend/css/public/' . $a);
    } elseif ($b == 'admin') {
        return url('frontend/css/admin/' . $a);
    } elseif ($b == 'user') {
        return url('frontend/css/user/' . $a);
    } else {
        return "/";
    }
}
function js_path($a, $b = "public")
{
    if ($b == 'public') {
        return url('frontend/js/public/' . $a);
    } elseif ($b == 'admin') {
        return url('frontend/js/admin/' . $a);
    } elseif ($b == 'user') {
        return url('frontend/js/user/' . $a);
    } else {
        return "/";
    }
}
function img_path($a)
{
    return url('frontend/images/' . $a);
}

