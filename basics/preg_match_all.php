<?php
/**
 * usage:
 * preg_match_all
 */
$str = "
    <ul>
        <li>item 1</li>
        <li>item 2</li>
    </ul>
";

$p = "#<[^>]+>(.*?)</[^>]+>#i";
preg_match_all($p, $str, $matches);
var_dump($matches);
print_r($matches[1]);
