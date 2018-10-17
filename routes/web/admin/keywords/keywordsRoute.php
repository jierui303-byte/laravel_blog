<?php
Route::get('keywords', 'KeywordsController@index');//创建友情链接模块 资源路由
Route::any('keywords/create', 'KeywordsController@create');//文章新增
Route::any('keywords/edit/{id}', 'KeywordsController@edit');//文章修改
Route::any('keywords/del/{id}', 'KeywordsController@del');//文章单条删除
Route::any('keywords/del_all', 'KeywordsController@del_all');//文章多条删除
Route::any('keywords/getKeyLevel', 'KeywordsController@getKeyLevel');//文章多条删除