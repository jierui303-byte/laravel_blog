<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>敢爱榜</title>
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
        <div class="answer_title">
            <h2>问题列表</h2>
            <p class="answer_txt">[问题] 请教贴膜后窗户降不下来了咋办？</p>
        </div>

        <div class="answer_box">
            <div class="answer_list clearfix">
                <div class="answer_l">
                    <h3><img src="{{url('resources/views/web/spring/images/question/title.png')}}" /></h3>
                    <div class="answer_con">
                        <p>王小二</p>
                        <p>贴膜太厚了吧，招4s店。</p>
                    </div>
                </div>
                <div class="answer_r">
                    <p>6/6  12：20</p>
                    <div class="answer_zan zan_action">40</div>
                </div>
            </div>
            <!--end:answer_list-->
            <div class="answer_list clearfix">
                <div class="answer_l">
                    <h3><img src="{{url('resources/views/web/spring/images/question/title.png')}}" /></h3>
                    <div class="answer_con">
                        <p>李厢</p>
                        <p>检查一下是否结冰了，一般不会出现这个情况的</p>
                    </div>
                </div>
                <div class="answer_r">
                    <p>6/6  12：20</p>
                    <div class="answer_zan zan_action">21</div>
                </div>
            </div>
            <!--end:answer_list-->
            <div class="answer_list clearfix">
                <div class="answer_l">
                    <h3><img src="{{url('resources/views/web/spring/images/question/title.png')}}" /></h3>
                    <div class="answer_con">
                        <p>李林</p>
                        <p>这还真不清楚啊。</p>
                    </div>
                </div>
                <div class="answer_r">
                    <p>6/6  12：20</p>
                    <div class="answer_zan zan_action">10</div>
                </div>
            </div>
            <!--end:answer_list-->
            <div class="answer_list clearfix">
                <div class="answer_l">
                    <h3><img src="{{url('resources/views/web/spring/images/question/title.png')}}" /></h3>
                    <div class="answer_con">
                        <p>高瑞</p>
                        <p>1、用肥皂加少许氨水与松节油的混合液，可以去掉许多玻璃上的污物。2、用粘性好的透明胶反复粘撕,可以去掉表面一些。</p>
                    </div>
                </div>
                <div class="answer_r">
                    <p>6/6  12：20</p>
                    <div class="answer_zan">0</div>
                </div>
            </div>
            <!--end:answer_list-->
            <div class="answer_pos">
                <div class="answer_bor">
                    <input type="text" placeholder="回答问题" />
                    <a class="answer_btns" href="javascript:void(0);"><img src="{{url('resources/views/web/spring/images/question/btn_4.png')}}" /></a>
                </div>
            </div>
        </div>

    </div>
    <div class="list_bom">
        <a class="btn_arrow" href="javascript:void(0);"><img src="{{url('resources/views/web/spring/images/question/btn_2.png')}}" /></a>
        <a href="javascript:;" class="logo"></a>
        <a class="btn_ask" href="javascript:void(0);"><img src="{{url('resources/views/web/spring/images/question/btn_3.png')}}" /></a>
    </div>
    <!--end:问题列表-->
</div>
<!--end:warp-->

<!--begin:增加成功回答弹层-->
<div class="susser_fn hidden">
    <div class="susser_box">
        <a class="susser_close" href="javascript:void(0);"><img src="{{url('resources/views/web/spring/images/question/close.png')}}" /></a>
        <h2>成功</h2>
        <div class="susser_menu">
            <span><img src="{{url('resources/views/web/spring/images/question/check.png')}}" /></span>
            <p>增加回答成功</p>
        </div>
    </div>
</div>
<!--end:增加成功回答弹层-->
</body>
</html>
