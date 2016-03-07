<?php
/**
 * replace the charset of html
 * usage:
 * preg_replace
 */

$html = " <META http-equiv='Content-Type' content='text/html; charset=gbk'>";
$p = '#(<meta[^>]+charset=)([a-zA-Z]+)([^>]+>)#i';
$r = '$1big5$3';
var_dump($html);
$html = preg_replace($p, $r, $html);
var_dump($html);
