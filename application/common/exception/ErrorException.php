<?php


namespace app\common\exception;


class ErrorException extends BaseException
{
    public $status;
    public $msg;
    public function __construct($status,$msg)
    {
        parent::__construct();
        $this->status = $status;
        $this->msg = $msg;
    }

}