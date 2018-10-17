<?php
Route::get('keywordsType', 'KeywordsTypeController@index');//创建友情链接模块 资源路由
Route::any('keywordsType/create', 'KeywordsTypeController@create');//文章新增
Route::any('keywordsType/edit/{id}', 'KeywordsTypeController@edit');//文章修改
Route::any('keywordsType/del/{id}', 'KeywordsTypeController@del');//文章单条删除
Route::any('keywordsType/del_all', 'KeywordsTypeController@del_all');//文章多条删除