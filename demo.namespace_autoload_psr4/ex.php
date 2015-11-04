<?php 

use Hackingangle\Company;
use Hackingangle\Users\Person;
use Hackingangle\Staff;

/**
 * 面向对象-命名空间、类加载、标准
 * 运行
 */

// require 'demo.namespace_autoload_psr4/Person.class.php';
// require 'demo.namespace_autoload_psr4/Staff.class.php';
// require 'demo.namespace_autoload_psr4/Company.class.php';

$hackingangle = new Person('hackingangle');
$hackingangle_staff = new Staff();
$hackingangle_com = new Company($hackingangle_staff);

var_dump($hackingangle_staff);
$hackingangle_com->hire($hackingangle);
var_dump($hackingangle_staff);
