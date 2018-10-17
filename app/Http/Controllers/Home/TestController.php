<?php

namespace App\Http\Controllers\Home;

use App\Http\Model\Blog\Article;
use App\Http\Model\Blog\Category;
use App\Http\Model\Collect\CollectRulesUrlList;
use App\Http\Model\ExternalLinks\ExternalLinks;
use App\Http\Model\Pictures\Pictures;
use App\Http\Model\Tag;
//use App\Http\Model\Caiji;
//use App\Http\Model\CaijiDuanLuos;
//use App\Http\Model\CaijiNews;
//use App\Http\Model\Category;
use App\Http\Model\Collect\CollectRules;
use App\Http\Model\Collect\CollectDuanLuos;
use App\Http\Model\Collect\CollectNews;//news表暂停使用
use App\Http\Model\Collect\CollectArticle;//写入这个表
use App\Http\Model\Links;
use App\Http\Model\Navs;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use QL\QueryList;
use phpQuery;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Log;


use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;

class TestController extends CommonController
{
    protected $collect_code;
    protected $collect_title_jquery;
    protected $collect_content_jquery;
    protected $collect_cate_id;

    public function redisTest()
    {
        return view('admin.admin_new');
//        $redis = app('redis.connection');
//        $redis->set('library', 'predis'); // 存储 key 为 library， 值为 predis 的记录；
////        echo $redis->get('library'); // 获取 key 为 library 的记录值
////        echo '<br/>';
//
//        $caijiRules = (new Caiji())->getAllRules();
//        $redis->set('caiji', serialize($caijiRules));
//        dump($redis->get('caiji'));
//
//        // 清空Redis数据库
//        Redis::flushall();
//
//
//        // redis的string类型
//        Redis::set("laravel","Hello woshi laravel");
//        dump(Redis::get("laravel")) ;
//
//
//        // redis的哈希类型
//        Redis::hmset('happy:huizhou',['name'=>"惠州"]);
//        Redis::hmset("fail:xiaoshou",[
//            "lover" => "黑嘿嘿🙂",
//            'nice' => "我是xiaoshou",
//            '挑衅' => '来打我啊'
//        ]);
//        dump(Redis::hgetall("happy:huizhou"));
//        dump(Redis::hgetall('fail:xiaoshou'));
//        echo "<br/><hr/>";
//
//
//
//        // redis的无序列表
//        Redis::sAdd('huizhou',['小东','小追命','小龙女']);
//        Redis::sAdd('xiaoshou',['小明','小追命','阳光宅猫']);
//        #获取无序集合
//        dump(Redis::smembers('huizhou'));
//        dump(Redis::smembers('xiaoshou'));
//        #获取并集
//        dump(Redis::sunion('huizhou','xiaoshou'));
//        #获取交集
//        dump(Redis::sinter("xiaoshou",'huizhou'));
//        #获取huizhou与xiaoshou的差集
//        dump(Redis::sdiff("xiaoshou",'huizhou'));
//        #获取xiaoshou与huizhou的差集
//        dump(Redis::sdiff('huizhou',"xiaoshou"));
//        echo "<br/><hr/>";
//
//
//        // redis的list链表的使用
//        #栈 -> 先进后出
//        Redis::lpush("list1",'one');
//        Redis::lpush("list1",'two');
//        Redis::lpush("list1",'three');
//        dump(Redis::lrange('list1',0,-1));
//
//        #队列 ->先进先出
//        Redis::rpush('rlist','one');
//        Redis::rpush('rlist','two');
//        Redis::rpush('rlist','three');
//        dump(Redis::lrange("rlist",0,-1));
//        #弹出队列和栈的元素
//        Redis::lpop("list1");
//
//        // redis的有序集合
//        Redis::zadd("zlist",1,"小明");
//        Redis::zadd("zlist",3,"惠州");
//        Redis::zadd("zlist",2,"加藤杰");
//        dump(Redis::zrange("zlist",0,-1));
//        dump(Redis::zrevrange("zlist",0,-1));

    }

