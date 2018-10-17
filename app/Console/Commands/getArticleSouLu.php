<?php
namespace App\Console\Commands;

use App\Http\Model\Blog\Article;

use App\Http\Requests;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

use QL\QueryList;


class getArticleSouLu extends Command
{

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'getArticleSouLu:putcache';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'getArticleSouLu controller 查询文章的收录情况';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //查询没有被收录的文章的收录情况
        $articleLists = (new Article())->where(array(
            'art_isSouLu' => 2, //1为收录  2为未收录
            'art_status' => 1
        ))->get();

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
                (new Article())->where('art_id', $v['art_id'])->update(array(
                    'art_isSouLu' => 2,
                    'art_souLuDate' => ''
                ));
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
                echo $url.'已收录  ========  收录时间：'.$slTime.'<br/>';
                (new Article())->where('art_id', $v['art_id'])->update(array(
                    'art_isSouLu' => 1,
                    'art_souLuDate' => strtotime($slTime)
                ));
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
}