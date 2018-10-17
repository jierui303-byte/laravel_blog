<?php
/**
 * Created by PhpStorm.
 * User: wangruijie9009
 * Date: 2018/9/14
 * Time: 12:16
 */
Route::get('links', 'LinksController@index');//创建友情链接模块 资源路由
Route::any('links/create', 'LinksController@create');//文章新增
Route::any('links/edit/{id}', 'LinksController@edit');//文章修改
Route::any('links/del/{id}', 'LinksController@del');//文章单条删除
Route::any('links/del_all', 'LinksController@del_all');//文章多条删除
Route::any('links/getWebListByWebTypeId/{web_type_id}', 'LinksController@getWebListByWebTypeId');//文章多条删除

Route::post('links/changeorder', 'LinksController@changeorder');//创建友情链接模块 路由
