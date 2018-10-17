<?php
namespace App\Console\Commands;

use App\Http\Model\Tag;
use App\Http\Model\Caiji;
use App\Http\Model\CaijiDuanLuos;
use App\Http\Model\CaijiNews;

use App\Http\Requests;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

use QL\QueryList;


class test extends Command {

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'test:putcache';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Test controller';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //这里做任务的具体处理，可以用模型
//        Log::info('任务调度'.time());

        (new Tag())->insert([
            'tag_name'=>'jierui---test'
        ]);

        /**
         * 在这里curl调用采集列表URL
         * 然后先采集文章URL及其标题入库
         * 再然后轮询抓取文章入库
         * 要不要把文章分段写入数据库呢？
         * 分段后，就得单独再写个程序对分段文字进行重新随机组合形成文章入库
         *
         * 一个定时执行生成新文章的任务，比如每天几点定时生成5篇新文章
         *
         * 一个定时采集新闻源入库的任务，每天凌晨定时采集某些网站某些板块的文章内容
         * 并且把采集回来的文章内容给拆分开存入数据库
         *
         */
        //查询出来数据库中的所有的采集规则URL地址
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
//        }

    }




}