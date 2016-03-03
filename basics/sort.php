<?php
$nums = [90, 83, 100, 99, 78, 61];
$nums = [
    'zhangsan' => 90,
    'lisi' => 83,
    'wanger' => 100,
    'zhanghui' => 99,
    'xuelong' => 78,
    'zhangjian' => 61,
];

var_dump($nums);
sort($nums);
var_dump($nums);

// OUTPUT
// array(6) {
//   ["zhangsan"]=>
//   int(90)
//   ["lisi"]=>
//   int(83)
//   ["wanger"]=>
//   int(100)
//   ["zhanghui"]=>
//   int(99)
//   ["xuelong"]=>
//   int(78)
//   ["zhangjian"]=>
//   int(61)
// }
// array(6) {
//   [0]=>
//   int(61)
//   [1]=>
//   int(78)
//   [2]=>
//   int(83)
//   [3]=>
//   int(90)
//   [4]=>
//   int(99)
//   [5]=>
//   int(100)
// }

// 结论：丢失了k-v关系
