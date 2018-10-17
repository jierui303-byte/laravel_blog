@extends('layouts.home')


@section('info')
    <title>{{$field->art_title}} - {{Config::get('web.web_title')}}</title>
    <meta name="keywords" content="{{$field->art_tag}},{{Config::get('web.web_title')}}" />
    <meta name="description" content="{{$field->art_description}},{{Config::get('web.web_title')}}" />
    <!--引入的prism.js代码高亮插件, 暂时无效-->
    <link href="{{asset('resources/views/home/css/prism.css')}}" rel="stylesheet">

    <!-- 百度编辑器代码高亮引入文件-->
    <link rel="stylesheet" href="{{asset('resources/org/ueditor/third-party/SyntaxHighlighter/shCoreDefault.css')}}" type="text/css">
    <script type="text/javascript" src="{{asset('resources/org/ueditor/third-party/SyntaxHighlighter/shCore.js')}}"></script>
    <script>
        SyntaxHighlighter.config.bloggerMode = true;
        SyntaxHighlighter.defaults['class-name'] = 'daima';
        SyntaxHighlighter.defaults['tab-size'] = 2;
        SyntaxHighlighter.defaults['toolbar'] = true;
        SyntaxHighlighter.defaults['quick-code'] = true;
        SyntaxHighlighter.defaults['pad-line-numbers'] = true;
        //        SyntaxHighlighter.defaults['gutter'] = false;
        SyntaxHighlighter.defaults['smart-tabs'] = false;
        SyntaxHighlighter.all();
    </script>
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
            <a href="{{url('cate/'.$field->cate_id)}}">{{$field->cate_name}}</a> &gt;&gt;
            <a href="{{url('a/'.$field->art_id)}}">{{$field->art_title}}</a>
        </div>
    </div>
    <!--面包屑路径导航-->

    <!--左右模块-->
    <div class="articleLeftRight">
        <div class="articleLeft">
            <div class="article-content border">
                <div class="title">
                    <h1 class="YaHei">{{$field->art_title}}</h1>
                    <p><i>转载</i> &nbsp;{{date('Y-m-d h:i:s', $field->art_dingTime)}} &nbsp; 作者：{{$field->art_editor}}  &nbsp; <a href="#comments"> <img src="{{url('resources/views/home/images/text-message.png')}}" width="15" height="15"> 我要评论</a> 阅读：{{$field->art_view}}&nbsp;&nbsp;分类名称：<a
                                href="{{url('cate/'.$field->cate_id)}}">{{$field->cate_name}}</a></p>
                </div>
                <div class="art_desc mt10">
                    <div id="art_demo">
                        <div id="art_demo">
                            {{$field->art_description}}
                        </div>
                    </div>
                </div>
                <!--广告-->
                <div style="width: 818px;margin:0 auto;height: 60px;background: #999999;">
                    广告区
                </div>
                <!--广告-->
            </div>

            <div id="content">
                {!! $field->art_content !!}
                <div class="art_xg">

                </div>
                <p>原文链接：</p>
                <p>本文链接：{{url('a/'.$field->art_id)}}</p>
                <p class="content-shequ">如对本文有疑问，请提交到交流社区，广大热心网友会为你解答！！  <a href="" target="_blank">点击进入社区</a></p>
            </div><!--endmain-->

            <div class="tags clearfix">
                <i class="icon-tag"></i>
                <ul class="meta-tags items">
                    <li class="tag item"><a href="" target="_blank" title="搜索关于XAML的文章" rel="nofollow">XAML</a></li>
                    <li class="tag item"><a href="" target="_blank" title="搜索关于自定义的文章" rel="nofollow">自定义</a></li>
                    <li class="tag item"><a href="" target="_blank" title="搜索关于控件的文章" rel="nofollow">控件</a></li>
                    <li class="tag item"><a href="" target="_blank" title="搜索关于事件处理的文章" rel="nofollow">事件处理</a></li>
                </ul>
            </div>

            <div class="nextinfo">
                <span>上一篇：
                    @if($article['pre'])
                        <a href="{{url('a/'.$article['pre']->art_id)}}">{{$article['pre']->art_title}}</a>
                    @else
                        <span>没有上一篇了...</span>
                    @endif
                </span>
                <span>下一篇：
                    @if($article['next'])
                        <a href="{{url('a/'.$article['next']->art_id)}}">{{$article['next']->art_title}}</a>
                    @else
                        <span>没有下一篇了...</span>
                    @endif
                </span>
            </div>

            <!--广告-->
            <div style="width: 818px;margin:0 auto;height: 60px;background: #999999;">
                广告区
            </div>
            <!--广告-->

            <div id="shoucang"></div>

            <div class="xgcomm clearfix">
                <h2>相关文章</h2>
                <ul>
                    @foreach($data as $k=>$v)
                        <li>
                            <div class="item-inner">
                                <a href="{{url('a/'.$v->art_id)}}" title="{{$v->art_title}}" class="img-wrap" target="_blank">
                                    <img alt="{{$v->art_title}}" src="http://files.jb51.net/images/xgimg/bcimg0.png">
                                </a>
                                <div class="rbox">
                                    <div class="rbox-inner">
                                        <p>
                                            <a class="link title" target="_blank" href="/article/52664.htm" title="{{$v->art_title}}">
                                                {{$v->art_title}}
                                            </a>
                                        </p>
                                        <div class="item-info">
                                            <span class="lbtn">
                                                <a href="" target="_blank" title="搜索关于ASP.Net的文章" rel="nofollow">ASP.Net</a>
                                                <a href="" target="_blank" title="搜索关于命名空间的文章" rel="nofollow">命名空间</a>
                                                <a href="" target="_blank" title="搜索关于Namespace的文章" rel="nofollow">Namespace</a>
                                            </span>
                                            <span class="lbtn" style="float:right"> {{date('Y-m-d', $v->art_dingTime)}} </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>

            <!--广告-->
            <div style="width: 818px;margin:0 auto;height: 60px;background: #999999;">
                广告区
            </div>
            <!--广告-->
        </div>
        <div class="articleRight">
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

            <!--栏目文章-->
            <div class="tabTitleBar mt10 bgf borderTblue">
                <div class="borderTnone pb10 YaHei">
                    <h4 class="blue">栏目其他文章</h4>
                    <ul class="newsListA">
                        <ul>
                            @foreach($new as $k=>$v)
                                <li><a href="{{url('a/'.$v->art_id)}}" title="{{$v->art_title}}" target="_blank">{{$v->art_title}}</a></li>
                            @endforeach
                        </ul>
                    </ul>
                </div>
            </div>
            <!--栏目文章-->

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

            <div class="artTJ">
                <h3><a href="">栏目文章统计</a></h3>
                <ul class="rank">
                    @foreach($categorysTTl as $k=>$v)
                        <li style="display: inline-block"><a href="{{url('cate/'.$k)}}">{{$categorysTTl[$k]['cate_name']}}【{{$categorysTTl[$k]['artNum']}}】</a></li>
                    @endforeach
                </ul>
            </div>

            <div class="fangke">
                <h3><a href="">最近访客</a></h3>
                <ul class="rank">
                    <li>栏目列表【多层级栏目列表遍历】</li>
                    <li>并统计每个栏目下的文章数量</li>
                    <li>阅读排行</li>
                    <li>评论排行</li>
                    <li>最新评论</li>
                    <li>原创数量</li>
                    <li>转载数量</li>
                    <li>文章存档日期分类【数量】</li>
                    <li>推荐文章</li>
                </ul>
            </div>
        </div>
    </div>
    <!--左右模块-->
@endsection