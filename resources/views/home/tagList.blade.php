@extends('layouts.home')


@section('info')
    <title>{{$field->tag_name}}|{{Config::get('web.web_title')}}|【Jerry的编程之路】</title>
    <meta name="keywords" content="{{$field->cate_keywords}},{{Config::get('web.web_title')}}" />
    <meta name="description" content="{{$field->cate_description}},{{Config::get('web.web_title')}}" />
    <link href="{{asset('resources/views/home/css/style.css')}}" rel="stylesheet">

@endsection


@section('content')


    <article class="blogs container-fluid">

        <div class="row mbxnav">
            <!--面包屑路径导航-->
            <ol class="row breadcrumb">
                <li><i class="glyphicon glyphicon-home" style="margin-right: 5px;"></i><a href="{{url('/')}}">首页</a></li>
                <li><a href="{{url('tag/'.$field->id)}}">{{$field->tag_name}}</a></li>
                <li class="active hidden-md hidden-sm hidden-xs">{{$field->art_title}}</li>
            </ol>
            <!--面包屑路径导航-->
        </div>
        <div class="row oneNav">
            <a href="{{url('cate/1')}}">WEB前端</a>
            <a href="{{url('cate/3')}}">服务器</a>
            <a href="{{url('cate/7')}}">推广运营</a>
            <a href="{{url('cate/20')}}">Tcp/IP协议</a>
            <a href="{{url('cate/24')}}">数据库</a>
            <a href="{{url('cate/40')}}">网络安全</a>
            <a href="{{url('cate/48')}}">开源框架</a>
            <a href="{{url('cate/50')}}">版本控制</a>
            <a href="{{url('cate/23')}}">高级语言</a>
            <a href="{{url('cate/19')}}">Hadoop大数据</a>
            <a href="{{url('cate/47')}}">健康资讯</a>
        </div>
        <div class="row">
            <div class="left col-lg-8">
                @foreach($data as $k=>$v)
                    <div class="row articleCon">
                        <div class="row content" style="margin: 0;padding: 20px;">
                            <figure class="col-lg-4">
                                <a href="" class="imgSLT" title="{{$v->art_title}}" style="height: 150px;overflow: hidden;display: inline-block;">
                                    <img src="{{url($v->art_thumb)}}" alt="{{$v->art_title}}" class="img-responsive">
                                    <span class="imgFL">{{$field->cate_name}}</span>
                                </a>
                            </figure>
                            <ul class="col-lg-8 ">
                                <h2>{{$v->art_title}}</h2>
                                <p class="articleConP">{{$v->art_description}}</p>
                                <div>
                                    <a title="{{$v->art_title}}" href="{{url('a/'.$v->art_id)}}" target="_blank" class="readmore">阅读全文>></a>
                                </div>
                            </ul>
                        </div>
                        <span class="title-l"></span>
                        <div class="riqi">{{date('m/d', $v->art_dingTime)}}</div>
                        {{--<p class="dateview">--}}
                            {{--<span>发布时间：{{date('Y-m-d', $v->art_time)}}</span>--}}
                            {{--<span>作者：{{$v->art_editor}}</span>--}}
                            {{--<span>分类：[<a href="/">{{$field->cate_name}}</a>]</span>--}}
                            {{--<span>阅读次数：{{$v->art_view}}</span>--}}
                            {{--<span>是否原创：[<a href="/">{{$v->art_is_original}}</a>]</span>--}}
                        {{--</p>--}}
                    </div>
                @endforeach

                <div class="row page">
                    {{$data->links()}}
                </div>

                {{--<div class="row" style="padding: 14px;">--}}
                {{--<ul class="newsLi col-lg-6">--}}
                {{--<li>--}}
                {{--<b><a href="#">web前端</a></b> |--}}
                {{--<a href="#">中国人赴日买房猛增3倍</a> <a href="#">有炒家整栋整栋整栋整栋整栋买</a>--}}
                {{--@foreach($new as $k=>$v)--}}
                {{--<a href="{{url('a/'.$v->art_id)}}" title="{{$v->art_title}}" target="_blank">{{$v->art_title}}</a>--}}
                {{--@endforeach--}}
                {{--</li>--}}
                {{--<li>--}}
                {{--<b><a href="#">服务器</a></b> |--}}
                {{--<a href="#">总局总局：“双十一”明令禁用最低价</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                {{--<b><a href="#">推广运营</a></b> |--}}
                {{--<a href="#">[广角镜]总局霞:女神六十</a> <a href="#">拨云见霞光</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                {{--<b><a href="#">数据库</a></b> |--}}
                {{--<a href="#">冠军,被国安逼出冠军</a> <a href="#">冠军青训哪家强</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                {{--<b><a href="#">网络安全</a></b> |--}}
                {{--<a href="#">网友调侃库克出柜太恶意</a> <a href="#">多金明星</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                {{--<b><a href="#">健康资讯</a></b> |--}}
                {{--<a href="#">和苏菲玛索吃早餐</a> <a href="#">全球首架透明飞机</a>--}}
                {{--</li>--}}
                {{--</ul>--}}
                {{--<ul class="newsLi col-lg-6">--}}
                {{--<li>--}}
                {{--<b><a href="#">财经</a></b> |--}}
                {{--<a href="#">中国人赴日买房猛增3倍</a> <a href="#">有炒家整栋整栋整栋整栋整栋买</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                {{--<b><a href="#">科技</a></b> |--}}
                {{--<a href="#">总局总局：“双十一”明令禁用最低价</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                {{--<b><a href="#">娱乐</a></b> |--}}
                {{--<a href="#">[广角镜]总局霞:女神六十</a> <a href="#">拨云见霞光</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                {{--<b><a href="#">体育</a></b> |--}}
                {{--<a href="#">冠军,被国安逼出冠军</a> <a href="#">冠军青训哪家强</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                {{--<b><a href="#">女人</a></b> |--}}
                {{--<a href="#">网友调侃库克出柜太恶意</a> <a href="#">多金明星</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                {{--<b><a href="#">君子</a></b> |--}}
                {{--<a href="#">和苏菲玛索吃早餐</a> <a href="#">全球首架透明飞机</a>--}}
                {{--</li>--}}
                {{--</ul>--}}
                {{--</div>--}}

                {{--<div class="ad">--}}
                {{--<img src="{{url('resources/views/home/images/ad.png')}}">--}}
                {{--</div>--}}

            </div>
            <aside class="right col-lg-4">
                @if($submenu)
                    <div class="rnav">
                        <ul>
                            @foreach($submenu as $k=>$v)
                                <li class="rnav{{random_int(1,4)}}"><a href="{{url('tag/'.$v->id)}}" target="_blank">{{$v->tag_name}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                @endif


                <div class="news">
                    <h3>
                        <a href="" title="">栏目<span>文章</span></a>
                    </h3>
                    <ul class="rank">
                        @foreach($new as $k=>$v)
                            <li><a href="{{url('a/'.$v->art_id)}}" title="{{$v->art_title}}" target="_blank">{{$v->art_title}}</a></li>
                        @endforeach
                    </ul>

                    @parent

                </div>

                <div class="news">
                    <h3>
                        <a href="" title="">最新<span>评论</span></a>
                    </h3>
                    <div class="rank">
                        <div>
                            <div class="col-lg-3">
                                <a href="" title="" class="visitorsImg">
                                    <img src="http://0d077ef9e74d8.cdn.sohucs.com/fac494264beff70ed91fedf32783552b_default_1449556186969_jpg" alt="">
                                </a>
                            </div>
                            <div class="col-lg-9" style="padding: 0;">
                                <h5>海阔天空</h5>
                                <p>内容实在嗯么来哦呢内容实在嗯么来哦呢是的是是是是内容实在嗯么来哦呢是的是是是是是的是是是是</p>
                                <p class="visitorsPing"><a href="">评: 如何快内容实在嗯么来哦呢是的是是是是速获得微信公众号原</a></p>
                            </div>
                        </div>
                        <div>
                            <div class="col-lg-3">
                                <a href="" title="" class="visitorsImg">
                                    <img src="http://sucimg.itc.cn/avatarimg/518315705_1477013514171_c55" alt="">
                                </a>
                            </div>
                            <div class="col-lg-9" style="padding: 0;">
                                <h5>一碗先生</h5>
                                <p>呵呵...</p>
                                <p class="visitorsPing"><a href="">评: 如何快内容实在嗯么来哦呢是的是是是是速获得微信公众号原</a></p>
                            </div>
                        </div>
                        <div>
                            <div class="col-lg-3">
                                <a href="" title="" class="visitorsImg">
                                    <img src="http://0d077ef9e74d8.cdn.sohucs.com/fac494264beff70ed91fedf32783552b_default_1449555781335_jpg" alt="">
                                </a>
                            </div>
                            <div class="col-lg-9" style="padding: 0;">
                                <h5>一思量</h5>
                                <p>哈哈哈</p>
                                <p class="visitorsPing"><a href="">评: 如何快内容实在嗯么来哦呢是的是是是是速获得微信公众号原</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>
        </div>

    </article>

@endsection
