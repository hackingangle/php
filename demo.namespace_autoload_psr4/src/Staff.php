<?php namespace Hackingangle;

use Hackingangle\Users\Person;

/**
 * 面向对象-命名空间、类加载、标准
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
    public function addMembers(Person $person)
    {
        $this->members[] = $person;
    }
}
