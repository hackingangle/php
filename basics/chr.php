<?php
$str = "The string ends in escape: ";
$str .= chr(27);
var_dump($str);
$str = sprintf("The string ends in escape: %c", 27);
var_dump($str);
$str = sprintf("The string ends in escape: %c", 32);
var_dump($str);
$str = sprintf("The string ends in escape: ");
var_dump($str);
