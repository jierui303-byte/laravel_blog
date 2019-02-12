<?php

namespace App\Http\Controllers\Home\Common;

use App\Http\Controllers\Home\CommonController;
use App\Http\Model\Blog\Article;
use App\Http\Model\Blog\Category;
use App\Http\Model\Links\Links;
use App\Http\Model\Collect\CollectArticle;
use App\Http\Model\Collect\CollectNews;
use App\Http\Model\Navs;
use App\Http\Model\Tag;
use App\Http\Model\Templates\Templates;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\URL;

class IndexController extends CommonController
{
    protected $domainBefore;
    protected $domainCenter;
    protected $domainAfter;
    protected $templateId;
    protected $templateMath;
    protected $catePId;

    protected $collectArticleData;
    protected $categoryData;
    protected $linksData;

    public function __construct(Request $request)
    {
        parent::__construct($request);
        $this->collectArticleData = new CollectArticle();
        $this->categoryData = new Category();
        $this->linksData = new Links();

        $urlInfo = parse_url($request->url());
//        var_dump('<pre>', $urlInfo);

        $url = explode('.', $urlInfo['host']);
//        var_dump($url);
        if(count($url) == 2){
            //二级域名
        }elseif(count($url) == 3){
            //三级域名
        }elseif(count($url) == 4){
            //四级域名
        }
        //域名前缀 可存在也可不存在  不存在对应默认模板   存在时对应相应模板
        $domainBefore = $url[0];
        //域名
        $domainCenter = $url[1];
        //域名后缀
        $domainAfter = $url[2];

        $this->domainBefore = $domainBefore;
        $this->domainCenter = $domainCenter;
        $this->domainAfter = $domainAfter;
        echo '域名前缀：'.$domainBefore.'<br/>';
        echo '域名：'.$domainCenter.'<br/>';
        echo '域名后缀：'.$domainAfter.'<br/>';

        //根据分类缩写查找对应的模板标示
        $cateInfo = (new Category())->where('cate_math', $this->domainBefore)->first();
        if($cateInfo['temp_id'] !== 0){
            $tempInfo = (new Templates())->where('temp_id', $cateInfo['temp_id'])->first();
            $this->templateMath = 'common.'.$tempInfo['temp_math'];//common.a10.index
            $this->catePId = $cateInfo['cate_id'];
        }else{
            //不存在绑定模板id时，解析默认模板
            $this->templateMath = 'common.default';
            $this->catePId = $cateInfo['cate_id'];
//            $this->catePId = 1;
        }

    }

    public function index()
    {
        $data = [];

        $data['currentMainCategoryInfo'] = $this->categoryData
            ->where('cate_id', $this->catePId)
            ->first();//当前主页

        $data['pics'] = $this->collectArticleData->leftJoin('category','collect_article.cate_id','=','category.cate_id')
            ->where('collect_article.cate_pid', $this->catePId)->paginate(12);
//        var_dump('<pre>', $data);

        //获取热门文章
        $data['hotArticle'] = $this->collectArticleData
            ->leftJoin('category','collect_article.cate_id','=','category.cate_id')
            ->where('collect_article.cate_pid', $this->catePId)
            ->limit(6)
            ->orderBy('art_view', 'desc')
            ->get();

        //最近发表文章 最新文章
        $data['newArticle'] = $this->collectArticleData
            ->leftJoin('category','collect_article.cate_id','=','category.cate_id')
            ->where('collect_article.cate_pid', $this->catePId)
            ->limit(6)
            ->orderBy('art_time', 'desc')
            ->get();

        //热门标签

//        var_dump('<pre>',  $data['timeGroupArticle']);

        //文章归档 按日期分类
        $data['timeGroupArticle'] = $this->collectArticleData
            ->selectRaw('count(*) as counts, DATE_FORMAT(from_unixtime(art_time),"%Y年%m月") as date')
            ->groupBy('date')
            ->get();
        //留言列表

        //推荐文章
        $data['recommendArticle'] = $this->collectArticleData
            ->leftJoin('category','collect_article.cate_id','=','category.cate_id')
            ->where('collect_article.cate_pid', $this->catePId)
            ->where('art_is_recommend', 1)
            ->limit(1)
            ->get();
        $data['recommendsArticle'] = $this->collectArticleData
            ->leftJoin('category','collect_article.cate_id','=','category.cate_id')
            ->where('collect_article.cate_pid', $this->catePId)
            ->where('art_is_recommend', 1)
            ->orderBy('art_view', 'desc')
            ->limit(2)
            ->get();

        //轮播文章
        $data['lunBoArticle'] = $this->collectArticleData
            ->leftJoin('category','collect_article.cate_id','=','category.cate_id')
            ->where('collect_article.cate_pid', $this->catePId)
            ->limit(3)
            ->orderBy('art_view', 'desc')
            ->get();

        //获取二级分类
        $data['navCategory'] = $this->categoryData
            ->where('cate_pid', $this->catePId)
            ->take(8)
            ->get();




        //获取一个随机图片

        //获取友情链接
        $data['links'] = $this->linksData
            ->where('status', 1)
            ->get();

        return view($this->templateMath.'.index', compact('data'));
    }

