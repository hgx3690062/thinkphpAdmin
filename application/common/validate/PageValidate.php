<?php


namespace app\common\validate;


use think\Validate;

class PageValidate extends Validate
{
    protected $rule =   [
        'page'  => 'require',
        'limit'   => 'require',
    ];

    protected $message  =   [
        'page.require' => '账号不可以为空',
        'limit.require' => '密码不可以为空',
    ];
}