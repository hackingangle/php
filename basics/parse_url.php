<?php
/**
 * usage: pathinfo, parse_url
 * 
 * pathinfo:
 * dirname-PATHINFO_DIRNAME
 * basename-PATHINFO_BASENAME
 * extension-PATHINFO_EXTENSION
 * filename-PATHINFO_FILENAME
 * 
 * parse_ufl:
 * scheme-PHP_URL_SCHEME
 * host-PHP_URL_HOST
 * port-PHP_URL_PORT
 * user-PHP_URL_USER
 * pass-PHP_URL_PASS
 * path-PHP_URL_PATH
 * query-PHP_URL_QUERY
 * fragment-PHP_URL_FRAGMENT
 */

/**
 * get extension of a url
 * @param  string $url url
 * @return string      extension name
 */
function getExtension($url) {
    return pathinfo(parse_url($url, PHP_URL_PATH), PATHINFO_EXTENSION);
}

function getExtension2($url) {

}

/**
 * get params of url when doing get request
 * @param  string $url url
 * @return array       params
 */
function getGetParams($url) {
    $ret = array();
    $params = explode('&', parse_url($url, PHP_URL_QUERY));
    foreach ($params as $key => $param) {
        $tmp = explode('=', $param);
        $ret[$tmp[0]] = $tmp[1];
    }
    return $ret;
}
$url = "http://www.baidu.com/search.php?q=hellworld&show#fragment";
var_dump(getExtension($url));
var_dump(getGetParams($url));
var_dump(getExtension2($url));
