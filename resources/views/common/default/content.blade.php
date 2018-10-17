<html><head>
    <meta charset="UTF-8">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="X-UA-Compatible" content="IE=11,IE=10,IE=9,IE=8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="apple-mobile-web-app-title" content="演示站-评测智能硬件">
    <meta http-equiv="Cache-Control" content="no-siteapp">
    <title>{{$data['title']}}</title>
    <meta name="keywords" content="{{$data['keywords']}}">
    <meta name="description" content="{{$data['description']}}">
    <meta name="author" content="admin">
    <link rel="prev" title="{{ $data['pre']->art_title}}" href="{{url('article'.$data['pre']->cate_id.'-'.$data['pre']->art_id.'.html')}}">
    <link rel="next" title="{{ $data['next']->art_title}}" href="{{url('article'.$data['next']->cate_id.'-'.$data['next']->art_id.'.html')}}">
    <link rel="canonical" href="{{url('article'.$data['field']->cate_id.'-'.$data['field']->art_id.'.html')}}">
    <link rel="shortlink" href="{{url('article'.$data['field']->cate_id.'-'.$data['field']->art_id.'.html')}}">
    <script src="{{asset('resources/views/common/default/ydnew/zb_system/script/jquery-2.2.4.min.js')}}" type="text/javascript"></script>
{{--    <script src="{{asset('resources/views/common/default/ydnew/zb_system/script/zblogphp.js')}}" type="text/javascript"></script>--}}
    <script src="{{asset('resources/views/common/default/ydnew/zb_system/script/c_html_js_add.php')}}" type="text/javascript"></script>
    <script src="{{asset('resources/views/common/default/ydnew/zb_users/plugin/UEditor/third-party/prism/prism.js')}}" type="text/javascript"></script>
    <style type="text/css" abt="234"></style>
    <link rel="stylesheet" type="text/css" href="{{asset('resources/views/common/default/ydnew/zb_users/plugin/UEditor/third-party/prism/prism.css')}}">

    <link rel="stylesheet" id="_main-css" href="{{asset('resources/views/common/default/ydnew/zb_users/theme/ydnew/style/css/main.min.css')}}" type="text/css" media="all">
    <link rel="shortcut icon" href="{{asset('resources/views/common/default/ydnew/zb_users/theme/ydnew/style/diy/favicon.ico')}}">
    <!--[if lt IE 9]>
    <script src="{{asset('resources/views/common/default/ydnew/zb_users/theme/ydnew/style/js/html5shiv.js')}}"></script>
    <![endif]-->
</head>
<body class="post-template-default single single-post postid-7 single-format-standard comment-open site-layout-2" screen_capture_injected="true">

@include('common.default.header')

