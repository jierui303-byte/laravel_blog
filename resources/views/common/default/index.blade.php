<html>
<head>
    <meta charset="UTF-8">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="X-UA-Compatible" content="IE=11,IE=10,IE=9,IE=8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="apple-mobile-web-app-title" content="{{$data['currentMainCategoryInfo']->cate_name}}">
    <meta http-equiv="Cache-Control" content="no-siteapp">
    <title>{{$data['currentMainCategoryInfo']->cate_title}}</title>
    <meta name="keywords" content="{{$data['currentMainCategoryInfo']->cate_keywords}}">
    <meta name="description" content="{{$data['currentMainCategoryInfo']->cate_description}}">
    <script src="{{asset('resources/views/common/default/ydnew/zb_system/script/jquery-2.2.4.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('resources/views/common/default/ydnew/zb_system/script/zblogphp.js')}}" type="text/javascript"></script>
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
<body class="home blog site-layout-2" screen_capture_injected="true">

@include('common.default.header')

<section class="container">
    <div class="content-wrap">
        <div class="content">

            <link rel="stylesheet" href="{{asset('resources/views/common/default/ydnew/zb_users/theme/ydnew/style/css/slick.css')}}">
            <div class="slick">
                @foreach($data['lunBoArticle'] as $k=>$v)
                <div class="slick-slide">
                    <a href="{{url('article'.$v->cate_id.'-'.$v->art_id.'.html')}}" target="_blank" title="{{$v->art_title}}">
                        <img alt="{{$v->art_title}}" title="{{$v->art_title}}" src="http://theme.b5b6.com/ydnew/zb_users/upload/2016/06/20160615113308_97138.jpeg">
                    </a>
                    <span>
                        <a href="{{url('article'.$v->cate_id.'-'.$v->art_id.'.html')}}" target="_blank" title="{{$v->art_title}}"> {{$v->art_title}} </a>
                    </span>
                </div>
                @endforeach
            </div>
            <!-- Demo end -->
            <script src="{{asset('resources/views/common/default/ydnew/zb_users/theme/ydnew/style/js/slick.min.js')}}"></script>
            <script>
                $(function(){
                    $('.slick').not('.slick-initialized').slick({
                        dots: true, //显示项目导航
                        fade: true, //淡入淡出
                        autoplay: true //自动播放
                    });
                });
            </script>

            <div class="thumbs">
                @foreach($data['lunBoArticle'] as $k=>$v)
                    <div class="thumbtt">
                        <a href="{{url('article'.$v->cate_id.'-'.$v->art_id.'.html')}}" class="img" target="_blank">
                            <img alt="{{$v->art_title}}" title="{{$v->art_title}}" src="http://theme.b5b6.com/ydnew/zb_users/upload/2016/06/20160615111840_73696.jpeg">
                            <span class="bg"></span>
                            <p class="title">{{$v->art_title}}</p>
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="clear"></div>
            <!--<div class="title"><h3> 最新发布 </h3><div class="more"><a href="#">文章数字</a></div></div>-->

            @foreach($data['pics'] as $k=>$v)
                <article class="excerpt excerpt-{{$k+1}}">
                    <div class="focus thumb">
                        <a href="{{url('article'.$v->cate_id.'-'.$v->art_id.'.html')}}" title="{{$v->art_title}}">
                            <img src="http://theme.b5b6.com/ydnew/zb_users/upload/2016/10/20161003095053_15482.jpeg">
                        </a>
                    </div>
                    <header>
                        <h2>
                            <a target="_blank" href="{{url('article'.$v->cate_id.'-'.$v->art_id.'.html')}}" title="{{$v->art_title}}">{{$v->art_title}}</a>
                        </h2>
                        <i class="public-icon-first">{{$v->art_tag}}</i>&nbsp;
                    </header>
                    <p class="note">{{$v->art_title}}...</p>
                    <p class="meta">
                        <a href="{{url('category'.$v->cate_id.'.html')}}" rel="category">{{$v->cate_name}}</a>
                        <time></time>
                        <span class="pvs">|</span>
                        <span class="author">{{$v->art_editor}}</span>
                        <time>{{date('Y-m-d', $v->art_time)}}</time>
                        <span class="pv">阅读({{$v->art_view}})</span>
                        <span class="pvtags"></span>
                    </p>
                </article>
            @endforeach

            <div class="paginations">
                {{ $data['pics']->links() }}
            </div>
        </div>
    </div>

    <aside class="sidebar">
        @foreach($data['recommendArticle'] as $k=>$v)
            <div class="recommend">
                <div class="tag">推荐</div>
                <a href="{{url('article'.$v->cate_id.'-'.$v->art_id.'.html')}}" class="imgbox">
                    <img src="http://theme.b5b6.com/ydnew/zb_users/upload/2016/06/20160612133239_57676.jpeg" title="{{$v->art_title}}" alt="{{$v->art_title}}">
                    <i class="imark"></i>
                </a>
                <a href="{{url('article'.$v->cate_id.'-'.$v->art_id.'.html')}}" class="tit">{{$v->art_title}}</a>
            </div>
        @endforeach
        <div class="recommend-list">
            <ul>
                @foreach($data['recommendsArticle'] as $k=>$v)
                    <li><a href="{{url('article'.$v->cate_id.'-'.$v->art_id.'.html')}}" title="{{$v->art_title}}" target="_blank">{{$v->art_title}}</a></li>
                @endforeach
            </ul>
        </div>


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
            <h3>最近发表<span class="w_title">NEW ARTICLES</span></h3>   <ul>
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

        <div class="widget widget_ui_tags widget_tags">
            <h3>热门标签<span class="w_title">TOP TAGS</span></h3>
            <div class="items">
                <ul>
                    <li class="tagbgc5"><a target="_blank" href="#">小米</a></li>
                    <li class="tagbgc3"><a target="_blank" href="#2.html">乐视</a></li>
                    <li class="tagbgc9"><a target="_blank" href="#5.html">联想</a></li>
                    <li class="tagbgc0"><a target="_blank" href="#6.html">一加</a></li>
                    <li class="tagbgc9"><a target="_blank" href="#7.html">无边框</a></li>
                    <li class="tagbgc5"><a target="_blank" href="#8.html">曲面屏</a></li>
                    <li class="tagbgc2"><a target="_blank" href="#9.html">国产手机</a></li>
                    <li class="tagbgc0"><a target="_blank" href="#10.html">移动支付</a></li>
                    <li class="tagbgc1"><a target="_blank" href="#11.html">无人机</a></li>
                    <li class="tagbgc6"><a target="_blank" href="#12.html">视频直播</a></li>
                    <li class="tagbgc2"><a target="_blank" href="#13.html">360</a></li>
                    <li class="tagbgc3"><a target="_blank" href="#14.html">智能手表</a></li>
                    <li class="tagbgc9"><a target="_blank" href="#15.html">iPhone7</a></li>
                    <li class="tagbgc1"><a target="_blank" href="#16.html">三星Note7</a></li>
                </ul>
            </div>
        </div>

        <div class="widget widget_archive">
            <h3>文章归档<span class="w_title">ARCHIVES</span></h3>
            <ul>
                @foreach($data['timeGroupArticle'] as $k=>$v)
                    <li><a href="#">{{$v->date}} ({{$v->counts}})</a></li>
                @endforeach
            </ul>
        </div>

        <div class="widget">
            <h3>最新留言<span class="w_title">comments</span></h3>
            <ul class="ul_divComments_inner">
                <li><img alt="祖玛阁" src="http://theme.b5b6.com/ydnew/zb_users/theme/ydnew/include/avator/33.jpg" class="avatar avatar-50 photo" height="50" width="50">
                    <div class="rc-info"><span class="rc-reviewer">祖玛阁</span> 在 <a class="rc-post" href="http://theme.b5b6.com/ydnew/post/12.html#cmt71">低调奢华的土曼T-Fire Metal智能腕表</a></div>
                    <div class="rc-excerpt">评论试试，这个主题不错！</div>
                </li><li><img alt="访客" src="http://theme.b5b6.com/ydnew/zb_users/theme/ydnew/include/avator/20.jpg" class="avatar avatar-50 photo" height="50" width="50">
                    <div class="rc-info"><span class="rc-reviewer">访客</span> 在 <a class="rc-post" href="http://theme.b5b6.com/ydnew/post/10.html#cmt70">360 手机N4定义“青年新旗舰”，凭什么?</a></div>
                    <div class="rc-excerpt">ddsvsdv</div>
                </li><li><img alt="访客" src="http://theme.b5b6.com/ydnew/zb_users/theme/ydnew/include/avator/12.jpg" class="avatar avatar-50 photo" height="50" width="50">
                    <div class="rc-info"><span class="rc-reviewer">访客</span> 在 <a class="rc-post" href="http://theme.b5b6.com/ydnew/post/15.html#cmt69">国内三星Note7存在安全隐患，质检总局令召回</a></div>
                    <div class="rc-excerpt">测试仪</div>
                </li><li><img alt="访客" src="http://theme.b5b6.com/ydnew/zb_users/theme/ydnew/include/avator/17.jpg" class="avatar avatar-50 photo" height="50" width="50">
                    <div class="rc-info"><span class="rc-reviewer">访客</span> 在 <a class="rc-post" href="http://theme.b5b6.com/ydnew/post/15.html#cmt68">国内三星Note7存在安全隐患，质检总局令召回</a></div>
                    <div class="rc-excerpt">李聊</div>
                </li><li><img alt="访客" src="http://theme.b5b6.com/ydnew/zb_users/theme/ydnew/include/avator/30.jpg" class="avatar avatar-50 photo" height="50" width="50">
                    <div class="rc-info"><span class="rc-reviewer">访客</span> 在 <a class="rc-post" href="http://theme.b5b6.com/ydnew/post/15.html#cmt67">国内三星Note7存在安全隐患，质检总局令召回</a></div>
                    <div class="rc-excerpt">哈哈</div>
                </li><li><img alt="访客" src="http://theme.b5b6.com/ydnew/zb_users/theme/ydnew/include/avator/13.jpg" class="avatar avatar-50 photo" height="50" width="50">
                    <div class="rc-info"><span class="rc-reviewer">访客</span> 在 <a class="rc-post" href="http://theme.b5b6.com/ydnew/post/2.html#cmt66">主题购买</a></div>
                    <div class="rc-excerpt">哈哈哈</div>
                </li><li><img alt="访客" src="http://theme.b5b6.com/ydnew/zb_users/theme/ydnew/include/avator/34.jpg" class="avatar avatar-50 photo" height="50" width="50">
                    <div class="rc-info"><span class="rc-reviewer">访客</span> 在 <a class="rc-post" href="http://theme.b5b6.com/ydnew/post/15.html#cmt65">国内三星Note7存在安全隐患，质检总局令召回</a></div>
                    <div class="rc-excerpt">ndndjkxk:xn</div>
                </li><li><img alt="访客" src="http://theme.b5b6.com/ydnew/zb_users/theme/ydnew/include/avator/24.jpg" class="avatar avatar-50 photo" height="50" width="50">
                    <div class="rc-info"><span class="rc-reviewer">访客</span> 在 <a class="rc-post" href="http://theme.b5b6.com/ydnew/post/15.html#cmt64">国内三星Note7存在安全隐患，质检总局令召回</a></div>
                    <div class="rc-excerpt">sssss</div>
                </li>
            </ul>
        </div>
    </aside>
</section>

@include('common.default.footer')

</body>
</html>