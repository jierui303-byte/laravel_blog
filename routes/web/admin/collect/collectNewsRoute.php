<?php
Route::get('collectNews', 'CollectNewsController@index');//创建友情链接模块 资源路由
Route::any('collectNews/create', 'CollectNewsController@create');//文章新增
Route::any('collectNews/edit/{id}', 'CollectNewsController@edit');//文章修改
Route::any('collectNews/del/{id}', 'CollectNewsController@del');//文章单条删除
Route::any('collectNews/del_all', 'CollectNewsController@del_all');//文章多条删除
Route::any('collectNews/collect_url_test', 'CollectNewsController@collect_url_test');//文章多条删除
Route::any('collectNews/collect_content_test', 'CollectNewsController@collect_content_test');//文章多条删除
