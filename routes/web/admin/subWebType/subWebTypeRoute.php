<?php

Route::get('subWebType', 'SubWebTypeController@index');//文章列表
Route::any('subWebType/create', 'SubWebTypeController@create');//文章新增
Route::any('subWebType/edit/{id}', 'SubWebTypeController@edit');//文章修改
Route::any('subWebType/del/{id}', 'SubWebTypeController@del');//文章单条删除
Route::any('subWebType/del_all', 'SubWebTypeController@del_all');//文章多条删除
