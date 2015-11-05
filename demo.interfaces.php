<?php
/**
 * 面向对象-接口
 */

/**
 * 接口
 */
interface Loggable
{
    /**
     * 约定了通用接口
     */
    public function log();
}

/**
 * 实现1
 */
class FileLog implements Loggable
{
    /**
     * 约定实现
     * @return null
     */
    public function log()
    {
        var_dump("Logging to a file.");
    }
}

/**
 * 实现2
 */
class DatabaseLog implements Loggable
{
    /**
     * 约定实现
     * @return null
     */
    public function log()
    {
        var_dump("Logging to a database.");
    }
}

/**
 * 使用者
 */
class UserController
{
    /**
     * 约定的接口
     * @var Loggable
     */
    private $logger;

    /**
     * 构造
     * @param Loggable $logger 约定的实现类
     */
    public function __construct(Loggable $logger)
    {
        $this->logger = $logger;
    }

    /**
     * 执行约定
     * @return null
     */
    public function show()
    {
        $this->logger->log();
    }
}

$userController = new UserController(new FileLog());
// $userController = new UserController(new DatabaseLog());
$userController->show();
