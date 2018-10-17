<?php
Route::group([
    'domain'=>'www.jierui303.com',
    'middleware' => ['web']
], function(){

    //测试定时任务接口
    Route::get('/test', 'Home\TestController@index');//TestController作为所有个人作品页面渲染控制器
    Route::get('/getBaiDuXLword/{keyword}', 'Home\TestController@getBaiDuXLword');//TestController作为所有个人作品页面渲染控制器
    Route::get('/checkArticlePaiMing', 'Home\TestController@checkArticlePaiMing');//TestController作为所有个人作品页面渲染控制器
    Route::get('/getArticleSouLu', 'Home\TestController@getArticleSouLu');//TestController作为所有个人作品页面渲染控制器
    Route::get('/redisTest', 'Home\TestController@redisTest');//TestController作为所有个人作品页面渲染控制器
    Route::get('/getCollectArticle', 'Home\TestController@getCollectArticle');//TestController作为所有个人作品页面渲染控制器
    Route::get('/getArticlesByCollectRules', 'Home\TestController@getArticlesByCollectRules');//TestController作为所有个人作品页面渲染控制器
    Route::get('/collectAddContent', 'Home\TestController@collectAddContent');//TestController作为所有个人作品页面渲染控制器
    Route::get('/getsss', 'Home\TestController@getsss');//TestController作为所有个人作品页面渲染控制器
    Route::get('/getExternalLinksByLuSongSong', 'Home\TestController@getExternalLinksByLuSongSong');//获取外链连接卢松松
    Route::get('/getExternalLinksByDuoShiTong', 'Home\TestController@getExternalLinksByDuoShiTong');//获取外链连接多视通
    Route::get('/getExternalLinksBySuper', 'Home\TestController@getExternalLinksBySuper');//获取外链连接多视通


});