    public function category(Request $request, $twoDomain, $cate_id)
    {
        //获取当前第几页
        $RequestUri = $request->getRequestUri();
        $RequestUriArr = explode('=',$RequestUri);
        $pageNum = isset($RequestUriArr[1]) ? $RequestUriArr[1] : 1;//页码不存在时,默认显示第一页

        $data['currentMainCategoryInfo'] = $this->categoryData
            ->where('cate_id', $this->catePId)
            ->first();//当前主页

        $data['currentListCategoryInfo'] = $this->categoryData
            ->where('cate_id', $cate_id)
            ->first();//二级分类信息

        $data['field'] = $this->categoryData
            ->where('cate_id', $cate_id)
            ->first();

        $data['categoryArticleList'] = $this->collectArticleData
            ->leftJoin('category','collect_article.cate_id','=','category.cate_id')
            ->where('collect_article.cate_id', $cate_id)
            ->paginate($perPage = 20, $columns = ['*'], $pageName = 'page', $page = $pageNum);

        //获取热门文章
        $data['hotArticle'] = $this->collectArticleData
            ->leftJoin('category','collect_article.cate_id','=','category.cate_id')
            ->where('collect_article.cate_pid', $this->catePId)
            ->limit(6)
            ->orderBy('art_view', 'desc')
            ->get();

        //最近发表文章 最新文章
        $data['newArticle'] = $this->collectArticleData
            ->leftJoin('category','collect_article.cate_id','=','category.cate_id')
            ->where('collect_article.cate_pid', $this->catePId)
            ->limit(6)
            ->orderBy('art_time', 'desc')
            ->get();

        //文章归档 按日期分类
        $data['timeGroupArticle'] = $this->collectArticleData
            ->selectRaw('count(*) as counts, DATE_FORMAT(from_unixtime(art_time),"%Y年%m月") as date')
            ->groupBy('date')
            ->get();

        //获取二级分类
        $data['navCategory'] = $this->categoryData
            ->where('cate_pid', $this->catePId)
            ->take(8)
            ->get();

        //获取友情链接
        $data['links'] = $this->linksData
            ->where('status', 1)
            ->get();

        return view($this->templateMath.'.list', compact('data'));
    }

