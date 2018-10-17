<?php
/**
 * Created by PhpStorm.
 * User: wangruijie9009
 * Date: 2018/9/14
 * Time: 12:10
 */

//pc网站前台路由
Route::group(['domain'=>'jierui303.com', 'middleware' => ['web']], function(){

    Route::any('/', 'Home\IndexController@index');//前台首页路由

    Route::any('/about', 'Home\IndexController@about');//前台个人资料页路由
    Route::any('/testupload', 'Home\TestController@testupload');//前台个人资料页路由


    Route::any('/cate/{cate_id?}', 'Home\IndexController@cate');//前台列表页 路由
    Route::any('/a/{art_id}', 'Home\IndexController@article');//前台文章页 路由
    Route::any('/tag/{tag_id}', 'Home\IndexController@tag');//tag标签页和分类页共用同一模版

    //教程专题
//    Route::any('/zhuanti', 'Home\ZhuanController@index');//tag标签页和分类页共用同一模版
//    Route::any('/zhuanti/{zhuan_id}', 'Home\ZhuanController@zhuanti');//tag标签页和分类页共用同一模版

    Route::any('admin/login', 'Admin\LoginController@login');//后台登陆路由
    Route::get('admin/code', 'Admin\LoginController@code');//验证码路由

    Route::get('/product', 'Home\ProductController@index');//个人作品主页


    Route::get('/201510infiniti/spring', 'Home\SpringController@index');//英菲尼迪
    Route::get('/201510infiniti/spring/info', 'Home\SpringController@info');//英菲尼迪
    Route::get('/201510infiniti/spring/shark', 'Home\SpringController@shark');//英菲尼迪
    Route::get('/201510infiniti/question', 'Home\SpringController@question');//英菲尼迪
    Route::get('/201510infiniti/question/list', 'Home\SpringController@questionList');//英菲尼迪


    Route::get('/test', 'Home\TestController@index');//TestController作为所有个人作品页面渲染控制器
    Route::get('/special', 'Home\TestController@special');//特效小示例

    Route::get('/hdwy', 'Home\TestController@hdwy');//惠达卫浴单页(web单页HTML+css)
    Route::get('/gwyc', 'Home\TestController@gwyc');//港湾有巢单页(web单页HTML+css)
    Route::get('/bcwl', 'Home\TestController@bcwl');//博彩网络单页(web单页HTML+css)
    Route::get('/hytz', 'Home\TestController@hytz');//火盈投资首页(web整站HTML+css)
    Route::get('/hytz_list', 'Home\TestController@hytz_list');//火盈列表页(整站HTML+css)
    Route::get('/hytz_content', 'Home\TestController@hytz_content');//火盈内容页(整站HTML+css)
    Route::get('/hytz_system', 'Home\TestController@hytz_system');//火盈系统页(整站HTML+css)
    Route::get('/hytz_strength', 'Home\TestController@hytz_strength');//火盈师资(整站HTML+css)
    Route::get('/hytz_about', 'Home\TestController@hytz_about');//关于火盈页(整站HTML+css)
    Route::get('/xmgw', 'Home\TestController@xmgw');//小米官网首页(web整站HTML+css+jquery)
    Route::get('/yht', 'Home\TestController@yht');//悦合同官网（bootstrap框架布局组件写成）
    Route::get('/allx', 'Home\TestController@allx');//阿里旅行手机版首页（rem适配布局写成）
    Route::get('/mtb', 'Home\TestController@mtb');//淘宝手机版首页页（rem适配布局写成）
    Route::get('/mtbxq', 'Home\TestController@mtbxq');//淘宝手机版商品详情页（rem适配布局写成）
    Route::get('/mtbcart', 'Home\TestController@mtbcart');//淘宝手机版购物车页（rem适配布局写成）
    Route::get('/mtbuser', 'Home\TestController@mtbuser');//淘宝手机版个人中心页（rem适配布局写成）
    Route::get('/qt', 'Home\TestController@qt');//切图练手

    Route::get('/otot', 'Home\TestController@otot');//切图练手
    Route::get('/zns', 'Home\TestController@zns');//赞那时 帮同学做的单页

    Route::get('/pay/index', 'Pay\IndexController@index');//微信对接入口文件



    Route::get('/JSspecial', 'Home\JSspecialController@index');//JSspecialController是JS特效练习页控制器
    Route::get('/JSspecial/sjld', 'Home\JSspecialController@sjld');//地址三级联动特效




    Route::get('/AVspecial', 'Home\AVspecialController@index');//AVspecialController是音频/视频特效练>    习页控制器


    Route::get('/JQueryspecial', 'Home\JQueryspecialController@index');//JQueryspecialController是JQuery特效练>    习页控制器






});
//pc网站前台路由
Route::group(['domain'=>'www.jierui303.com', 'middleware' => ['web']], function(){

    Route::any('/', 'Home\IndexController@index');//前台首页路由

    Route::any('/about', 'Home\IndexController@about');//前台个人资料页路由

    Route::any('/cate/{cate_id?}', 'Home\IndexController@cate');//前台列表页 路由
    Route::any('/a/{art_id}', 'Home\IndexController@article');//前台文章页 路由
    Route::any('/tag/{tag_id}', 'Home\IndexController@tag');//tag标签页和分类页共用同一模版

    //教程专题
//    Route::any('/zhuanti', 'Home\ZhuanController@index');//tag标签页和分类页共用同一模版
//    Route::any('/zhuanti/{zhuan_id}', 'Home\ZhuanController@zhuanti');//tag标签页和分类页共用同一模版

    Route::any('admin/login', 'Admin\LoginController@login');//后台登陆路由
    Route::get('admin/code', 'Admin\LoginController@code');//验证码路由

    Route::get('/product', 'Home\ProductController@index');//个人作品主页


    Route::get('/201510infiniti/spring', 'Home\SpringController@index');//英菲尼迪
    Route::get('/201510infiniti/spring/info', 'Home\SpringController@info');//英菲尼迪
    Route::get('/201510infiniti/spring/shark', 'Home\SpringController@shark');//英菲尼迪
    Route::get('/201510infiniti/question', 'Home\SpringController@question');//英菲尼迪
    Route::get('/201510infiniti/question/list', 'Home\SpringController@questionList');//英菲尼迪

    //测试定时任务接口
//    Route::get('/test', 'Home\TestController@index');//TestController作为所有个人作品页面渲染控制器
//    Route::get('/getBaiDuXLword/{keyword}', 'Home\TestController@getBaiDuXLword');//TestController作为所有个人作品页面渲染控制器
//    Route::get('/checkArticlePaiMing', 'Home\TestController@checkArticlePaiMing');//TestController作为所有个人作品页面渲染控制器
//    Route::get('/getArticleSouLu', 'Home\TestController@getArticleSouLu');//TestController作为所有个人作品页面渲染控制器
//    Route::get('/redisTest', 'Home\TestController@redisTest');//TestController作为所有个人作品页面渲染控制器
//    Route::get('/getCollectArticle', 'Home\TestController@getCollectArticle');//TestController作为所有个人作品页面渲染控制器
//    Route::get('/getArticlesByCollectRules', 'Home\TestController@getArticlesByCollectRules');//TestController作为所有个人作品页面渲染控制器
//    Route::get('/collectAddContent', 'Home\TestController@collectAddContent');//TestController作为所有个人作品页面渲染控制器
//    Route::get('/getsss', 'Home\TestController@getsss');//TestController作为所有个人作品页面渲染控制器
//    Route::get('/getExternalLinksByLuSongSong', 'Home\TestController@getExternalLinksByLuSongSong');//获取外链连接卢松松
//    Route::get('/getExternalLinksByDuoShiTong', 'Home\TestController@getExternalLinksByDuoShiTong');//获取外链连接多视通
//    Route::get('/getExternalLinksBySuper', 'Home\TestController@getExternalLinksBySuper');//获取外链连接多视通
//
//





    Route::get('/special', 'Home\TestController@special');//特效小示例

    Route::get('/hdwy', 'Home\TestController@hdwy');//惠达卫浴单页(web单页HTML+css)
    Route::get('/gwyc', 'Home\TestController@gwyc');//港湾有巢单页(web单页HTML+css)
    Route::get('/bcwl', 'Home\TestController@bcwl');//博彩网络单页(web单页HTML+css)
    Route::get('/hytz', 'Home\TestController@hytz');//火盈投资首页(web整站HTML+css)
    Route::get('/hytz_list', 'Home\TestController@hytz_list');//火盈列表页(整站HTML+css)
    Route::get('/hytz_content', 'Home\TestController@hytz_content');//火盈内容页(整站HTML+css)
    Route::get('/hytz_system', 'Home\TestController@hytz_system');//火盈系统页(整站HTML+css)
    Route::get('/hytz_strength', 'Home\TestController@hytz_strength');//火盈师资(整站HTML+css)
    Route::get('/hytz_about', 'Home\TestController@hytz_about');//关于火盈页(整站HTML+css)
    Route::get('/xmgw', 'Home\TestController@xmgw');//小米官网首页(web整站HTML+css+jquery)
    Route::get('/yht', 'Home\TestController@yht');//悦合同官网（bootstrap框架布局组件写成）
    Route::get('/allx', 'Home\TestController@allx');//阿里旅行手机版首页（rem适配布局写成）
    Route::get('/mtb', 'Home\TestController@mtb');//淘宝手机版首页页（rem适配布局写成）
    Route::get('/mtbxq', 'Home\TestController@mtbxq');//淘宝手机版商品详情页（rem适配布局写成）
    Route::get('/mtbcart', 'Home\TestController@mtbcart');//淘宝手机版购物车页（rem适配布局写成）
    Route::get('/mtbuser', 'Home\TestController@mtbuser');//淘宝手机版个人中心页（rem适配布局写成）
    Route::get('/qt', 'Home\TestController@qt');//切图练手

    Route::get('/otot', 'Home\TestController@otot');//切图练手
    Route::get('/zns', 'Home\TestController@zns');//赞那时 帮同学做的单页

    Route::resource('caiji', 'CaijiController');//采集模块




    Route::get('/JSspecial', 'Home\JSspecialController@index');//JSspecialController是JS特效练习页控制器
    Route::get('/JSspecial/sjld', 'Home\JSspecialController@sjld');//地址三级联动特效




    Route::get('/AVspecial', 'Home\AVspecialController@index');//AVspecialController是音频/视频特效练>    习页控制器


    Route::get('/JQueryspecial', 'Home\JQueryspecialController@index');//JQueryspecialController是JQuery特效练>    习页控制器






});
