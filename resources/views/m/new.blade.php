<!DOCTYPE html>
<html mip>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
    <link rel="stylesheet" type="text/css" href="https://mipcache.bdstatic.com/static/v1/mip.css">
    <!--TODO: canonical href需要替换成原页面url-->
    <link rel="canonical" href="http://jierui303.com/a/{{$field->art_id}}">
    <link rel="canonical" href="http://www.jierui303.com/a/{{$field->art_id}}">
    <title>{{$field->art_title}}-Jerry的编程之路</title>
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
    <mip-nav-slidedown data-id="bs-navbar" class="mip-element-sidebar container" data-showbrand="1" data-brandname="Jerry的编程之路">
        <nav id="bs-navbar" class="navbar-collapse collapse navbar navbar-static-top">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{url('/')}}">首页</a></li>@foreach($cateLists as $k=>$v)<li><a href="{{url('cate/'.$v->cate_id)}}">{{$v->cate_name}}</a></li>@endforeach
                <li class="navbar-wise-close"><span id="navbar-wise-close-btn"></span></li>
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
            @if($field->cate_pid_name)
            <a href="{{url('cate/'.$field->cate_pid)}}" class="on">{{$field->cate_pid_name}}</a> &gt;
            @endif
            <a href="{{url('cate/'.$field->cate_id)}}" class="on">{{$field->cate_name}}</a> &gt;
            <a href="javascript:;">{{$field->art_title}}</a>
        </div>
    </div>
</div>
<!--面包屑导航-->
<!--内容部分-->
<div class="unbox bg_w pd30" id="newsdetail" style="min-height:600px;">
    <div class="content" id="mobiledetail">
        <div class="textbox">
            <div class="bt">
                <h1>{{$field->art_title}}</h1>
                <span>发布时间:{{date('Y-m-d h:i:s', $field->art_dingTime)}} &nbsp;&nbsp;点击量:{{$field->art_view}}</span>
            </div>
            <div class="nr">
                {!! $field->art_content !!}
            </div>
        </div>
    </div>
</div>
<!--内容部分-->
<!--底部-->
<div class="footer">
    <div class="footer_top" style="background: #ccc;border-top: 2px solid #3b659f;">
        <div class="" style="width: 110px;margin:0 auto;padding-top:15px;">
            <mip-img layout="fixed" width="106" height="106" style="margin-top: 15px;" popup="" alt="baidu mip img" src="http://bit-images.bj.bcebos.com/qrcode_for_gh_18d51f3101b3_1280.jpg"></mip-img>
            <span style="display: block;padding:10px 0 15px 0;color:#666;">Jerry的编程之路</span>
        </div>
    </div>
    <div class="footer_bottom">
        <p>Powered by Jerry的编程之路  京ICP备16056489号 托管于阿里云  </p>
    </div>
</div>
<!--底部-->

<script type="application/ld+json">
    {
        "@context": "https://ziyuan.baidu.com/contexts/cambrian.jsonld",
        "@id": "http://m.jierui303.com/a/{{$field->art_id}}",
        "appid": "1579948430302048",
        "title": "{{$field->art_title}}-Jerry的编程之路",
        "images": [
            "{{getImgUrl($field->art_content)[0]}}"
            ],
        "description": "{{$field->art_description}}",
        "pubDate": "{{date("Y-m-d", $field->art_time)}}T{{date("h:i:s", $field->art_time)}}",
        "upDate": "{{date("Y-m-d", $field->art_dingTime)}}T{{date("h:i:s", $field->art_dingTime)}}"
    }
</script>

<!--百度统计组件 TODO: 修改token值-->
<mip-stats-baidu token="7082e5a1b996d093cb5de1d901103c66"></mip-stats-baidu>

<!--mip 运行环境-->
<script src="https://mipcache.bdstatic.com/static/v1/mip.js"></script>
<script src="https://mipcache.bdstatic.com/extensions/platform/v1/mip-cambrian/mip-cambrian.js"></script>


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