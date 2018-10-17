<!DOCTYPE html>
<html mip>
<head>
    <meta charset="UTF-8">
    <meta name="baidu-site-verification" content="NVmZ0K5ezR" />
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
    <link rel="stylesheet" type="text/css" href="https://mipcache.bdstatic.com/static/v1/mip.css">
    <!--TODO: canonical href需要替换成原页面url-->
    <link rel="canonical" href="http://jierui303.com">
    <link rel="canonical" href="http://www.jierui303.com">
    <title>Jerry的编程之路--专注于网站编程开发及网络安全维护的研究</title>
    {{--http://bit.baidu.com/模版地址
    http://bit.baidu.com/news/index.html
    --}}
    <style mip-custom>
        /*body{margin:10px;}*/
        .red-text { color: red;}
        .middle-text { text-align: center;}
        .small-pic { max-width: 200px;}

        .navbar-brand{
            padding-left:10px;
        }
        .article{
            /*height: 300px;*/
            /*background: red;*/
            margin-top: 10px;
        }
        .article a{
            display: block;
            padding:10px 5px;
            border-bottom: 1px solid #ddd;
        }
        .article a h2{
            font-size: 13px;
            color:#333;
            font-family: "微软雅黑",Arial,Helvetica,sans-serif;
            padding:5px 0;
        }
        .article a span{
            color:#a39c9c;
        }

        .mip-nav-wrapper{
            border-bottom: 2px solid #3b659f;
        }

        .footer_bottom{
            background: #000;
            color:#fff;
            font-size: 12px;
            padding:15px 0;
            text-align: center;
        }
    </style>
</head>
<body>
<!--使用熊掌号MIP组件-->
<mip-cambrian site-id="1579948430302048"></mip-cambrian>

<!--头部响应式菜单-->
<div class="mip-nav-wrapper">
    <mip-nav-slidedown
            data-id="bs-navbar"
            class="mip-element-sidebar container"
            data-showbrand="1"
            data-brandname="Jerry的编程之路">
        <nav id="bs-navbar" class="navbar-collapse collapse navbar navbar-static-top">
            <ul class="nav navbar-nav navbar-right">
                @foreach($cateLists as $k=>$v)
                    <li>
                        <a href="{{url('cate/'.$v->cate_id)}}">{{$v->cate_name}}</a>
                    </li>
                @endforeach
                {{--<li><a href="//www.mipengine.org/">菜单2</a></li>--}}
                {{--<li><a href="//www.mipengine.org/">菜单3</a></li>--}}
                {{--<li><a href="//www.mipengine.org/">菜单4</a></li>--}}
                {{--<li><a href="//www.mipengine.org/">菜单5</a></li>--}}
                {{--<li><a href="//www.mipengine.org/">菜单6</a></li>--}}
                {{--<li><a href="//www.mipengine.org/">菜单7</a></li>--}}
                {{--<li><a href="//www.mipengine.org/">菜单8</a></li>--}}
                {{--<li><a href="//www.mipengine.org/">菜单9</a></li>--}}
                {{--<li><a href="//www.mipengine.org/">菜单10</a></li>--}}
                {{--<li><a href="//www.mipengine.org/">菜单11</a></li>--}}
                <li class="navbar-wise-close">
                    <span id="navbar-wise-close-btn"></span>
                </li>
            </ul>
        </nav>
    </mip-nav-slidedown>
</div>
<!--头部响应式菜单-->


<!--轮播图组件-->
<mip-carousel autoplay defer="1000" layout="responsive" width="600" height="400" indicator buttonController>
    {{--<mip-img src="http://a2.att.hudong.com/71/04/300224654811132504044925945_950.jpg"></mip-img>--}}
    @foreach($hotArticle as $k=>$v)
    <a target="_blank" href="{{url('a/'.$v->art_id)}}">
        <mip-img src="{{getImgUrl($v->art_content)[0]}}" layout="responsive" width="600" height="400">
            <p>{{$v->art_title}}</p>
        </mip-img>
        <div class="mip-carousle-subtitle" style="background: #00000087;">{{$v->art_title}}</div>
    </a>
    @endforeach
    {{--<mip-img src="http://img3.3lian.com/2013/v9/58/d/25.jpg"></mip-img>--}}
</mip-carousel>
<!--轮播图组件-->


<!--tab组件 文章列表-->
<mip-vd-tabs allow-scroll>
    <section>
        @foreach($cateLists as $k=>$v)
            <li>{{$v->cate_name}}</li>
        @endforeach
        {{--<li>第二季</li>--}}
        {{--<li>第三季</li>--}}
        {{--<li>第四季</li>--}}
        {{--<li>第五季</li>--}}
        {{--<li>第六季更新至09</li>--}}
    </section>
    @foreach($data as $k=>$v)
    <div class="article article{{$k+1}}">
        @foreach($v as $k1=>$v1)
        <a  data-type="mip" data-title="{{$v1->art_title}}" href="{{url('a/'.$v1->art_id)}}">
            <h2>{{$v1->art_title}}</h2>
            <span>{{date('Y-m-d', $v1->art_dingTime)}}</span>
        </a>
        @endforeach
    </div>
    @endforeach
    {{--<div class="article article2">内容2</div>--}}
    {{--<div class="article article3">内容3</div>--}}
    {{--<div class="article article4">内容4</div>--}}
    {{--<div class="article article5">内容5</div>--}}
    {{--<div class="article article6">内容6</div>--}}
</mip-vd-tabs>
<!--tab组件 文章列表-->


<!--底部-->
<div class="footer">
    <div class="footer_top" style="background: #ccc;border-top: 2px solid #3b659f;">
        <div class="" style="width: 110px;margin:0 auto;padding-top:15px;">
            <mip-img
                    layout="fixed"
                    width="106"
                    height="106"
                    popup=""
                    alt="baidu mip img"
                    src="http://bit-images.bj.bcebos.com/qrcode_for_gh_18d51f3101b3_1280.jpg">
            </mip-img>
            <span style="display: block;padding:10px 0 15px 0;color:#666;">Jerry的编程之路</span>
        </div>
    </div>
    <div class="footer_bottom">
        <p>Powered by Jerry的编程之路  京ICP备16056489号 托管于阿里云  </p>
    </div>
</div>
<!--底部-->


<!--百度统计组件 TODO: 修改token值-->
<mip-stats-baidu token="7082e5a1b996d093cb5de1d901103c66"></mip-stats-baidu>

<!--mip 运行环境-->
<script src="https://mipcache.bdstatic.com/static/v1/mip.js"></script>

<!--引入熊掌号MIP组件的SDK 代码-->
<script src="https://mipcache.bdstatic.com/extensions/platform/v1/mip-cambrian/mip-cambrian.js"></script>

<!--百度统计组件 代码-->
<script src="https://mipcache.bdstatic.com/static/v1/mip-stats-baidu/mip-stats-baidu.js"></script>

<!--头部响应式菜单脚本组件 代码-->
<script src="https://mipcache.bdstatic.com/static/v1/mip-nav-slidedown/mip-nav-slidedown.js"></script>

<!--mip-vd-tabs tab 切换组件-->
<script src="https://mipcache.bdstatic.com/static/v1/mip-vd-tabs/mip-vd-tabs.js"></script>

<!--mip-infinitescroll 无限滚动 加载更多-->
<script src="https://mipcache.bdstatic.com/static/v1/mip-infinitescroll/mip-infinitescroll.js"></script>
<script src="https://mipcache.bdstatic.com/static/v1/mip-mustache/mip-mustache.js"></script>


</body>
</html>