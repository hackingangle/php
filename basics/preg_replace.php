<?php
/**
 * usage:
 * preg_replace
 */
$str = '主要有以下几个文件：index.php, style.css, common.js';

$p = "/\w+\.\w+/i";
$replace = "<em>$0</em>";
$str = preg_replace($p, $replace, $str);
var_dump($str);