    //前台首页
    public function index()
    {
        //文章采集测试
//        getListUrl('http://www.qq.com/');

//        //查询出来数据库中的所有的采集规则URL地址
//        $caijiRules = (new Caiji())->getAllRules();
//        foreach ($caijiRules as $k=>$v){
//            var_dump($v['caiji_name']);//采集任务名称
//            var_dump($v['caiji_list_url']);//采集列表URL
//            var_dump($v['caiji_title_jquery']);//采集标题选择器
//            var_dump($v['caiji_content_jquery']);//采集文章内容选择器
//            echo '<br/>';
//
//            //判断目标页面字符集编码格式
//            if($v['caiji_bianma'] == 0){
//                //等于0时是utf-8编码
//                $ql = QueryList::get($v['caiji_list_url']);
//            }else{
//                //等于1时是gbk2312
//                $ql = QueryList::get($v['caiji_list_url'])->encoding('UTF-8','GB2312');
//            }
//
//            $titles = $ql->find($v['caiji_title_jquery'])->texts(); // 获取网站标题
//            $test = $ql->find($v['caiji_title_jquery'])->attrs('href'); // 获取网站标题
//
//            //获取到了URL地址后 循环获取文章内容
//            foreach ($test as $k1=>$v1){
//                //剔除假的a链接
//                if($v1 !== 'javascript:void(0);'){
//                    //判断目标页面字符集编码格式
//                    if($v['caiji_bianma'] == 0){
//                        //等于0时是utf-8编码
//                        $contents = (new QueryList())->get($v1)->find($v['caiji_content_jquery'])->text();
//                    }else{
//                        //等于1时是gbk2312
//                        $contents = (new QueryList())->get($v1)->encoding('UTF-8','GB2312')->find($v['caiji_content_jquery'])->text();
//                    }
//
//                    $data['art_title'] = $titles[$k1];
//                    $data['art_content'] = $contents;
//                    $data['art_yurl'] = $v1;
//                    $data['art_time'] = time();
//                    //如果文章内容存在的情况下再采集
//                    if($contents){
//                        $re = CaijiNews::create($data);//返回刚才写入数据库成功的数据信息及ID
//                        var_dump($re);
//                    }
//                    //把文字拆分写入数据库 此处按照句号拆分的，实际上要：；！。都要拆分的
//                    //建一个空数组$a，先按句号拆分，存入空数组$a，然后再遍历$a结果，含有：的再次拆分，把拆分出来的结果追加写入$a；
//                    //再次遍历含有；的再次拆分，后面依次判断含有！符号的拆分
//                    $hello = explode('。',$contents);
//
//                    for($index=0;$index<count($hello);$index++)
//                    {
//                        $duan['art_title'] =  $hello[$index];
//                        $duan['art_time'] =  time();
//                        if($duan['art_title']){
//                            $re = CaijiDuanLuos::create($duan);//把拆分出来的文本存入数据库
//                            echo $hello[$index];echo "</br>";
//                        }
//                    }
//                }
//
//            }
//
//            //获取所有分段落的ID，然后随机获取ID及其内容 最好获取和关键词相关的段落
//            $duans = (new CaijiDuanLuos)->tree('seo');
//            $suiDuan = rand(3,5);//内容段数随机控制在3-5段，每段话由随机3-5条，
//            $ziFu = array(':', ';', '!', '"', '"');//随机拼接字符
//            $asciis = array();
//            $suiJuNum = rand(3,6);//组成段落的随机句子数量
//
//            $darr = array();
//            //随机获取一段句子 50条里 轮询随机获取5段话
//            for($i=0;$i<=5;$i++){
//                $tt = $duans[rand(0,count($duans))]['art_title'];
//                $darr[$i] = $tt;
//            }
//            //然后用随机标点符号进行拼接成段落
//            $str = implode($ziFu[rand(0,count($ziFu)-1)], $darr);
//            var_dump($str);
//
//            //把伪原创词存储数据库本地
//        /**
//         * 然后采集任务执行，采集回来一篇文章，进行同义词替换，再进行随机关键词植入，
//         * 随机关键词植入时最好带上a链接跳转地址，这样是可以传递权重的。
//         *
//         */
//        $path = app_path('Http/Controllers/Controller.php');
//        echo $path;
//        $path = base_path('vendor/bin');
//        echo $path;
//        $path = storage_path('app/file.txt');
//        echo $path;

            //同义词近义词替换时，最好是一个词能有多种替换规则 可以随机选择替换


        //随机取了50条
//            foreach($duans as $k=>$v){
//                var_dump($duans[$k]['art_id']);
//                var_dump($duans[$k]['art_title']);
//                echo '<br/>';
                //内容段数随机控制在3-5段，每段话由随机3-5条，
                //不同段落之间用随机字符：；！。等来拼接
                //然后就是在每个随机字符中随机植入关键词和ascii码，最后拼出来最新的文章
                //ascii码带有隐藏标签的
//            }



            //此时$contents是个内容数组
//            var_dump($contents);
            //把内容进行分割段落 一条一条的写入数据库
            //按照。 ； ： ！ 进行段落划分 自动拆分成一段段的文字
            //最后再随机重组成几段话，比如一篇文章限制在300字之间 随机1-10之间随机段数组合一段新的文字，随机2段组合一段，一般三段话OK，判断字数是否达标，不达标继续加入文章
            //达标后可以写入待发布文章库定时发布
            //先判断文字是否包含该字符，然后再以该字符进行分词
            /**
             *比如：新闻源采集，直接采集最新的文章，可以不用伪原创也可以快速收录，蹭热度
             * 如果是行业文章的话，比如压路机
             * 需要找该行业的压路机的文章，进行段落拆分，再随机重组，生成新的文章
             * 那这种行业文章就不适合采集这种方式了
             *
             *
             */
//            $hello = explode('。',$contents[1]);
//
//            for($index=0;$index<count($hello);$index++)
//            {
////                echo $hello[$index];echo "</br>";
//            }



//        }

        $ql = QueryList::get('https://www.jb51.net/list/list_15_1.htm')->encoding('UTF-8','GB2312');

        $test = $ql->find('#contents .main .article-content .artlist dt>a')->text(); // 获取网站标题
        $test_url = $ql->find('#contents .main .article-content .artlist dt>a')->attrs('href'); //获取搜索结果链接列表
        echo '<pre>';
        var_dump($test);
        var_dump($test_url);
        echo '</pre>';


        foreach ($test_url as $k=>$v) {
            $url = "".$v;
            //剔除假的a链接 和 不带http://域名的链接地址
            if ($url !== 'javascript:void(0);') {
                //判断目标页面字符集编码格式
                if ($v['caiji_bianma'] == 0) {
                    //等于0时是utf-8编码
                    $contents = (new QueryList())->get($url)->find('#content')->text();
                } else {
                    //等于1时是gbk2312
                    $contents = (new QueryList())->get($url)->encoding('UTF-8', 'GB2312')->find('#content')->text();
                }

                $data['art_title'] = $test[$k];
                $data['art_content'] = $contents;
                $data['art_yurl'] = $v;
                $data['art_time'] = time();
                //如果文章内容存在的情况下再采集
                if ($contents) {
                    $re = CaijiNews::create($data);//返回刚才写入数据库成功的数据信息及ID
                    var_dump($re);
                }
            }

        }


        $ql->find('meta[name=keywords]')->content; // 获取网站头部关键词

        $ql->find('h3>a')->texts(); //获取搜索结果标题列表
        $ql->find('h3>a')->attrs('href'); //获取搜索结果链接列表

        $ql->find('img')->src; //获取第一张图片的链接地址
        $ql->find('img:eq(1)')->src; //获取第二张图片的链接地址
        $ql->find('img')->eq(2)->src; //获取第三张图片的链接地址
        // 遍历所有图片
        $ql->find('img')->map(function($img){
            echo $img->alt;  //打印图片的alt属性
        });

        //元素选择器
        //获取标题，URL地址，内容

        //首先抓取文章列表的标题和URL地址
        //其次循环遍历文章URL地址抓取文章内容和图片




        echo '<br/>Jerry303_memcached<br/>';
        echo '<hr/>';
        return view('web.canvas');
    }

    //获取百度下拉词+相关搜索词+为您推荐
    public function getBaiDuXLword($keyword)
    {
//        $kk = (new Tag())->get();
//
//        foreach($kk as $k=>$value){
//            echo '<pre>';
//            var_dump($value['tag_name']);
//            echo '</pre>';
//
//        }
        $urlxialaci = 'https://sp0.baidu.com/5a1Fazu8AA54nxGko9WTAnF6hhy/su?wd='.$keyword;

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $urlxialaci);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.11 (KHTML, like Gecko) Chrome/23.0.1271.1 Safari/537.11');
        $res = curl_exec($ch);
        curl_close($ch);
        $outPageTxt = mb_convert_encoding($res, 'utf-8','GB2312');
        var_dump($outPageTxt);



        $url = 'https://www.baidu.com/s?wd='.$keyword;
        $ql = QueryList::get($url);

        $xiangguansousuo = $ql->find('#rs a')->texts();
        $weinituijian = $ql->find('.hint_toprq_tips_items a')->texts();
        $guanggaoci = $ql->find('.EDjWbK .YhVALH h3 a')->texts();
        $baidukuaizhao = $ql->find('.c-container h3 a')->texts();
        $test = $ql->find('#rs a')->attrs('href');

