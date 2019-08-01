<?php

namespace App\Helpers;

class Url
{
    const _BACKURL = '_backUrl';
    const QUERY = '_o';
    const OLD_QUERY = '_o_';
    protected $_old = 0;

    public static function addBackUrl($url, $params = [])
    {
        $key = self::_createKey();
        $fullUrl = request()->fullUrl();
        $params[self::QUERY] = $key;

        self::_storeSession($key, $fullUrl);
        return self::_genTargetUrl($url, $params);
    }

    protected static function _buildParamsQuery($params)
    {
        $params = array_merge(request()->query(), $params);
        return http_build_query($params);
    }

    public static function getBackUrl($url, $params = [])
    {
        $allSession = session()->all();
        $listBackUrl = array_get($allSession, '_backUrl', []);

        $queryString = request()->getQueryString();
        $queryArray = self::_parseQueryStringToArray($queryString, $params);

        // store new session
        unset($queryArray[self::QUERY]);

        $key = self::_createKey();
        $url = request()->url();
        self::_storeSession($key, self::_buildParamsQuery($queryArray));

        $oldKey = array_get($queryArray, self::QUERY);
        $oldUrl = array_get($listBackUrl, $oldKey, '');
        return $oldUrl;
    }

    protected static function _storeSession($key, $value)
    {
        session(self::_BACKURL, [$key => $value]);
    }

    /**
     * create value _o
     * @return int: self::QUERY
     */
    protected static function _createKey()
    {
        return time() + rand(10, 100);
    }

    protected static function _parseQueryStringToArray($queryString, $params)
    {
        parse_str($queryString, $result);
        return array_merge($result, $params);
    }

    protected static function _genTargetUrl($urlOrigin, $params = [])
    {
        return $urlOrigin . '?' . self::_buildParamsQuery($params);
    }


}