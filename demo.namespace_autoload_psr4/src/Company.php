<?php namespace Hackingangle;

use Hackingangle\Users\Person;

/**
 * 面向对象-命名空间、类加载、标准
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
