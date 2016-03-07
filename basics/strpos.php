<?php
/**
 * usage:
 * strpos
 * strlen
 * strrpos: reverse of string position
 */
$path = '/usr/local/bin/.bash/.memcached.sh';
var_dump(strpos($path, '.'));
var_dump(strlen($path));
var_dump(strrpos($path, '.'));
var_dump(substr($path, strrpos($path, '.')+1));
