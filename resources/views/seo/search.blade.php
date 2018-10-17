@extends('layouts.seo')

@section('info')

    <title>{{$keyword}}" 搜索结果-杰瑞SEO工作室</title>
    <meta name="keywords" content="">
    <meta name="description" content="">

@endsection

@section('logo')
    <h2 class="logo hvr-bounce-in">
        <a href="{{url('/')}}" title="北京seo,杰瑞SEO">
            <img src="{{asset('resources/views/seo/images/aa.png')}}" alt="北京seo,杰瑞SEO">
        </a>
    </h2>
@endsection

@section('content')
<section class="container">
    <div class="content-wrap">
        <div class="content">
            <div class="title">
                <h1 style="line-height: 1.3">"{{$keyword}}" 搜索结果</h1>
            </div>
            @foreach($newArticle as $k=>$value)
            <article class="excerpt excerpt-1">
                <a class="focus" href="{{url('/a/'.$value->art_id)}}" title="{{$value->art_title}}" target="_blank" >
                    <img class="thumb" data-original="{{getImgUrl($value->art_content)[0]}}" src="{{getImgUrl($value->art_content)[0]}}" alt="{{$value->art_title}}"  style="display: inline;">
                </a>
                <header>
                    <a class="cat" href="{{url('/cate/'.$value->cate_id)}}" title="{{$value->cate_name}}" >{{$value->cate_name}}<i></i></a>
                    <h2><a href="{{url('/a/'.$value->art_id)}}" title="{{$value->art_title}}" target="_blank" >{{$value->art_title}}</a></h2>
                </header>
                <p class="meta">
                    <time class="time"><i class="glyphicon glyphicon-time"></i> {{date('Y-m-d', $value->art_dingTime)}}</time>
                    <span class="views"><i class="glyphicon glyphicon-eye-open"></i> {{$value->art_view}}</span>
                    <a class="comment" href="http://www.muzhuangnet.com/show/269.html#comment" title="评论" target="_blank" ><i class="glyphicon glyphicon-comment"></i> 4</a>
                </p>
                <p class="note">{{$value->art_description}}</p>
            </article>
            @endforeach
            {{$newArticle->appends(['keyword'=>$keyword, 'search'=>''])->links()}}
        </div>
    </div>


@endsection


@section('right')
    <aside class="sidebar">
        <div class="fixed">
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
            <div class="widget widget_sentence">
                <h3>标签云</h3>
                <div class="widget-sentence-content">
                    <ul class="plinks ptags">
                        <li><a href="http://www.muzhuangnet.com/tags/list/67/" title="移动统计" draggable="false">移动统计 <span class="badge">1</span></a></li>
                        <li><a href="http://www.muzhuangnet.com/tags/list/256/" title="404" draggable="false">404 <span class="badge">1</span></a></li>
                        <li><a href="http://www.muzhuangnet.com/tags/list/252/" title="VS2010" draggable="false">VS2010 <span class="badge">1</span></a></li>
                        <li><a href="http://www.muzhuangnet.com/tags/list/162/" title="杀毒软件" draggable="false">杀毒软件 <span class="badge">1</span></a></li>
                        <li><a href="http://www.muzhuangnet.com/tags/list/133/" title="html标签" draggable="false">html标签 <span class="badge">1</span></a></li>
                        <li><a href="http://www.muzhuangnet.com/tags/list/49/" title="循环" draggable="false">循环 <span class="badge">2</span></a></li>
                        <li><a href="http://www.muzhuangnet.com/tags/list/22/" title="百度统计" draggable="false">百度统计 <span class="badge">2</span></a></li>
                        <li><a href="http://www.muzhuangnet.com/tags/list/132/" title="sql" draggable="false">sql <span class="badge">6</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="widget widget_hot">
            <h3>最新评论文章</h3>
            <ul>
                @foreach($pingLunArticle as $k=>$value)
                    <li>
                        <a title="{{$value->art_title}}" href="{{url('/a/'.$value->art_id)}}" >
                        <span class="thumbnail">
                            <img class="thumb" data-original="{{getImgUrl($value->art_content)[0]}}" src="{{getImgUrl($value->art_content)[0]}}" alt="{{$value->art_title}}"  style="display: block;">
                        </span>
                            <span class="text">{{$value->art_title}}</span>
                            <span class="muted"><i class="glyphicon glyphicon-time"></i>{{date('Y-m-d', $value->art_dingTime)}}</span>
                            <span class="muted"><i class="glyphicon glyphicon-eye-open"></i>{{$value->art_view}}</span>
                        </a>
                    </li>
                @endforeach
                {{--<li>--}}
                    {{--<a title="用DTcms做一个独立博客网站（响应式模板）" href="http://www.muzhuangnet.com/show/269.html" ><span class="thumbnail">--}}
                            {{--<img class="thumb" data-original="http://www.muzhuangnet.com/upload/201610/18/201610181739277776.jpg" src="http://www.muzhuangnet.com/upload/201610/18/201610181739277776.jpg" alt="用DTcms做一个独立博客网站（响应式模板）"  style="display: block;">--}}
                        {{--</span>--}}
                        {{--<span class="text">用DTcms做一个独立博客网站（响应式模板）</span>--}}
                        {{--<span class="muted"><i class="glyphicon glyphicon-time"></i>2016-11-01</span>--}}
                        {{--<span class="muted"><i class="glyphicon glyphicon-eye-open"></i>88</span>--}}
                    {{--</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                    {{--<a title="用DTcms做一个独立博客网站（响应式模板）" href="http://www.muzhuangnet.com/show/269.html" ><span class="thumbnail">--}}
                            {{--<img class="thumb" data-original="http://www.muzhuangnet.com/upload/201610/18/201610181739277776.jpg" src="http://www.muzhuangnet.com/upload/201610/18/201610181739277776.jpg" alt="用DTcms做一个独立博客网站（响应式模板）"  style="display: block;">--}}
                        {{--</span>--}}
                        {{--<span class="text">用DTcms做一个独立博客网站（响应式模板）</span>--}}
                        {{--<span class="muted"><i class="glyphicon glyphicon-time"></i>2016-11-01</span>--}}
                        {{--<span class="muted"><i class="glyphicon glyphicon-eye-open"></i>88</span>--}}
                    {{--</a>--}}
                {{--</li>--}}
            </ul>
        </div>
        <div class="widget widget_sentence">

            <a href="http://www.muzhuangnet.com/show/269.html" target="_blank" rel="nofollow" title="MZ-NetBlog主题" >
                <img style="width: 100%" src="{{asset('resources/views/seo/images/ad.jpg')}}" alt="MZ-NetBlog主题" ></a>

        </div>
        <div class="widget widget_sentence">

            <a href="http://web.muzhuangnet.com/" target="_blank" rel="nofollow" title="专业网站建设" >
                <img style="width: 100%" src="http://www.muzhuangnet.com/upload/201610/24/201610241224221511.jpg" alt="专业网站建设" ></a>

        </div>
    </aside>
</section>
@endsection

