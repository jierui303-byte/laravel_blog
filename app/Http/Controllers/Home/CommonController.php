<?php

namespace App\Http\Controllers\Home;

use App\Http\Model\Blog\Article;
use App\Http\Model\Blog\Category;
use App\Http\Model\Tag;
use App\Http\Model\Navs;
use App\Http\Model\Templates\Templates;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;

class CommonController extends Controller
{
    protected $request;

    //初始化, 里面存取的数据对于子类可以共享数据
    public function __construct(Request $request)
    {
        $this->request = $request;

        $currentTime = time();
        //点击量最高的6篇文章(点击排行)
        $hot = Article::orderBy('art_view', 'desc')->where('art_status', '1')->where(function($q1) use($currentTime){
            $q1->orWhere('art_dingTime', '<', $currentTime);
        })->where('art_dingTime', '<', time())->take(8)->get();//take显示limit数量

        //最新发布文章8篇
        $new = Article::orderBy('art_time', 'desc')->where('art_status', '1')->where(function($q1) use($currentTime){
            $q1->orWhere('art_dingTime', '<', $currentTime);
        })->where('art_dingTime', '<', time())->take(8)->get();//paginate分页

        $navs = Navs::all();//读取自定义导航数据

        //获取所有栏目并且统计当前栏目文章数量
        $categorysTTl = array();
        $categorys = Category::take(20)->get();
        foreach ($categorys as $k=>$v){
            $categorysTTl[$v['cate_id']]['cate_name'] = $v['cate_name'];
            $artNum = Article::where('cate_id', $v['cate_id'])->where('art_status', '1')->get();//take显示limit数量
            $categorysTTl[$v['cate_id']]['artNum'] = count($artNum);
        }

        //获取随机文章10篇
        $suijiArticle = Article::orderBy('art_time', 'asc')->where('art_status', '1')->where(function($q1) use($currentTime){
            $q1->orWhere('art_dingTime', '<', $currentTime);
        })->where('art_dingTime', '<', time())->pluck('art_id');//lists()获取包含单个列值的数组
        //lists()获取art_id字段下的值
        $suijiIdArr = array();//随机id数组
        $suijiArticleList = array();//随机id获取到文章数组
        //先获取到随机的id数组
        for($i=0;$i<=10;$i++){
            //判断随机获取文章个数，达到10个的就不需要再获取了
            if(count($suijiIdArr) >= 15){
                break;//跳出循环
            }
            $suijiId = rand(1,count($suijiArticle)-1);//保证文章id是连号的,否则会出错
            //判断一下ID是否重复，重复的话就不放入数组内
            if(in_array($suijiId, $suijiIdArr)){
                continue;//跳出本次循环,继续下次循环
            }
            $suijiIdArr[] = $suijiArticle[$suijiId];
            //再获取所有随机id的文章
            $suijiArticleList[$i] = Article::where('art_id', $suijiArticle[$suijiId])->first();
        }

        //获取网站tag标签
        $tagList = Tag::orderBy('tag_time', 'asc')->take(10)->get();//lists()获取包含单个列值的数组
//        var_dump($tagList);


        View::share('hot', $hot);//把变量共享,所有子类视图均可使用
        View::share('new', $new);//把变量共享,所有子类视图均可使用
        View::share('navs', $navs);//把变量共享,所有子类视图均可使用
        View::share('suijiArt', $suijiArticleList);//把变量共享,所有子类视图均可使用
        View::share('tagList', $tagList);//把变量共享,所有子类视图均可使用
        View::share('categorysTTl', $categorysTTl);//把变量共享,所有子类视图均可使用

    }

}
