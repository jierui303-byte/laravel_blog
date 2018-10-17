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


class getBaiDuXLDownKeywords extends Command {

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'getBaiDuXLDownKeywords:putcache';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'GetBaiDuXLDownKeywords controller 定时获取百度下拉关键词';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //每天抓取 词不能重复写入 词必须包含词根 不包含词根的词不许入库
        $kk = (new Tag())->get();

        foreach($kk as $k=>$value){
            $url = 'https://www.baidu.com/s?wd='.$value['tag_name'];
            $ql = QueryList::get($url);

            $titles = $ql->find('#rs a')->texts();
//        $weinituijian = $ql->find('.hint_toprq_tips_items a')->texts();
//        $guanggaoci = $ql->find('.EDjWbK .YhVALH h3 a')->texts();
//        $baidukuaizhao = $ql->find('.c-container h3 a')->texts();
//        $test = $ql->find('#rs a')->attrs('href');

            foreach ($titles as $k=>$v){
//            echo '<a href="http://www.jierui303.com/getBaiDuXLword/'.$v.'/">'.$v.'</a><br/>';
                //把词加入到tag里面 写入之前先要去重处理
                (new Tag())->insert([
                    'tag_name'=>$v
                ]);

            }
        }



    }




}