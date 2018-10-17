<?php
Route::get('keywordsScreening', 'KeywordsScreeningController@index');//创建友情链接模块 资源路由
Route::any('keywordsScreening/create', 'KeywordsScreeningController@create');//文章新增
Route::any('keywordsScreening/edit/{id}', 'KeywordsScreeningController@edit');//文章修改
Route::any('keywordsScreening/del/{id}', 'KeywordsScreeningController@del');//文章单条删除
Route::any('keywordsScreening/del_all', 'KeywordsScreeningController@del_all');//文章多条删除