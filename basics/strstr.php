<?php
/**
 * usage:
 * 
 * strstr:find a needle of haystack
 * strchr:alias of strstr
 */

$email = 'hackingangle@gmail.com';
var_dump(strstr($email, '.com'));
var_dump(strstr($email, '.c'));
var_dump(strchr($email, '.'));
