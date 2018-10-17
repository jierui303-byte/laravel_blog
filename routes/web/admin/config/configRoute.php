<?php
/**
 * Created by PhpStorm.
 * User: wangruijie9009
 * Date: 2018/9/14
 * Time: 12:20
 */
/*注意: get方式请求路由要写在所有方法路由前面,否则页面不会有响应*/
Route::get('config/putfile', 'ConfigController@putFile');//创建 将配置项写入配置文件的方法 路由
Route::resource('config', 'ConfigController');//创建网站配置模块 资源路由
Route::post('config/changeorder', 'ConfigController@changeorder');//创建配置模块排序方法 路由
Route::post('config/changecontent', 'ConfigController@changeContent');//创建配置模块修改配置值的方法 路由