<section class="container-single">
    <div class="content-wrap">
        <div class="singleh">
            <div class="content">
                <h1 class="article-title">
                    <a href="{{url('article'.$data['field']->cate_id.$data['field']->art_id.'.html')}}">{{$data['field']->art_title}}</a>
                </h1>
                <div class="article-infos">
                    <div class="top-share">

                        <div class="bdbsharecode bjcode1">
                            <i class="public-modal-btn-cancel-red closeweixin1"></i>
                            <em class="sharecode_o"></em>
                        </div>
                        <div class="bdsharebuttonbox bdshare-button-style1-24" data-tag="share_1" style="float:right" data-bd-bind="1537932455666">
                            <a href="#" class="bds_more" data-cmd="more" style="display:none"></a>
                            <a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a>
                            <a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a>
                            <a href="#" class="bds_sqq" data-cmd="sqq" title="分享到QQ好友"></a>
                            <a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a>
                            <a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a>
                            <a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a>
                        </div>

                        <script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"1","bdSize":"24"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>

                    </div>
                    <div class="article-info">
                        <a class="name" target="_blank" href="{{url('category'.$data['field']->cate_id.'.html')}}">{{$data['field']->cate_name}}</a>
                        <span class="time"> {{date('Y-m-d h:i:s', $data['field']->art_time)}}</span>
                    </div>
                    <div class="article-info">
							<span class="type">标签：
							<a href="#" rel="tag">{{$data['field']->art_tag}}</a>&nbsp;&nbsp;
                            </span>
                    </div>
                </div>

                <article class="article-content">
                    <style>
                        .Box{
                            width: 100%;
                            /*border: 1px solid #999;*/
                            height: 200px;
                            font-size: 13px;
                        }
                        .con{
                            width: 100%;
                            height: 200px;
                            /*background-color: #cccccc;*/
                            display:none;
                        }
                        .con p a{
                            display: inline-block;
                            padding: 0 5px;
                            color: #999;
                        }
                        .current{
                            /*background-color: pink;*/
                        }
                        .leftTab{
                            float:left;
                            width: 20%;
                        }
                        .leftTab span{display: block;padding: 5px;box-sizing: border-box;}
                        .rightTab{
                            float: left;
                            width: 80%;
                        }
                        /*.rightTab .con{float: left;overflow: hidden;}*/
                    </style>
                    <div class="Box" id="box">
                        <div class="leftTab">
                            <span class="current" >百度pc相关搜索词</span>
                            <span >360pc相关搜索词</span>
                            <span>搜狗pc相关搜索词</span>
                            <span>神马移动搜索词</span>
                        </div>
                        <div class="rightTab">
                            <div class="con" style="display: block">
                                <p style="height: 0;color: #999;" class="" title="百度pc相关搜索词">
                                    <a href="">seo是什么</a>
                                    <a href="">如何优化网站排名</a>
                                    <a href="">如何自学seo</a>
                                    <a href="">没经验能做seo专员吗?</a>
                                    <a href="">seo职位</a>
                                    <a href="">seo招聘</a>
                                    <a href="">sem和seo区别</a>
                                    <a href="">seo学习</a>
                                    <a href="">seo闷声发大财</a>
                                    <a href="">seo闷声发大财</a>
                                    <a href="">seo闷声发大财</a>
                                    <a href="">seo闷声发大财</a>
                                    <a href="">seo闷声发大财</a>
                                    <a href="">seo闷声发大财</a>
                                    <a href="">seo闷声发大财</a>
                                    <a href="">seo闷声发大财</a>
                                    <a href="">seo闷声发大财</a>
                                </p>
                            </div>
                            <div class="con">
                                <p style="height: 0;color: #999;" class="" title="360pc相关搜索词">
                                    百度seo		seo软件		seo培训学校		蜗牛精灵seo工具		seo优惠
                                    网站刷seo		seo引流软件		seo优化点击软件		seo优化		seo教程
                                    郑州seo		seo查询		seo优化教程		爱站seo		企业seo软件
                                </p>
                            </div>
                            <div class="con">
                                <p style="height: 0;color: #999;" class="" title="搜狗pc相关搜索词">
                                    sem 北大青鸟seo培训好吗 seo案例 seo培训haiyaoseo 北大青鸟seo培训费用
                                    网站seo seo招聘 seo顾问 seo公司 seo排名 seo外包 百度seo 学seo
                                </p>
                            </div>
                            <div class="con">
                                <p style="height: 0;color: #999;" class="" title="神马移动搜索词">
                                    seo是什么		如何优化网站排名		如何自学seo
                                    seo职位		没经验能做seo专员吗?		seo招聘
                                    sem和seo区别		seo学习		seo闷声发大财
                                </p>
                            </div>
                        </div>
                    </div>
                    <script>
                        $('.leftTab').on('mouseover', 'span', function(){
                            $('.rightTab .con').eq($(this).index()).show().siblings().hide();
                        });
                    </script>

                    {{--中间可以加上页面标题百度采集结果页内容--}}
                    {{--淘宝客商品链接--}}
                    {{--内连锚文字链接--}}
                    {!! $data['field']->art_content !!}
                </article>



                <nav class="article-nav">
                    <span class="article-nav-prev">
                        上一篇
                        @if(isset($data['pre']->art_title))
                            <a href="{{url('article'.$data['pre']->cate_id.'-'.$data['pre']->art_id.'.html')}}" rel="prev">{{ $data['pre']->art_title}}</a>
                        @else
                            暂无
                        @endif
                    </span>
                    <span class="article-nav-next">
                        @if(isset($data['next']->art_title))
                            <a href="{{url('article'.$data['next']->cate_id.'-'.$data['next']->art_id.'.html')}}" rel="next">{{ $data['next']->art_title}}</a>
                        @else
                            暂无
                        @endif
                            下一篇
                    </span>
                </nav>


                <div class="relates">
                    <div class="title" style="margin-bottom:30px; margin-top:20px;">
                        <h3>相关推荐</h3>
                    </div>
                </div>
                <div class="clearfix relate-boxx">
                    <ul class="clearfix list">
                    </ul>
                </div>

                <!--版权-->



                <div class="title" id="comments">
                    <h3>猜你喜欢</h3>
                </div>

                <div id="respond" class="no_webshot">
                </div>
                <div id="postcomments">

                </div>

            </div>
        </div>
    </div>
    <div class="mt10">

        <aside class="sidebar">


            <div class="widget widget_ui_posts_list">
                <h3>热门文章<span class="w_title">TOP ARTICLES</span></h3>
                <ul>
                    @foreach($data['hotArticle'] as $k=>$v)
                        <li>
                            <a target="_blank" href="{{url('article'.$v->cate_id.'-'.$v->art_id.'.html')}}">
                                {{$v->art_title}}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

            <div class="widget widget_ui_posts">
                <h3>最近发表<span class="w_title">NEW ARTICLES</span></h3>
                <ul>
                    @foreach($data['newArticle'] as $k=>$v)
                        <li>
                            <a target="_blank" href="{{url('article'.$v->cate_id.'-'.$v->art_id.'.html')}}">
                                <span class="thumbnail">
                                    <img src="http://theme.b5b6.com/ydnew/zb_users/upload/2016/10/20161003095053_15482.jpeg" alt="国内三星Note7存在安全隐患，质检总局令召回">
                                </span>
                                <span class="text">{{$v->art_title}}</span>
                                <span class="muted">{{date('Y-m-d', $v->art_time)}}</span>
                                <span class="muted">阅读({{$v->art_view}})</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

            <div class="widget widget_archive">
                <ul>
                    {{--<li><a href="#" target="_blank"><img src="http://theme.b5b6.com/ydnew/zb_system/image/logo/zblog.gif" height="31" width="88" alt="RainbowSoft Studio Z-Blog"></a></li>--}}
                    {{--<li><a href="#" target="_blank"><img src="http://theme.b5b6.com/ydnew/zb_system/image/logo/rss.png" height="31" width="88" alt="订阅本站的 RSS 2.0 新闻聚合"></a></li>--}}
                </ul>
            </div>

            {{--<div class="widget">   --}}
                {{--<h3>最新留言<span class="w_title">comments</span></h3>      --}}
                {{--<ul class="ul_divComments_inner">--}}
                    {{--<li><img alt="祖玛阁" src="http://theme.b5b6.com/ydnew/zb_users/theme/ydnew/include/avator/33.jpg" class="avatar avatar-50 photo" height="50" width="50">--}}
                        {{--<div class="rc-info"><span class="rc-reviewer">祖玛阁</span> 在 <a class="rc-post" href="http://theme.b5b6.com/ydnew/post/12.html#cmt71">低调奢华的土曼T-Fire Metal智能腕表</a></div>--}}
                        {{--<div class="rc-excerpt">评论试试，这个主题不错！</div>--}}
                    {{--</li>--}}
                    {{--<li><img alt="访客" src="http://theme.b5b6.com/ydnew/zb_users/theme/ydnew/include/avator/20.jpg" class="avatar avatar-50 photo" height="50" width="50">--}}
                        {{--<div class="rc-info"><span class="rc-reviewer">访客</span> 在 <a class="rc-post" href="http://theme.b5b6.com/ydnew/post/10.html#cmt70">360 手机N4定义“青年新旗舰”，凭什么?</a></div>--}}
                        {{--<div class="rc-excerpt">ddsvsdv</div>--}}
                    {{--</li>--}}
                    {{--<li><img alt="访客" src="http://theme.b5b6.com/ydnew/zb_users/theme/ydnew/include/avator/12.jpg" class="avatar avatar-50 photo" height="50" width="50">--}}
                        {{--<div class="rc-info"><span class="rc-reviewer">访客</span> 在 <a class="rc-post" href="http://theme.b5b6.com/ydnew/post/15.html#cmt69">国内三星Note7存在安全隐患，质检总局令召回</a></div>--}}
                        {{--<div class="rc-excerpt">测试仪</div>--}}
                    {{--</li>--}}
                    {{--<li><img alt="访客" src="http://theme.b5b6.com/ydnew/zb_users/theme/ydnew/include/avator/17.jpg" class="avatar avatar-50 photo" height="50" width="50">--}}
                        {{--<div class="rc-info"><span class="rc-reviewer">访客</span> 在 <a class="rc-post" href="http://theme.b5b6.com/ydnew/post/15.html#cmt68">国内三星Note7存在安全隐患，质检总局令召回</a></div>--}}
                        {{--<div class="rc-excerpt">李聊</div>--}}
                    {{--</li>--}}
                    {{--<li><img alt="访客" src="http://theme.b5b6.com/ydnew/zb_users/theme/ydnew/include/avator/30.jpg" class="avatar avatar-50 photo" height="50" width="50">--}}
                        {{--<div class="rc-info"><span class="rc-reviewer">访客</span> 在 <a class="rc-post" href="http://theme.b5b6.com/ydnew/post/15.html#cmt67">国内三星Note7存在安全隐患，质检总局令召回</a></div>--}}
                        {{--<div class="rc-excerpt">哈哈</div>--}}
                    {{--</li>--}}
                    {{--<li><img alt="访客" src="http://theme.b5b6.com/ydnew/zb_users/theme/ydnew/include/avator/13.jpg" class="avatar avatar-50 photo" height="50" width="50">--}}
                        {{--<div class="rc-info"><span class="rc-reviewer">访客</span> 在 <a class="rc-post" href="http://theme.b5b6.com/ydnew/post/2.html#cmt66">主题购买</a></div>--}}
                        {{--<div class="rc-excerpt">哈哈哈</div>--}}
                    {{--</li>--}}
                    {{--<li><img alt="访客" src="http://theme.b5b6.com/ydnew/zb_users/theme/ydnew/include/avator/34.jpg" class="avatar avatar-50 photo" height="50" width="50">--}}
                        {{--<div class="rc-info"><span class="rc-reviewer">访客</span> 在 <a class="rc-post" href="http://theme.b5b6.com/ydnew/post/15.html#cmt65">国内三星Note7存在安全隐患，质检总局令召回</a></div>--}}
                        {{--<div class="rc-excerpt">ndndjkxk:xn</div>--}}
                    {{--</li>--}}
                    {{--<li><img alt="访客" src="http://theme.b5b6.com/ydnew/zb_users/theme/ydnew/include/avator/24.jpg" class="avatar avatar-50 photo" height="50" width="50">--}}
                        {{--<div class="rc-info"><span class="rc-reviewer">访客</span> 在 <a class="rc-post" href="http://theme.b5b6.com/ydnew/post/15.html#cmt64">国内三星Note7存在安全隐患，质检总局令召回</a></div>--}}
                        {{--<div class="rc-excerpt">sssss</div>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</div>--}}

            <div class="widget widget_ui_tags widget_tags">
                <h3>热门标签<span class="w_title">TOP TAGS</span></h3>	
                <div class="items">
                    <ul>
                        <li class="tagbgc6"><a target="_blank" href="#1.html">小米</a></li>
                        <li class="tagbgc1"><a target="_blank" href="#2.html">乐视</a></li>
                        <li class="tagbgc2"><a target="_blank" href="#5.html">联想</a></li>
                        <li class="tagbgc1"><a target="_blank" href="#6.html">一加</a></li>
                        <li class="tagbgc0"><a target="_blank" href="#7.html">无边框</a></li>
                        <li class="tagbgc5"><a target="_blank" href="#8.html">曲面屏</a></li>
                        <li class="tagbgc9"><a target="_blank" href="#9.html">国产手机</a></li>
                        <li class="tagbgc8"><a target="_blank" href="#10.html">移动支付</a></li>
                        <li class="tagbgc2"><a target="_blank" href="#11.html">无人机</a></li>
                        <li class="tagbgc5"><a target="_blank" href="#12.html">视频直播</a></li>
                        <li class="tagbgc2"><a target="_blank" href="#13.html">360</a></li>
                        <li class="tagbgc2"><a target="_blank" href="#14.html">智能手表</a></li>
                        <li class="tagbgc2"><a target="_blank" href="#15.html">iPhone7</a></li>
                        <li class="tagbgc1"><a target="_blank" href="#16.html">三星Note7</a></li>
                    </ul>
                </div>
            </div>
        </aside>
    </div>
</section>

@include('common.default.footer')

</body>
</html>