@extends('layouts.home')


@section('info')
    <title>{{$field->cate_name}} - {{Config::get('web.web_title')}}</title>
    <meta name="keywords" content="{{$field->cate_keywords}},{{Config::get('web.web_title')}}" />
    <meta name="description" content="{{$field->cate_description}},{{Config::get('web.web_title')}}" />
@endsection


@section('content')
    <!--面包屑路径导航-->
    <div class="NavBar fl w690">
        <div class="box mb15 mt10">
            <i class="icon"></i>
            您的位置：
            <a href="{{url('/')}}">首页</a> &gt;&gt;
            @if($field->cate_pid !== 0)
                <a href="{{url('cate/'.$field->cate_pid)}}">{{$field->cate_pid_name}}</a> &gt;&gt;
            @endif
            <a href="{{url('cate/'.$field->cate_id)}}">{{$field->cate_name}}</a>
        </div>
    </div>
    <!--面包屑路径导航-->
    <!--左右模块-->
    <div class="articleLeftRight">
        <div class="articleLeft">
            <!--栏目简介描述-->
            <div class="mtb10 lists-main">
                <div class="lists-intro">
                    <div class="thumb">
                        <img src="http://files.jb51.net/images/lm_img/javascript.png" alt="JavaScript">
                    </div>
                    <h1>{{$field->cate_name}}</h1>
                    <p class="description" id="description">{{$field->cate_description}}</p>
                </div>
                <div class="lists-links">
                    <a href="http://so.jb51.net/cse/search?s=10520733385329581432&amp;ie=gbk&amp;q=javascript教程" target="_blank">javascript教程</a>
                    <a href="http://so.jb51.net/cse/search?s=10520733385329581432&amp;ie=gbk&amp;q=js基础" target="_blank">js基础</a>
                    <a href="http://so.jb51.net/cse/search?s=10520733385329581432&amp;ie=gbk&amp;q=js技巧" target="_blank">js技巧</a>
                    <a href="http://so.jb51.net/cse/search?s=10520733385329581432&amp;ie=gbk&amp;q=jquery" target="_blank">jquery</a>
                    <a href="http://so.jb51.net/cse/search?s=10520733385329581432&amp;ie=gbk&amp;q=json" target="_blank">json</a>
                    <a href="http://so.jb51.net/cse/search?s=10520733385329581432&amp;ie=gbk&amp;q=ajax" target="_blank">ajax</a>
                </div>
            </div>
            <!--栏目简介描述-->

            <!--广告-->
            <div style="width: 826px;margin:0 auto;height: 60px;background: #999999;">
                广告区
            </div>
            <!--广告-->

            <!--文章列表-->
            <div class="artlist clearfix">
                <dl>
                    @foreach($data as $k=>$v)
                    <dt>
                        <span>日期:{{date('Y-m-d', $v->art_dingTime)}}</span>
                        [<a href="{{url('cate/'.$v->cate_id)}}">{{$v->cate_name}}</a>]
                        <a href="{{url('a/'.$v->art_id)}}" title="[<font color=red>原创</font>]{{$v->art_title}}" target="_blank">
                            [<font color="red">原创</font>]{{$v->art_title}}
                        </a>
                    </dt>
                    @endforeach
                    {{--<dt><span>日期:2018-02-13</span><a href="/article/135088.htm" title="jQuery实现鼠标响应式透明度渐变动画效果示例" target="_blank">jQuery实现鼠标响应式透明度渐变动画效果示例</a></dt>--}}
                    {{--<dt><span>日期:2018-02-13</span><a href="/article/135087.htm" title="jQuery实现鼠标响应式淘宝动画效果示例" target="_blank">jQuery实现鼠标响应式淘宝动画效果示例</a></dt>--}}
                    {{--<dt><span>日期:2018-02-13</span><a href="/article/135086.htm" title="jQuery实现的鼠标响应缓冲动画效果示例" target="_blank">jQuery实现的鼠标响应缓冲动画效果示例</a></dt>--}}
                    {{--<dt><span>日期:2018-02-13</span><a href="/article/135085.htm" title="浅谈实现vue2.0响应式的基本思路" target="_blank">浅谈实现vue2.0响应式的基本思路</a></dt>--}}
                    {{--<dt><span>日期:2018-02-13</span><a href="/article/135084.htm" title="JS实现的文字间歇循环滚动效果完整示例" target="_blank">JS实现的文字间歇循环滚动效果完整示例</a></dt>--}}
                    {{--<dt><span>日期:2018-02-13</span><a href="/article/135081.htm" title="React中的refs的使用教程" target="_blank">React中的refs的使用教程</a></dt>--}}
                    {{--<dt><span>日期:2018-02-13</span><a href="/article/135077.htm" title="tween.js缓动补间动画算法示例" target="_blank">tween.js缓动补间动画算法示例</a></dt>--}}
                    {{--<dt><span>日期:2018-02-13</span><a href="/article/135073.htm" title="基于Node.js实现压缩和解压缩的方法" target="_blank">基于Node.js实现压缩和解压缩的方法</a></dt>--}}
                    {{--<dt><span>日期:2018-02-13</span><a href="/article/135071.htm" title="Vue打包后出现一些map文件的解决方法" target="_blank">Vue打包后出现一些map文件的解决方法</a></dt>--}}
                    {{--<dt><span>日期:2018-02-12</span><a href="/article/135066.htm" title="nginx部署访问vue-cli搭建的项目的方法" target="_blank">nginx部署访问vue-cli搭建的项目的方法</a></dt>--}}
                    {{--<dt><span>日期:2018-02-12</span><a href="/article/135064.htm" title="vue2.0实现前端星星评分功能组件实例代码" target="_blank">vue2.0实现前端星星评分功能组件实例代码</a></dt>--}}
                    {{--<dt><span>日期:2018-02-12</span><a href="/article/135062.htm" title="nginx+vue.js实现前后端分离的示例代码" target="_blank">nginx+vue.js实现前后端分离的示例代码</a></dt>--}}
                    {{--<dt><span>日期:2018-02-12</span><a href="/article/135058.htm" title="nodejs+express搭建多人聊天室步骤" target="_blank">nodejs+express搭建多人聊天室步骤</a></dt>--}}
                    {{--<dt><span>日期:2018-02-12</span><a href="/article/135055.htm" title="Vue+webpack项目基础配置教程" target="_blank">Vue+webpack项目基础配置教程</a></dt>--}}
                    {{--<dt><span>日期:2018-02-12</span><a href="/article/135054.htm" title="详解vue-admin和后端(flask)分离结合的例子" target="_blank">详解vue-admin和后端(flask)分离结合的例子</a></dt>--}}
                    {{--<dt><span>日期:2018-02-12</span><a href="/article/135042.htm" title="jquery+css3实现熊猫tv导航代码分享" target="_blank">jquery+css3实现熊猫tv导航代码分享</a></dt>--}}
                    {{--<dt><span>日期:2018-02-12</span><a href="/article/135040.htm" title="jQuery实现定时隐藏对话框的方法分析" target="_blank">jQuery实现定时隐藏对话框的方法分析</a></dt>--}}
                    {{--<dt><span>日期:2018-02-12</span><a href="/article/135028.htm" title="JS/jQuery实现DIV延时几秒后消失或显示的方法" target="_blank">JS/jQuery实现DIV延时几秒后消失或显示的方法</a></dt>--}}
                    {{--<dt><span>日期:2018-02-12</span><a href="/article/135025.htm" title="原生js实现省市区三级联动代码分享" target="_blank">原生js实现省市区三级联动代码分享</a></dt>--}}
                    {{--<dt><span>日期:2018-02-11</span><a href="/article/135013.htm" title="从vue基础开始创建一个简单的增删改查的实例代码(推荐)" target="_blank">从vue基础开始创建一个简单的增删改查的实例代码(推荐)</a></dt>--}}
                    {{--<dt><span>日期:2018-02-11</span><a href="/article/134991.htm" title="代码详解JS操作剪贴板" target="_blank">代码详解JS操作剪贴板</a></dt>--}}
                    {{--<dt><span>日期:2018-02-11</span><a href="/article/134976.htm" title="vue-router项目实战总结篇" target="_blank">vue-router项目实战总结篇</a></dt>--}}
                    {{--<dt><span>日期:2018-02-11</span><a href="/article/134975.htm" title="vue项目实战总结篇" target="_blank">vue项目实战总结篇</a></dt>--}}
                    {{--<dt><span>日期:2018-02-11</span><a href="/article/134972.htm" title="在 Angular中 使用 Lodash 的方法" target="_blank">在 Angular中 使用 Lodash 的方法</a></dt>--}}
                    {{--<dt><span>日期:2018-02-11</span><a href="/article/134964.htm" title="Material(包括Material Icon)在Angular2中的使用详解" target="_blank">Material(包括Material Icon)在Angular2中的使用详解</a></dt>--}}
                    {{--<dt><span>日期:2018-02-11</span><a href="/article/134962.htm" title="原生JS实现循环Nodelist Dom列表的4种方式示例" target="_blank">原生JS实现循环Nodelist Dom列表的4种方式示例</a></dt>--}}
                    {{--<dt><span>日期:2018-02-11</span><a href="/article/134958.htm" title="Vue实现点击后文字变色切换方法" target="_blank">Vue实现点击后文字变色切换方法</a></dt>--}}
                    {{--<dt><span>日期:2018-02-11</span><a href="/article/134955.htm" title="Vue-cli中为单独页面设置背景色的实现方法" target="_blank">Vue-cli中为单独页面设置背景色的实现方法</a></dt>--}}
                    {{--<dt><span>日期:2018-02-11</span><a href="/article/134951.htm" title="vue刷新和tab切换实例" target="_blank">vue刷新和tab切换实例</a></dt>--}}
                    {{--<dt><span>日期:2018-02-11</span><a href="/article/134949.htm" title="详解如何在vue项目中引入elementUI组件" target="_blank">详解如何在vue项目中引入elementUI组件</a></dt>--}}
                    {{--<dt><span>日期:2018-02-11</span><a href="/article/134946.htm" title="vue-router配合ElementUI实现导航的实例" target="_blank">vue-router配合ElementUI实现导航的实例</a></dt>--}}
                    {{--<dt><span>日期:2018-02-11</span><a href="/article/134945.htm" title="vue页面跳转后返回原页面初始位置方法" target="_blank">vue页面跳转后返回原页面初始位置方法</a></dt>--}}
                    {{--<dt><span>日期:2018-02-11</span><a href="/article/134939.htm" title="使用vue-router设置每个页面的title方法" target="_blank">使用vue-router设置每个页面的title方法</a></dt>--}}
                    {{--<dt><span>日期:2018-02-11</span><a href="/article/134937.htm" title="解决使用Vue.js显示数据的时,页面闪现原始代码的问题" target="_blank">解决使用Vue.js显示数据的时,页面闪现原始代码的问题</a></dt>--}}
                    {{--<dt><span>日期:2018-02-11</span><a href="/article/134933.htm" title="ajax请求+vue.js渲染+页面加载的示例" target="_blank">ajax请求+vue.js渲染+页面加载的示例</a></dt>--}}
                    {{--<dt><span>日期:2018-02-11</span><a href="/article/134932.htm" title="vue.js,ajax渲染页面的实例" target="_blank">vue.js,ajax渲染页面的实例</a></dt>--}}
                    {{--<dt><span>日期:2018-02-11</span><a href="/article/134931.htm" title="Node.js使用MySQL连接池的方法实例" target="_blank">Node.js使用MySQL连接池的方法实例</a></dt>--}}
                    {{--<dt><span>日期:2018-02-10</span><a href="/article/134916.htm" title="vue中引用阿里字体图标的方法" target="_blank">vue中引用阿里字体图标的方法</a></dt>--}}
                    {{--<dt><span>日期:2018-02-10</span><a href="/article/134896.htm" title="Express进阶之log4js实用入门指南" target="_blank">Express进阶之log4js实用入门指南</a></dt>--}}
                </dl>
                <div class="blank5 clearfix"></div>
                <div class="dxypage clearfix">
                    {{$data->links()}}
                </div>
                <div class="blank10 clearfix"></div>
            </div>
            <!--文章列表-->

        </div>

        <aside class="articleRight">
            <!--广告图-->
            <div style="padding: 0 15px;">
                <a href="">
                    <img src="http://s0.2mdn.net/5585042/10_300x250_IJ_CN_2017_2.jpg" alt="">
                </a>
            </div>
            <!--广告图-->

            <!--分类排行榜-->
            <div class="tabTitleBar mt10 bgf borderTblue">
                <div class="borderTnone pb10 YaHei">
                    <h4 class="blue">分类排行榜</h4>
                    <ul class="newsList newList-in">
                        <ul class="toplist">
                            <li><em class="no1">1</em><a href="/article/14397.htm" title="js刷新页面方法大全" target="_blank">js刷新页面方法大全</a></li>
                            <li><em class="no2">2</em><a href="/article/35090.htm" title="Json对象与Json字符串互转(4种转换方式)" target="_blank">Json对象与Json字符串互转(4种转</a></li>
                            <li><em class="no3">3</em><a href="/article/25403.htm" title="js页面跳转常用的几种方式" target="_blank">js页面跳转常用的几种方式</a></li>
                            <li><em class="no4">4</em><a href="/article/35535.htm" title="JS中setTimeout()的用法详解" target="_blank">JS中setTimeout()的用法详解</a></li>
                            <li><em class="no5">5</em><a href="/article/42482.htm" title="JS截取字符串常用方法详细整理" target="_blank">JS截取字符串常用方法详细整理</a></li>
                            <li><em class="no6">6</em><a href="/article/27444.htm" title="jquery加载页面的方法(页面加载完成就执行)" target="_blank">jquery加载页面的方法(页面加载完</a></li>
                            <li><em class="no7">7</em><a href="/article/64330.htm" title="JS设置cookie、读取cookie、删除cookie" target="_blank">JS设置cookie、读取cookie、删除</a></li>
                            <li><em class="no8">8</em><a href="/article/52038.htm" title="js数组与字符串的相互转换方法" target="_blank">js数组与字符串的相互转换方法</a></li>
                            <li><em class="no9">9</em><a href="/article/35691.htm" title="JS打开新窗口的2种方式" target="_blank">JS打开新窗口的2种方式</a></li>
                            <li><em class="no10">10</em><a href="/article/43136.htm" title="js 将json字符串转换为json对象的方法解析" target="_blank">js 将json字符串转换为json对象的</a></li>
                        </ul>
                    </ul>
                </div>
            </div>
            <!--分类排行榜-->

            <!--最近更新的内容-->
            <div class="tabTitleBar mt10 bgf borderTblue">
                <div class="borderTnone pb10 YaHei">
                    <h4 class="blue">最近更新的内容</h4>
                    <ul class="newsListA">
                        <ul><li><a href="/article/135091.htm" title="js实现保存文本框内容为本地文件兼容IE,chrome,火狐浏览器" target="_blank">js实现保存文本框内容为本地文件兼容IE,c</a></li>
                            <li><a href="/article/135088.htm" title="jQuery实现鼠标响应式透明度渐变动画效果示例" target="_blank">jQuery实现鼠标响应式透明度渐变动画效果</a></li>
                            <li><a href="/article/135087.htm" title="jQuery实现鼠标响应式淘宝动画效果示例" target="_blank">jQuery实现鼠标响应式淘宝动画效果示例</a></li>
                            <li><a href="/article/135086.htm" title="jQuery实现的鼠标响应缓冲动画效果示例" target="_blank">jQuery实现的鼠标响应缓冲动画效果示例</a></li>
                            <li><a href="/article/135085.htm" title="浅谈实现vue2.0响应式的基本思路" target="_blank">浅谈实现vue2.0响应式的基本思路</a></li>
                            <li><a href="/article/135084.htm" title="JS实现的文字间歇循环滚动效果完整示例" target="_blank">JS实现的文字间歇循环滚动效果完整示例</a></li>
                            <li><a href="/article/135081.htm" title="React中的refs的使用教程" target="_blank">React中的refs的使用教程</a></li>
                            <li><a href="/article/135077.htm" title="tween.js缓动补间动画算法示例" target="_blank">tween.js缓动补间动画算法示例</a></li>
                            <li><a href="/article/135073.htm" title="基于Node.js实现压缩和解压缩的方法" target="_blank">基于Node.js实现压缩和解压缩的方法</a></li>
                            <li><a href="/article/135071.htm" title="Vue打包后出现一些map文件的解决方法" target="_blank">Vue打包后出现一些map文件的解决方法</a></li>
                        </ul>
                    </ul>
                </div>
            </div>
            <!--最近更新的内容-->

            <!--常用在线小工具-->
            <div class="tabTitleBar mt10 bgf borderTblue">
                <div class="borderTnone pb10 YaHei">
                    <h4 class="blue">常用在线小工具</h4>
                    <ul class="newsListA">
                        <li><a href="/code/css" target="_blank"><font color="red">CSS代码工具</font></a></li>
                        <li><a href="/code/js" target="_blank"><font color="red">JavaScript代码格式化工具</font></a></li>
                        <li><a href="/code/xmlformat" target="_blank">在线XML格式化/压缩工具</a></li>
                        <li><a href="/code/phpformat" target="_blank"><font color="red">php代码在线格式化美化工具</font></a></li>
                        <li><a href="/code/sqlcodeformat" target="_blank">sql代码在线格式化美化工具</a></li>
                        <li><a href="/transcoding/html_transcode" target="_blank">在线HTML转义/反转义工具</a></li>
                        <li><a href="/code/json" target="_blank">在线JSON代码检验/检验/美化/格式化</a></li>
                        <li><a href="/regex/javascript" target="_blank">JavaScript正则在线测试工具</a></li>
                        <li><a href="/transcoding/jb51qrcode" target="_blank">在线生成二维码工具(加强版)</a></li>
                        <li><a href="/" target="_blank">更多在线工具</a></li>
                    </ul>
                </div>
            </div>
            <!--常用在线小工具-->

            <!--随滚轮滚动而滚动 广告-->
            <div class="rFixedBox">

                <script type="text/javascript">var cpro_id="u1397867";(window["cproStyleApi"] = window["cproStyleApi"] || {})[cpro_id]={at:"3",rsi0:"300",rsi1:"380",pat:"6",tn:"baiduCustNativeAD",rss1:"#FFFFFF",conBW:"1",adp:"1",ptt:"0",titFF:"%E5%BE%AE%E8%BD%AF%E9%9B%85%E9%BB%91",titFS:"14",rss2:"#000000",titSU:"0",ptbg:"90",piw:"0",pih:"0",ptp:"0"}</script>
                <script src="http://cpro.baidustatic.com/cpro/ui/c.js" type="text/javascript"></script>

            </div>

            <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
            <script type="text/javascript">
                $.fn.smartFloat = function() {
                    var position = function(element) {
                        var top = element.position().top, pos = element.css("position");
                        $(window).scroll(function() {
                            var scrolls = $(this).scrollTop();
                            if (scrolls > top) { //如果滚动到页面超出了当前元素element的相对页面顶部的高度
                                if (window.XMLHttpRequest) { //如果不是ie6
                                    element.css({
                                        position: "fixed",
                                        top: 0
                                    }).addClass("shadow");
                                } else { //如果是ie6
                                    element.css({
                                        top: scrolls
                                    });
                                }
                            }else {
                                element.css({
                                    position: pos,
                                    top: top
                                }).removeClass("shadow");
                            }
                        });
                    };
                    return $(this).each(function() {
                        position($(this));
                    });
                };
                $(function(){
                    // $("#tip").smartFloat();
                    // $("#nav").smartFloat();
                    $(".rFixedBox").smartFloat();
                });
            </script>
            <!--随滚轮滚动而滚动 广告-->


        {{--@if(isset($submenu))--}}
                {{--<div class="rnav">--}}
                    {{--<ul>--}}
                        {{--@foreach($submenu as $k=>$v)--}}
                            {{--<li class="rnav{{random_int(1,4)}}"><a href="{{url('cate/'.$v->cate_id)}}" target="_blank">{{$v->cate_name}}</a></li>--}}
                        {{--@endforeach--}}
                    {{--</ul>--}}
                {{--</div>--}}
            {{--@endif--}}


            {{--<div class="news">--}}
                {{--<h3>--}}
                    {{--<a href="" title="">栏目<span>文章</span></a>--}}
                {{--</h3>--}}
                {{--<ul class="rank">--}}
                    {{--@foreach($new as $k=>$v)--}}
                        {{--<li><a href="{{url('a/'.$v->art_id)}}" title="{{$v->art_title}}" target="_blank">{{$v->art_title}}</a></li>--}}
                    {{--@endforeach--}}
                {{--</ul>--}}

                {{--@parent--}}

            {{--</div>--}}

            {{--<div class="news">--}}
                {{--<h3>--}}
                    {{--<a href="" title="">最新<span>评论</span></a>--}}
                {{--</h3>--}}
                {{--<div class="rank">--}}
                    {{--<div>--}}
                        {{--<div class="col-lg-3">--}}
                            {{--<a href="" title="" class="visitorsImg">--}}
                                {{--<img src="http://0d077ef9e74d8.cdn.sohucs.com/fac494264beff70ed91fedf32783552b_default_1449556186969_jpg" alt="">--}}
                            {{--</a>--}}
                        {{--</div>--}}
                        {{--<div class="col-lg-9" style="padding: 0;">--}}
                            {{--<h5>海阔天空</h5>--}}
                            {{--<p>内容实在嗯么来哦呢内容实在嗯么来哦呢是的是是是是内容实在嗯么来哦呢是的是是是是是的是是是是</p>--}}
                            {{--<p class="visitorsPing"><a href="">评: 如何快内容实在嗯么来哦呢是的是是是是速获得微信公众号原</a></p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div>--}}
                        {{--<div class="col-lg-3">--}}
                            {{--<a href="" title="" class="visitorsImg">--}}
                                {{--<img src="http://sucimg.itc.cn/avatarimg/518315705_1477013514171_c55" alt="">--}}
                            {{--</a>--}}
                        {{--</div>--}}
                        {{--<div class="col-lg-9" style="padding: 0;">--}}
                            {{--<h5>一碗先生</h5>--}}
                            {{--<p>呵呵...</p>--}}
                            {{--<p class="visitorsPing"><a href="">评: 如何快内容实在嗯么来哦呢是的是是是是速获得微信公众号原</a></p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div>--}}
                        {{--<div class="col-lg-3">--}}
                            {{--<a href="" title="" class="visitorsImg">--}}
                                {{--<img src="http://0d077ef9e74d8.cdn.sohucs.com/fac494264beff70ed91fedf32783552b_default_1449555781335_jpg" alt="">--}}
                            {{--</a>--}}
                        {{--</div>--}}
                        {{--<div class="col-lg-9" style="padding: 0;">--}}
                            {{--<h5>一思量</h5>--}}
                            {{--<p>哈哈哈</p>--}}
                            {{--<p class="visitorsPing"><a href="">评: 如何快内容实在嗯么来哦呢是的是是是是速获得微信公众号原</a></p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}

        </aside>
    </div>
    <!--左右模块-->
@endsection
