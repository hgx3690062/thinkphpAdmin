<?php


namespace app\admin\controller;


use app\admin\model\User;
use app\common\exception\ErrorException;
use app\common\validate\PageValidate;
use think\Request;

class Auth extends BaseController
{

    public function index(Request $request)
    {
        if ($request->post()) {
            $validate = new PageValidate();
            if (!$validate->check($request->post())) {
                throw new ErrorException(API_PARAM_ERROR, '参数缺失');
            }
            $result = (new User())->user_account_select($request->post());
            return json(['code' => 0, 'msg' => '', 'data' => $result['data'], 'count' => $result['total']]);
        }
        return $this->fetch();
    }
}