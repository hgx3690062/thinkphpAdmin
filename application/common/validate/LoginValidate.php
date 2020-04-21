<?php


namespace app\common\validate;


use think\Validate;

class LoginValidate extends Validate
{
    protected $rule =   [
        'account'  => 'require',
        'password'   => 'require',
    ];

    protected $message  =   [
        'account.require' => '账号不可以为空',
        'password.require' => '密码不可以为空',
    ];
}