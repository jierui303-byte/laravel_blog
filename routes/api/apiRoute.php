<?php
/**
 * Created by PhpStorm.
 * User: wangruijie9009
 * Date: 2018/9/14
 * Time: 12:09
 */
//api接口路由  http://api.jierui303.com/article/getAllHotArticle
Route::group(['domain'=>'api.jierui303.com', ['middleware' => ['api']]], function(){

//    Route::any('/api/getData', 'ApiController@getData');
//    Route::any('/category/getCategoryData', 'CategoryController@getCategoryData');
//    Route::any('/category/getTwoCategoryData', 'CategoryController@getTwoCategoryData');
    Route::any('/article/getTwoCategoryArticleData', 'ApiController@getTwoCategoryArticleData');
    Route::any('/article/getArticleContent', 'ApiController@getArticleContent');
    Route::any('/article/getNewArticle', 'ApiController@getNewArticle');
    Route::any('/article/getHotArticle', 'ApiController@getHotArticle');
    Route::any('/article/getLunBoArticle', 'ApiController@getLunBoArticle');
    Route::any('/article/getAllHotArticle', 'ApiController@getAllHotArticle');
    Route::any('/article/getTagListArticle', 'ApiController@getTagListArticle');//根据分类获取tag标签
    Route::any('/category/getCategoryData', 'ApiController@getCategoryData');
    Route::post('/category/getTwoCategoryData', 'ApiController@getTwoCategoryData');

    Route::any('/article/baidutuisong', 'ApiController@baidutuisong');//百度主动推送接口

    Route::any('/qiniu_token', 'ApiController@qiniu_token');//前台个人资料页路由


    Route::any('/links/getWebListByWebTypeId', 'LinksController@getWebListByWebTypeId');//前台个人资料页路由


//        Route::get('/api/getData', 'ApiController@getData');
//        Route::get('/api/getData', 'ApiController@getData');


});