        echo '<h3>相关搜素：</h3>';
        foreach ($xiangguansousuo as $k=>$v){
            echo '<a href="http://www.jierui303.com/getBaiDuXLword/'.$v.'/">'.$v.'</a><br/>';
            //把词加入到tag里面
        }
        echo '<h3>为你推荐：</h3>';
        foreach ($weinituijian as $k=>$v){
            echo '<a href="http://www.jierui303.com/getBaiDuXLword/'.$v.'/">'.$v.'</a><br/>';
            //把词加入到tag里面
        }
        echo '<h3>广告词：</h3>';
        foreach ($guanggaoci as $k=>$v){
            echo '<a href="http://www.jierui303.com/getBaiDuXLword/'.$v.'/">'.$v.'</a><br/>';
            //把词加入到tag里面
        }
        echo '<h3>百度快照：</h3>';
        foreach ($baidukuaizhao as $k=>$v){
            echo '<a href="http://www.jierui303.com/getBaiDuXLword/'.$v.'/">'.$v.'</a><br/>';
            //把词加入到tag里面
        }
//        var_dump($weinituijian);
//        var_dump($guanggaoci);
//        var_dump($baidukuaizhao);
//        var_dump($test);

//        $str = '<a href="http://www.jierui303.com/getBaiDuXLword/农村看坟地绝招/">农村看坟地绝招</a><br/><a href="http://www.jierui303.com/getBaiDuXLword/好的祖坟风水几年见效/">好的祖坟风水几年见效</a><br/><a href="http://www.jierui303.com/getBaiDuXLword/住宅风水图解100例/">住宅风水图解100例</a><br/><a href="http://www.jierui303.com/getBaiDuXLword/阳宅风水化解/">阳宅风水化解</a><br/><a href="http://www.jierui303.com/getBaiDuXLword/风水物品/">风水物品</a><br/><a href="http://www.jierui303.com/getBaiDuXLword/中央破坏四川龙脉风水/">中央破坏四川龙脉风水</a><br/><a href="http://www.jierui303.com/getBaiDuXLword/床底下放什么旺财/">床底下放什么旺财</a><br/><a href="http://www.jierui303.com/getBaiDuXLword/大富贵坟地风水顺口溜/">大富贵坟地风水顺口溜</a><br/><a href="http://www.jierui303.com/getBaiDuXLword/风水上最快聚财的方法/">风水上最快聚财的方法</a><br/><a href="http://www.jierui303.com/getBaiDuXLword/房屋风水禁忌与破解/">房屋风水禁忌与破解</a><br/><a href="http://www.jierui303.com/getBaiDuXLword/祖坟风水好有哪些征兆/">祖坟风水好有哪些征兆</a><br/><a href="http://www.jierui303.com/getBaiDuXLword/风水上最快聚财的方法/">风水上最快聚财的方法</a><br/><a href="http://www.jierui303.com/getBaiDuXLword/中央破坏四川龙脉风水/">中央破坏四川龙脉风水</a><br/><a href="http://www.jierui303.com/getBaiDuXLword/床底下放什么旺财/">床底下放什么旺财</a><br/><a href="http://www.jierui303.com/getBaiDuXLword/农村住宅风水100条禁忌/">农村住宅风水100条禁忌</a><br/><a href="http://www.jierui303.com/getBaiDuXLword/风水_百度百科/">风水_百度百科</a><br/><a href="http://www.jierui303.com/getBaiDuXLword/祥安阁风水网 - 让你了解风水学,家居风水禁忌,办公室风水知识/">祥安阁风水网 - 让你了解风水学,家居风水禁忌,办公室风水知识</a><br/><a href="http://www.jierui303.com/getBaiDuXLword/风水学入门、风水知识,解析家居、卧室及办公室等风水 - 第一星座网/">风水学入门、风水知识,解析家居、卧室及办公室等风水 - 第一星座网</a><br/><a href="http://www.jierui303.com/getBaiDuXLword/中国高端风水-深圳风水大师|风水讲座视频|风水学入门培训|家居.../">中国高端风水-深圳风水大师|风水讲座视频|风水学入门培训|家居...</a><br/><a href="http://www.jierui303.com/getBaiDuXLword/风水的依据是什么? - 知乎/">风水的依据是什么? - 知乎</a><br/><a href="http://www.jierui303.com/getBaiDuXLword/周易天地-风水,易经,免费算命,奇门遁甲,周易占卜,起名,手相面相(.../">周易天地-风水,易经,免费算命,奇门遁甲,周易占卜,起名,手相面相(...</a><br/><a href="http://www.jierui303.com/getBaiDuXLword/商业风水 - 祥安阁风水网/">商业风水 - 祥安阁风水网</a><br/><a href="http://www.jierui303.com/getBaiDuXLword/风水开运_家居风水_办公室风水-非常运势/">风水开运_家居风水_办公室风水-非常运势</a><br/><a href="http://www.jierui303.com/getBaiDuXLword/风水_高清视频在线观看_电影网/">风水_高清视频在线观看_电影网</a><br/><a href="http://www.jierui303.com/getBaiDuXLword/风水_百度汉语/">风水_百度汉语</a><br/>';
//        echo(htmlspecialchars($str).'<br>');
//        echo(strip_tags($str));


