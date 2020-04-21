<?php


namespace app\admin\service;


use app\admin\model\User;

class LoginService
{
    /**
     * 账号登录验证
     * @param $param
     * @return int
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function UserVerification($param)
    {
        $userModel = new User();
        $userFind = $userModel->whereFind(['account' => $param['account']], 'account,password,status');
        if (!$userFind) {
            return -1;
        }
        if (!password_verify($param['password'], $userFind['password'])) {
            return -2;
        }
        if ($userFind['status'] == 1) {
            return -3;
        }
        return 1;
    }
}