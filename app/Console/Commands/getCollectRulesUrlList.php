<?php
namespace App\Console\Commands;

use App\Http\Model\Blog\Category;
use App\Http\Model\Collect\CollectRulesUrlList;
use App\Http\Model\Tag;
use App\Http\Model\Collect\CollectRules;
use App\Http\Model\Collect\CollectDuanLuos;
use App\Http\Model\Collect\CollectNews;//news表暂停使用
use App\Http\Model\Collect\CollectArticle;//写入这个表

use App\Http\Requests;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

use QL\QueryList;


class getCollectRulesUrlList extends Command
{

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'getCollectRulesUrlList:putcache';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'getCollectRulesUrlList controller 定时采集文章';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //根据采集地址进行文章采集  已采集过的url地址不能重复写入数据库
        $collectRules = (new CollectRules())->getAllRules();

        foreach ($collectRules as $k => $v) {
            //根据采集规则的开启或关闭状态来进行控制是否执行
            if($v['collect_is_open'] == 2){
                //采集开关 是否开启 1开启 2关闭
                continue;
            }

            //判断是否开启分页采集
            if($v['collect_is_open_page'] == 1){
                //开启 需要进行页码替换和新增遍历 默认从第一页开始采集
                $a = $this->multiplePageCollect($v);
                if($a == 'ok'){
                    echo '单页采集=='.$v['collect_list_url'].'已经采集完成<br/>';
                }
            }else{
                //关闭，不需要页码新增，直接采集当前页面URL地址即可
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
            $ql = (new QueryList())->get($collect_list_url)->encoding('UTF-8', 'GB2312');
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

        $ql->destruct();//释放资源

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

            //判断目标页面字符集编码格式
            if ($collect_code == 1) {
                //等于0时是utf-8编码
                $ql = (new QueryList())->get($url)->encoding('UTF-8');
            } else {
                //等于1时是gbk2312
                $ql = (new QueryList())->get($collect_list_url)->encoding('UTF-8', 'GB2312');
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
                    unset($result);
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

            $ql->destruct();//释放资源

        }

    }
}