        //定时查询关键词排位
//        getListUrl();


    }

    //查询关键词排名并更新到数据库中，定时定点查询
    public function checkArticlePaiMing()
    {
        //第一页pn=10  第二页pn=20 第三页pn=30  ...第10页pn=100
        $subMenu = array(
            '北京seo优化',
            '北京seo营销外包',
            '北京黑帽seo',
            '北京优化工作室',
            '北京黑帽seo平台',
            '北京黑帽seo公司',
            '北京快速黑帽seo',
            'seo外包工作室',
            '草应北京seo外包',
            '北京网站seo',
            'seo北京',
            '北京seo优化网络推广',
            'linux 打包svn项目',
            '编程教学app',
            'laravel 读取数据库时间 少了八小时',
            'svn post-commit有时候不覆盖文件',
            'laravel storage 获取文件路径',
            'laravel 取storage下路径',
        );
//        $submenu = [];
//        $submenus = Tag::get();
//        foreach($submenus as $k=>$v){
//            if($v['tag_name']){
//                $submenu[] = $v['tag_name'];
//            }
//        }

//        set_time_limit(10);
//        ob_end_clean();     //在循环输出前，要关闭输出缓冲区
//        echo ob_get_level();
//
//        echo str_pad('',1024);     //浏览器在接受输出一定长度内容之前不会显示缓冲输出，这个长度值 IE是256，火狐是1024
//        for($i=1;$i<=100;$i++){
//            echo $i.'<br/>';
//            flush();    //刷新输出缓冲
//            sleep(1);
//        }
//
//
//        die;
        //默认只差 前三页
        $p = 3;

        for($i=0;$i<count($subMenu);$i++){
            $keyword = '北京seo优化';
//            var_dump($submenu[$i]);
//            var_dump($i);
            $keyword = $subMenu[$i];//一个词先查三页
            $data = [];
            $a = 0;
            do {
                //分页获取URL地址列表
                $urlBaiDu = 'http://www.baidu.com/s?wd='.$keyword.'&pn=10';
                $ql = (new QueryList())->get($urlBaiDu);

                $strTime = $ql->find('#content_left .result .f13 a.c-showurl')->texts();//10条结果
                $kuaiZhaoUrls = $ql->find('#content_left .result .f13 a:nth-child(4).m')->attrs('href');//10条结果
                $ql->destruct();
//                echo '<pre>';
//                var_dump($strTime);
//                echo '</pre>';
//                var_dump('<pre>', $kuaiZhaoUrls, '<br/>');
                $data[] = array(
                    'strTime' => $strTime,
                    'kuaiZhaoUrls' => $kuaiZhaoUrls,
                );
                $a += 10;
            } while ($a<=30);

//            var_dump('<pre>', $data, '<br/>');

            $res = $this->getPaiMingNum($data);
            if($res){
                echo $res.'<br/>';
            }else{
                echo '空白<br/>';
            }
            //sleep(3);

//            break;
        }

    }

    public function getPaiMingNum($data)
    {
        $result = '';

        $a = 0;
        do{
            $strTime = $data[$a]['strTime'];
            //当 查询结果为空时 跳出此次循环 继续下个词查询
            if(count($strTime) <= 0){
                continue;
            }
            foreach($strTime as $k=>$v){
                if(strpos($v, 'jierui303.com') !== false){
                    $result .= ','.($a+1)*10+($k+1);
//                    echo '===第 '.($k+1).'位  == 包含jierui303.com，参与排名页面地址为：==============<br/>';

                }else{
//                    echo $k.'<br/>';
//                    echo '===第 0 位 无排名  == 不包含jierui303.com<br/>';
                }
                continue;
            }
            $a++;
        }while($a < count($data));

        return $result;
    }

    public function chaPaiMing($keyword)
    {
        $urlBaiDu = 'http://www.baidu.com/s?wd='.$keyword;
        $ql = (new QueryList())->get($urlBaiDu);

        $strTime = $ql->find('#content_left .result .f13 a.c-showurl')->texts();//10条结果
        $kuaiZhaoUrls = $ql->find('#content_left .f13 a.m')->attrs('href');//10条结果
//        echo '<pre>';
//        var_dump($kuaiZhaoUrls);
//        echo '</pre>';
//        echo '<br/>';die;
//        $strTime = 'seo.jierui303.com/';
        $data = [];
        foreach($strTime as $k=>$v){
//            echo '================='.$v.'<br>';
            if(strpos($v, 'jierui303.com') !== false){
                //需要获取被收录的页面的url地址 通过获取到百度快照地址来获取url地址
                $kuaiZhaoUrl = $kuaiZhaoUrls[$k];//对应的快照地址
                //请求快照地址获取真正的排名url地址
                $qlKZ = (new QueryList())->get($kuaiZhaoUrl)->encoding('GB2312');
                $slTime = $qlKZ->find('#bd_snap_note a')->attrs('href');
//                        var_dump($slTime);echo '<br/>';die;
//                $data[] = '第 '.$k.'位  == 包含jierui303.com，参与排名页面地址为：'.$slTime[0].'<br/>';
                echo $keyword.'===第 '.$k.'位  == 包含jierui303.com，参与排名页面地址为：'.$slTime[0].'<br/>';
            }else{
//                echo '不包含jierui303.com<br/>';
                continue;
            }
        }

//        return $data;
    }


    //查询文章的收录情况==已测OK
    public function getArticleSouLu()
    {
        $articleLists = (new Article())->getAllArticleCheckSouLu();
        foreach($articleLists as $k=>$v){
            $url = "http://jierui303.com/a/".$v['art_id'];

            $urlBaiDu = 'http://www.baidu.com/s?wd='.urlencode($url);
            $ql = (new QueryList())->get($urlBaiDu);
            $strTime = $ql->find('#container .head_nums_cont_inner .nums_text')->text();

            $kz_pattern = "/百度为您找到相关结果约(.*)个/"; /*用以匹配查询结果数量*/

            preg_match($kz_pattern,$strTime,$temp);
//            echo '<pre>';
//            var_dump($temp);
//            echo '</pre>';
////            var_dump($strTime);
//            die;

            if($temp[1] <= 0){
                echo $url.'未收录<br/>';
                continue;

            }else{
                //获取到文章收录快照地址
                $kuaiZhaoUrl = $ql->find('#content_left .f13 a.m')->attrs('href');
//                var_dump($kuaiZhaoUrl[0]);
//                echo '<br/>';

                //访问快照地址 获取快照时间
                $qlKZ = (new QueryList())->get($kuaiZhaoUrl[0])->encoding('GB2312');
                $slTime = $qlKZ->find('#bd_snap_txt span:nth-child(2)')->text();
//                echo $slTime;

                //去数据库更新文章的收录情况及收录时间
                echo $url.'已收录  ========  收录时间：'.strtotime($slTime).'<br/>';
            }


        }

        /**
         * 别用定时任务了
        做个守护进程  用类似迭代队列的方式
        做个两个阀值  数量和间隔时间
        每间隔几秒迭代更新一定的数量
         * 就是不要一口气弄出来去循环更新
        比如你有一百万的词量  每次取1000条出来更新一下  更新完你就sleep个几秒再执行
         * 守护进程就是死循环
         */

    }


    //采集文章URL地址及标题和内容==已测OK
    public function getCollectArticle()
    {

        //根据采集地址进行文章采集  已采集过的url地址不能重复写入数据库
        $collectRules = (new CollectRules())->getAllRules();

        $result = [];
        foreach ($collectRules as $k => $v) {
            //根据采集规则的开启或关闭状态来进行控制是否执行
            if($v['collect_is_open'] == 2){
                //采集开关 是否开启 1开启 2关闭
                continue;
            }
            var_dump('<pre>', $v['collect_list_url'], '<br/>');

            //判断是否开启分页采集
            if($v['collect_is_open_page'] == 1){
                //开启 需要进行页码替换和新增遍历 默认从第一页开始采集
//                var_dump('<pre>', '多页采集=='.$v['collect_url_jquery'], '<br/>');
                $a = $this->multiplePageCollect($v);
                if($a == 'ok'){
                    echo '单页采集=='.$v['collect_list_url'].'已经采集完成<br/>';
                }
            }else{
                //关闭，不需要页码新增，直接采集当前页面URL地址即可
//                var_dump('<pre>', '单页采集=='.$v['collect_url_jquery'], '<br/>');
                $a = $this->singlePageCollect($v);
                if($a == 'ok'){
                    echo '单页采集=='.$v['collect_list_url'].'已经采集完成<br/>';
                }
            }

        }

    }

    public function singlePageCollect($v)
    {
        $collect_id = $v['collect_id'];
        $collect_list_url = $v['collect_list_url'];
        $collect_page_total = 1;//单页采集
        $collect_code = $v['collect_code'];
        $collect_url_jquery = $v['collect_url_jquery'];
        $collect_url_attr_id = $v['collect_url_attr_id'];
        $collect_title_jquery = $v['collect_title_jquery'];
        $collect_content_jquery = $v['collect_content_jquery'];
        $collect_cate_id = $v['collect_cate_id'];

        $data = [];
        //判断目标页面字符集编码格式
        if ($collect_code == 1) {
            //等于0时是utf-8编码
            $ql = (new QueryList())->get($collect_list_url)->encoding('UTF-8');
        } else {
            //等于1时是gbk2312
            $ql = (new QueryList())->get($collect_list_url)->encoding('GB2312');
        }

        //获取列表url值属性
        switch($collect_url_attr_id){
            case 1://text():获取元素内的纯文本
                $data[] = $ql->find($collect_url_jquery)->text(); //获取搜索结果标题列表
                break;
            case 2://content:获取元素内的所有内容
                $data[] = $ql->find($collect_url_jquery)->content; //获取搜索结果标题列表
                break;
            case 3://texts():获取所有的纯文本
                $data[] = $ql->find($collect_url_jquery)->texts(); //获取搜索结果标题列表
                break;
            case 4://attrs('href'):获取a链接的href地址
                $result = $ql->find($collect_url_jquery)->attrs('href'); //获取搜索结果标题列表
                //获取到的URL地址不存在域名的话，手动拼接并返回
                foreach ($result as $k2=>$v2){
                    if (!preg_match('/(http:\/\/)|(https:\/\/)/i', $v2)) {
                        $urlInfo = parse_url($collect_list_url);
                        $result[$k2] = $urlInfo['scheme'].'://'.$urlInfo['host'].parse_url($v2)['path'];
                    }
                }
                    echo 'aaaa<br/>';
                    var_dump($result, '<br/>');
                //轮询写入数据库
                foreach ($result as $k2=>$v2){
                    //新增之前先查询是否有重复的
                    $url_hash = crc32($v2);
                    $re = (new CollectRulesUrlList())->where('url_hash', $url_hash)->first();
                    if($re){
                        //如果存在了，跳出循环
                        continue;
                    }
                    (new CollectRulesUrlList())->insert(array(
                        'collect_rules_id' => $collect_id,
                        'url' => $v2,
                        'collect_page_num' => $collect_page_total,
                        'collect_code' => $collect_code,
                        'collect_title_jquery' => $collect_title_jquery,
                        'collect_content_jquery' => $collect_content_jquery,
                        'collect_cate_id' => $collect_cate_id,
//                        'url_hash' => hash('ripemd160', $v2),//把URL地址转换成hash便于后续查询
                        'url_hash' => crc32($v2),//把URL地址转换成hash便于后续查询
                    ));
                }

                unset($result);
                phpQuery::$documents = array();
                break;
            case 5://src:获取src的URL地址
                $data[] = $ql->find($collect_url_jquery)->src; //获取搜索结果标题列表
                break;
            case 6://alt:获取img的alt属性值
                $data[] = $ql->find($collect_url_jquery)->alt; //获取搜索结果标题列表
                break;
            default:
                $data[] = [];
                break;
        }

        return 'ok';
    }

    public function multiplePageCollect($v)
    {
        $collect_id = $v['collect_id'];
        $collect_list_url = $v['collect_list_url'];
        $collect_page_total = $v['collect_page_total'];
        $collect_code = $v['collect_code'];
        $collect_url_jquery = $v['collect_url_jquery'];
        $collect_url_attr_id = $v['collect_url_attr_id'];
        $collect_title_jquery = $v['collect_title_jquery'];
        $collect_content_jquery = $v['collect_content_jquery'];
        $collect_cate_id = $v['collect_cate_id'];

        //开启 需要进行页码替换和新增遍历 默认从第一页开始采集
        $data = [];
        for($i=1; $i<=$collect_page_total+1; $i++){
            if($i > $collect_page_total){
                return 'ok';
            }
            $url = preg_replace("/@/", $i, $collect_list_url);
            var_dump($url, '<br/>');

            //判断目标页面字符集编码格式
            if ($collect_code == 1) {
                //等于0时是utf-8编码
                $ql = (new QueryList())->get($url)->encoding('UTF-8');
            } else {
                //等于1时是gbk2312
                $ql = (new QueryList())->get($url)->encoding('GB2312');
            }

            //获取列表url值属性
            switch($collect_url_attr_id){
                case 1://text():获取元素内的纯文本
                    $data[] = $ql->find($collect_url_jquery)->text(); //获取搜索结果标题列表
                    break;
                case 2://content:获取元素内的所有内容
                    $data[] = $ql->find($collect_url_jquery)->content; //获取搜索结果标题列表
                    break;
                case 3://texts():获取所有的纯文本
                    $data[] = $ql->find($collect_url_jquery)->texts(); //获取搜索结果标题列表
                    break;
                case 4://attrs('href'):获取a链接的href地址
                    $result = $ql->find($collect_url_jquery)->attrs('href'); //a连接地址
//                    $phpQueryObj = phpQuery::newDocumentFile($url);
//                    $result = pq($collect_url_jquery, $phpQueryObj)->attrs('href');//a连接地址

                    //获取到的URL地址不存在域名的话，手动拼接并返回
                    foreach ($result as $k2=>$v2){
                        if (!preg_match('/(http:\/\/)|(https:\/\/)/i', $v2)) {
                            $urlInfo = parse_url($url);
                            $result[$k2] = $urlInfo['scheme'].'://'.$urlInfo['host'].parse_url($v2)['path'];
                        }
                    }

                    //轮询写入数据库
                    foreach ($result as $k2=>$v2){
                        //新增之前先查询是否有重复的
                        $url_hash = crc32($v2);
                        $re = (new CollectRulesUrlList())->where('url_hash', $url_hash)->first();
                        if($re){
                            //如果存在了，跳出循环
                            continue;
                        }
                        (new CollectRulesUrlList())->insert(array(
                            'collect_rules_id' => $collect_id,
                            'url' => $v2,
                            'collect_page_num' => $i,
                            'collect_code' => $collect_code,
                            'collect_title_jquery' => $collect_title_jquery,
                            'collect_content_jquery' => $collect_content_jquery,
                            'collect_cate_id' => $collect_cate_id,
//                            'url_hash' => hash('ripemd160', $v2),//把URL地址转换成hash便于后续查询
                            'url_hash' => crc32($v2),//把URL地址转换成hash便于后续查询
                        ));
                    }

//                    $data[] = $result;
//                    echo 'aaaa<br/>';
//                    var_dump($result, '<br/>');
                    unset($result);
                    phpQuery::$documents = array();
                    break;
                case 5://src:获取src的URL地址
                    $data[] = $ql->find($collect_url_jquery)->src; //获取搜索结果标题列表
                    break;
                case 6://alt:获取img的alt属性值
                    $data[] = $ql->find($collect_url_jquery)->alt; //获取搜索结果标题列表
                    break;
                default:
                    $data[] = [];
                    break;
            }
        }
    }

    public function getArticlesByCollectRules()
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

            $page = 'http://seo.jierui303.com/a/43';
            $articleContent = '.article-content';
            $page = 'https://mbd.baidu.com/newspage/data/landingsuper?context=%7B%22nid%22%3A%22news_16951399576238984212%22%7D&n_type=0&p_from=1';
            $articleContent = '#left-container';
