<?php
Route::get('collectRules', 'CollectRulesController@index');//创建友情链接模块 资源路由
Route::any('collectRules/create', 'CollectRulesController@create');//文章新增
Route::any('collectRules/edit/{id}', 'CollectRulesController@edit');//文章修改
Route::any('collectRules/del/{id}', 'CollectRulesController@del');//文章单条删除
Route::any('collectRules/del_all', 'CollectRulesController@del_all');//文章多条删除
Route::any('collectRules/collect_url_test', 'CollectRulesController@collect_url_test');//文章多条删除
Route::any('collectRules/collect_content_test', 'CollectRulesController@collect_content_test');//文章多条删除
Route::any('collectRules/edit_collect_is_open', 'CollectRulesController@edit_collect_is_open');//文章多条删除

Route::resource('tag', 'TagController');//创建标签模块 资源路由
Route::resource('collectRules/changeorder', 'CollectRulesController@changeorder');//创建文章模块 资源路由

Route::resource('collectNews', 'CollectNewsController');//创建文章模块 资源路由

