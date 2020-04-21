<?php


namespace app\admin\controller;


use think\App;
use think\Controller;
use think\Request;

class BaseController extends Controller
{
    public $isPost;
    public function __construct()
    {
        $request = new Request();
        $this->isPost = $request->post();
    }

}