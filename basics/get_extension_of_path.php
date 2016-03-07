<?php
/**
 * get path`s extension
 */

function getExt1($path)
{
    return substr(strrchr($path, '.'), 1);
}

function getExt2($path)
{
    $pathPieces = explode('.', $path);
    return array_pop($pathPieces);
}

function getExt3($path) {
    return pathinfo($path, PATHINFO_EXTENSION);
}
$path = '/usr/local/bin/.bat/startMemcached.sh';
var_dump(getExt1($path));
var_dump(getExt2($path));
var_dump(getExt3($path));
