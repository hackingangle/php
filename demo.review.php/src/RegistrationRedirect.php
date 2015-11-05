<?php namespace Hackingangle;

/**
 * 注册结束跳转接口
 */
interface RegistrationRedirect
{
    /**
     * 成功
     */
    public function registeredSuccessfully();

    /**
     * 失败
     */
    public function registeredUnsuccessfully();
}
