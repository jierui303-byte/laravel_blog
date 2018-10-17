<?php

namespace App\Http\Controllers\Zhuan;

use App\Http\Model\Article;
use App\Http\Model\Category;
use App\Http\Model\Tag;
use App\Http\Model\Navs;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;

class CommonController extends Controller
{
    //初始化, 里面存取的数据对于子类可以共享数据
    public function __construct()
    {
//        $currentTime = time();
//        //点击量最高的6篇文章(点击排行)
//        $hot = Article::orderBy('art_view', 'desc')->where('art_status', '1')->where(function($q1) use($currentTime){
//            $q1->orWhere('art_dingTime', '<', $currentTime);
//        })->where('art_dingTime', '<', time())->take(8)->get();//take显示limit数量
//
//        View::share('hot', $hot);//把变量共享,所有子类视图均可使用

    }
}
