<?php

namespace App\Http\Controllers\Home;

use App\Http\Model\Blog\Article;
use App\Http\Model\Blog\Category;
use App\Http\Model\Links\Links;
use App\Http\Model\Collect\CollectArticle;
use App\Http\Model\Collect\CollectNews;
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
        //调用IndexController对象中的其他方法的方式：使用$this
//        $this->getAllArticle();

        //调用model类中的公共方法方式
        $q = (new CollectNews())->limit(1)->get();
//        var_dump($q);

        $currentTime = time();
        $pics = (new Article())->getHotArticle($currentTime);


        //所有文章中最新的6篇文章
        $hotArticle = (new Article())->getHotArticle($currentTime);

        //获取所有友情链接
        $links = (new Links())->getAllLinks();

        //文章顶级分类列表及其类目下10篇文章[时间倒序]
        $topData = (new Article())->getAllTopCategoryArticle($currentTime);

        //获取PHP教程下所有文章
        $topNav = (new Category())->getAllTopCategoryId();//获取所有的顶级栏目ID
//        foreach ($topNav as $k=>$v){
//            echo $v['cate_id'].'==='.$v['cate_name'].'<br/>';
//        }

        //php教程 ID为1
        $phpjiaocheng = (new Article())->getTopCateArticle(1, $currentTime, 15);

        //开源cms教程 ID为73
        $kaiyuancms = (new Article())->getTopCateArticle(73, $currentTime, 15);

        //1===PHP教程
        //73===开源CMS仿站
        //58===黑客教程
        $heike = (new Article())->getTopCateArticle(58, $currentTime, 15);

        //53===Apache教程
        $apaches = (new Article())->getTopCateArticle(53, $currentTime, 15);
        //36===Nginx教程
        $nginxs = (new Article())->getTopCateArticle(36, $currentTime, 15);

        //34===Mac教程
        $macs = (new Article())->getTopCateArticle(34, $currentTime, 15);

        //33===Git教程
        $gits = (new Article())->getTopCateArticle(33, $currentTime, 15);

        //32===SVN教程
        $svns = (new Article())->getTopCateArticle(32, $currentTime, 15);

        //15===数据库教程
        $shujukus = (new Article())->getTopCateArticle(15, $currentTime, 15);

        //13===SEO教程
        $seos = (new Article())->getTopCateArticle(13, $currentTime, 15);

        //12===App教程
        $apps = (new Article())->getTopCateArticle(12, $currentTime, 15);

        //10===Linux教程
        $linuxs = (new Article())->getTopCateArticle(10, $currentTime, 15);

        //4===web前端开发
        $webs = (new Article())->getTopCateArticle(4, $currentTime, 15);

        //76===Jerry资讯
        $zixunnews = (new Article())->getTopCateArticle(76, $currentTime, 15);



        //原创,转载,PHP,SEO 文章最新前10条获取
        $yuanChuang = (new Article())->yuanchuang($currentTime);

        $zhuanzhai = (new Article())->zhuanzhai($currentTime);

        $phps = (new Article())->phps($currentTime);


        $collectArticles = (new CollectArticle())->getAllTopCategoryArticle();//采集顶级分类及最新文章
//        dd($collectArticles);
//exit;
//        $seos = (new Article())->seos($currentTime);

//        $gongGaos = (new Article())->gongGaos($currentTime);