//            $this->getcollectAddContent('http://seo.jierui303.com/a/43', '.article-content');
//            $this->getcollectAddContent('https://www.jb51.net/article/137482.htm', '#content');
            $this->getcollectAddContent($page, $articleContent);
            //总结原因：内容标签有问题，没有获取到内容 所以获取不到里面的图片标签，此处 暂停
            exit;

            var_dump('<pre>', $page, '<br/>');

            $sqlAll = (new QueryList())->get($page);

            //判断目标页面字符集编码格式
            if ($v['collect_code'] == 1) {
                //等于0时是utf-8编码
                $ql = $sqlAll->encoding('UTF-8');
            } else {
                //等于1时是gbk2312
                $ql = $sqlAll->encoding('UTF-8', 'GB2312');
            }

            //获取到标题
            $title = $ql->find($v['collect_title_jquery'])->text();
            var_dump('<pre>', $title, '<br/>');

            //指定内容采集替换规则
            $reg = [
                'content' => [$v['collect_content_jquery'], 'html', 'a', function($content){
                    //此处可以添加一些 文章到尾部
                    $content .= '更多关于PHP相关内容感兴趣的读者可查看本站专题：《php curl用法总结》、《PHP网络编程技巧总结》、《PHP数组(Array)操作技巧大全》、《php字符串(string)用法总结》、《PHP数据结构与算法教程》、《php程序设计算法总结》及《PHP运算与运算符用法总结》

希望本文所述对大家PHP程序设计有所帮助。

您可能感兴趣的文章:
PHP使用curl模拟post上传及接收文件的方法
PHP基于CURL进行POST数据上传实例
php curl 上传文件代码实例
<a href="http://www.jierui303.com">PHP使用curl模拟post上传及接收文件的方法</a>
<a href="http://www.jierui303.com">PHP基于CURL进行POST数据上传实例</a>
<a href="http://www.jierui303.com">php curl 上传文件代码实例</a>
<a href="http://www.jierui303.com">php实现curl模拟ftp上传的方法</a>
PHP实现通过CURL上传文件功能示例
PHP使用curl请求实现post方式上传图片文件功能示例';

                    return $content;
                }]
            ];

            $rang = '.content';

            $sql = (new QueryList())->get($page)->rules($reg)->range($rang)->query();
            var_dump('<pre>', $sql->getData(), '<br/>');

            //获取内容并数据处理
            $data = $sql->getData(function($item){
                //利用回调函数下载文章中的图片并替换图片路径为本地路径
                //使用本例请确保当前目录下有image文件夹，并有写入权限
                $content = (new QueryList())->html($item['content']);//重新获取一次内容
                //监测内容中是否 存在图片标签，存在的话，执行下载图片到本地
                var_dump('<pre>', $content->find('img'));
                if($content->find('img')){
                    echo '存在图片';
                    //存在图片标签，存在的话，执行下载图片到本地
                    $content->find('img')->map(function($img){
                        //把图片下载到服务器 本地
                        $imgUrl = $img->src;
                        $imgInfo = pathinfo($imgUrl);
//                    var_dump('<pre>', pathinfo($imgUrl));
                        //定义采集图片存储路径地址 采集文件夹下对应 图片images 视频videos 文件files
                        $file = 'collect/images/'.date('Y-m-d');
                        if(!is_dir($file)){
                            @mkdir($file, 0777, true);//不存在添加权限
                        }
//                    var_dump($file);
                        //采集图片到本地进行存储
                        $client = new Client(['verify' => false]);  //忽略SSL错误
                        $data = $client->request('get', $imgUrl)->getBody()->getContents();
                        //自定义文件名称
                        $fileName = md5(uniqid(rand()));
                        $fileSuffixName = $imgInfo['extension'];//后缀

                        file_put_contents($file.'/'.$fileName.'.'.$fileSuffixName, $data);//存储图片

                        //最终的图片URL地址
                        $imgNewPath = $file.'/'.$fileName.'.'.$fileSuffixName;//此目录就在根目录下的public里

                        //把下载的图片路径保存到数据库中
                        (new Pictures())->insert(array(
                            'pic_old_name' => $imgInfo['filename'],
                            'pic_new_name' => $fileName,
                            'pic_path' => $imgNewPath,
                            'cate_id' => '',
                        ));

                        //给文章添加自定义的seo优化 标签和属性
                        $img->attr('src', $imgNewPath);//新的图片地址
                        $img->attr('alt', 'http://jierui303.com/resources/views/home/images/j3.jpg');//设置成功
                        $img->attr('title', '自定义标题哈哈哈哈');
                    });

                }else{
                    //不存在图片的话，随机获取一张图片加进去
                    echo '不存在图片';

                }

                $item['content'] = $content->find('')->html();
//                $content->destruct();//释放资源
                return $item;
            });
            exit;
