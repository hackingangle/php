<?php namespace Hackingangle\Users;

/**
 * 面向对象-命名空间、类加载、标准
 * 雇佣者
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
