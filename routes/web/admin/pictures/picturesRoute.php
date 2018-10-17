<?php
/**
 * Created by PhpStorm.
 * User: wangruijie9009
 * Date: 2018/9/14
 * Time: 12:16
 */
Route::get('pictures', 'PicturesController@index');//创建友情链接模块 资源路由
Route::any('pictures/create', 'PicturesController@create');//文章新增
Route::any('pictures/edit/{id}', 'PicturesController@edit');//文章修改
Route::any('pictures/del/{id}', 'PicturesController@del');//文章单条删除
Route::any('pictures/del_all', 'PicturesController@del_all');//文章多条删除
Route::any('pictures/getWebListByWebTypeId/{web_type_id}', 'PicturesController@getWebListByWebTypeId');//文章多条删除

Route::post('pictures/changeorder', 'LinksController@changeorder');//创建友情链接模块 路由
