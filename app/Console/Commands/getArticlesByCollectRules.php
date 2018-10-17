<?php
namespace App\Console\Commands;

use App\Http\Model\Blog\Category;
use App\Http\Model\Collect\CollectRulesUrlList;
use App\Http\Model\Pictures\Pictures;
use App\Http\Model\Tag;
use App\Http\Model\Collect\CollectRules;
use App\Http\Model\Collect\CollectDuanLuos;
use App\Http\Model\Collect\CollectNews;//news表暂停使用
use App\Http\Model\Collect\CollectArticle;//写入这个表

use App\Http\Requests;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

use QL\QueryList;


class getArticlesByCollectRules extends Command
{

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'getArticlesByCollectRules:putcache';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'getArticlesByCollectRules controller 定时采集文章';

    protected $collect_code;
    protected $collect_title_jquery;
    protected $collect_content_jquery;
    protected $collect_cate_id;
    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $result = (new CollectRulesUrlList())->where('is_collect', 2)->get();

        //获取到了URL地址后 循环获取文章内容
        foreach ($result as $k => $v) {
            $art_lai_yuan_hash = hash('ripemd160', $v['url']);
            $re = (new CollectArticle())->where('art_lai_yuan_hash', $art_lai_yuan_hash)->first();
            if($re){
                (new CollectRulesUrlList())->where('url_hash', crc32($v['url']))->update(array(
                    'is_collect'=>1
                ));
                //如果存在了，跳出循环 ，
                continue;
            }

            $page = $v['url'];

            //判断目标页面字符集编码格式
            if ($v['collect_code'] == 1) {
                //等于0时是utf-8编码
                $sql = (new QueryList())->get($v['url'])->encoding('UTF-8');
            } else {
                //等于1时是gbk2312
                $sql = (new QueryList())->get($v['url'])->encoding('UTF-8', 'GB2312');
            }

            //获取到标题
            $title = $sql->find($v['collect_title_jquery'])->text();
            $content = $sql->find($v['collect_content_jquery'])->htmls();


//            //指定内容采集替换规则
//            $reg = [
//                'content' => [$v['collect_content_jquery'], 'html', 'a', function($content){
//                    //此处可以添加一些 文章到尾部
//                    $content .= '更多关于PHP相关内容感兴趣的读者可查看本站专题：《php curl用法总结》、《PHP网络编程技巧总结》、《PHP数组(Array)操作技巧大全》、《php字符串(string)用法总结》、《PHP数据结构与算法教程》、《php程序设计算法总结》及《PHP运算与运算符用法总结》
//
//希望本文所述对大家PHP程序设计有所帮助。
//
//您可能感兴趣的文章:
//PHP使用curl模拟post上传及接收文件的方法
//PHP基于CURL进行POST数据上传实例
//php curl 上传文件代码实例
//<a href="http://www.jierui303.com">PHP使用curl模拟post上传及接收文件的方法</a>
//<a href="http://www.jierui303.com">PHP基于CURL进行POST数据上传实例</a>
//<a href="http://www.jierui303.com">php curl 上传文件代码实例</a>
//<a href="http://www.jierui303.com">php实现curl模拟ftp上传的方法</a>
//PHP实现通过CURL上传文件功能示例
//PHP使用curl请求实现post方式上传图片文件功能示例';
//
//                    return $content;
//                }]
//            ];
//
//            $rang = '.content';
//
//            $ql = $sql->rules($reg)->range($rang)->query();
//
//            $data = $ql->getData(function($item){
//                //利用回调函数下载文章中的图片并替换图片路径为本地路径
//                //使用本例请确保当前目录下有image文件夹，并有写入权限
//                $content = (new QueryList())->html($item['content']);//重新获取一次内容
//                $content->find('img')->map(function($img){
//                    //把图片下载到服务器 本地
//                    $imgUrl = $img->src;
//                    $imgInfo = pathinfo($imgUrl);
////                    var_dump('<pre>', pathinfo($imgUrl));
//                    //定义采集图片存储路径地址 采集文件夹下对应 图片images 视频videos 文件files
//                    $file = 'collect/images/'.date('Y-m-d');
//                    if(!is_dir($file)){
//                        @mkdir($file, 0777, true);//不存在添加权限
//                    }
////                    var_dump($file);
//                    //采集图片到本地进行存储
//                    $client = new Client(['verify' => false]);  //忽略SSL错误
//                    $data = $client->request('get', $imgUrl)->getBody()->getContents();
//                    //自定义文件名称
//                    $fileName = md5(uniqid(rand()));
//                    $fileSuffixName = $imgInfo['extension'];//后缀
//
//                    file_put_contents($file.'/'.$fileName.'.'.$fileSuffixName, $data);//存储图片
//
//                    //最终的图片URL地址
//                    $imgNewPath = $file.'/'.$fileName.'.'.$fileSuffixName;//此目录就在根目录下的public里
//
//                    //把下载的图片路径保存到数据库中
//                    (new Pictures())->insert(array(
//                        'pic_old_name' => $imgInfo['filename'],
//                        'pic_new_name' => $fileName,
//                        'pic_path' => $imgNewPath,
//                        'cate_id' => '',
//                    ));
//
//                    //给文章添加自定义的seo优化 标签和属性
//                    $img->attr('src', $imgNewPath);//新的图片地址
//                    $img->attr('alt', 'http://jierui303.com/resources/views/home/images/j3.jpg');//设置成功
//                    $img->attr('title', '自定义标题哈哈哈哈');
//                });
//                $item['content'] = $content->find('')->html();
//                $content->destruct();//释放资源
//                return $item;
//            });
//            $sql->destruct();//释放资源
////            var_dump($data->all(), '<br/>');
//            $data = $data->all();
//            $content = $data[0]['content'];//获取到的 最终内容

            $data['art_title'] = preg_replace('/[(\xc2\xa0)|\s]+/', '', $title);//把标题里的中文空格的过滤方法去掉
            $data['art_content'] = $content[0];
            $data['cate_id'] = $v['collect_cate_id'];//关联文章分类id
            $cateInfo = (new Category())->find($v['collect_cate_id'])->toArray();
            $data['cate_pid'] = $cateInfo['cate_pid'];//关联文章顶级分类id
            $data['art_laiYuanUrl'] = $v['url'];
            $data['art_lai_yuan_hash'] = $art_lai_yuan_hash;//生成哈希值
            $data['art_tag'] = '';//tag标签
            $data['art_keywords'] = '';//关键词
            $data['art_description'] = '';//描述
            $data['art_editor'] = '';//作者
            $data['art_view'] = rand(1, 100);//浏览量 可随机出假值
            $data['art_is_recommend'] = rand(1, 2);//是否推荐 1推荐 2不推荐
            $data['art_time'] = time();
            //如果文章内容存在的情况下再采集
            if ($content) {
                $res = (new CollectArticle())->create($data);//返回刚才写入数据库成功的数据信息及ID
                if($res){
                    (new CollectRulesUrlList())->where('url_hash', crc32($v['url']))->update(array(
                        'is_collect'=>1
                    ));
                }
                Log::info('采集标题：' . $data['art_title'] . time());
            }


        }


    }

}