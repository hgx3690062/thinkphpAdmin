<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------


//常量定义
defined('API_PARAM_ERROR')  OR define('API_PARAM_ERROR', 101);//参数错误
defined('API_ERROR')  OR define('API_ERROR', 102);//model错误
defined('API_SYSTEM_ERROR')  OR define('API_SYSTEM_ERROR', 103);//系统错误

// 应用公共文件
/**
 * @METHOD  : 返回状态格式
 * @Method  : sendMessage
 * @Authod  : Come on
 * @DateTime: 2020/2/5 14:59
 *
 * @param        $codeMessage code值
 * @param string $message     提示语
 * @param int    $code        http CODE值
 *
 * @return mixed
 */
function sendMessage($data = [], $codeMessage = 200, $message = '操作成功')
{
    $array = [
        'status' => $codeMessage,
        'msg'    => $message,
        'data'   => $data,
    ];
    return $array;
}