//            $sql->destruct();//释放资源
//            var_dump($data->all(), '<br/>');
            $data = $data->all();
            var_dump($data, '<br/>');exit;

            $content = $data[0]['content'];//获取到的 最终内容

            $data['art_title'] = preg_replace('/[(\xc2\xa0)|\s]+/', '', $title);//把标题里的中文空格的过滤方法去掉
            $data['art_content'] = $content;
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

            exit;

        }

    }

    public function getAllUrl()
    {
        //进行URL转化   变成完整的URL路径才能进行采集

    }

    public function getcollectAddContent($page, $articleContent)
    {
        var_dump('<pre>',$page,'<br/>');
        var_dump('<pre>',$articleContent,'<br/>');

        $reg = [
            'content' => [$articleContent, 'html', 'a', function($content){
                //此处可以添加一些 文章到尾部
                $content .= '此处可以添加一些 文章到尾部';

                return $content;
            }]
        ];

        $rang = '.content';

//        $ql = (new QueryList())->get($page)->encoding('UTF-8')->rules($reg)->range($rang)->query();
        $ql = (new QueryList())->get($page)->encoding('UTF-8')->rules($reg)->query();

//        $content = (new QueryList())->get($page)->encoding('UTF-8')->find($articleContent)->htmls();
//        var_dump('<pre>',$content);

        $data = $ql->getData(function($item){
            //利用回调函数下载文章中的图片并替换图片路径为本地路径
            //使用本例请确保当前目录下有image文件夹，并有写入权限
            $content = (new QueryList())->html($item['content']);//重新获取一次内容
            var_dump('<pre>',$content);

//            var_dump('<pre>', $content->find('img'));
            $imgs = $content->find('img')->attrs('src');
            var_dump('<pre>',$imgs);
            if($content->find('img')){
                echo '存在图片';
                $imgs = $content->find('img')->attrs('src');
                var_dump('<pre>',$imgs);
                $content->find('img')->map(function($img){
                    //把图片下载到服务器 本地
                    $imgUrl = $img->src;
                    $imgInfo = pathinfo($imgUrl);
                    var_dump('<pre>', pathinfo($imgUrl));
                    //定义采集图片存储路径地址 采集文件夹下对应 图片images 视频videos 文件files
                    $file = 'collect/images/'.date('Y-m-d');
                    if(!is_dir($file)){
                        @mkdir($file, 0777, true);//不存在添加权限
                    }
                    var_dump($file);
                    /**
                     * 图片路径规则
                     * https://ss0.baidu.com/6ONWsjip0QIZ8tyhnq/it/u=1338099588,686474673&fm=173&app=25&f=JPEG?w=640&h=389&s=BF965F8044DACBC00439A1540300A0BB
                     *
                     */
                    //采集图片到本地进行存储
                    $client = new Client(['verify' => false]);  //忽略SSL错误
                    $data = $client->request('get', $imgUrl)->getBody()->getContents();
                    $code = $client->request('get', $imgUrl)->getStatusCode(); // 200
                    $reason = $client->request('get', $imgUrl)->getReasonPhrase(); // OK
                    $ContentLength = $client->request('get', $imgUrl)->getHeader('Content-Length'); // OK
                    $ContentType = $client->request('get', $imgUrl)->getHeader('content-type'); // OK
                    var_dump($code, $reason, $ContentLength, $ContentType);
                    $fileExtension = '';
                    //获取符合 条件的MIME类型
                    if(in_array($ContentType, ['image/jpeg'])){
                        $fileExtension = 'jpg';
                    }else{
                        $fileExtension = 'jpg';
                    }
                    //此处使用响应头信息里的content-type类型来判断 文件的后缀名
//                    $contenttype = $client->request('get', $imgUrl)->getHeader('content-type');
                    //自定义文件名称
                    $fileName = md5(uniqid(rand()));
//                    $fileSuffixName = $imgInfo['extension'];//后缀名
                    $fileSuffixName = $fileExtension;//后缀名

                    file_put_contents($file.'/'.$fileName.'.'.$fileSuffixName, $data);//存储图片

                    //把下载的图片路径保存到数据库中   域名应该和它采集所属分类相一致
                    $imgNewPath = $file.'/'.$fileName.'.'.$fileSuffixName;//此目录就在根目录下的public里

                    (new Pictures())->insert(array(
                        'pic_old_name' => $imgInfo['filename'],
                        'pic_new_name' => $fileName,
                        'pic_path' => $imgNewPath,
                        'cate_id' => '1',
                        'cate_pid' => '1',
                    ));

                    //给文章添加自定义的seo优化 标签和属性
                    $img->attr('src', $imgNewPath);//新的图片地址
                    $img->attr('alt', 'http://jierui303.com/resources/views/home/images/j3.jpg');//设置成功
                    $img->attr('title', '自定义标题哈哈哈哈');
                });
            }else{
                echo '不存在吐泡泡';
            }

            $item['content'] = $content->find('')->html();
            $content->destruct();//释放资源
            return $item;
        });
        $ql->destruct();//释放资源
        exit;
//        var_dump($data->all(), '<br/>');
        $data = $data->all();
        $content = $data[0]['content'];
        var_dump($content, '<br/>');
    }

    public function collectAddContent()
    {
//        header("content-type: text/html; charset=utf-8");

        $page = 'http://seo.jierui303.com/a/43';

        $reg = [
            'content' => ['.article-content', 'html', 'a', function($content){
                //此处可以添加一些 文章到尾部
                $content .= '此处可以添加一些 文章到尾部';

                return $content;
            }]
        ];

        $rang = '.content';

        $ql = (new QueryList())->get($page)->encoding('UTF-8')->rules($reg)->range($rang)->query();

        $data = $ql->getData(function($item){
            //利用回调函数下载文章中的图片并替换图片路径为本地路径
            //使用本例请确保当前目录下有image文件夹，并有写入权限
            $content = (new QueryList())->html($item['content']);//重新获取一次内容
//            var_dump('<pre>', $content->find('img'));
            if($content->find('img')){
                $content->find('img')->map(function($img){
                    //把图片下载到服务器 本地
                    $imgUrl = $img->src;
                    $imgInfo = pathinfo($imgUrl);
//                var_dump('<pre>', pathinfo($imgUrl));
                    //定义采集图片存储路径地址 采集文件夹下对应 图片images 视频videos 文件files
                    $file = 'collect/images/'.date('Y-m-d');
                    if(!is_dir($file)){
                        @mkdir($file, 0777, true);//不存在添加权限
                    }
//                var_dump($file);
                    //采集图片到本地进行存储
                    $client = new Client(['verify' => false]);  //忽略SSL错误
                    $data = $client->request('get', $imgUrl)->getBody()->getContents();
                    //自定义文件名称
                    $fileName = md5(uniqid(rand()));
                    $fileSuffixName = $imgInfo['extension'];//后缀

                    file_put_contents($file.'/'.$fileName.'.'.$fileSuffixName, $data);//存储图片

                    //把下载的图片路径保存到数据库中   域名应该和它采集所属分类相一致
                    $imgNewPath = $file.'/'.$fileName.'.'.$fileSuffixName;//此目录就在根目录下的public里

                    (new Pictures())->insert(array(
                        'pic_old_name' => $imgInfo['filename'],
                        'pic_new_name' => $fileName,
                        'pic_path' => $imgNewPath,
                        'cate_id' => '1',
                        'cate_pid' => '1',
                    ));

                    //给文章添加自定义的seo优化 标签和属性
                    $img->attr('src', $imgNewPath);//新的图片地址
                    $img->attr('alt', 'http://jierui303.com/resources/views/home/images/j3.jpg');//设置成功
                    $img->attr('title', '自定义标题哈哈哈哈');
                });
            }else{
                echo '不存在吐泡泡';
            }

            $item['content'] = $content->find('')->html();
            $content->destruct();//释放资源
            return $item;
        });
        $ql->destruct();//释放资源
//        var_dump($data->all(), '<br/>');
        $data = $data->all();
        $content = $data[0]['content'];
        var_dump($content, '<br/>');

    }

    public function getsss()
    {
//        $this->getcollectAddContent('https://www.jb51.net/article/137482.htm', '#content');

        //需要采集的目标页面
        $page = 'http://seo.jierui303.com/a/43';
        //采集规则
        $reg = [
//            //采集文章标题
//            'title' => ['h1','text'],
//            //采集文章发布日期,这里用到了QueryList的过滤功能，过滤掉span标签和a标签
//            'date' => ['.pt_info','text','-span -a',function($content){
//                //用回调函数进一步过滤出日期
//                $arr = explode(' ',$content);
//                return $arr[0];
//            }],
            //采集文章正文内容,利用过滤功能去掉文章中的超链接，但保留超链接的文字，并去掉版权、JS代码等无用信息
            'content' => ['.article-content','html','a']
        ];
        $rang = '.content';
        $ql = (new QueryList())->get($page)->rules($reg)->range($rang)->query();

        $data = $ql->getData(function($item){
            //利用回调函数下载文章中的图片并替换图片路径为本地路径
            //使用本例请确保当前目录下有image文件夹，并有写入权限
            $content = (new QueryList())->html($item['content']);
            $content->find('img')->map(function($img){
//                $src = 'http://cms.querylist.cc'.$img->src;
//                $localSrc = 'image/'.md5($src).'.jpg';
//                $stream = file_get_contents($src);
//                file_put_contents($localSrc,$stream);
                $img->attr('src','http://jierui303.com/resources/views/home/images/j3.jpg');
                $img->attr('alt','http://jierui303.com/resources/views/home/images/j3.jpg');//设置成功
                $img->attr('title','自定义标题哈哈哈哈');
            });
            $item['content'] = $content->find('')->html();
            return $item;
        });

        //打印结果
        print_r($data->all());
    }

    //已OK
    public function getExternalLinksByLuSongSong()
    {
        //http://tool.lusongsong.com/seo/
        $page = 189;
        $keyword = 'www.jierui303.com';

        for($i=1; $i<=$page; $i++){
            $sq = new QueryList();
            $q = $sq->get('http://tool.lusongsong.com/seo/datanew.php?p='.$i.'&dn='.$keyword)->find('a')->attrs('href');
            foreach($q as $k=>$v) {
                $res = str_replace($keyword, "@", $v);
                (new ExternalLinks())->insert(array(
                    'link_url' => $res
                ));
            }
            $sq->destruct();
        }
    }

    //已OK
    public function getExternalLinksByDuoShiTong()
    {
        //http://wailian.duoshitong.com/
        $page = 202;
        $keyword = 'www.jierui303.com';

        for($i=1; $i<=$page; $i++){
            $sq = new QueryList();
            $q = $sq->get('http://wailian.duoshitong.com/wailian/data.php?p='.$i.'&dn='.$keyword)->find('a')->attrs('href');
            foreach($q as $k=>$v) {
                $res = str_replace($keyword, "@", $v);
                (new ExternalLinks())->insert(array(
                    'link_url' => $res
                ));
            }
            $sq->destruct();
        }
    }

    public function getExternalLinksBySuper()
    {
        $homepage = file_get_contents('http://seo.dmeng.net/seolink.html?domain=www.jierui303.com&index=370&time=15');
        echo $homepage;

//        echo '<br/>';
//        $sq = new QueryList();
//        $keyword = 'www.jierui303.com';
//        $i = 0;
//        $q = $sq->get('http://seo.dmeng.net/seolink.html?domain='.$keyword.'&index='.$i.'&time=15')->find('a')->contents();
//        var_dump('<pre>', $q);
        exit;



        //http://seo.dmeng.net/seolink.html?domain=www.jierui303.com&index=370&time=15
        $page = 950;
        //每次加10
        $keyword = 'www.jierui303.com';
        $i = 10;
        do {
            echo "这个数字是：$i <br>";
            $sq = new QueryList();
            $q = $sq->get('http://seo.dmeng.net/seolink.html?domain='.$keyword.'&index='.$i.'&time=15')->find('a')->attrs('href');
            var_dump('<pre>', $q);exit;
            foreach($q as $k=>$v) {
                $res = str_replace($keyword, "@", $v);
                (new ExternalLinks())->insert(array(
                    'link_url' => $res
                ));
            }
            $sq->destruct();
            $i += 10;
        } while ($i<=$page);
    }



    //港湾有巢单页
    public function gwyc()
    {
        return view('web.gwyc.index');
    }

    //港湾有巢单页
    public function testupload()
    {
        return view('web.upload.testupload');
    }

    public function special()
    {
        return view('special.special');
    }

    public function hdwy()
    {
        return view('web.hdwy.index');
    }

    public function qt()
    {
        return view('web.qt.index');
    }
    

    public function allx()
    {
        return view('web.allx.index');
    }
     public function yht()
    {
        return view('web.yht.index');
    }

     public function mtb()
    {
        return view('web.mtb.index');
    }
    
     public function mtbxq()
    {
        return view('web.mtb.goods');
    }
    public function mtbuser()
    {
        return view('web.mtb.user');
    }
    public function mtbcart()
    {
        return view('web.mtb.cart');
    }

    public function zns()
    {
        return view('web.zns.index');
    }
    public function xmgw()
    {
        return view('web.xmgw.index');
    }
   

    //博彩网络单页
    public function bcwl()
    {
        return view('web.bcwl.index');
    }

    //火盈投资首页
    public function hytz()
    {
        return view('web.hytz.index');
    }
    //火盈投资列表页
    public function hytz_list()
    {
        return view('web.hytz.list');
    }
    //火盈系统页
    public function hytz_system()
    {
        return view('web.hytz.system');
    }
    //火盈师资页
    public function hytz_strength()
    {
        return view('web.hytz.strength');
    }
    //火盈内容页
    public function hytz_content()
    {
        return view('web.hytz.content');
    }
    //关于火盈介绍页
    public function hytz_about()
    {
        return view('web.hytz.about');
    }


}
