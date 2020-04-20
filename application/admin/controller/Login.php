<?php


namespace app\admin\controller;


use app\admin\base\BaseController;
use app\common\exception\ErrorException;

class Login extends BaseController
{
    public function index(){
        throw new ErrorException('ceshi',300);
    }
}