<!DOCTYPE html>
<html mip>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
    <link rel="stylesheet" type="text/css" href="https://mipcache.bdstatic.com/static/v1/mip.css">
    <!--TODO: canonical href需要替换成原页面url-->
    <link rel="canonical" href="http://jierui303.com/a/">
    <title>{{$field->cate_name}}-Jerry的编程之路</title>
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


        .footer_bottom{
            background: #000;
            color:#fff;
            font-size: 12px;
            padding:15px 0;
            text-align: center;
        }

        .footer_top{
            background: #ccc;
            border-top: 2px solid #3b659f;
        }
        .footer_tops{
            width: 110px;
            margin:0 auto;
            padding-top:15px;
        }

        .footer_span{
            display: block;
            padding:10px 0 15px 0;
            color:#666;
        }
        .footer_img{
            margin-top: 15px;
        }

        @media screen and (max-width: 480px){
            .mip-nav-wrapper{
                width: 100%;
                height: 45px;
                float: left;
                clear: both;
                border-bottom: 2px solid #3b659f;
                background: #ffffff;
            }
            .unbox {
                width: 100%;
                float: left;
                clear: both;
                overflow: hidden;
                background: #fff;
            }
            .content {
                width: 100%;
                margin: 0 auto;
                float: left;
                clear: both;
            }
            .crumbs {
                width: 92%;
                height: 14px;
                float: left;
                clear: both;
                border-left: 14px solid #3b659f;
                line-height: 14px;
                margin: 15px 5% 15px 3%;
                display: block;
                white-space: nowrap;
                overflow: hidden;
                text-overflow: ellipsis;
                text-indent: 8px;
            }
            #newsdetail .textbox {
                width: 94%;
                margin: 0 3%;
            }
            .textbox .bt {
                width: 100%;
                height: auto !important;
                float: left;
                clear: both;
                padding: 15px 0;
            }
            .textbox .bt h1 {
                font-size: 20px;
                font-weight: normal;
                color: #666666;
                text-align: center;
                line-height: 30px;
                margin: 0;
                padding: 0;
                float: left;
                clear: both;
                width: 100%;
            }
            .textbox .bt span {
                width: 100%;
                height: auto !important;
                margin-top: 5px;
                float: left;
                clear: both;
                text-align: center;
                color: #999999;
            }
            .textbox .nr {
                width: 100%;
                height: auto !important;
                float: left;
                clear: both;
            }
            #newsdetail p {
                padding: 8px 0;
            }

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
                <li><a href="{{url('/')}}">首页</a></li>
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

<!--面包屑导航-->
<div class="unbox">
    <div class="content">
        <div class="crumbs">
            <a href="{{url('/')}}" class="on">首页</a> &gt;
            @if($field->cate_pid !== 0)
                <a href="{{url('cate/'.$field->cate_pid)}}" class="on">{{$field->cate_pid_name}}</a> &gt;
            @endif
            <a href="{{url('cate/'.$field->cate_id)}}" class="on">{{$field->cate_name}}</a> &gt;
            <a href="{{url('a/'.$field->art_id)}}">{{$field->art_title}}</a>
        </div>
    </div>
</div>
<!--面包屑导航-->

<!--tab组件 文章列表-->
<div class="article article1">
    @foreach($data as $k1=>$v1)
        <a  data-type="mip" data-title="{{$v1->art_title}}" href="{{url('a/'.$v1->art_id)}}">
            <h2>{{$v1->art_title}}</h2>
            <span>{{date('Y-m-d', $v1->art_dingTime)}}</span>
        </a>
    @endforeach
</div>
<!--tab组件 文章列表-->


<!--底部-->
<div class="footer">
    <div class="footer_top">
        <div class="footer_tops">
            <mip-img
                    layout="fixed"
                    width="106"
                    height="106"
                    class="footer_img"
                    popup=""
                    alt="baidu mip img"
                    src="http://bit-images.bj.bcebos.com/qrcode_for_gh_18d51f3101b3_1280.jpg">
            </mip-img>
            <span class="footer_span">Jerry的编程之路</span>
        </div>
    </div>
    <div class="footer_bottom">
        <p>Powered by Jerry的编程之路  京ICP备16056489号 托管于阿里云  </p>
    </div>
</div>
<!--底部-->

<!--
{
status: 0,
data: {
    items: [
        img: "http://img3.3lian.com/2013/v9/58/d/25.jpg",
        number: "11"
      ]
   }
}
Name



-->
<hr>
<hr>
<hr>
<hr>
<hr>

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