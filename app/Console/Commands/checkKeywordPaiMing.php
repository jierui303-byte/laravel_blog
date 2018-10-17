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


class checkKeywordPaiMing extends Command
{

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'checkKeywordPaiMing:putcache';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'checkKeywordPaiMing controller 定时采集文章';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //所有关键词每日都会进行一次排名查询  可一万一次查询，然后程序睡眠几秒钟 继续下次查询
        //通过id索引范围进行查询，比如 1-10000条   10001-20000条这么来查



    }
}