@extends('layouts.seo')

@section('info')

    <title>{{$articleContent->art_title}}_{{$articleContent->cate_name}}-杰瑞seo工作室</title>
    <meta name="keywords" content="{{$articleContent->art_tag}}">
    <meta name="description" content="{{$articleContent->art_description}}">

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
            <header class="article-header">
                <h1 class="article-title">
                    <a href="{{url('/a/'.$articleContent->art_id)}}" title="{{$articleContent->art_title}}" >{{$articleContent->art_title}}</a>
                </h1>
                <div class="article-meta">
                    <span class="item article-meta-time">
                        <time class="time" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="发表时间：{{date('Y-m-d', $articleContent->art_dingTime)}}">
                            <i class="glyphicon glyphicon-time"></i> {{date('Y-m-d h:i:s', $articleContent->art_dingTime)}}
                        </time>
                    </span>
                    <span class="item article-meta-source" data-toggle="tooltip" data-placement="bottom" title="{{$articleContent->art_editor}}" data-original-title="来源：{{$articleContent->art_editor}}">
                        <i class="glyphicon glyphicon-globe"></i> {{$articleContent->art_editor}}
                    </span>
                    <span class="item article-meta-category" data-toggle="tooltip" data-placement="bottom" title="{{$articleContent->cate_name}}" data-original-title="{{$articleContent->cate_name}}">
                        <i class="glyphicon glyphicon-list"></i>
                        <a href="{{url('/cate/'.$articleContent->cate_id)}}" title="{{$articleContent->cate_name}}" >{{$articleContent->cate_name}}</a>
                    </span>
                    <span class="item article-meta-views" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="浏览量：{{$articleContent->art_view}}">
                        <i class="glyphicon glyphicon-eye-open"></i> {{$articleContent->art_view}}
                    </span>
                    <span class="item article-meta-comment" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="评论量">
                        <i class="glyphicon glyphicon-comment"></i> 4
                    </span>
                </div>
            </header>
            <article class="article-content">
                <p>{!! $articleContent['art_content'] !!}</p>
                {{--<p><img data-original="http://www.muzhuangnet.com/upload/201610/18/201610181557196870.jpg" src="http://www.muzhuangnet.com/upload/201610/18/201610181557196870.jpg" alt="" /></p>--}}
                {{--<p>文章效果示例，文字文字文字文字文字文字文字文字文字文字文字文字文字文字文字文字文字文字文字文字文字文字文字文字文字文字文字文字文字文字文字文字文字文字文字文字文字文字文字文字文字文字文字文字文字文字文字文字文字文字文字文字文字文字文字文字文字文字文字文字文字文字文字文字文字文字文字文字文字文字文字文字文字文字文字。</p>--}}
                {{--<pre class="prettyprint lang-cs">代码示例：--}}
                    {{--public static double JieCheng(int number)--}}
                    {{--{--}}
                        {{--if (number == 0)--}}
                        {{--{--}}
                            {{--return 0;--}}
                        {{--}--}}
            {{----}}
                        {{--//初始值必须设置为1--}}
                        {{--double result = 1;--}}
            {{----}}
                        {{--for (int i = number; i &gt;= 1; i--)--}}
                        {{--{--}}
                            {{--result = result*i;--}}
                        {{--}--}}
                        {{--return result;--}}
                    {{--}--}}
                {{--</pre>--}}
                <div class="bdsharebuttonbox">
                    <a href="#" class="bds_more" data-cmd="more"></a>
                    <a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a>
                    <a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a>
                    <a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a>
                    <a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a>
                    <a href="#" class="bds_tieba" data-cmd="tieba" title="分享到百度贴吧"></a>
                    <a href="#" class="bds_sqq" data-cmd="sqq" title="分享到QQ好友"></a>
                </div>
                <script>
                    window._bd_share_config = { "common": { "bdSnsKey": {}, "bdText": "", "bdMini": "2", "bdMiniList": false, "bdPic": "", "bdStyle": "1", "bdSize": "32" }, "share": {} }; with (document) 0[(getElementsByTagName('head')[0] || body).appendChild(createElement('script')).src = 'http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion=' + ~(-new Date() / 36e5)];
                </script>
            </article>
            <div class="article-tags">
                标签：
                <a href="{{url('/')}}" rel="tag" >DTcms博客</a>
                <a href="{{url('/')}}" rel="tag" >木庄网络博客</a>
                <a href="{{url('/')}}" rel="tag" >独立博客</a>
                <a href="{{url('/')}}" rel="tag" >修复优化</a>
            </div>
            <div class="relates">
                <div class="title">
                    <h3>相关推荐</h3>
                </div>
                <ul>
                    @foreach($XGArticle as $k=>$value)
                    <li>
                        <a href="{{url('/a/'.$value->art_id)}}" title="{{$value->art_title}}" >{{$value->art_title}}</a>
                    </li>
                    @endforeach
                    {{--<li><a href="http://www.muzhuangnet.com/show/269.html" title="" >用DTcms做一个独立博客网站（响应式模板）-MZ-NetBlog主题</a></li>--}}
                    {{--<li><a href="http://www.muzhuangnet.com/show/269.html" title="" >用DTcms做一个独立博客网站（响应式模板）-MZ-NetBlog主题</a></li>--}}
                    {{--<li><a href="http://www.muzhuangnet.com/show/269.html" title="" >用DTcms做一个独立博客网站（响应式模板）-MZ-NetBlog主题</a></li>--}}
                    {{--<li><a href="http://www.muzhuangnet.com/show/269.html" title="" >用DTcms做一个独立博客网站（响应式模板）-MZ-NetBlog主题</a></li>--}}
                    {{--<li><a href="http://www.muzhuangnet.com/show/269.html" title="" >用DTcms做一个独立博客网站（响应式模板）-MZ-NetBlog主题</a></li>--}}
                    {{--<li><a href="http://www.muzhuangnet.com/show/269.html" title="" >用DTcms做一个独立博客网站（响应式模板）-MZ-NetBlog主题</a></li>--}}
                    {{--<li><a href="http://www.muzhuangnet.com/show/269.html" title="" >用DTcms做一个独立博客网站（响应式模板）-MZ-NetBlog主题</a></li>--}}
                </ul>
            </div>
            <div class="title" id="comment">
                <h3>评论</h3>
            </div>
            <div id="respond">
                <form id="comment-form" name="comment-form" action="" method="POST">
                    <div class="comment">
                        {{csrf_field()}}
                        <input type="hidden" class="articleid" name="articleid" value="{{$articleContent->art_id}}">
                        <input name="commentUser" id="commentUser" class="form-control" size="22" placeholder="您的昵称（必填）" maxlength="15" autocomplete="off" tabindex="1" type="text">
                        <input name="beizhu" id="beizhu" class="form-control" size="22" placeholder="您的网址或邮箱（非必填）" maxlength="58" autocomplete="off" tabindex="2" type="text">
                        <div class="comment-box">
                            <textarea placeholder="您的评论或留言（必填）" name="comment-textarea" id="comment-textarea" cols="100%" rows="3" tabindex="3"></textarea>
                            <div class="comment-ctrl">
                                <div class="comment-prompt" style="display: none;"> <i class="fa fa-spin fa-circle-o-notch"></i> <span class="comment-prompt-text">评论正在提交中...请稍后</span> </div>
                                <div class="comment-success" style="display: none;"> <i class="fa fa-check"></i> <span class="comment-prompt-text">评论提交成功...</span> </div>
                                <button type="submit" name="comment-submit" id="comment-submit" tabindex="4">评论</button>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
            <div id="postcomments">
                <ol id="comment_list" class="commentlist">
                    <li class="comment-content">
                        <span class="comment-f">#2</span>
                        <div class="comment-main">
                            <p>
                                <a class="address" href="{{url('/')}}" rel="nofollow" target="_blank">杰瑞SEO营销工作室</a>
                                <span class="time">(2016/10/28 11:41:03)</span>
                                <br>不错的网站主题，看着相当舒服
                            </p>
                        </div>
                    </li>
                    <li class="comment-content">
                        <span class="comment-f">#1</span>
                        <div class="comment-main">
                            <p>
                                <a class="address" href="{{url('/')}}" rel="nofollow" target="_blank">杰瑞SEO营销工作室</a>
                                <span class="time">(2016/10/14 21:02:39)</span>
                                <br>博客做得好漂亮哦！
                            </p>
                        </div>
                    </li>
                </ol>
            </div>
        </div>
    </div>


@endsection

@section('right')
    <aside class="sidebar">
        <div class="fixed">
            <div class="widget widget-tabs">
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#notice" aria-controls="notice" role="tab" data-toggle="tab" draggable="false">统计信息</a></li>
                    <li role="presentation"><a href="#contact" aria-controls="contact" role="tab" data-toggle="tab" draggable="false">联系站长</a></li>
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane contact active" id="notice">
                        <h2>日志总数:
                            {{$num}}篇
                        </h2>
                        <h2>网站运行:
                            <span id="sitetime">{{$day}}天 </span></h2>
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
                    {{--<a title="用DTcms做一个独立博客网站（响应式模板）" href="http://www.muzhuangnet.com/show/269.html" >--}}
                        {{--<span class="thumbnail">--}}
                            {{--<img class="thumb" data-original="http://www.muzhuangnet.com/upload/201610/18/201610181739277776.jpg" src="http://www.muzhuangnet.com/upload/201610/18/201610181739277776.jpg" alt="用DTcms做一个独立博客网站（响应式模板）"  style="display: block;">--}}
                        {{--</span>--}}
                        {{--<span class="text">用DTcms做一个独立博客网站（响应式模板）</span>--}}
                        {{--<span class="muted"><i class="glyphicon glyphicon-time"></i>2016-11-01</span>--}}
                        {{--<span class="muted"><i class="glyphicon glyphicon-eye-open"></i>88</span>--}}
                    {{--</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                    {{--<a title="用DTcms做一个独立博客网站（响应式模板）" href="http://www.muzhuangnet.com/show/269.html" >--}}
                        {{--<span class="thumbnail">--}}
                            {{--<img class="thumb" data-original="http://www.muzhuangnet.com/upload/201610/18/201610181739277776.jpg" src="http://www.muzhuangnet.com/upload/201610/18/201610181739277776.jpg" alt="用DTcms做一个独立博客网站（响应式模板）"  style="display: block;">--}}
                        {{--</span>--}}
                        {{--<span class="text">用DTcms做一个独立博客网站（响应式模板）</span>--}}
                        {{--<span class="muted"><i class="glyphicon glyphicon-time"></i>2016-11-01</span>--}}
                        {{--<span class="muted"><i class="glyphicon glyphicon-eye-open"></i>88</span>--}}
                    {{--</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                    {{--<a title="用DTcms做一个独立博客网站（响应式模板）" href="http://www.muzhuangnet.com/show/269.html" >--}}
                        {{--<span class="thumbnail">--}}
                            {{--<img class="thumb" data-original="http://www.muzhuangnet.com/upload/201610/18/201610181739277776.jpg" src="http://www.muzhuangnet.com/upload/201610/18/201610181739277776.jpg" alt="用DTcms做一个独立博客网站（响应式模板）"  style="display: block;">--}}
                        {{--</span>--}}
                        {{--<span class="text">用DTcms做一个独立博客网站（响应式模板）</span>--}}
                        {{--<span class="muted"><i class="glyphicon glyphicon-time"></i>2016-11-01</span>--}}
                        {{--<span class="muted"><i class="glyphicon glyphicon-eye-open"></i>88</span>--}}
                    {{--</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                    {{--<a title="用DTcms做一个独立博客网站（响应式模板）" href="http://www.muzhuangnet.com/show/269.html" >--}}
                        {{--<span class="thumbnail">--}}
                            {{--<img class="thumb" data-original="http://www.muzhuangnet.com/upload/201610/18/201610181739277776.jpg" src="http://www.muzhuangnet.com/upload/201610/18/201610181739277776.jpg" alt="用DTcms做一个独立博客网站（响应式模板）"  style="display: block;">--}}
                        {{--</span>--}}
                        {{--<span class="text">用DTcms做一个独立博客网站（响应式模板）</span>--}}
                        {{--<span class="muted"><i class="glyphicon glyphicon-time"></i>2016-11-01</span>--}}
                        {{--<span class="muted"><i class="glyphicon glyphicon-eye-open"></i>88</span>--}}
                    {{--</a>--}}
                {{--</li>--}}
                {{--<li><a title="用DTcms做一个独立博客网站（响应式模板）" href="http://www.muzhuangnet.com/show/269.html" >--}}
                        {{--<span class="thumbnail">--}}
                            {{--<img class="thumb" data-original="http://www.muzhuangnet.com/upload/201610/18/201610181739277776.jpg" src="http://www.muzhuangnet.com/upload/201610/18/201610181739277776.jpg" alt="用DTcms做一个独立博客网站（响应式模板）"  style="display: block;">--}}
                        {{--</span>--}}
                        {{--<span class="text">用DTcms做一个独立博客网站（响应式模板）</span>--}}
                        {{--<span class="muted"><i class="glyphicon glyphicon-time"></i>2016-11-01</span>--}}
                        {{--<span class="muted"><i class="glyphicon glyphicon-eye-open"></i>88</span>--}}
                    {{--</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                    {{--<a title="用DTcms做一个独立博客网站（响应式模板）" href="http://www.muzhuangnet.com/show/269.html" >--}}
                        {{--<span class="thumbnail">--}}
                            {{--<img class="thumb" data-original="http://www.muzhuangnet.com/upload/201610/18/201610181739277776.jpg" src="http://www.muzhuangnet.com/upload/201610/18/201610181739277776.jpg" alt="用DTcms做一个独立博客网站（响应式模板）"  style="display: block;">--}}
                        {{--</span>--}}
                        {{--<span class="text">用DTcms做一个独立博客网站（响应式模板）</span>--}}
                        {{--<span class="muted"><i class="glyphicon glyphicon-time"></i>2016-11-01</span>--}}
                        {{--<span class="muted"><i class="glyphicon glyphicon-eye-open"></i>88</span>--}}
                    {{--</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                    {{--<a title="用DTcms做一个独立博客网站（响应式模板）" href="http://www.muzhuangnet.com/show/269.html" >--}}
                        {{--<span class="thumbnail">--}}
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

            <a href="{{url('/')}}" target="_blank" rel="nofollow" title="MZ-NetBlog主题" >
                <img style="width: 100%" src="{{asset('resources/views/seo/images/ad.jpg')}}" alt="MZ-NetBlog主题" >
            </a>

        </div>
        <div class="widget widget_sentence">

            <a href="{{url('/')}}" target="_blank" rel="nofollow" title="专业网站建设" >
                <img style="width: 100%" src="http://www.muzhuangnet.com/upload/201610/24/201610241224221511.jpg" alt="专业网站建设" >
            </a>

        </div>
    </aside>
</section>
@endsection