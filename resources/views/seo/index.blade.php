@extends('layouts.seo')

@section('info')

    <title>北京SEO_北京seo优化_北京网络营销_北京网站建设_北京seo诊断_黑帽seo-杰瑞SEO营销工作室</title>
    <meta name="keywords" content="北京SEO,北京SEO优化,北京网站建设，北京网站优化，北京seo推广,北京网络营销,北京seo公司,北京seo顾问,北京seo服务,北京seo外包,北京整站优化,北京seo培训,北京黑帽seo,北京seo诊断,seo视频教程,百度推广优化,杰瑞SEO工作室">
    <meta name="description" content="杰瑞seo营销工作室，专业提供北京百度谷歌seo优化，网站建设推广，整站关键词快速排名及诊断方案，网站降权恢复等外包公司网络营销顾问服务,分享17年最新自学培训黑白帽seo技术 13523419148【QQ:841287295】">

@endsection

@section('logo')
    <h1 class="logo hvr-bounce-in">
        <a href="{{url('/')}}" title="北京seo,杰瑞SEO">
            <img src="{{asset('resources/views/seo/images/aa.png')}}" alt="北京seo,杰瑞SEO">
        </a>
    </h1>
@endsection



@section('content')
<section class="container">
    <div class="content-wrap">
        <div class="content">
            <div id="focusslide" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#focusslide" data-slide-to="0" class="active"></li>
                    <li data-target="#focusslide" data-slide-to="1"></li>
                    <li data-target="#focusslide" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <a href="{{url('/cate/27')}}" target="_blank" title="北京seo优化" >
                            <img src="http://www.muzhuangnet.com/upload/201610/18/201610181557196870.jpg" alt="木庄网络博客源码" class="img-responsive">
                        </a>
                    </div>
                    <div class="item">
                        <a href="{{url('/cate/61')}}" target="_blank" title="北京网站建设" >
                            <img src="http://www.muzhuangnet.com/upload/201610/24/201610241227558789.jpg" alt="专业网站建设" class="img-responsive">
                        </a>
                    </div>
                    <div class="item">
                        <a href="{{url('/cate/61')}}" target="_blank" title="北京专业app定制开发" >
                            <img src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1505836033242&di=a3a84969fe912819a1c861215b7363bc&imgtype=0&src=http%3A%2F%2Fwww.yuntesoft.com%2Fuploads%2F160307%2F1-16030F92405425.png" alt="专业app定制开发" class="img-responsive">
                        </a>
                    </div>
                    <div class="item">
                        <a href="{{url('/cate/72')}}" target="_blank" title="北京seo服务公司" >
                            <img src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1505836882576&di=e12c744de72ed1986dbce30f2480d61d&imgtype=0&src=http%3A%2F%2Fp7.zbjimg.com%2Fservice%2F2015-11%2F11%2Fservice%2F56428a367e692.jpg" alt="专业app定制开发" class="img-responsive">
                        </a>
                    </div>
                </div>
                <a class="left carousel-control" href="#focusslide" role="button" data-slide="prev" rel="nofollow">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">上一个</span>
                </a>
                <a class="right carousel-control" href="#focusslide" role="button" data-slide="next" rel="nofollow">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">下一个</span>
                </a>
            </div>
            <div class="title">
                <h3>点击推荐</h3>
                <div class="more">
                    <a href="{{url('/cate/62')}}" title="北京seo顾问_北京seo顾问服务_北京专业seo顾问_北京 seo顾问" >北京seo顾问</a>
                    <a href="{{url('/cate/67')}}" title="北京seo外包" >北京seo外包</a>
                    <a href="{{url('/cate/72')}}" title="北京seo服务" >北京seo服务</a>
                    <a href="{{url('/cate/68')}}" title="北京seo公司" >北京seo公司</a>
                    <a href="{{url('/cate/70')}}" title="北京seo培训" >北京seo培训</a>
                </div>
            </div>
            @foreach($tuijian as $k=>$value)
            <article class="excerpt-minic excerpt-minic-index">
                <h2>
                    <span class="red">【推荐】</span>
                    <a target="_blank" href="{{url('/a/'.$value->art_id)}}" title="{{$value->cate_name}}：{{$value->art_title}}" >{{$value->art_title}}</a>
                </h2>
                <p class="note">{{$value->art_description}}</p>

                <div class="widget widget_hot" style="border: none;">
                    <!--每个分类模块下各取两条最新的文章，ul中携带关键词至少两条-->
                    @foreach($tuijianDown as $k1=>$v1)
                    <ul style="float: left;width: 50%;">
                        @foreach($v1 as $k=>$value)
                            <li>
                                <a title="{{$value->art_title}}" href="{{url('/a/'.$value->art_id)}}" >
                                    <span class="thumbnail">
                                        <img class="thumb" data-original="{{getImgUrl($value->art_content)[0]}}" src="{{getImgUrl($value->art_content)[0]}}" alt="{{$value->art_title}}"  style="display: block;">
                                    </span>
                                    <span class="text">{{$value->art_title}}</span>
                                    <span class="muted"><i class="glyphicon glyphicon-time"></i>{{date('Y-m-d', $value->art_dingTime)}}</span>
                                    <span class="muted"><i class="glyphicon glyphicon-eye-open"></i>{{$value->art_view}}</span>
                                    <p class="muted" style="padding: 5px 0;"><i class="glyphicon glyphicon-list"></i>{{$value->cate_name}}</p>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                    @endforeach
                    {{--<ul style="float: left;width: 50%;">--}}
                        {{--@foreach($pingLunArticle as $k=>$value)--}}
                            {{--<li>--}}
                                {{--<a title="北京seo优化：{{$value->art_title}}" href="{{url('/a/'.$value->art_id)}}" >--}}
                                    {{--<span class="thumbnail">--}}
                                        {{--<img class="thumb" data-original="{{getImgUrl($value->art_content)[0]}}" src="{{getImgUrl($value->art_content)[0]}}" alt="北京seo优化：{{$value->art_title}}"  style="display: block;">--}}
                                    {{--</span>--}}
                                    {{--<span class="text">{{$value->art_title}}</span>--}}
                                    {{--<span class="muted"><i class="glyphicon glyphicon-time"></i>{{date('Y-m-d', $value->art_dingTime)}}</span>--}}
                                    {{--<span class="muted"><i class="glyphicon glyphicon-eye-open"></i>{{$value->art_view}}</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                        {{--@endforeach--}}
                    {{--</ul>--}}
                </div>

            </article>
            @endforeach
            <div class="title">
                <h3>最新发布</h3>
                <div class="more">
                    <a href="{{url('/')}}" title="IT技术笔记" >IT技术笔记</a>
                    <a href="{{url('/cate/57')}}" title="百度seo算法" >百度seo算法</a>
                    <a href="{{url('/cate/28')}}" title="seo软件工具" >seo软件工具</a>
                    <a href="{{url('/cate/65')}}" title="seo视频教程下载" >seo视频教程下载</a>
                    <a href="{{url('/cate/49')}}" title="seo基础入门" >seo基础入门</a>

                </div>
            </div>
            @foreach($newArticle as $key=>$value)
            <article class="excerpt excerpt-{{$key+1}}" style="">
                <a class="focus" href="{{url('/a/'.$value->art_id)}}" title="{{$value->art_title}}" target="_blank" >
                    <img class="thumb" data-original="{{getImgUrl($value->art_content)[0]}}" src="{{getImgUrl($value->art_content)[0]}}" alt="杰瑞SEO工作室之{{$value->cate_name}}：{{$value->art_title}}"  style="display: inline;">
                </a>
                <header>
                    <a class="cat" href="{{url('/cate/'.$value->cate_id)}}" title="{{$value->cate_name}}" >{{$value->cate_name}}<i></i></a>
                    <h2>
                        <a href="{{url('/a/'.$value->art_id)}}" title="{{$value->art_title}}" target="_blank" >{{$value->art_title}}</a>
                    </h2>
                </header>
                <p class="meta">
                    <time class="time"><i class="glyphicon glyphicon-time"></i> {{date('Y-m-d h:i:s', $value->art_dingTime)}}</time>
                    <span class="views"><i class="glyphicon glyphicon-eye-open"></i> {{$value->art_view}}</span>
                    <a class="comment" href="{{url('/a/'.$value->art_id)}}" title="评论" target="_blank" ><i class="glyphicon glyphicon-comment"></i> 4</a>
                </p>
                <p class="note">{{$value->art_description}}</p>
            </article>
            @endforeach
            {{--<article class="excerpt excerpt-2" style=""><a class="focus" href="{{url('/北京seo.htm')}}" title="用DTcms做一个独立博客网站（响应式模板）" target="_blank" ><img class="thumb" data-original="http://www.muzhuangnet.com/upload/201610/18/201610181739277776.jpg" src="http://www.muzhuangnet.com/upload/201610/18/201610181739277776.jpg" alt="用DTcms做一个独立博客网站（响应式模板）"  style="display: inline;"></a>--}}
                {{--<header>--}}
                    {{--<a class="cat" href="http://www.muzhuangnet.com/list/mznetblog/" title="MZ-NetBlog主题" >MZ-NetBlog主题<i></i></a>--}}
                    {{--<h2>--}}
                        {{--<a href="http://www.muzhuangnet.com/show/269.html" title="用DTcms做一个独立博客网站（响应式模板）" target="_blank" >用DTcms做一个独立博客网站（响应式模板）</a>--}}
                    {{--</h2>--}}
                {{--</header>--}}
                {{--<p class="meta">--}}
                    {{--<time class="time"><i class="glyphicon glyphicon-time"></i> 2016-10-14</time>--}}
                    {{--<span class="views"><i class="glyphicon glyphicon-eye-open"></i>216</span> <a class="comment" href="http://www.muzhuangnet.com/show/269.html#comment" title="评论" target="_blank" ><i class="glyphicon glyphicon-comment"></i>4</a>--}}
                {{--</p>--}}
                {{--<p class="note">用DTcms做一个独立博客网站（响应式模板），采用DTcms V4.0正式版（MSSQL）。开发环境：SQL2008R2+VS2010。DTcms V4.0正式版功能修复和优化：1、favicon.ico图标后台上传。（解决要换图标时要连FTP或者开服务器的麻烦）</p>--}}
            {{--</article>--}}
            {{--<article class="excerpt excerpt-3" style=""><a class="focus" href="http://www.muzhuangnet.com/show/269.html" title="用DTcms做一个独立博客网站（响应式模板）" target="_blank" ><img class="thumb" data-original="http://www.muzhuangnet.com/upload/201610/18/201610181739277776.jpg" src="http://www.muzhuangnet.com/upload/201610/18/201610181739277776.jpg" alt="用DTcms做一个独立博客网站（响应式模板）"  style="display: inline;"></a>--}}
                {{--<header><a class="cat" href="http://www.muzhuangnet.com/list/mznetblog/" title="MZ-NetBlog主题" >MZ-NetBlog主题<i></i></a>--}}
                    {{--<h2><a href="http://www.muzhuangnet.com/show/269.html" title="用DTcms做一个独立博客网站（响应式模板）" target="_blank" >用DTcms做一个独立博客网站（响应式模板）</a>--}}
                    {{--</h2>--}}
                {{--</header>--}}
                {{--<p class="meta">--}}
                    {{--<time class="time"><i class="glyphicon glyphicon-time"></i> 2016-10-14</time>--}}
                    {{--<span class="views"><i class="glyphicon glyphicon-eye-open"></i> 216</span> <a class="comment" href="http://www.muzhuangnet.com/show/269.html#comment" title="评论" target="_blank" ><i class="glyphicon glyphicon-comment"></i> 4</a>--}}
                {{--</p>--}}
                {{--<p class="note">用DTcms做一个独立博客网站（响应式模板），采用DTcms V4.0正式版（MSSQL）。开发环境：SQL2008R2+VS2010。DTcms V4.0正式版功能修复和优化：1、favicon.ico图标后台上传。（解决要换图标时要连FTP或者开服务器的麻烦）</p>--}}
            {{--</article>--}}
            {{--<article class="excerpt excerpt-4" style=""><a class="focus" href="http://www.muzhuangnet.com/show/269.html" title="用DTcms做一个独立博客网站（响应式模板）" target="_blank" ><img class="thumb" data-original="http://www.muzhuangnet.com/upload/201610/18/201610181739277776.jpg" src="http://www.muzhuangnet.com/upload/201610/18/201610181739277776.jpg" alt="用DTcms做一个独立博客网站（响应式模板）"  style="display: inline;"></a>--}}
                {{--<header><a class="cat" href="http://www.muzhuangnet.com/list/mznetblog/" title="MZ-NetBlog主题" >MZ-NetBlog主题<i></i></a>--}}
                    {{--<h2><a href="http://www.muzhuangnet.com/show/269.html" title="用DTcms做一个独立博客网站（响应式模板）" target="_blank" >用DTcms做一个独立博客网站（响应式模板）</a>--}}
                    {{--</h2>--}}
                {{--</header>--}}
                {{--<p class="meta">--}}
                    {{--<time class="time"><i class="glyphicon glyphicon-time"></i> 2016-10-14</time>--}}
                    {{--<span class="views"><i class="glyphicon glyphicon-eye-open"></i> 216</span> <a class="comment" href="http://www.muzhuangnet.com/show/269.html#comment" title="评论" target="_blank" ><i class="glyphicon glyphicon-comment"></i> 4</a>--}}
                {{--</p>--}}
                {{--<p class="note">用DTcms做一个独立博客网站（响应式模板），采用DTcms V4.0正式版（MSSQL）。开发环境：SQL2008R2+VS2010。DTcms V4.0正式版功能修复和优化：1、favicon.ico图标后台上传。（解决要换图标时要连FTP或者开服务器的麻烦）</p>--}}
            {{--</article>--}}
            {{--<article class="excerpt excerpt-5" style=""><a class="focus" href="http://www.muzhuangnet.com/show/269.html" title="用DTcms做一个独立博客网站（响应式模板）" target="_blank" ><img class="thumb" data-original="http://www.muzhuangnet.com/upload/201610/18/201610181739277776.jpg" src="http://www.muzhuangnet.com/upload/201610/18/201610181739277776.jpg" alt="用DTcms做一个独立博客网站（响应式模板）"  style="display: inline;"></a>--}}
                {{--<header><a class="cat" href="http://www.muzhuangnet.com/list/mznetblog/" title="MZ-NetBlog主题" >MZ-NetBlog主题<i></i></a>--}}
                    {{--<h2><a href="http://www.muzhuangnet.com/show/269.html" title="用DTcms做一个独立博客网站（响应式模板）" target="_blank" >用DTcms做一个独立博客网站（响应式模板）</a>--}}
                    {{--</h2>--}}
                {{--</header>--}}
                {{--<p class="meta">--}}
                    {{--<time class="time"><i class="glyphicon glyphicon-time"></i> 2016-10-14</time>--}}
                    {{--<span class="views"><i class="glyphicon glyphicon-eye-open"></i> 216</span> <a class="comment" href="http://www.muzhuangnet.com/show/269.html#comment" title="评论" target="_blank" ><i class="glyphicon glyphicon-comment"></i> 4</a>--}}
                {{--</p>--}}
                {{--<p class="note">用DTcms做一个独立博客网站（响应式模板），采用DTcms V4.0正式版（MSSQL）。开发环境：SQL2008R2+VS2010。DTcms V4.0正式版功能修复和优化：1、favicon.ico图标后台上传。（解决要换图标时要连FTP或者开服务器的麻烦）</p>--}}
            {{--</article>--}}
            {{--<nav class="pagination" style="display: block;">--}}
                {{--<ul>--}}
                    {{--<li class="prev-page"></li>--}}
                    {{--<li class="active"><span>1</span></li>--}}
                    {{--<li><a href="?page=2">2</a></li>--}}
                    {{--<li><a href="?page=3">3</a></li>--}}
                    {{--<li class="next-page"><a href="?page=2">下一页</a></li>--}}
                    {{--<li><span>共 3 页</span></li>--}}
                {{--</ul>--}}
            {{--</nav>--}}
            {{$newArticle->links()}}
        </div>
    </div>


@endsection

@section('right')
    <aside class="sidebar">
        <div class="fixed">
            <div class="widget widget-tabs">
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#notice" aria-controls="notice" role="tab" data-toggle="tab" >统计信息</a></li>
                    <li role="presentation"><a href="#contact" aria-controls="contact" role="tab" data-toggle="tab" >联系站长</a></li>
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane contact active" id="notice">
                        <h2>日志总数:
                            {{$num}}篇
                        </h2>
                        <h2>网站运行:
                            <span id="sitetime">{{$day}}天 </span>
                        </h2>
                        <script>
                            function show_date_time(){
                                window.setTimeout("show_date_time()", 1000);
                                BirthDay=new Date("04-11-2017"); //杰瑞SEO工作室提示：这里的07-31-2009是指建站日期
                                today=new Date();
                                timeold=(today.getTime()-BirthDay.getTime());
                                sectimeold=timeold/1000;
                                secondsold=Math.floor(sectimeold);
                                msPerDay=24*60*60*1000;
                                e_daysold=timeold/msPerDay;
                                daysold=Math.floor(e_daysold);
                                e_hrsold=(daysold-e_daysold)*-24;
                                hrsold=Math.floor(e_hrsold);
                                e_minsold=(hrsold-e_hrsold)*-60;
                                minsold=Math.floor((hrsold-e_hrsold)*-60);
                                seconds=Math.floor((minsold-e_minsold)*-60);
                                document.getElementById('sitetime').innerHTML=daysold+"天"+hrsold+"小时"+minsold+"分"+seconds+"秒" ;
                            }
                            show_date_time();
                        </script>
                    </div>
                    <div role="tabpanel" class="tab-pane contact" id="contact">
                        <h2>QQ:
                            <a href="http://wpa.qq.com/msgrd?v=3&amp;uin=841287295&amp;site=qq&amp;menu=yes" target="_blank" rel="nofollow" data-toggle="tooltip" data-placement="bottom" title=""  data-original-title="QQ:841287295">841287295</a>
                        </h2>
                        <h2>电话:
                            <a href="javascript:0;" target="_blank" rel="nofollow" data-toggle="tooltip" data-placement="bottom" title=""  data-original-title="Iphone:13523419148">13523419148</a>
                        </h2>
                        <h2>Email:
                            <a href="mailto:jierui303@163.com" target="_blank" data-toggle="tooltip" rel="nofollow" data-placement="bottom" title=""  data-original-title="Email:jierui303@163.com">jierui303@163.com</a>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="widget widget_search">
                <form class="navbar-form" action="{{url('/article/search')}}" method="get">
                    <div class="input-group">
                        <input type="text" name="keyword" class="form-control" size="35" placeholder="请输入关键字" maxlength="15" autocomplete="off">
                        <span class="input-group-btn">
                            <button class="btn btn-default btn-search" name="search" type="submit">搜索</button>
                        </span>
                    </div>
                </form>
            </div>
            <div class="widget widget_hot">
                <h3>承接业务</h3>
                <ul class="yewu">
                    <li>关键词优化排名</li>
                    <li>网站整站优化</li>
                    <li>网站SEO诊断</li>
                    <li>网站降权恢复</li>
                    <li>网站建设/外包</li>
                    <li>品牌/产品网络推广</li>
                </ul>
            </div>
        </div>

        <div class="widget widget_hot">
            <h3>最新评论</h3>
            <ul>
                @foreach($pingLunArticle as $k=>$value)
                    <li>
                        <a title="{{$value->art_title}}" href="{{url('/a/'.$value->art_id)}}" >
                            <span class="thumbnail">
                                <img class="thumb" data-original="{{getImgUrl($value->art_content)[0]}}" src="{{getImgUrl($value->art_content)[0]}}" alt="杰瑞SEO工作室之{{$value->cate_name}}：{{$value->art_title}}"  style="display: block;">
                            </span>
                            <span class="text">{{$value->art_title}}</span>
                            <span class="muted"><i class="glyphicon glyphicon-time"></i>{{date('Y-m-d', $value->art_dingTime)}}</span>
                            <span class="muted"><i class="glyphicon glyphicon-eye-open"></i>{{$value->art_view}}</span>
                        </a>
                    </li>
                @endforeach
                {{--<li><a title="用DTcms做一个独立博客网站（响应式模板）" href="http://www.muzhuangnet.com/show/269.html" ><span class="thumbnail">--}}
                {{--<img class="thumb" data-original="http://www.muzhuangnet.com/upload/201610/18/201610181739277776.jpg" src="http://www.muzhuangnet.com/upload/201610/18/201610181739277776.jpg" alt="用DTcms做一个独立博客网站（响应式模板）"  style="display: block;">--}}
                {{--</span><span class="text">用DTcms做一个独立博客网站（响应式模板）</span><span class="muted"><i class="glyphicon glyphicon-time"></i>--}}
                {{--2016-11-01--}}
                {{--</span><span class="muted"><i class="glyphicon glyphicon-eye-open"></i>88</span></a></li>--}}
                {{--<li><a title="用DTcms做一个独立博客网站（响应式模板）" href="http://www.muzhuangnet.com/show/269.html" ><span class="thumbnail">--}}
                {{--<img class="thumb" data-original="http://www.muzhuangnet.com/upload/201610/18/201610181739277776.jpg" src="http://www.muzhuangnet.com/upload/201610/18/201610181739277776.jpg" alt="用DTcms做一个独立博客网站（响应式模板）"  style="display: block;">--}}
                {{--</span><span class="text">用DTcms做一个独立博客网站（响应式模板）</span><span class="muted"><i class="glyphicon glyphicon-time"></i>--}}
                {{--2016-11-01--}}
                {{--</span><span class="muted"><i class="glyphicon glyphicon-eye-open"></i>88</span></a></li>--}}
                {{--<li><a title="用DTcms做一个独立博客网站（响应式模板）" href="http://www.muzhuangnet.com/show/269.html" ><span class="thumbnail">--}}
                {{--<img class="thumb" data-original="http://www.muzhuangnet.com/upload/201610/18/201610181739277776.jpg" src="http://www.muzhuangnet.com/upload/201610/18/201610181739277776.jpg" alt="用DTcms做一个独立博客网站（响应式模板）"  style="display: block;">--}}
                {{--</span><span class="text">用DTcms做一个独立博客网站（响应式模板）</span><span class="muted"><i class="glyphicon glyphicon-time"></i>--}}
                {{--2016-11-01--}}
                {{--</span><span class="muted"><i class="glyphicon glyphicon-eye-open"></i>88</span></a></li>--}}
                {{--<li><a title="用DTcms做一个独立博客网站（响应式模板）" href="http://www.muzhuangnet.com/show/269.html" ><span class="thumbnail">--}}
                {{--<img class="thumb" data-original="http://www.muzhuangnet.com/upload/201610/18/201610181739277776.jpg" src="http://www.muzhuangnet.com/upload/201610/18/201610181739277776.jpg" alt="用DTcms做一个独立博客网站（响应式模板）"  style="display: block;">--}}
                {{--</span><span class="text">用DTcms做一个独立博客网站（响应式模板）</span><span class="muted"><i class="glyphicon glyphicon-time"></i>--}}
                {{--2016-11-01--}}
                {{--</span><span class="muted"><i class="glyphicon glyphicon-eye-open"></i>88</span></a></li>--}}
                {{--<li><a title="用DTcms做一个独立博客网站（响应式模板）" href="http://www.muzhuangnet.com/show/269.html" ><span class="thumbnail">--}}
                {{--<img class="thumb" data-original="http://www.muzhuangnet.com/upload/201610/18/201610181739277776.jpg" src="http://www.muzhuangnet.com/upload/201610/18/201610181739277776.jpg" alt="用DTcms做一个独立博客网站（响应式模板）"  style="display: block;">--}}
                {{--</span><span class="text">用DTcms做一个独立博客网站（响应式模板）</span><span class="muted"><i class="glyphicon glyphicon-time"></i>--}}
                {{--2016-11-01--}}
                {{--</span><span class="muted"><i class="glyphicon glyphicon-eye-open"></i>88</span></a></li>--}}
                {{--<li><a title="用DTcms做一个独立博客网站（响应式模板）" href="http://www.muzhuangnet.com/show/269.html" ><span class="thumbnail">--}}
                {{--<img class="thumb" data-original="http://www.muzhuangnet.com/upload/201610/18/201610181739277776.jpg" src="http://www.muzhuangnet.com/upload/201610/18/201610181739277776.jpg" alt="用DTcms做一个独立博客网站（响应式模板）"  style="display: block;">--}}
                {{--</span><span class="text">用DTcms做一个独立博客网站（响应式模板）</span><span class="muted"><i class="glyphicon glyphicon-time"></i>--}}
                {{--2016-11-01--}}
                {{--</span><span class="muted"><i class="glyphicon glyphicon-eye-open"></i>88</span></a></li>--}}
                {{--<li><a title="用DTcms做一个独立博客网站（响应式模板）" href="http://www.muzhuangnet.com/show/269.html" ><span class="thumbnail">--}}
                {{--<img class="thumb" data-original="http://www.muzhuangnet.com/upload/201610/18/201610181739277776.jpg" src="http://www.muzhuangnet.com/upload/201610/18/201610181739277776.jpg" alt="用DTcms做一个独立博客网站（响应式模板）"  style="display: block;">--}}
                {{--</span><span class="text">用DTcms做一个独立博客网站（响应式模板）</span><span class="muted"><i class="glyphicon glyphicon-time"></i>--}}
                {{--2016-11-01--}}
                {{--</span><span class="muted"><i class="glyphicon glyphicon-eye-open"></i>88</span></a></li>--}}

            </ul>
        </div>
        <div class="widget widget_sentence">
            <a href="{{url('/')}}" target="_blank" rel="nofollow" title="专业网站建设" >
                <img style="width: 100%" src="http://www.muzhuangnet.com/upload/201610/24/201610241224221511.jpg" alt="专业网站建设" ></a>
        </div>
        <div class="widget widget_sentence">
            <a href="http://domain.yimisoft.com/pm/?c05825" target="_blank" rel="nofollow" title="杰瑞SEO工作室" >
                <img style="width: 100%" src="{{asset('resources/views/seo/images/QQ20180116-0.jpg')}}" alt="杰瑞SEO工作室" >
            </a>
        </div>
        <div class="widget widget_sentence">
            <h3>友情链接</h3>
            <div class="widget-sentence-link">
                <a href="http://www.jierui303.com" title="网站建设" target="_blank" >Jerry的编程之路</a>&nbsp;&nbsp;&nbsp;
                <a href="http://www.hxzysx.com/" title="太原UI培训机构" target="_blank" >太原UI培训机构</a>&nbsp;&nbsp;&nbsp;
            </div>
        </div>
    </aside>
</section>
@endsection


