<?php
/**
 * Created by PhpStorm.
 * User: wangruijie9009
 * Date: 2018/9/14
 * Time: 12:21
 */
Route::get('', 'IndexController@index');//后台登陆路由
Route::get('info', 'IndexController@info');//后台登陆路由
Route::get('quit', 'LoginController@quit');//验证码路由
Route::any('pass', 'IndexController@pass');//验证码路由

Route::any('upload', 'CommonController@upload');//图片上传