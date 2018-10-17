<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="icon" href="{{asset('resources/views/home/images/favicon1.ico')}}" type="image/x-icon" />
    <link rel="canonical" href="http://www.jierui303.com">
    @yield('info')
    <link href="{{asset('resources/views/home/css/index.css')}}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="{{asset('resources/views/home/js/modernizr.js')}}"></script>
    <![endif]-->
</head>
<body>

    <div class="header-top">
        <div class="header">
            <a href="">脚本之家</a>
            <a href="">软件下载</a>
            <a href="">源码下载</a>
            <a href="">源市场</a>
            <a href="">在线工具</a>
            <a href="">网页教程基础</a>
            <a href="">服务器常用软件</a>
            <a href="">手机版</a>
            <a href="">微信编辑器</a>
            <a href="">注册</a>
        </div>

    </div>

    <div class="logodiv" style="background: #842524;">
        <div class="logo">
            <h1>
                <a class="navbar-brand" href="{{url('/')}}" title="Jerry's Blog_Jerry的编程之路" style="padding:0;">
                    <img src="{{url('resources/views/home/images/logo303.png')}}" style="height: 85px;" alt="">
                </a>
            </h1>
        </div>
    </div>


    <!--导航条开始-->
    <div id="nav">
        <ul class="w">
            <li><a href="{{url('/product')}}">前端作品</a></li>
            <li><a href="#">网页制作</a></li>
            <li><a href="#">网络编程</a></li>
            <li><a href="#">脚本专栏</a></li>
            <li><a href="#">脚本下载</a></li>
            <li><a href="#">数据库</a></li>
            <li><a href="#">CMS教程</a></li>
            <li><a href="#">电子书籍</a></li>
            <li><a href="#">网络安全</a></li>
            <li><a href="#">网站运营</a></li>
            <li><a href="#">操作系统</a></li>
            <li><a href="#">媒体动画</a></li>
            <li><a href="#">平面设计</a></li>
            <li><a href="#">视频学习</a></li>
            <li><a href="#">在线手册</a></li>
        </ul>
    </div>
    <!--导航条结束-->

    <div class="tagList">
        <a href="">html标签</a>
        <a href="">css教程</a>
        <a href="">javascript</a>
        <a href="">php编程</a>
        <a href="">laravel框架</a>
    </div>

    {{--<div class="banner" style="overflow: hidden;">--}}
        {{--<!--水平轮播图-->--}}
        {{--<div style="width: 340px;float: left;margin-right: 10px;">--}}
            {{--<div style="width: 100%;height: 320px;margin-top:10px;background: olivedrab;">--}}
                {{--随机tag标签--}}
            {{--</div>--}}

            {{--<!--轮播底部 列表-->--}}
            {{--<div style="width: 100%;height: 320px;margin-top:10px;background: orchid;">--}}
                {{--随机tag标签--}}
            {{--</div>--}}
            {{--<!--轮播底部 列表-->--}}
        {{--</div>--}}
        {{--<!--水平轮播图-->--}}

        {{--<!--tab切换-->--}}
        {{--<div style="width: 468px;height: 446px;float: left;background: red">--}}
{{--sss--}}
        {{--</div>--}}
        {{--<!--tab切换-->--}}


        {{--<div style="width: 180px;float: right;background: lime">--}}
            {{--<div class="top">aaa</div>--}}
            {{--<div class="bottom">bbb</div>--}}
        {{--</div>--}}

    {{--</div>--}}





    <div class="main">

@section('content')


        <h3>
            <a href="" title="">最新<span>文章</span></a>
        </h3>
        <ul class="rank">
            @foreach($hot as $k=>$v)
                <li><a href="{{url('a/'.$v->art_id)}}" title="{{$v->art_title}}" target="_blank">{{$v->art_title}}</a></li>
            @endforeach
        </ul>


        <h3>
            <a href="" title="">随机<span>文章</span></a>
        </h3>
        <ul class="rank">
            @foreach($suijiArt as $k=>$v)
                <li><a href="{{url('a/'.$v->art_id)}}" title="{{$v->art_title}}" target="_blank">{{$v->art_title}}</a></li>
            @endforeach
        </ul>

        <h3 class="ph">
            <a href="" title="">博客<span>标签</span></a>
        </h3>
        <div class="rank">
        @foreach($tagList as $k=>$v)
        <a href="{{url('tag/'.$v['id'])}}" style="padding:5px;color:#0da344;display: inline-block;">{{$v['tag_name']}}</a>
        @endforeach
        </div>

        {{--<h3 class="ph">--}}
        {{--<p>最新<span>文章</span></p>--}}
    {{--</h3>--}}
    {{--<ul class="paih">--}}
        {{--@foreach($hot as $k=>$v)--}}
            {{--<li><a href="{{url('a/'.$v->art_id)}}" title="{{$v->art_title}}" target="_blank">{{$v->art_title}}</a></li>--}}
        {{--@endforeach--}}
    {{--</ul>--}}


    {{--<h3 class="ph">--}}
        {{--<p>随机<span>文章</span></p>--}}
    {{--</h3>--}}
    {{--<ul class="paih">--}}
        {{--@foreach($hot as $k=>$v)--}}
            {{--<li><a href="{{url('a/'.$v->art_id)}}" title="{{$v->art_title}}" target="_blank">{{$v->art_title}}</a></li>--}}
        {{--@endforeach--}}
    {{--</ul>--}}


    {{--把最新文章,采用监控元素位置,然后把元素置顶,只有左侧内容可以滚动,右侧浮动不动.--}}

    {{--<h3 class="ph">--}}
        {{--<p>微信订阅号<span>二维码</span></p>--}}
    {{--</h3>--}}
    {{--<h3 class="ph">--}}
        {{--<p>android<span>混合app下载</span></p>--}}
    {{--</h3>--}}
    {{--<h3 class="ph">--}}
        {{--<p>iOS<span>混合app下载</span></p>--}}
    {{--</h3>--}}


