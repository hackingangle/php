<?php
/**
 * 面向对象-类
 */
class Task
{
    /**
     * 属性-描述
     * @var string
     */
    public $description;

    /**
     * 属性-完成与否
     * @var boolean
     */
    public $completed = false;

    /**
     * 构造方法
     * @param string $description 描述
     */
    public function __construct($description)
    {
        $this->description = $description;
    }

    /**
     * 方法-完成
     * @return null
     */
    public function complete()
    {
        $this->completed = true;
    }
}

$task = new Task('Learn OOP');

var_dump($task->description);

// $task->complete();
var_dump($task->completed);
