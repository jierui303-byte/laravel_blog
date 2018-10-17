<?php
/**
 * Created by PhpStorm.  test();
 * User: mac
 * Date: 2017/8/22
 * Time: 下午5:26
 */
function test(){
    echo 'this is a test';
}

/**
 * 从ueditor的内容中获取图片路径
 */
function getImgUrl($art_content){
    $str = '<img src="http://localhost/2.jpg" alt="" /> <img src="http://localhost/2.jpg" alt="" /> <img src="http://localhost/2.jpg" alt="" />  <a href="http://www.baidu,com/">aaa</a>';
//    $str = $data[0]['art_content'];
//    var_dump($str);
    $str = strip_tags($art_content, '<img>');
    preg_match_all('/\<img\s+src\=\"([\w:\/\.]+)\"/', $str, $matches);
    $match = $matches[1];
    foreach ($match as $k=>$value) {
        if($k == 0){
            echo $value."";
        }
        break;
    }
}

/**
 * 从ueditor的内容中获取图片路径
 */
function getAllImgUrl($art_content){
    $str = strip_tags($art_content, '<img>');
    preg_match_all('/\<img\s+src\=\"([\w:\/\.]+)\"/', $str, $matches);
    $match = $matches[1];
    //图片最多只返回三个  可以有两个，甚至一个，甚至为0
//    echo '<pre>';
//    var_dump($match);
//    echo '</pre>';
    return json_encode($match);
}


/**
 * 计算几分钟前、几小时前、几天前、几月前、几年前。
 * $agoTime string Unix时间
 * @author tangxinzhuan
 * @version 2016-10-28
 */
function time_ago($agoTime)
{
    $agoTime = (int)$agoTime;

    // 计算出当前日期时间到之前的日期时间的毫秒数，以便进行下一步的计算
    $time = time() - $agoTime;

    if ($time >= 31104000) { // N年前
        $num = (int)($time / 31104000);
        return $num.'年前';
    }
    if ($time >= 2592000) { // N月前
        $num = (int)($time / 2592000);
        return $num.'月前';
    }
    if ($time >= 86400) { // N天前
        $num = (int)($time / 86400);
        return $num.'天前';
    }
    if ($time >= 3600) { // N小时前
        $num = (int)($time / 3600);
        return $num.'小时前';
    }
    if ($time > 60) { // N分钟前
        $num = (int)($time / 60);
        return $num.'分钟前';
    }
    return '1分钟前';
}

/**
 * 传进文章ID，获取文章的所有类目
 */
function getCategory($id){
    $pics = Article::orderBy('art_view', 'desc')->where('art_status', '1')->where(function($q1) use($currentTime){
        $q1->orWhere('art_dingTime', '<', $currentTime);
    })->take(6)->get();//take显示limit数量
    var_dump($pics);
}


/**
 * @param $url
 * @return array
 * 检测文章URL地址是否被收录
 */
function checkBaiduSL($url) {
    $url = 'http://www.baidu.com/s?wd=' . urlencode($url);
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $rs = curl_exec($curl);
    curl_close($curl);
    if (!strpos($rs, '没有找到')) { //没有找到说明已被百度收录
        //被收录了，那么获取收录时间
        var_dump($rs);
        return '已收录';
    } else {
        return '未收录';
    }

}

/**
 * @param $url
 * @return string
 * 获取文章URL收录的时间
 */
function getBaiDuSLDate($url){
    $url = 'http://www.baidu.com/s?wd=' . urlencode($url);
    //先判断是否被收录，被收录的获取时间
    if(checkBaiduSL($url) == '未收录'){
        return "";
    };
    $kz_pattern = "/<span class=\" newTimeFactor_before_abs m\">(.*)<\/span>/"; /*用以匹配快照日期的字符串*/
    $times = "/\d{4}年\d{1,2}月\d{1,2}/"; /*匹配快照日期的正则表达式，如:2011-8-4*/
    $s0 = @file_get_contents($url); /*将site:www.ninthday.net的网页置入$s0字符串中*/

    preg_match($kz_pattern,$s0,$temp);
        var_dump($temp);

    preg_match($times,$temp[0],$screenshot);
        var_dump($screenshot);

    if($screenshot[0] == ""){
        $screenshot[0] = "暂无快照";
    }

    return $screenshot[0];

}


/**
 * @param $url
 * 获取域名收录总量
 * <p>百度收录：<a href="<?php echo $all; ?>" target="_blank"><?php echo $all_num[1]; ?></a></p>
<p>百度快照日期：<a href="<?php echo $all; ?>"><?php echo $screenshot[0]; ?></a></p>
 */
function baidu($url){
    $domain = 'jierui303.com'; /*欲查询的域名*/
    $site_url = 'http://www.baidu.com/s?wd=site%3A';
    $all = $site_url.$domain; /*域名所有收录的网址*/
    $utf_pattern = "/找到相关结果数约(.*?)个/";
    $gb2312_pattern = iconv("UTF-8","UTF-8",$utf_pattern); /*因为百度为UTF-8编码*/
    $kz_pattern = "/<span class=\"g\">(.*)<\/span>/"; /*用以匹配快照日期的字符串*/
    $times = "/\d{4}-\d{1,2}-\d{1,2}/"; /*匹配快照日期的正则表达式，如:2011-8-4*/
    $s0 = @file_get_contents($all); /*将site:www.ninthday.net的网页置入$s0字符串中*/
    preg_match($gb2312_pattern,$s0,$all_num); /*匹配"找到相关结果数*个"*/
    preg_match($gb2312_pattern,$s0,$temp);
    preg_match($times,$temp[0],$screenshot);
    if($all_num[1] == "")
        $all_num[1] = 0;
    if($screenshot[0] == "")
        $screenshot[0] = "暂无快照";
    return $all_num[1];

}

/**
 * 监控关键词排名情况
 * 根据关键词，查询某某域名的排位在第几位
 *
 */
function getListUrl(){
    @$k=$_GET['k'] ? $_GET['k'] : '不念博客';
    @$u=$_GET['u'] ? $_GET['u'] : 'www.bunian.cn';
    $rn='50';
    $url = "https://www.baidu.com/s?ie=utf-8&wd=".$k."&rn=".$rn;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.11 (KHTML, like Gecko) Chrome/23.0.1271.1 Safari/537.11');
    $res = curl_exec($ch);
    $rescode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    preg_match_all('/(.*?)/si', $res, $p);
    for ($ii = 0; $ii < COUNT($p[1]); $ii++){
        $pos=strpos($p[1][$ii],$u);
        if(is_integer($pos)){
            $rn= $ii+1;
            break;
        }
    }
    echo $rn;
}


//百度主动推送
function baidutuisong($art_id){
    $urls = array(
        'http://jierui303.com/a/'.$art_id,
    );
    $api = 'http://data.zz.baidu.com/urls?site=http://jierui303.com&token=Rm7qmM3LwpT8SI7o';
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
    $result = json_decode($result,true);
//        echo $result;
//        var_dump(json_decode($result,true));
//        exit;

    if ($result['success'] == 1) {
        //推送成功,执行跳转回文章列表页
        return redirect('admin/article');
    } else {
        return back()->with('errors', '文章主动推送失败,请稍后重试!');
    }

}
