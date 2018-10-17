<?php
Route::get('templates', 'TemplatesController@index');//创建友情链接模块 资源路由
Route::any('templates/create', 'TemplatesController@create');//文章新增
Route::any('templates/edit/{id}', 'TemplatesController@edit');//文章修改
Route::any('templates/del/{id}', 'TemplatesController@del');//文章单条删除
Route::any('templates/del_all', 'TemplatesController@del_all');//文章多条删除
Route::any('templates/fileUpload', 'TemplatesController@fileUpload');//文章多条删除
