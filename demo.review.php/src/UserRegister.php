<?php namespace Hackingangle;

/**
 * 用户注册
 */
class UserRegister
{
    /**
     * 注册、注册结束跳转接口的调用
     * @param  array                $data         用户数据
     * @param  RegistrationRedirect $regRedirect  注册结束跳转接口
     */
    public function register($data, RegistrationRedirect $regRedirect)
    {
        var_dump("registering nowly");

        $regRedirect->registeredUnsuccessfully();
    }
}
