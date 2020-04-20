<?php


namespace app\common\exception;


use think\exception\Handle;

class Http extends Handle
{
    private $code;
    private $msg;
    private $status;

    // 需要返回客户端当前请求的URL路径

    public function render(\Exception $e)
    {
        if ($e instanceof BaseException) {
            // 如果是自定义的异常
            $this->code = $e->code;
            $this->msg = $e->msg;
            $this->status = $e->status;
            \Log::close(); //关闭日志写入
        } else {
            $this->code = 200;
            $this->msg = '服务器内部错误';
            $this->status = 999;
        }
        $result = [
            'status' => $this->status,
            'msg' => $this->msg,
            'data'=>[]
        ];
        return json($result, $this->code);
    }
}