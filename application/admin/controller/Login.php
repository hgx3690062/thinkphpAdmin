<?php


namespace app\admin\controller;




use app\admin\service\LoginService;
use app\common\validate\LoginValidate;


class Login extends BaseController
{
    /**
     * 账号登录
     * @return array|mixed
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function index(){
        if($this->isPost){
            $validate = new LoginValidate();
            if(!$validate->check($this->isPost)){
                return sendMessage([],API_PARAM_ERROR,$validate->getError());
            }
            $userModel = (new LoginService())->UserVerification($this->isPost);
            if($userModel == -1){
               return  sendMessage([],API_SYSTEM_ERROR,'账号不存在，请联系博主');
            }
            if($userModel == -2){
                return  sendMessage([],API_SYSTEM_ERROR,'密码错误请重新输入');
            }
            if($userModel == -3){
                return  sendMessage([],API_SYSTEM_ERROR,'账号已被冻结，请联系博主');
            }
           return sendMessage();
        }
        return $this->fetch('/login/loginPage');
    }
}