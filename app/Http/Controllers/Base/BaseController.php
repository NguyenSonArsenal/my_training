<?php

namespace App\Http\Controllers\Base;

use App\Http\Controllers\Controller;
use App\Http\Supports\ApiResponse;

class BaseController extends Controller
{
    use ApiResponse;

    public function __construct()
    {

    }

    protected function _back()
    {
        return redirect()->back();
    }

    protected function _getArrayQueryString()
    {
        $queryStringComponents = parse_url(parse_url($_SERVER['HTTP_REFERER'], PHP_URL_QUERY));
        $queryString = array_get($queryStringComponents, 'path', '');

        if (!$queryString) {
            return [];
        }

        parse_str($queryString, $result);
        return $result;
    }
}
