<?php
/**
 * Created by PhpStorm.
 * User: wangruijie9009
 * Date: 2018/9/14
 * Time: 12:10
 */
//站群分类控制路由
\Illuminate\Support\Facades\Route::group([
    'domain'=>'{twoDomain}.jierui303.com',
    'namespace' => 'Home\Common'
], function($twoDomain){
    Route::any('/', 'IndexController@index');
    Route::any('/category{cate_id}.html', 'IndexController@category');
    Route::any('/category{cate_id}.html?page={page}', 'IndexController@category');
    Route::any('/article{cate_id}-{art_id}.html', 'IndexController@article');
    Route::any('/tag{tag_id}.html', 'IndexController@tag');
    Route::any('/message.html', 'IndexController@pingLun');
    Route::any('/getXiaLaCiByTitle.html', 'IndexController@getXiaLaCiByTitle');
});