<?php
/**
 * sort 分为9种
 * sort,asort,ksort
 * rsort,arsort,krsort
 * usort,uasort,uksort
 */

$users = [
    [
        'username' => 'zhangsan',
        'age' => 32,
    ],
    [
        'username' => 'lisi',
        'age' => 26,
    ],
    [
        'username' => 'wangermazi',
        'age' => 90,
    ],
    [
        'username' => 'zhaosixiaojie',
        'age' => 20,
    ]
];

function cmpAge($prefix, $suffix)
{
    // echo "compare doing:", $prefix['age'], ',', $suffix['age'], "\n";
    $attr = 'age';
    if ($prefix[$attr] > $suffix[$attr]) {
        return true;
    }
    if ($prefix[$attr] < $suffix[$attr]) {
        return false;
    }
    return 0;
}
var_dump($users);
usort($users, 'cmpAge');
var_dump($users);

//OUTPUT
//array(4) {
//   [0]=>
//   array(2) {
//     ["username"]=>
//     string(8) "zhangsan"
//     ["age"]=>
//     int(32)
//   }
//   [1]=>
//   array(2) {
//     ["username"]=>
//     string(4) "lisi"
//     ["age"]=>
//     int(26)
//   }
//   [2]=>
//   array(2) {
//     ["username"]=>
//     string(10) "wangermazi"
//     ["age"]=>
//     int(90)
//   }
//   [3]=>
//   array(2) {
//     ["username"]=>
//     string(13) "zhaosixiaojie"
//     ["age"]=>
//     int(20)
//   }
// }
// array(4) {
//   [0]=>
//   array(2) {
//     ["username"]=>
//     string(13) "zhaosixiaojie"
//     ["age"]=>
//     int(20)
//   }
//   [1]=>
//   array(2) {
//     ["username"]=>
//     string(4) "lisi"
//     ["age"]=>
//     int(26)
//   }
//   [2]=>
//   array(2) {
//     ["username"]=>
//     string(8) "zhangsan"
//     ["age"]=>
//     int(32)
//   }
//   [3]=>
//   array(2) {
//     ["username"]=>
//     string(10) "wangermazi"
//     ["age"]=>
//     int(90)
//   }
// }
// 结论：定义方法，作为相邻元素的比较方法
