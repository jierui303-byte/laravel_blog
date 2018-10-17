<?php

namespace App\Http\Controllers\Seo;

use App\Http\Model\Blog\Article;
use App\Http\Model\Blog\Category;
use App\Http\Model\Comment;
use App\Http\Model\Links;
use App\Http\Model\Navs;
use App\Http\Model\Tag;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Input;

class IndexController extends CommonController
{

    //前台首页
    public function index(Request $request)
    {
        //获取当前第几页
        $RequestUri = $request->getRequestUri();
        $RequestUriArr = explode('=',$RequestUri);
        $pageNum = isset($RequestUriArr[1]) ? $RequestUriArr[1] : 1;//页码不存在时,默认显示第一页

//        var_dump($pageNum);
        //获取最新发布文章
        $art = (new Article());
        $newArticle = $art->getSeoArticleNew($pageNum);

        //获取推荐文章
        $tuijian = $art->getSeoArticleTuiJian();

        //每个seo板块获取两条评论数量最多的文章出来，显示位置在推荐文章下面
        //必须带有文章所属板块名称
        $tuijianDown = $art->getSeoArticleTuiJianDown();

        //获取日志总数
        $num = $art->getSeoArticleAllNum();

        //计算网站运行多少天
        $day = 1;

        //获取最新评论文章
        $pingLunArticle = $art->getSeoArticlePingLun();


//        var_dump($newArticle);
        return view('seo.index', compact('newArticle', 'tuijian', 'num', 'day', 'pingLunArticle', 'tuijianDown'));
    }

    //前台分类列表页
    public function cate(Request $request, $cate_id)
    {
        //获取当前第几页
        $RequestUri = $request->getRequestUri();
        $RequestUriArr = explode('=',$RequestUri);
        $pageNum = isset($RequestUriArr[1]) ? $RequestUriArr[1] : 1;//页码不存在时,默认显示第一页

        //获取最新发布文章
        $art = (new Article());
        $newArticle = $art->getSeoTwoNavArticleAll($cate_id, $pageNum);

        //获取当前栏目名称
        $cate = (new Category());
        $cateName = $cate->getCategoryInfo($cate_id);
//        var_dump('<pre>',$cateName);

        //获取最新评论文章
        $pingLunArticle = $art->getSeoArticlePingLun();


        return view('seo.list', compact('newArticle', 'cateName', 'pingLunArticle'));
    }


    //文章页
    public function article($art_id)
    {
        $art = (new Article());
        $articleContent = $art->getSeoArticleContent($art_id);

        //获取日志总数
        $num = $art->getSeoArticleAllNum();

        //计算网站运行多少天
        $day = 1;

        //获取最新评论文章
        $pingLunArticle = $art->getSeoArticlePingLun();

        //按照分类找相关文章
        $cate_id = $art->getArticleCateId($art_id);
        $XGArticle = $art->getXGArticle($cate_id);
//        var_dump($XGArticle);exit;

//        $currentTime = time();
//        //联表查询
//        $field = Article::Join('category', 'article.cate_id', '=', 'category.cate_id')->where('art_id', $art_id)->where('art_status', '1')->where(function($q1) use($currentTime){
//            $q1->orWhere('art_dingTime', '<', $currentTime);
//        })->first();
//
//        //文章查看次数自增
//        Article::where('art_id', $art_id)->increment('art_view');
//
//        //文章的上一篇下一篇
//        $article['pre'] = Article::where('art_id', '<', $art_id)->where('art_status', '1')->where(function($q1) use($currentTime){
//            $q1->orWhere('art_dingTime', '<', $currentTime);
//        })->orderBy('art_id', 'desc')->first();
//        $article['next'] = Article::where('art_id', '>', $art_id)->where('art_status', '1')->where(function($q1) use($currentTime){
//            $q1->orWhere('art_dingTime', '<', $currentTime);
//        })->orderBy('art_id', 'asc')->first();
//
//        //按照分类找相关文章
//        $data = Article::where('cate_id', $field->cate_id)->where('art_status', '1')->where(function($q1) use($currentTime){
//            $q1->orWhere('art_dingTime', '<', $currentTime);
//        })->orderBy('art_id', 'desc')->take(6)->get();

        return view('seo.show', compact('articleContent', 'num', 'day', 'pingLunArticle', 'XGArticle'));
    }

    public function tags()
    {

        return view('seo.tags');
    }

    public function bookmark()
    {

        return view('seo.bookmark');
    }

    public function readers()
    {

        return view('seo.readers');
    }

    public function search(Request $request)
    {
//        $input = Input::all();
//        $keyword = $input['keyword'];
//        var_dump($input);

        //获取当前第几页
        $RequestUri = $request->getRequestUri();
        $RequestUriArr = explode('?',$RequestUri);
        $RequestUriArr = explode('&',$RequestUriArr[1]);

        $keywords = explode('=',$RequestUriArr[0]);
        $keyword = $keywords[1];
        $keyword = urldecode($keywords[1]);
//var_dump($keyword);

//        var_dump($RequestUriArr);

        if(isset($RequestUriArr[2])){
            $page = explode('=',$RequestUriArr[2]);
            $pageNum = $page[1];//页码不存在时,默认显示第一页
        }else{
            $pageNum = 1;
        }

//        var_dump($pageNum);

//        $cate_id = 27;

        //获取当前第几页
//        $RequestUri = $request->getRequestUri();
//        $RequestUriArr = explode('=',$RequestUri);
//        $pageNum = isset($RequestUriArr[1]) ? $RequestUriArr[1] : 1;//页码不存在时,默认显示第一页

        //根据关键词进行查询相关文章
        $art = (new Article());
        $newArticle = $art->searchKeywords($keyword, $pageNum);
//        var_dump($newArticle);exit;

        //获取最新评论文章
        $pingLunArticle = $art->getSeoArticlePingLun();


        return view('seo.search', compact('keyword', 'newArticle', 'pingLunArticle'));
    }

    //接收文章评论，写入数据库
    public function pingLun()
    {
        $input = Input::all();
//        var_dump($input);
        $input['create_time'] = time();

        $re = Comment::create($input);
        if ($re) {
            return '评论成功';
        } else {
            return 'false';
        }
//        echo 'okssss';
    }

}
