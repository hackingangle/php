<?php
/**
 * 面向对象-属性设置器
 */
class Person
{
    private $age;

    /**
     * Sets the value of age.
     *
     * @param mixed $age the age
     *
     * @return self
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Gets the value of age.
     *
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }
}

$hackingangle = new Person();
var_dump($hackingangle->setAge(26));
var_dump($hackingangle->setAge(120)->getAge());