//        echo phpinfo();


        return view('home.index', compact(
            'pics',
            'data',
            'links',
            'topData',
            'twoData',
            'hotArticle',
            'topTwoNav',
            'suijiArticleList',
            'yuanChuang',
            'zhuanzhai',
            'phps',
            'seos',
            'phpjiaocheng',
            'kaiyuancms',
            'heike',
            'apaches',
            'nginxs',
            'macs',
            'gits',
            'svns',
            'shujukus',
            'seos',
            'apps',
            'linuxs',
            'webs',
            'zixunnews',
            'collectArticles'
        ));
    }


    //前端个人资料页
    public function about(){

        return view('home.about');
    }

    //前台分类列表页
    public function cate(Request $request, $cate_id)
    {

        //获取当前第几页
        $RequestUri = $request->getRequestUri();
//        var_dump($request->toArray());
        $RequestUriArr = explode('=',$RequestUri);
        $pageNum = isset($RequestUriArr[1]) ? $RequestUriArr[1] : 1;//页码不存在时,默认显示第一页

//        echo '<pre>';
//        var_dump($RequestUriArr);
//        echo '</pre>';
//        die();


        $field = Category::find($cate_id);//获取分类
//        if($field['cate_id'] == 13){
//            return false;
//        }
        //判断当前分类ID是否是顶级ID，如果是不是顶级ID，查询顶级ID名称
        if($field['cate_pid'] !== 0){
            //二级栏目
            $pidInfo = Category::find($field['cate_pid']);
            $field['cate_pid_name'] = $pidInfo['cate_name'];

            //分类查看次数自增
            Category::where('cate_id', $cate_id)->increment('cate_view');

            $currentTime = time();
            //把定时发布的文章排除掉 图文列表5篇(带分页)
            $data = Article::where('cate_id', $cate_id)->where('art_status', '1')->where(function($q1) use($currentTime){
                $q1->orWhere('art_dingTime', '<', $currentTime);
            })->orderBy('art_dingTime', 'desc')->paginate($perPage = 40, $columns = ['*'], $pageName = 'page', $page = $pageNum);//paginate分页
            foreach ($data as $k=>$v){
                $a = Category::find($v['cate_id']);
                $data[$k]['cate_name'] = $a['cate_name'];
            }

            return view('home.list', compact('field', 'submenu', 'data'));

        }else{
            //顶级栏目， 按cate_pid来查询文章 显示所有二级栏目的所有文章
            $submenu = Category::where('cate_pid', $cate_id)->get();//获取当前分类的子分类

            //分类查看次数自增
            Category::where('cate_id', $cate_id)->increment('cate_view');

            $currentTime = time();
            //把定时发布的文章排除掉 图文列表5篇(带分页)
            $data = Article::where('cate_pid', $cate_id)->where('art_status', '1')->where(function($q1) use($currentTime){
                $q1->orWhere('art_dingTime', '<', $currentTime);
            })->orderBy('art_dingTime', 'desc')->paginate($perPage = 40, $columns = ['*'], $pageName = 'page', $page = $pageNum);//paginate分页
            foreach ($data as $k=>$v){
                $a = Category::find($v['cate_id']);
                $data[$k]['cate_name'] = $a['cate_name'];
            }


            return view('home.list', compact('field', 'submenu', 'data'));

        }




//        echo '<pre>';
//        var_dump($data);
//        echo '</pre>';

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

        //不需要查询，直接使用like模糊查询，查标题是否包含文章即可。

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
        $data = Article::where('cate_id', $field['tag_category_id'])->where('art_status', '1')->where('art_title','like','%'.$field['tag_name'].'%')->where(function($q1) use($currentTime){
            $q1->orWhere('art_dingTime', '<', $currentTime);
        })->orderBy('art_time', 'desc')->paginate($perPage = 6, $columns = ['*'], $pageName = 'page', $page = $pageNum);//paginate分页

        //
//        echo '<pre>';
//        var_dump($data);
//        echo '</pre>';

        return view('home.tagList', compact('field', 'submenu', 'data'));
    }

    //教程专题列表页
    public function zhuanti(Request $request, $zhuan_id)
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
        $field = Tag::find($zhuan_id);//获取分类

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

        return view('home.zhuanti', compact('field', 'submenu', 'data'));
    }

    //文章页
    public function article($art_id)
    {
        $currentTime = time();
        //联表查询
        $field = Article::Join('category', 'article.cate_id', '=', 'category.cate_id')->where('art_id', $art_id)->where('art_status', '1')->where(function($q1) use($currentTime){
            $q1->orWhere('art_dingTime', '<', $currentTime);
        })->first();

        //判断当前分类ID是否是顶级ID，如果是不是顶级ID，查询顶级ID名称
        $categorys = Category::find($field['cate_id']);
        if($categorys['cate_pid'] !== 0){
            $pidCategorys = Category::find($field['cate_pid']);
            $field['cate_pid_name'] = $pidCategorys['cate_name'];
            $field['cate_pid'] = $pidCategorys['cate_id'];
        }

        //文章查看次数自增
        Article::where('art_id', $art_id)->increment('art_view');

        //文章的上一篇下一篇
        $article['pre'] = Article::where('art_id', '<', $art_id)->where('art_status', '1')->where(function($q1) use($currentTime){
            $q1->orWhere('art_dingTime', '<', $currentTime);
        })->orderBy('art_id', 'desc')->first();
        $article['next'] = Article::where('art_id', '>', $art_id)->where('art_status', '1')->where(function($q1) use($currentTime){
            $q1->orWhere('art_dingTime', '<', $currentTime);
        })->orderBy('art_id', 'asc')->first();

        //按照分类找相关文章
        $data = Article::where('cate_id', $field->cate_id)->where('art_status', '1')->where(function($q1) use($currentTime){
            $q1->orWhere('art_dingTime', '<', $currentTime);
        })->orderBy('art_id', 'desc')->take(18)->get();

        return view('home.new', compact('field', 'article', 'data'));
    }




    //单独封装的方法，使用面向对象的方式开发调用
    protected function getAllArticle(){
        echo 'hhhhh';
    }



}
