<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Routing\Controller as BaseController;

//数据模型引用
use App\Http\Model\Article;
use App\Http\Model\Category;
use App\Http\Model\Tag;
use App\Http\Model\Comment;


/**
 * Class ApiController  专门为手机APP请求提供数据封装的接口
 * @package App\Http\Controllers\AppApi
 */
class ApiController extends BaseController
{
    //获取网站分类顶级栏目列表
    public function getCategoryData(){
        $pics = Category::where('cate_pid', 0)->get();
        //这里的图片URL地址可以遍历处理一下哦

        return response()->json($pics);

    }

     //港湾有巢单页
    public function qiniu_token()
    {
        $bucket = 'mp4-list';
        $accessKey = 'q1njNIB7V5QIxETDckw21XE9eaML17ZoEDlwi1cS';
        $secretKey = 'EMFnwJtXI1iL-PsjFm15nwum7m9gW-2CdOVt17N6';
        $domain = 'p6zwn0l96.bkt.clouddn.com';
        $auth = new Auth($accessKey, $secretKey);
        $upToken = $auth->uploadToken($bucket);
        $ret = array(
            'uptoken' => $upToken,
            'domain' => $domain
        );
        echo json_encode($ret);
        // $this->ajaxReturn($ret);
    }


    //根据顶级栏目id获取二级栏目列表
    public function getTwoCategoryData(){
        //获取到顶级栏目id值先判断是否存在
        $input = Input::all();
//        var_dump($input['categoryId']);
        $pics = Category::where('cate_pid', $input['categoryId'])->get();
        //这里的图片URL地址可以遍历处理一下哦

        return response()->json($pics);
    }

    //getTwoCategoryArticleData获取顶级栏目下的所有二级栏目列表返回
    //获取某个二级栏目下的所有文章列表
    public function getTwoCategoryArticleData(){
        //获取到顶级栏目id值先判断是否存在
        $input = Input::all();
//        var_dump($input['categoryId']);
//        var_dump($input['twoCategoryId']);

        //获取二级栏目列表
//        $pics = Category::where('cate_pid', $input['categoryId'])->get();

        //获取二级栏目列表下的文章
        $articles = Article::where('cate_id', $input['twoCategoryId'])->get();

//        $arr = [$pics, $articles];
        //这里的图片URL地址可以遍历处理一下哦

        return response()->json($articles);
    }


    //获取某个文章
    public function getArticleContent(){
        //获取到顶级栏目id值先判断是否存在
        $input = Input::all();
//        var_dump($input['articleId']);

        //获取二级栏目列表下的文章
        $articles = Article::where('art_id', $input['articleId'])->get();

        //这里的图片URL地址可以遍历处理一下哦
//        $art_content = $articles[0]['art_content'];
//        /*PHP正则替换图片img标记中的任意属性*/
//        // /ueditor/php/upload/image/20170113/1484319522212092.png
//        $str = 'http://jierui303.com/ueditor/php/upload/image/20170113/1484319522212092.png';
//        $str  ='eeeeeee<img src="aaaa.jpg" />asad';
//
//        preg_match('/<img src="(.*?)" \//', $art_content, $result);
//
//        print_r($result);
//
//        var_dump($art_content);

        //获取文章中的所有的图片信息，使用正则匹配

        return response()->json($articles);
    }



    //获取最新文章
    public function getNewArticle(){
        $input = Input::all();
//        var_dump($input);
//        $callback = Request::input('callback');

        //获取最新的文章  创建事件倒叙
        $articles = Article::orderBy('art_dingTime', 'desc')->where('cate_pid', $input['articleId'])->get();
        /*
         * {
            status: 0,
            data: {
                    items: [your list]
                }
            }
         * */
//        $data['status'] = 0;
//        $data['data']['items'] = array(
//            'img'=>'http://img3.3lian.com/2013/v9/58/d/25.jpg',
//            'number'=>'11'
//        );
//        return response()->json(json_encode($data));
        return response()->json($articles);
//        return response()->json($callback);
    }

    //获取热门文章  分页获取
    public function getHotArticle(){
        $input = Input::all();
        //获取最新的文章  创建事件倒叙
        $articles = Article::orderBy('art_view', 'desc')->limit(10)->get();
        foreach($articles as $k=>$v){
            $articles[$k]['art_dingTime'] = time_ago($v['art_dingTime']);
            $articles[$k]['imgArr'] = json_decode(getAllImgUrl($v['art_content']));
        }
        return response()->json($articles);
    }

    //获取轮播文章 最新的3篇
    public function getLunBoArticle(){
        //获取最新的文章  创建事件倒叙
        $articles = Article::orderBy('art_dingTime', 'desc')->limit(3)->get();
        return response()->json($articles);
    }


    //baidu文章链接主动推送
    public function baidutuisong(){
        $input = Input::all();
//        $art_id = $input['art_id'];
        $urls = array(
//            'https://jierui303.com/a/'.$art_id,
            'https://jierui303.com/a/100',
        );
        $api = 'http://data.zz.baidu.com/urls?site=https://jierui303.com&token=Rm7qmM3LwpT8SI7o';
        $ch = curl_init();
        $options =  array(
            CURLOPT_URL => $api,
            CURLOPT_POST => true,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POSTFIELDS => implode("\n", $urls),
            CURLOPT_HTTPHEADER => array('Content-Type: text/plain'),
        );
        curl_setopt_array($ch, $options);
        $result = curl_exec($ch);
        echo $result;

        if ($result) {
            $data = [
                'status' => 0,
                'msg' => '文章主动推送成功!',
            ];
        } else {
            $data = [
                'status' => 1,
                'msg' => '主动推送失败,请稍后重试!',
            ];
        }
        return $data;

    }


    //获取分类下的所有的tag标签及标签id
    public function getTagListArticle()
    {
        $input = Input::all();
//        $cate_id = $input['cate_id'];
        $cate_id = 1;
        $tags = Tag::where('tag_category_id', $cate_id)->get();
        if ($tags) {
            $data = [
                'status' => 0,
                'msg' => 'tag标签获取成功!',
                'tags'=>$tags
            ];
        } else {
            $data = [
                'status' => 1,
                'msg' => 'tag标签获取失败,请稍后重试!',
            ];
        }
        return $data;
    }



    //往下是移动站的接口
    //获取所有文章 m.jierui303.com
    public function getAllHotArticle(){
        $input = Input::all();
//        $pn = $input['pn'];
        $pn = 1;
//        var_dump($pn);
        //获取最新的文章  创建事件倒叙 ->with查询指定字段
        $articles = Article::orderBy('art_view', 'desc')->where('cate_id', 1)->paginate($perPage = 3, $columns = ['*'], $pageName = 'page', $page = $pn);//paginate分页
//        echo '<pre>';
//        var_dump($pn);
//        echo '</pre>';

        $data = array();
        //循环拼接json数组
        foreach ($articles as $k=>$v){
            $data[] = array(
                'title'=>$v['art_title'],
                'time'=>date('Y-m-d', $v['art_dingTime']),
                'img'=>$v['art_thumb'],
                'number'=>$v['art_id']
            );
        }

        return response()->json($data);
//        return response()->json(['number'=>'LaravelAcademy','img'=>'LaravelAcademy.org'])
//            ->setCallback(request()->input('callback'));
    }


}
