<?php


namespace app\admin\controller;


use think\Controller;


class Common extends Controller
{


    public function uploadfile(){
        // 获取表单上传文件 例如上传了001.jpg
        $file = request()->file('file');
        // 移动到框架应用根目录/uploads/ 目录下/upload/
        $info = $file->move(\Env::get('ROOT_PATH').'public'.DIRECTORY_SEPARATOR.'upload');
        $reubfo = array();  //定义一个返回的数组
        if($info){
            $reubfo['code']= 1;
            $reubfo['savename'] = "/upload/".$info->getSaveName();
        }else{
            // 上传失败获取错误信息
            $reubfo['code']= 0;
            $reubfo['err'] = $file->getError();
        }
        return $reubfo;
    }
}