<?php
/**
 * 面向对象-静态、常量
 */

class Math
{
    // public function add(...$numbers) 
    // public function add() 
    public static function add()
    {
        return array_sum(func_get_args());
        // return array_sum($numbers);
    }
}

// $math = new Math;
// var_dump($math->add(1, 2, 3, 4, 5));

// var_dump(Math::add(1, 2, 3));

/**
 * 静态
 */
class Person
{
    public static $age = 1;

    public function haveBirthday()
    {
        static::$age++;
    }
}

// $hackingangle_sir = new Person;
// $hackingangle_sir->haveBirthday();
// $hackingangle_sir->haveBirthday();
// var_dump(Person::$age);

// $hackingangle_mis = new Person;
// $hackingangle_mis->haveBirthday();
// $hackingangle_mis->haveBirthday();
// var_dump(Person::$age);

/**
 * 常量
 */
class BankAccount
{
    const TAX = .09;
}

var_dump(BankAccount::TAX);
