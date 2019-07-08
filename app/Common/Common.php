<?php

if (!function_exists('authRoutes')) {
    function authRoutes($area)
    {
        // Authentication Routes...
        Route::get('login', 'Auth\LoginController@showLoginForm')->name($area . '.login');
    }
}

// For load file css and js in backend
if (!function_exists('loadFileBackend')) {

    /**
     * @param $path
     */
    function loadFileBackend($path)
    {
        $type = substr(trim($path), -3) == 'css' ? 'css' : 'js';
        echo asset($type . '/backend/' . ltrim($path, '/'));
    }
}

if (!function_exists('loadImageBackEnd')) {

    /**
     * @param $path
     */
    function loadImageBackEnd($path)
    {
        echo asset( '/images/backend/' . ltrim($path, '/'));
    }
}
