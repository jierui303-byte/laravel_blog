<?php
/**
 * Created by PhpStorm.
 * User: wangruijie9009
 * Date: 2018/9/14
 * Time: 12:09
 */
//api接口路由  http://api.jierui303.com/article/getAllHotArticle
Route::group([
    'domain'=>'api.jierui303.com',
    [
        'middleware' => ['api']
    ]
], function(){

    Route::any('/links/getWebListByWebTypeId', 'LinksController@getWebListByWebTypeId');//前台个人资料页路由

});