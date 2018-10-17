<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//use App\Http\Model\Blog\Article;

//引入前台路由文件
require_once __DIR__.'/web/home/index/indexRoute.php';//独立前端域名路由文件
require_once __DIR__.'/web/home/testRoute.php';//测试路由

//SEO网站优化路由
\Illuminate\Support\Facades\Route::group(['domain'=>'seo.jierui303.com'], function(){
    Route::get('', 'Seo\IndexController@index');//后台登陆路由
    Route::any('/cate/{cate_id?}', 'Seo\IndexController@cate');//前台列表页 路由
    Route::any('/a/{art_id}', 'Seo\IndexController@article');//前台文章页 路由
    Route::any('/tags', 'Seo\IndexController@tags');//前台文章页 路由
    Route::any('/bookmark', 'Seo\IndexController@bookmark');//前台文章页 路由
    Route::any('/readers', 'Seo\IndexController@readers');//前台文章页 路由


    Route::any('/article/search', 'Seo\IndexController@search');//验证码路由
    Route::any('/article/pingLun', 'Seo\IndexController@pingLun');//百度主动推送接口


//    Route::get('/', function () {
//        echo 'seo.jierui303.com=== ddssd';
//    });
});

require_once __DIR__.'/web/home/common/indexRoute.php';//公共二级分类站群路由文件


//pc网站后台路由===文章模块路由
\Illuminate\Support\Facades\Route::group([
    'domain'=>'jierui303.com',
    'middleware' => [
        'web',
        'admin.login'
    ],
    'prefix' => 'admin',
    'namespace' => 'Admin\Blog'
], function(){

    require_once __DIR__.'/web/admin/blog/articleRoute.php';//引入后台文章管理模块路由文件
    require_once __DIR__.'/web/admin/blog/categoryRoute.php';//引入后台分类管理模块路由文件

});

//pc网站后台路由===采集模块路由
\Illuminate\Support\Facades\Route::group([
    'domain'=>'jierui303.com',
    'middleware' => [
        'web',
        'admin.login'
    ],
    'prefix' => 'admin',
    'namespace' => 'Admin\Collect'
], function(){

    require_once __DIR__.'/web/admin/collect/collectRulesRoute.php';//引入后台分类管理模块路由文件
    require_once __DIR__.'/web/admin/collect/collectArticleRoute.php';//引入后台分类管理模块路由文件
    require_once __DIR__.'/web/admin/collect/collectNewsRoute.php';//引入后台分类管理模块路由文件

});

//pc网站后台路由===子站管理模块
\Illuminate\Support\Facades\Route::group([
    'domain'=>'jierui303.com',
    'middleware' => [
        'web',
        'admin.login'
    ],
    'prefix' => 'admin',
    'namespace' => 'Admin\SubWeb'
], function(){

    require_once __DIR__.'/web/admin/subWeb/subWebRoute.php';//引入后台分类管理模块路由文件

});

//pc网站后台路由===子站管理模块
\Illuminate\Support\Facades\Route::group([
    'domain'=>'jierui303.com',
    'middleware' => [
        'web',
        'admin.login'
    ],
    'prefix' => 'admin',
    'namespace' => 'Admin\SubWebType'
], function(){

    require_once __DIR__.'/web/admin/subWebType/subWebTypeRoute.php';//引入后台分类管理模块路由文件

});

//pc网站后台路由===友情链接模块
\Illuminate\Support\Facades\Route::group([
    'domain'=>'jierui303.com',
    'middleware' => [
        'web',
        'admin.login'
    ],
    'prefix' => 'admin',
    'namespace' => 'Admin\Links'
], function(){

    require_once __DIR__.'/web/admin/links/linksRoute.php';//引入后台分类管理模块路由文件

});


//pc网站后台路由===外链管理链接模块
\Illuminate\Support\Facades\Route::group([
    'domain'=>'jierui303.com',
    'middleware' => [
        'web',
        'admin.login'
    ],
    'prefix' => 'admin',
    'namespace' => 'Admin\ExternalLinks'
], function(){

    require_once __DIR__.'/web/admin/externalLinks/externalLinksRoute.php';//引入后台分类管理模块路由文件

});

//pc网站后台路由===外链管理链接模块
\Illuminate\Support\Facades\Route::group([
    'domain'=>'jierui303.com',
    'middleware' => [
        'web',
        'admin.login'
    ],
    'prefix' => 'admin',
    'namespace' => 'Admin\ExternalLinksWeb'
], function(){

    require_once __DIR__.'/web/admin/externalLinksWeb/externalLinksWebRoute.php';//引入后台分类管理模块路由文件

});

//pc网站后台路由===词库模块
\Illuminate\Support\Facades\Route::group([
    'domain'=>'jierui303.com',
    'middleware' => [
        'web',
        'admin.login'
    ],
    'prefix' => 'admin',
    'namespace' => 'Admin\Keywords'
], function(){

    require_once __DIR__.'/web/admin/keywords/keywordsRoute.php';//引入后台分类管理模块路由文件
    require_once __DIR__.'/web/admin/keywords/keywordsTypeRoute.php';//引入后台分类管理模块路由文件
    require_once __DIR__.'/web/admin/keywords/keywordsScreeningRoute.php';//引入后台分类管理模块路由文件

});

