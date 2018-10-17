<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>每周十问</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,minimum-scale=1,user-scalable=no"/>
    <meta content="yes" name="apple-mobile-web-app-capable" />
    <meta content="black" name="apple-mobile-web-app-status-bar-style" />
    <meta content="telephone=no" name="format-detection" />
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link href="{{asset('resources/views/web/spring/css/base.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('resources/views/web/spring/css/question.css')}}" rel="stylesheet" type="text/css">

    <script src="{{asset('resources/views/web/spring/js/jquery-1.11.0.min.js')}}"></script>
    <script src="{{asset('resources/views/web/spring/js/fontSize.js')}}"></script>

</head>

<body>
<div id="warp">
    <div class="warp_fix"><img src="{{url('resources/views/web/spring/images/question/warp_bg.jpg')}}" /></div>
    <!--begin:问题列表-->
    <div class="tion_list">
        <h2>问题列表</h2>
        <ul>
            <li class="clearfix">
                <p><span>1</span>请教贴膜后窗户降不下来了咋办？</p>
                <a href="javascript:void(0);"><img src="{{url('resources/views/web/spring/images/question/btn_1.png')}}" /></a>
            </li>
            <li class="clearfix">
                <p><span>2</span>想问下大灯清洗怎么用，说明书太厚了？</p>
                <a href="javascript:void(0);"><img src="{{url('resources/views/web/spring/images/question/btn_1.png')}}" /></a>
            </li>
            <li class="clearfix">
                <p><span>3</span>QX50轮毂被刮，应该怎么办？</p>
                <a href="javascript:void(0);"><img src="{{url('resources/views/web/spring/images/question/btn_1.png')}}" /></a>
            </li>
            <li class="clearfix">
                <p><span>4</span>英菲尼迪QX80用什么机油？</p>
                <a href="javascript:void(0);"><img src="{{url('resources/views/web/spring/images/question/btn_1.png')}}" /></a>
            </li>
            <li class="clearfix">
                <p><span>5</span>为什么我的车查不了环保驾驶的数据？</p>
                <a href="javascript:void(0);"><img src="{{url('resources/views/web/spring/images/question/btn_1.png')}}" /></a>
            </li>
            <li class="clearfix">
                <p><span>6</span>为什么车载蓝牙接电话会没声音？</p>
                <a href="javascript:void(0);"><img src="{{url('resources/views/web/spring/images/question/btn_1.png')}}" /></a>
            </li>
            <li class="clearfix">
                <p><span>7</span>刹车片小于多少就要更换？</p>
                <a href="javascript:void(0);"><img src="{{url('resources/views/web/spring/images/question/btn_1.png')}}" /></a>
            </li>
            <li class="clearfix">
                <p><span>8</span>Q70l为什么有时候会有顿挫感？</p>
                <a href="javascript:void(0);"><img src="{{url('resources/views/web/spring/images/question/btn_1.png')}}" /></a>
            </li>
            <li class="clearfix">
                <p><span>9</span>天窗按键边上，有个凹进去的洞，里面有一个白色的光源，这个是干什么用？</p>
                <a href="javascript:void(0);"><img src="{{url('resources/views/web/spring/images/question/btn_1.png')}}" /></a>
            </li>
            <li class="clearfix">
                <p><span>10</span>请问2.0舒适的胎压在哪里看？</p>
                <a href="javascript:void(0);"><img src="{{url('resources/views/web/spring/images/question/btn_1.png')}}" /></a>
            </li>
        </ul>
    </div>
    <div class="list_bom">
        <a class="btn_arrow" href="javascript:void(0);"><img src="{{url('resources/views/web/spring/images/question/btn_2.png')}}" /></a>
        <a class="btn_ask" href="javascript:void(0);"><img src="{{url('resources/views/web/spring/images/question/btn_3.png')}}" /></a>
    </div>
    <!--end:问题列表-->
</div>
<!--end:warp-->
</body>
</html>
<script>
    $(function(){
        $('.clearfix a').click(function(){
            window.location.href = '{{url('/201510infiniti/question/list')}}';
        });
    });
</script>
