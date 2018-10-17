<html><head>
    <meta charset="UTF-8">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="X-UA-Compatible" content="IE=11,IE=10,IE=9,IE=8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="apple-mobile-web-app-title" content="{{$data['currentListCategoryInfo']->cate_name.'_'.$data['currentMainCategoryInfo']->cate_name}}">
    <meta http-equiv="Cache-Control" content="no-siteapp">
    <title>{{$data['currentListCategoryInfo']->cate_name.'_'.$data['currentMainCategoryInfo']->cate_title}}</title>
    <meta name="keywords" content="{{$data['currentListCategoryInfo']->cate_keywords}}">
    <meta name="description" content="{{$data['currentListCategoryInfo']->cate_description}}">
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
<body class="archive category site-layout-2" screen_capture_injected="true">

@include('common.default.header')

<section class="container">
    <div class="content-wrap">
        <div class="content">
            <div class="pagetitle">
                <h1><i class="i itag tag-channel"></i>{{$data['field']->cate_name}}</h1>
            </div>

            @foreach($data['categoryArticleList'] as $k=>$v)
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
                {{ $data['categoryArticleList']->links() }}
            </div>
        </div>
    </div>

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

        {{--<div class="widget widget_categories">--}}
            {{--<h3>网站分类<span class="w_title">TOP CATELOG</span></h3>--}}
            {{--<ul>--}}
                {{--<li class="li-cate"><a href="http://theme.b5b6.com/ydnew/category-1.html">科技</a>--}}
                    {{--<ul class="ul-subcates">--}}
                        {{--<li class="li-subcate"><a href="http://theme.b5b6.com/ydnew/category-6.html">手机</a></li>--}}
                        {{--<li class="li-subcate"><a href="http://theme.b5b6.com/ydnew/category-7.html">电脑</a></li>--}}
                        {{--<li class="li-subcate"><a href="http://theme.b5b6.com/ydnew/category-8.html">平板</a></li>--}}
                    {{--</ul>--}}
                {{--</li>--}}
                {{--<li class="li-cate"><a href="http://theme.b5b6.com/ydnew/category-2.html">评测</a></li>--}}
                {{--<li class="li-cate"><a href="http://theme.b5b6.com/ydnew/category-3.html">创业</a>--}}
                    {{--<ul class="ul-subcates">--}}
                        {{--<li class="li-subcate"><a href="http://theme.b5b6.com/ydnew/category-9.html">创业理想</a></li>--}}
                        {{--<li class="li-subcate"><a href="http://theme.b5b6.com/ydnew/category-10.html">创业现实</a></li>--}}
                    {{--</ul>--}}
                {{--</li>--}}
                {{--<li class="li-cate"><a href="http://theme.b5b6.com/ydnew/category-4.html">干货</a></li>--}}
                {{--<li class="li-cate"><a href="http://theme.b5b6.com/ydnew/category-5.html">影讯</a></li>--}}
            {{--</ul>--}}
        {{--</div>--}}

        <div class="widget widget_ui_tags widget_tags">
            <h3>热门标签<span class="w_title">TOP TAGS</span></h3>
            <div class="items">
                <ul>
                    <li class="tagbgc0"><a target="_blank" href="#1.html">小米</a></li>
                    <li class="tagbgc3"><a target="_blank" href="#2.html">乐视</a></li>
                    <li class="tagbgc8"><a target="_blank" href="#5.html">联想</a></li>
                    <li class="tagbgc8"><a target="_blank" href="#6.html">一加</a></li>
                    <li class="tagbgc6"><a target="_blank" href="#7.html">无边框</a></li>
                    <li class="tagbgc0"><a target="_blank" href="#8.html">曲面屏</a></li>
                    <li class="tagbgc5"><a target="_blank" href="#9.html">国产手机</a></li>
                    <li class="tagbgc6"><a target="_blank" href="#10.html">移动支付</a></li>
                    <li class="tagbgc0"><a target="_blank" href="#11.html">无人机</a></li>
                    <li class="tagbgc9"><a target="_blank" href="#12.html">视频直播</a></li>
                    <li class="tagbgc0"><a target="_blank" href="#13.html">360</a></li>
                    <li class="tagbgc6"><a target="_blank" href="#14.html">智能手表</a></li>
                    <li class="tagbgc7"><a target="_blank" href="#15.html">iPhone7</a></li>
                    <li class="tagbgc5"><a target="_blank" href="#16.html">三星Note7</a></li>
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
    </aside>
</section>

@include('common.default.footer')

</body>
</html>