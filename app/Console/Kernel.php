<?php

namespace App\Console;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *应用提供的Artisan命令
     * @var array
     */
    protected $commands = [
        Commands\getBaiDuXLDownKeywords::class,//百度下拉关键词获取
        Commands\getArticles::class,//定时采集文章
        Commands\getArticleSouLu::class,//定时查询原创文章是否收录及快照时间
        Commands\checkKeywordPaiMing::class,//定时查询词库关键词排名位置情况
        Commands\publishArticle::class,//文章定时发布
        Commands\test::class,
    ];

    /**
     * Define the application's command schedule.
     *定义应用的命令调度
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        /**
         * ->cron('* * * * *');    在自定义Cron调度上运行任务
        ->everyMinute();    每分钟运行一次任务
        ->everyFiveMinutes();   每五分钟运行一次任务
        ->everyTenMinutes();    每十分钟运行一次任务
        ->everyThirtyMinutes(); 每三十分钟运行一次任务
        ->hourly(); 每小时运行一次任务
        ->daily();  每天凌晨零点运行任务
        ->dailyAt('13:00'); 每天13:00运行任务
        ->twiceDaily(1, 13);    每天1:00 & 13:00运行任务
        ->weekly(); 每周运行一次任务
        ->monthly();    每月运行一次任务
        ->monthlyOn(4, '15:00');    每月4号15:00运行一次任务
        ->quarterly();  每个季度运行一次
        ->yearly(); 每年运行一次
        ->timezone('America/New_York'); 设置时区
         */
        //定时任务设置[ Laravel 5.1 文档 ] 服务 —— 任务调度
        // $schedule->command('inspire')->hourly();
//        $schedule->call(function () {
//            (new Tag())->insert([
//                'tag_name'=>'jierui'
//            ]);
//        })->everyMinute();

        //定时调用test类执行 写入日志
//        $schedule->command('test:putcache')->everyMinute();


//        $schedule->command('emails:send --force')->daily();

        //每天凌晨开始 查询一下词库关键词的排名并更新关键词的排名情况
//        $schedule->command('checkKeywordPaiMing:putcache')->everyMinute();

        //每天凌晨开始 查询一下未收录文章的收录状况并记录文章收录时间
        // $schedule->command('getArticleSouLu:putcache')->daily();

        //定时获取最新的采集规则，采集到对应的内容URL地址入库   把采集URL规则和内容采集区分开执行
        // $schedule->command('getCollectRulesUrlList:putcache')->everyFiveMinutes();

        //定时去采集文章URL地址中提取没有采集过的URL地址进行内容采集
        // $schedule->command('getArticlesByCollectRules:putcache')->everyFiveMinutes();

        //每天把要引流网站进行一次外链工具发布


        //每两天执行 获取一下百度，360，搜狗等下拉词，相关搜索词等 创建词库
//        $schedule->command('getBaiDuXLDownKeywords:putcache')->everyMinute();

        //文章定时发布  获取未发布的文章，查看文章的发布时间 然后符合条件的就发布
//        $schedule->command('publishArticle:putcache')->everyMinute();


    }

    /**
     * Register the Closure based commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        require base_path('routes/console.php');
    }
}
