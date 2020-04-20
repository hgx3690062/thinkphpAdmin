<?php


namespace app\common\exception;


use think\Exception;

class BaseException extends Exception
{
    public $code = 200;
    public $msg = '内部错误';
    public $status = '10000';

    public function __construct($param = [])
    {
        if(!$param){
            return;
        }

        if(array_key_exists('code',$param)){
            $this->code = $param['code'];
        }

        if(array_key_exists('msg',$param)){
            $this->msg = $param['msg'];
        }

        if(array_key_exists('status',$param)){
            $this->status = $param['status'];
        }

    }

}