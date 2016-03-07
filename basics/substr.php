<?php
/**
 * usage:
 * 
 * substr
 */
$email = 'hackingangle@gmail.com';
var_dump(substr(strstr($email, '@'), 1));

$file = '/usr/local/bin/memcached.bat';
var_dump(substr(strstr($file, '.'), 1));
