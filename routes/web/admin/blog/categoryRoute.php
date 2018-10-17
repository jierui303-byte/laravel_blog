<?php
/**
 * 后台文章管理模块路由
 * User: wangruijie9009
 * Date: 2018/9/13
 * Time: 17:49
 * 新增的 resource 方法将遵从 RESTful 架构为用户资源生成路由。该方法接收两个参数，第一个参数为资源名称，第二个参数为控制器名称。

Route::resource('users', 'UsersController');

上面代码将等同于：

Route::get('/users', 'UsersController@index')->name('users.index');

Route::get('/users/{user}', 'UsersController@show')->name('users.show');

Route::get('/users/create', 'UsersController@create')->name('users.create');

Route::post('/users', 'UsersController@store')->name('users.store');新增

Route::get('/users/{user}/edit', 'UsersController@edit')->name('users.edit');

Route::patch('/users/{user}', 'UsersController@update')->name('users.update');更新

Route::delete('/users/{user}', 'UsersController@destroy')->name('users.destroy');删除

可以看到使用 resource 方法让我们少写了很多代码，且严格按照了 RESTful 架构对路由进行设计。
 */


    Route::get('category', 'CategoryController@index');//文章列表
    Route::any('category/create', 'CategoryController@create');//文章新增
    Route::any('category/create_two/{id}', 'CategoryController@create_two');//文章新增
    Route::any('category/cate_two_show/{id}', 'CategoryController@cate_two_show');//文章新增
    Route::any('category/edit/{id}', 'CategoryController@edit');//文章修改
    Route::any('category/edit_two/{id}', 'CategoryController@edit_two');//文章修改
    Route::any('category/del/{id}', 'CategoryController@del');//文章单条删除
    Route::post('category/del_all', 'CategoryController@del_all');//文章多条删除
    Route::any('category/edit_category_is_open', 'CategoryController@edit_category_is_open');//文章多条删除
    Route::any('category/edit_category_is_open_pseudo', 'CategoryController@edit_category_is_open_pseudo');//文章多条删除


//Route::resource('category', 'CategoryController');//创建文章分类模块 资源路由
//Route::post('cate/changeorder', 'CategoryController@changeorder');//ajax请求
