<?php
/**
 * 面向对象-消息传递
 */

/**
 * 人
 */
class Person
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
}

/**
 * 公司
 */
class Company
{
    /**
     * 员工组
     * @var Staff
     */
    public $staff;

    /**
     * 构造
     * @param Staff $staff 员工组
     */
    public function __construct(Staff $staff)
    {
        $this->staff = $staff;
    }

    /**
     * 雇佣
     * @param  Person $person 雇佣的人
     * @return null
     */
    public function hire(Person $person)
    {
        $this->staff->addMembers($person);
    }
}

/**
 * 员工
 */
class Staff
{
    /**
     * 员工组
     * @var array
     */
    public $members;

    /**
     * 构造
     * @param array $members 初始化的员工组
     */
    public function __construct($members = [])
    {
        $this->members = $members;
    }

    /**
     * 添加人到员工组
     * @param Person $person 雇佣的人
     */
    public function addMembers($person)
    {
        $this->members[] = $person;
    }
}

$hackingangle = new Person('hackingangle');
$hackingangle_staff = new Staff();
$hackingangle_com = new Company($hackingangle_staff);

var_dump($hackingangle_staff);
$hackingangle_com->hire($hackingangle);
var_dump($hackingangle_staff);
