<?php

use Illuminate\Support\Facades\Auth;

if (!function_exists('authRoutes')) {
    function authRoutes($area)
    {
        // Authentication Routes...
        Route::get('login', 'Auth\LoginController@showLoginForm')->name($area . '.login');
        Route::post('login', 'Auth\LoginController@login')->name($area . '.post.login');
        Route::get('logout', 'Auth\LoginController@logout')->name($area . '.logout');
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

if (!function_exists('adminGuard')) {
    function adminGuard()
    {
        return Auth::guard('admins');
    }
}

if (!function_exists('userGuard')) {
    function userGuard()
    {
        return Auth::guard('users');
    }
}

if (!function_exists('getSystemConfig')) {
    function getSystemConfig($key, $default = '')
    {
        return config('systems.' . $key, $default);
    }
}

if (!function_exists('getConfig')) {
    function getConfig($key, $default = '')
    {
        return config('config.' . $key, $default);
    }
}

if (!function_exists('getConstant')) {
    function getConstant($key, $default = '')
    {
        return config('constant.' . $key, $default);
    }
}

if (!function_exists('transMessage')) {
    function transMessage($key, $default = '')
    {
        return empty(trans('messages.' . $key)) ? $default : trans('messages.' . $key);
    }
}

if (!function_exists('getCurrentAdminId')) {
    function getCurrentAdminId()
    {
        return adminGuard()->user()->id;
    }
}

if (!function_exists('getCurrentAdminName')) {
    function getCurrentAdminName()
    {
        return adminGuard()->user()->name;
    }
}

if (!function_exists('getCurrentAdminEntity')) {
    function getCurrentAdminEntity()
    {
        return adminGuard()->user();
    }
}

if (!function_exists('getValueInputText')) {
    function getValueInputText($data, $default = "")
    {
        return !empty($data) ? $data : $default;
    }
}

if (!function_exists('toSql')) {

    function toSql($query)
    {
        return $query->toSql();
    }
}

if (!function_exists('storePassword')) {

    function storePassword($password)
    {
        return bcrypt($password);
    }
}
