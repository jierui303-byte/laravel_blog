<?php
/**
 * Created by PhpStorm.
 * User: wangruijie9009
 * Date: 2018/9/14
 * Time: 12:16
 */
Route::get('externalLinks', 'ExternalLinksController@index');//创建友情链接模块 资源路由
Route::any('externalLinks/create', 'ExternalLinksController@create');//文章新增
Route::any('externalLinks/edit/{id}', 'ExternalLinksController@edit');//文章修改
Route::any('externalLinks/del/{id}', 'ExternalLinksController@del');//文章单条删除
Route::any('externalLinks/del_all', 'ExternalLinksController@del_all');//文章多条删除
Route::any('externalLinks/getWebListByWebTypeId/{web_type_id}', 'ExternalLinksController@getWebListByWebTypeId');//文章多条删除