    //文章页
    public function article($twoDomain, $cate_id, $art_id)
    {
//        var_dump($twoDomain, $cate_id, $art_id);

        $data = [];
        $currentTime = time();
        $data['currentMainCategoryInfo'] = $this->categoryData
            ->where('cate_id', $this->catePId)
            ->first();//当前主页

        $data['currentListCategoryInfo'] = $this->categoryData
            ->where('cate_id', $cate_id)
            ->first();//二级分类信息

        $data['field'] = $this->collectArticleData
            ->leftJoin('category', 'collect_article.cate_id', '=', 'category.cate_id')
            ->where('art_id', $art_id)
            ->first();
        $data['field']['art_title'] = preg_replace('/[(\xc2\xa0)|\s]+/', '', $data['field']->art_title);//中文空格的过滤方法

        //拼接内容页面的tdk
        $data['title'] = $data['field']->art_title.'_'.$data['currentListCategoryInfo']->cate_name.'_'.$data['currentMainCategoryInfo']->cate_name;
        $data['keywords'] = $data['field']->art_keywords;
        $data['description'] = $data['field']->art_description;

        //植入各大搜索引擎搜索相关关键词结果列表
        //百度pc相关搜索词
        //百度移动相关搜索词
        //360pc相关搜索词
        //搜狗pc相关搜索词
        //神马移动搜索词

        //对内容进行广告植入

        //对内容进行随机ascii码植入

        //每行p标签段落开头都植入关键词内连接锚文字链
        //每行结尾也植入关键词内连接锚文字链

        //文章查看次数自增
        $this->collectArticleData->where('art_id', $art_id)->increment('art_view');

        //文章的上一篇下一篇
        $data['pre'] = $this->collectArticleData
            ->where('cate_pid', $this->catePId)
            ->inRandomOrder()
            ->first();
        if(!$data['pre']){
            $data['pre'] = [];
        }
        $data['next'] = $this->collectArticleData
            ->where('cate_pid', $this->catePId)
            ->inRandomOrder()
            ->first();
        if(!$data['next']){
            $data['next'] = [];
        }

        //按照分类找相关文章
        $data['relatedArticle'] = $this->collectArticleData
            ->where('cate_pid', $this->catePId)
            ->where('cate_id', $cate_id)
            ->orderBy('art_id', 'desc')
            ->take(18)
            ->get();

        //获取热门文章
        $data['hotArticle'] = $this->collectArticleData
            ->leftJoin('category','collect_article.cate_id','=','category.cate_id')
            ->where('collect_article.cate_pid', $this->catePId)
            ->limit(6)
            ->orderBy('art_view', 'desc')
            ->get();

        //最近发表文章 最新文章
        $data['newArticle'] = $this->collectArticleData
            ->leftJoin('category','collect_article.cate_id','=','category.cate_id')
            ->where('collect_article.cate_pid', $this->catePId)
            ->limit(6)
            ->orderBy('art_time', 'desc')
            ->get();

        //获取二级分类
        $data['navCategory'] = $this->categoryData
            ->where('cate_pid', $this->catePId)
            ->take(8)
            ->get();

        //获取友情链接
        $data['links'] = $this->linksData
            ->where('status', 1)
            ->get();

        return view($this->templateMath.'.content', compact('data'));
    }

    //根据标题获取百度下拉词
    public function getXiaLaCiByTitle()
    {
        if($this->checkrobot()){
            echo '机器人爬虫';
        }else{
            echo '人';
        }
    }

    //根据标题获取百度快照词

    //根据标题抓取百度结果页内容去除标签

    //接收文章评论，写入数据库
    public function pingLun()
    {
        var_dump($this->request->all());
exit;
        $data['art_id'] = $this->request->post('art_id');
        $data['art_title'] = $this->request->post('art_title');
        $data['comment_content'] = $this->request->post('comment_content');
        $data['comment_nick'] = $this->request->post('comment_nick');
        $data['comment_email'] = $this->request->post('comment_email');
        $data['comment_url'] = $this->request->post('comment_url');
        $data['cate_id'] = $this->request->post('cate_id');
        $data['cate_pid'] = $this->request->post('cate_pid');
        $data['comment_id'] = $this->request->post('comment_id');
        $data['create_time'] = time();

        var_dump($data);
        exit;
        $re = Comment::create($data);
        if ($re) {
            return '评论成功';
        } else {
            return 'false';
        }
//        echo 'okssss';
    }

    public function checkRobot($useragent=''){
        static $kw_spiders = array('bot', 'crawl', 'spider' ,'slurp', 'sohu-search', 'lycos', 'robozilla');
        static $kw_browsers = array('msie', 'netscape', 'opera', 'konqueror', 'mozilla');

        $useragent = strtolower(empty($useragent) ? $_SERVER['HTTP_USER_AGENT'] : $useragent);
        if(strpos($useragent, 'http://') === false && $this->dstrpos($useragent, $kw_browsers)) return false;
        if($this->dstrpos($useragent, $kw_spiders)) return true;
        return false;
    }

    public function dstrpos($string, $arr, $returnvalue = false) {
        if(empty($string)) return false;
        foreach((array)$arr as $v) {
            if(strpos($string, $v) !== false) {
                $return = $returnvalue ? $v : true;
                return $return;
            }
        }
        return false;
    }

}