//pc网站后台路由===模板管理模块
\Illuminate\Support\Facades\Route::group([
    'domain'=>'jierui303.com',
    'middleware' => [
        'web',
        'admin.login'
    ],
    'prefix' => 'admin',
    'namespace' => 'Admin\Templates'
], function(){

    require_once __DIR__.'/web/admin/templates/templatesRoute.php';//引入后台分类管理模块路由文件

});

//pc网站后台路由===图片管理模块
\Illuminate\Support\Facades\Route::group([
    'domain'=>'jierui303.com',
    'middleware' => [
        'web',
        'admin.login'
    ],
    'prefix' => 'admin',
    'namespace' => 'Admin\Pictures'
], function(){

    require_once __DIR__.'/web/admin/pictures/picturesRoute.php';//引入后台分类管理模块路由文件

});

\Illuminate\Support\Facades\Route::group([
    'domain'=>'jierui303.com',
    'middleware' => [
        'web',
        'admin.login'
    ],
    'prefix' => 'admin',
    'namespace' => 'Admin'
], function(){

    require_once __DIR__.'/web/admin/common/commonRoute.php';//引入后台分类管理模块路由文件
    require_once __DIR__.'/web/admin/config/configRoute.php';//引入后台分类管理模块路由文件

    Route::resource('zhuanti', 'ZhuantiController');//创建文章分类模块 资源路由
    Route::post('zhuan/changeorder', 'ZhuantiController@changeorder');//ajax请求

    Route::resource('navs', 'NavsController');//创建自定义导航模块 资源路由
    Route::post('navs/changeorder', 'NavsController@changeorder');//创建自定义导航模块 路由

});



//移动站路由
\Illuminate\Support\Facades\Route::group(['domain'=>'m.jierui303.com'], function(){
    Route::any('/', 'M\IndexController@index');//前台首页路由
    Route::any('/cate/{cate_id?}', 'M\IndexController@cate');//前台列表页 路由
    Route::any('/a/{art_id}', 'M\IndexController@article');//前台文章页 路由

//    Route::get('/', function () {
//        echo 'm.jierui303.com是多大的';
//    });
//    Route::get('/a/8', function () {
//        echo 'm.jierui303.com是多大88888的';
//    });
});


//自制小工具路由
\Illuminate\Support\Facades\Route::group(['domain'=>'tool.jierui303.com'], function(){
    Route::get('/', function () {
        echo 'tool.jierui303.com';
    });
});




//php网站优化路由
\Illuminate\Support\Facades\Route::group(['domain'=>'php.jierui303.com'], function(){
    Route::get('', 'Php\IndexController@index');//后台登陆路由
    Route::any('/cate/{cate_id?}', 'Php\IndexController@cate');//前台列表页 路由
    Route::any('/a/{art_id}', 'Php\IndexController@article');//前台文章页 路由
    Route::any('/tags', 'Php\IndexController@tags');//前台文章页 路由
    Route::any('/bookmark', 'Php\IndexController@bookmark');//前台文章页 路由
    Route::any('/readers', 'Php\IndexController@readers');//前台文章页 路由


    Route::any('/article/search', 'Php\IndexController@search');//验证码路由
    Route::any('/article/pingLun', 'Php\IndexController@pingLun');//百度主动推送接口

});


//教程网站专题
\Illuminate\Support\Facades\Route::group(['domain'=>'w3cschool.jierui303.com'], function(){
//    Route::get('/', function () {
//        echo 'php.jierui303.com=== ddssd';
//    });
    //教程专题
    Route::any('/', 'Zhuan\IndexController@index');//tag标签页和分类页共用同一模版
    Route::any('/php', 'Zhuan\IndexController@php');//tag标签页和分类页共用同一模版
    Route::any('/php/{zhuan_id}', 'Zhuan\IndexController@zhuanti');//tag标签页和分类页共用同一模版

    Route::any('/html/{zhuan_id}', 'Zhuan\IndexController@zhuanti');//tag标签页和分类页共用同一模版
    Route::any('/htmlCss.html', 'Zhuan\IndexController@zhuanti');//tag标签页和分类页共用同一模版
    Route::any('/htmlCss/webService.html', 'Zhuan\IndexController@php');//tag标签页和分类页共用同一模版
    Route::any('/htmlCss/webService/php-intro.html', 'Zhuan\IndexController@php');//tag标签页和分类页共用同一模版
    Route::any('/htmlCss/webService/{aa}.html', 'Zhuan\IndexController@php');//tag标签页和分类页共用同一模版

    Route::any('/javascript.html', 'Zhuan\IndexController@zhuanti');//tag标签页和分类页共用同一模版
    Route::any('/service.html', 'Zhuan\IndexController@zhuanti');//tag标签页和分类页共用同一模版
    Route::any('/database.html', 'Zhuan\IndexController@zhuanti');//tag标签页和分类页共用同一模版
    Route::any('/phone.html', 'Zhuan\IndexController@zhuanti');//tag标签页和分类页共用同一模版
    Route::any('/xml.html', 'Zhuan\IndexController@zhuanti');//tag标签页和分类页共用同一模版
    Route::any('/asp.html', 'Zhuan\IndexController@zhuanti');//tag标签页和分类页共用同一模版
    Route::any('/openTool.html', 'Zhuan\IndexController@zhuanti');//tag标签页和分类页共用同一模版

});