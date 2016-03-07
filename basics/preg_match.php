<?php
/**
 * usage:
 * reg_match
 */

$reg = "/^hackingangle$/";
$reg = '/^hackingangle/i';
$email = "hackingangle@gmail.com";
$email = "hAckingangle@gmail.com";
// $email = 'hackingangle';
var_dump(preg_match($reg, $email));


$p = '/\d+\-\d+/';
$str = "我的电话是010-12345678";
preg_match($p, $str, $match);
var_dump($match);

$p = '/name:([\w\s]+)/';
$str = "name:steven jobs";
preg_match($p, $str, $match);

$subject = "my email is spark@imooc.com";
$p = "/(\w+)@\w+\.[cn|com]/";
preg_match($p, $subject, $match);
var_dump($match);

