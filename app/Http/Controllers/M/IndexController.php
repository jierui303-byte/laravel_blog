<?php

namespace App\Http\Controllers\M;

use App\Http\Model\Blog\Article;
use App\Http\Model\Category;
use App\Http\Model\Links;
use App\Http\Model\Navs;
use App\Http\Model\Tag;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\URL;

class IndexController extends CommonController
{

    //前台首页
    public function index()
    {
        $currentTime = time();
        //所有文章中最新的6篇文章
        $hotArticle = (new Article())->getHotArticle($currentTime);

        //获取所有的顶级栏目ID及栏目名称
        $cateLists = (new Category())->getAllTopCategoryId();

        //遍历循环获取所有顶级栏目下的文章列表
        $data = array();
        foreach($cateLists as $k=>$v){
            $data[] = Article::where('cate_pid', $v['cate_id'])->where('art_status', '1')->orderBy('art_dingTime', 'desc')->paginate(10);//paginate分页
        }

        return view('m.index', compact('hotArticle', 'data', 'cateLists'));
    }


    //前端个人资料页
    public function about(){
        return view('m.about');
    }

    //前台分类列表页
    public function cate(Request $request, $cate_id)
    {
        //获取当前第几页
        $RequestUri = $request->getRequestUri();
        $RequestUriArr = explode('=',$RequestUri);
        $pageNum = isset($RequestUriArr[1]) ? $RequestUriArr[1] : 1;//页码不存在时,默认显示第一页

//        echo '<pre>';
//        var_dump($RequestUriArr);
//        echo '</pre>';
//        die();

        //所有文章中最新的6篇文章
        $cateLists = (new Category())->getAllTopCategoryId();

        //遍历循环获取所有顶级栏目下的文章列表
//        foreach($cateLists as $k=>$v){
//            $data[] = Article::where('cate_pid', $cate_id)->where('art_status', '1')->orderBy('art_dingTime', 'desc')->paginate(10);//paginate分页
//        }

        $field = Category::find($cate_id);//获取分类
        //判断当前分类ID是否是顶级ID，如果是不是顶级ID，查询顶级ID名称


//        $submenu = Category::where('cate_pid', $cate_id)->get();//获取当前分类的子分类

        //分类查看次数自增
        Category::where('cate_id', $cate_id)->increment('cate_view');

        //图文列表5篇(带分页)
        $currentTime = time();
        //把定时发布的文章排除掉
        $data = Article::where('cate_id', $cate_id)->where('art_status', '1')->where(function($q1) use($currentTime){
            $q1->orWhere('art_dingTime', '<', $currentTime);
        })->orderBy('art_time', 'desc')->paginate($perPage = 6, $columns = ['*'], $pageName = 'page', $page = $pageNum);//paginate分页

////        echo '<pre>';
////        var_dump($data);
////        echo '</pre>';

        return view('m.list', compact('cateLists', 'field', 'submenu', 'data'));
    }

    //tag标签列表页
    public function tag(Request $request, $tag_id)
    {
        //获取当前第几页
        $RequestUri = $request->getRequestUri();
        $RequestUriArr = explode('=',$RequestUri);
        $pageNum = isset($RequestUriArr[1]) ? $RequestUriArr[1] : 1;//页码不存在时,默认显示第一页

//        echo '<pre>';
//        var_dump($RequestUriArr);
//        echo '</pre>';
//        die();

        //查询出该tag标签的信息
        $field = Tag::find($tag_id);//获取分类

        //获取当前tag标签所属类目名称
        $fenLeiName = Category::where('cate_id', $field['tag_category_id'])->get(['cate_name']);

        //获取到当前栏目id下的所有的tag标签名称
        $submenu = Tag::where('tag_category_id', $field['tag_category_id'])->get();

//        $submenu = Category::where('cate_pid', 3)->get();//获取当前分类的子分类

        //分类查看次数自增
//        Category::where('cate_id', 26)->increment('cate_view');

        //获取当前时间戳
        $currentTime = time();
        //$field['tag_article_id']存放的所有关联到该tag标签下的文章
        //使用explode把字符串拆分成数组即可
        $tagArticles = explode('/', $field['tag_article_id']);
//        var_dump($tagArticles);
//        $data[] = array();
        $data = array();
        foreach ($tagArticles as $k=>$v){
            //读取每篇文章的
            $data = Article::where('art_id', $v)->where('art_status', '1')->where(function($q1) use($currentTime){
                $q1->orWhere('art_dingTime', '<', $currentTime);
            })->get();//paginate分页
        }

//        echo '<pre>';
//        var_dump($data);
//        echo '</pre>';

        //图文列表5篇(带分页)
//        $currentTime = time();
//        $data = Article::where('cate_id', $cate_id)->orderBy('art_time', 'desc')->paginate(1);//paginate分页
//        $data = Article::where('cate_id', $cate_id)->orderBy('art_time', 'desc')->paginate($perPage = 1, $columns = ['*'], $pageName = 'page', $page = 3)->toArray();//paginate分页
        //把定时发布的文章排除掉
        $data = Article::where('cate_id', $field['tag_category_id'])->where('art_status', '1')->where(function($q1) use($currentTime){
            $q1->orWhere('art_dingTime', '<', $currentTime);
        })->orderBy('art_time', 'desc')->paginate($perPage = 6, $columns = ['*'], $pageName = 'page', $page = $pageNum);//paginate分页

        //
//        echo '<pre>';
//        var_dump($data);
//        echo '</pre>';

        return view('m.tagList', compact('field', 'submenu', 'data'));
    }

    //文章页
    public function article($art_id)
    {
        $currentTime = time();
        //所有文章中最新的6篇文章
        $cateLists = (new Category())->getAllTopCategoryId();

        //获取当前页面的文章信息 联表查询
        $field = Article::Join('category', 'article.cate_id', '=', 'category.cate_id')->where('art_id', $art_id)->where('art_status', '1')->where(function($q1) use($currentTime){
            $q1->orWhere('art_dingTime', '<', $currentTime);
        })->first();

        //文章查看次数自增
        Article::where('art_id', $art_id)->increment('art_view');

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

        return view('m.new', compact('cateLists', 'field', 'article', 'data'));
    }

}
