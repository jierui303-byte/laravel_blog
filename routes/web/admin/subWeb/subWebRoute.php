<?php

Route::get('subWeb', 'SubWebController@index');//文章列表
Route::any('subWeb/create', 'SubWebController@create');//文章新增
Route::any('subWeb/edit/{id}', 'SubWebController@edit');//文章修改
Route::any('subWeb/del/{id}', 'SubWebController@del');//文章单条删除
Route::any('subWeb/del_all', 'SubWebController@del_all');//文章多条删除
