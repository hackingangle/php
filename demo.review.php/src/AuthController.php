<?php namespace Hackingangle;

/**
 * AuthController
 * 注册控制
 */
class AuthController implements RegistrationRedirect
{
    /**
     * 用户注册
     * @var UserRegister
     */
    private $userRegistration;

    /**
     * 构造
     * @param UserRegister $userRegistration 用户注册
     */
    public function __construct(UserRegister $userRegistration)
    {
        $this->userRegistration = $userRegistration;
    }

    /**
     * 注册一个用户
     * @param  array  $data 用户数据
     * @return null
     */
    public function register($data = [])
    {
        $this->userRegistration->register($data, $this);
    }

    /**
     * 注册结束跳转接口-成功
     * @return null
     */
    public function registeredSuccessfully()
    {
        var_dump("registed successfully!");
    }

    /**
     * 注册结束跳转接口-失败
     * @return null
     */
    public function registeredUnsuccessfully()
    {
        var_dump("registed unsuccessfully!");
    }
}
