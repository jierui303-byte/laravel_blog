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


class publishArticle extends Command
{

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'publishArticle:putcache';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'publishArticle controller 文章定时发布';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //获取文章库里待发布的文章进行发布


    }
}