<?php

function getMenuActive($item)
{
    $redirectUrl = array_get($_SERVER, 'REDIRECT_URL', '');
    if ((empty($redirectUrl) && $item == 'home')|| str_contains($redirectUrl, $item)) {
        echo 'active';
    }
}

function assets($path = '')
{
    $http = isset($_SERVER['HTTPS']) ? "https://" : "http://";
    echo $http . $_SERVER['HTTP_HOST'] . "/" . ltrim($path, '/');
}

function loadIconNumber($number)
{
    echo
        '<span class="fa-stack">
           <i class="fa fa-circle fa-stack-2x"></i>
           <strong class="fa-stack-1x text-white">' . $number . '</strong>             
        </span>';
}