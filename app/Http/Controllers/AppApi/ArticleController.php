<?php

namespace App\Http\Controllers\AppApi;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Routing\Controller as BaseController;

use App\Http\Model\Article;
use App\Http\Model\Tag;


/**
 * Class ApiController  专门为手机APP请求提供数据封装的接口
 * @package App\Http\Controllers\AppApi
 */
class ArticleController extends BaseController
{
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
//        $input = Input::all();
//        var_dump($input);
//        $callback = Request::input('callback');

        //获取最新的文章  创建事件倒叙
        $articles = Article::orderBy('art_time', 'desc')->get();
        /*
         * {
            status: 0,
            data: {
                    items: [your list]
                }
            }
         * */
        $data['status'] = 0;
        $data['data']['items'] = array(
            'img'=>'http://img3.3lian.com/2013/v9/58/d/25.jpg',
            'number'=>'11'
        );
        return response()->json(json_encode($data));
//        return response()->json($callback);
    }

    //获取热门文章
    public function getHotArticle(){
        //获取最新的文章  创建事件倒叙
        $articles = Article::orderBy('art_view', 'desc')->get();
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
        $cate_id = $input['cate_id'];
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
        $pn = $input['pn'];
//        var_dump($pn);
        //获取最新的文章  创建事件倒叙 ->with查询指定字段
        $articles = Article::orderBy('art_view', 'desc')->where('cate_id', 26)->paginate($perPage = 3, $columns = ['*'], $pageName = 'page', $page = $pn);//paginate分页
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