@show

</div>


    <div id="footer">
        <div id="footerinfo">
            <div id="footercontent">
                <a rel="nofollow" href="/about.htm" target="_blank">关于我们</a> -
                <a rel="nofollow" href="/support.htm" target="_blank">广告合作</a> -
                <a rel="nofollow" href="/linkus.htm" target="_blank">联系我们</a> -
                <a rel="nofollow" href="/sm.htm" target="_blank">免责声明</a> -
                <a rel="nofollow" href="/sitemap.htm" target="_blank">网站地图</a> -
                <a rel="nofollow" href="" target="_blank">投诉建议</a> -
                <a rel="nofollow" href="/up.htm" target="_blank">在线投稿</a>
            </div>
            <div id="footercopyrights">
                严禁网站镜像，否则追究法律责任 CopyRight © 2016-2018
                <a href="{{url('/')}}">Jerry的编程之路</a>
                JieRui303.Com , All Rights Reserved.
                <p>站长：Jerry 电话：13523419148 qq:841287295</p>
            </div>
            <div class="qinfo">
                {{--QQ交流群：①群 14624678 ②群 36345889 ③群 232608061 ④群 255725565<br>--}}
                <a rel="nofollow" target="_blank" href="" style="display:inline-block;text-decoration:none;height:20px;line-height:20px;">
                    {{--<img src="http://www.beian.gov.cn/file/ghs.png">苏公网安备 32031102000137号--}}
                </a>&nbsp;&nbsp;
                <a href="http://www.miibeian.gov.cn" rel="nofollow" target="_blank">京ICP备16056489号</a>
            </div>
            <div class="ewm">
                <img alt="Jerry的编程之路官方微信订阅号" src="{{url('resources/views/home/images/weixin.png')}}">
            </div>
        </div>
    </div>

<script src="{{asset('resources/views/home/js/prism.js')}}"></script>
<script src="{{asset('resources/views/home/js/jquery-1.11.1.min.js')}}"></script>
{{--<script src="{{asset('resources/views/home/css1/myjs.js')}}"></script>--}}

</body>
</html>


<!--百度链接提交自动推送代码-->
{{--<script>--}}
    {{--(function(){--}}
        {{--var bp = document.createElement('script');--}}
        {{--var curProtocol = window.location.protocol.split(':')[0];--}}
        {{--if (curProtocol === 'https') {--}}
            {{--bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';--}}
        {{--}--}}
        {{--else {--}}
            {{--bp.src = 'http://push.zhanzhang.baidu.com/push.js';--}}
        {{--}--}}
        {{--var s = document.getElementsByTagName("script")[0];--}}
        {{--s.parentNode.insertBefore(bp, s);--}}
    {{--})();--}}
{{--</script>--}}
<!--百度链接提交自动推送代码-->

<!--百度统计跟踪代码-->
<script>
    var _hmt = _hmt || [];
    (function() {
        var hm = document.createElement("script");
        hm.src = "https://hm.baidu.com/hm.js?77773895a965ad39436492966700b27d";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();
</script>
<!--百度统计跟踪代码-->

<!--360链接自动推送代码-->
{{--<script>--}}
    {{--(function(){--}}
        {{--var src = (document.location.protocol == "http:") ? "http://js.passport.qihucdn.com/11.0.1.js?058afa0b33dfc964d9359638ab9c2c13":"https://jspassport.ssl.qhimg.com/11.0.1.js?058afa0b33dfc964d9359638ab9c2c13";--}}
        {{--document.write('<script src="' + src + '" id="sozz"><\/script>');--}}
    {{--})();--}}
{{--</script>--}}
<!--360链接自动推送代码-->

