<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

Route::post('auth/login', 'admin/Login/index');
//通用模块
Route::post('common', 'admin/Common/uploadfile');

Route::group('auth', function () {
    Route::group(['ext' => 'php'], function () {
        Route::rule('index', 'admin/Index/index');
        Route::rule('accout', 'admin/Auth/index');
        Route::rule('accoutAdd', 'admin/Auth/accout_add');
    })->middleware('auth');
});