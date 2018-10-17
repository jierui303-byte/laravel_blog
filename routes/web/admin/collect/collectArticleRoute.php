<?php
Route::get('collectArticle', 'CollectArticleController@index');//创建友情链接模块 资源路由
Route::any('collectArticle/create', 'CollectArticleController@create');//文章新增
Route::any('collectArticle/edit/{id}', 'CollectArticleController@edit');//文章修改
Route::any('collectArticle/del/{id}', 'CollectArticleController@del');//文章单条删除
Route::any('collectArticle/del_all', 'CollectArticleController@del_all');//文章多条删除
Route::any('collectArticle/collect_url_test', 'CollectArticleController@collect_url_test');//文章多条删除
Route::any('collectArticle/collect_content_test', 'CollectArticleController@collect_content_test');//文章多条删除

Route::resource('collectArticle/changeorder', 'CollectArticleController@changeorder');//创建文章模块 资源路由

