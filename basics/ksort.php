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
ksort($nums);
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
//   ["zhangjian"]=>
//   int(61)
//   ["xuelong"]=>
//   int(78)
//   ["lisi"]=>
//   int(83)
//   ["zhangsan"]=>
//   int(90)
//   ["zhanghui"]=>
//   int(99)
//   ["wanger"]=>
//   int(100)
// }
 
// 结论：保持了k-v关系，对v排序
