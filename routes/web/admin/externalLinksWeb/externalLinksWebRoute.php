<?php
/**
 * Created by PhpStorm.
 * User: wangruijie9009
 * Date: 2018/9/14
 * Time: 12:16
 */
Route::get('externalLinksWeb', 'ExternalLinksWebController@index');//创建友情链接模块 资源路由
Route::any('externalLinksWeb/create', 'ExternalLinksWebController@create');//文章新增
Route::any('externalLinksWeb/edit/{id}', 'ExternalLinksWebController@edit');//文章修改
Route::any('externalLinksWeb/del/{id}', 'ExternalLinksWebController@del');//文章单条删除
Route::any('externalLinksWeb/del_all', 'ExternalLinksWebController@del_all');//文章多条删除
Route::any('externalLinksWeb/getWebListByWebTypeId/{web_type_id}', 'ExternalLinksWebController@getWebListByWebTypeId');//文章多条删除