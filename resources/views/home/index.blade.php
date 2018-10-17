@extends('layouts.home')

@section('info')
    <title>{{Config::get('web.web_title')}}|{{Config::get('web.seo_title')}}</title>
    <meta name="keywords" content="{{Config::get('web.keywords')}}" />
    <meta name="description" content="{{Config::get('web.description')}}" />
@endsection


@section('content')

    <!--tab切换页1-->
    <div class="tabdiv">
        <div class="tabdivleft">
            <div class="toplunbo">
                <div id="cont">

                    <div class="lii"></div>
                    <div class="btn" id="btn">
                        <ul>
                            <li class="on">1</li>
                            <li>2</li>
                            <li>3</li>
                            <li>4</li>
                            <div style="clear: both"></div>
                        </ul>
                    </div>
                    <div class="imm" id="imm">
                        <a href="1" target="_blank"> <img src="{{url('resources/views/home/images/j1.jpg')}}" alt="第一章"></a>
                        <a href="2" target="_blank"> <img src="{{url('resources/views/home/images/j2.jpg')}}" alt="第二章"></a>
                        <a href="3" target="_blank"> <img src="{{url('resources/views/home/images/j3.jpg')}}" alt="第三章"></a>
                        <a href="4" target="_blank"><img src="{{url('resources/views/home/images/j4.jpg')}}" alt="第四章"></a>
                    </div>
                    <div id="jiao">
                        <a href="#" id="left">&lt;</a>
                        <a href="#" id="right">&gt;</a>
                    </div>
                </div>
                <script>
                    var tt=null;
                    var kkk;
                    var n=0;
                    var timer=0;
                    window.onload=function(){
                        var li=document.getElementById("btn").getElementsByTagName("li");
                        kkk=document.getElementById("imm").getElementsByTagName("a");
                        for(var i=0;i<kkk.length;i++){
                            if(i!=0){
                                kkk[i].style.opacity=0;
                            }
                        }
                        for(var j=0;j<li.length;j++){
                            li[j].onmouseover=function(){
                                var that=this;
                                tt=setTimeout(function(){ var index=that.innerHTML-1;
                                    n=index;
                                    if(index <kkk.length){
                                        for(var o=0;o<li.length;o++){
                                            li[o].className="";
                                            kkk[o].style.opacity=0;
                                            kkk[o].style.zIndex=9998;
                                        }
                                        that.className="on";
                                        kkk[index].style.opacity=1;
                                        kkk[index].style.zIndex=9999;
                                        kkk[index].style.transition="opacity 0.8s";
                                        leftf(-300,0,kkk[index]);
                                    }
                                },100);

                            };
                            li[j].onmouseout=function(){
                                clearTimeout(tt)
                            }
                        }



                        var left=document.getElementById("left");
                        var right=document.getElementById("right");
                        var jiao=document.getElementById("jiao");
                        var body=document.getElementById("cont");

                        timer = setInterval("autoplay()",2000);
                        body.onmouseover=function(){
                            jiao.style.display="block";
                            clearInterval(timer);
                        };
                        body.onmouseout=function(){
                            jiao.style.display="none";
                            timer = setInterval("autoplay()",2000);
                        };
                        left.onclick=function(){
                            if(n>0){
                                n--
                            }else if(n==0){
                                n=kkk.length-1;
                            }
                            var li=document.getElementById("btn").getElementsByTagName("li");
                            li[n].onmouseover()
                        };
                        right.onclick=function(){
                            n=n>=(kkk.length-1)?0:++n;
                            var li=document.getElementById("btn").getElementsByTagName("li");
                            li[n].onmouseover()
                        }
                    }

                    ;
                    function leftf(start,end,ele){ var tt=setInterval(function (){
                        start+=10;
                        ele.style.left=start+"px";
                        if(start==end){
                            clearInterval(tt)
                        }
                    },20)
                    }

                    function autoplay(){
                        n=n>=(kkk.length-1)?0:++n;
                        var li=document.getElementById("btn").getElementsByTagName("li");
                        li[n].onmouseover()
                    };
                </script>
            </div>
            <div class="news">
                <div class="title"><span><a href="/zt/" rel="nofollow" target="_blank">更多»</a></span>专题</div>
                <ul>
                    <li><span>12-07</span><a title="Fireworks cs6下载_Fireworks下载_Fireworks使用教程" href="/zt/Fiework.html" target="_blank">Fireworks cs6下载_Fireworks下载_Fireworks使用教程</a></li><li><span>08-02</span><a title="最新好玩的安卓游戏下载_热门好玩的安卓手机游戏_安卓手游下载大全" href="/zt/androidgame.html" target="_blank">最新好玩的安卓游戏下载_热门好玩的安卓手机游戏_安卓手游下载大全</a></li><li><span>06-20</span><a title="护卫神官方下载_护卫神php套件下载_护卫神php套件安装教程" href="/zt/huweishen.html" target="_blank">护卫神官方下载_护卫神php套件下载_护卫神php套件安装教程</a></li><li><span>06-07</span><a title="开心手机恢复大师使用教程" href="/zt/jiluhuifu.html" target="_blank">开心手机恢复大师使用教程</a></li><li><span>06-07</span><a title="数据恢复软件下载_微信聊天记录删除怎么恢复_手机照片以及通讯恢复教程" href="/zt/shujuhuifu.html" target="_blank">数据恢复软件下载_微信聊天记录删除怎么恢复_手机照片以及通讯恢复教程</a></li><li><span>04-21</span><a title="Photoshop磨皮教程_PS磨皮教程_磨皮教程大全" href="/zt/mopi.html" target="_blank">Photoshop磨皮教程_PS磨皮教程_磨皮教程大全</a></li><li><span>03-15</span><a title="Photoshop抠图教程_PS抠图教程_抠图教程大全" href="/zt/koutu.html" target="_blank">Photoshop抠图教程_PS抠图教程_抠图教程大全</a></li><li><span>03-14</span><a title="PPLive网络电视下载_PPTV电视下载_PPTV使用教程" href="/zt/PPTV.html" target="_blank">PPLive网络电视下载_PPTV电视下载_PPTV使用教程</a></li><li><span>01-06</span><a title="单位换算器_单位换算器下载_单位换算器哪个好" href="/zt/dwhsqxz.html" target="_blank">单位换算器_单位换算器下载_单位换算器哪个好</a></li>
                </ul>
            </div>
        </div>
        <div class="tabdivcenter">
            <div id="box3">
                <ul id="tabs3">
                    <li onmouseover="liClick2(0);"><a href="" title="">原创更新</a></li>
                    <li onmouseover="liClick2(1);"><a href="" title="">转载更新</a></li>
                    <li onmouseover="liClick2(2);"><a href="" title="">下载更新</a></li>
                    <li onmouseover="liClick2(3);"><a href="" title="">教程更新</a></li>
                    <li onmouseover="liClick2(4);"><a href="" title="">游戏更新</a></li>
                </ul>
                <div id="boxs3">
                    <div class="list0">
                        <ul class="rank">
                            @foreach($hotArticle as $k1=>$v1)
                                <li class="lis" style="">
                                    <h4>
                                        <a href="{{url('a/'.$v1->art_id)}}" title="{{$v1->art_title}}" target="_blank">{{$v1->art_title}}</a>
                                        <span>{{date('m-d', $v1->art_dingTime)}}</span>
                                    </h4>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="list1">

                    </div>
                    <div class="list2">
                        <p>Table2</p>
                    </div>
                    <div class="list3">
                        <p>Table3</p>
                    </div>
                    <div class="list4">
                        <p>Table4</p>
                    </div>
                    <div class="list5">
                        <p>Table5Table5Table5Table5Table5Table5</p>
                    </div>
                    <div class="list6">
                        <p>Table6</p>
                    </div>
                    <div class="list7">
                        <p>Table7</p>
                    </div>
                    <div class="list8">
                        <p>Table8</p>
                    </div>
                </div>
                <ul id="tabs3">
                    <li onmouseover="liClick2(5);"><a href="" title="">原创更新</a></li>
                    <li onmouseover="liClick2(6);"><a href="" title="">转载更新</a></li>
                    <li onmouseover="liClick2(7);"><a href="" title="">下载更新</a></li>
                    <li onmouseover="liClick2(8);"><a href="" title="">教程更新</a></li>
                    <li onmouseover="liClick2(9);"><a href="" title="">游戏更新</a></li>
                </ul>
            </div>
            <script>
                //使用类控制显示
                function liClick2(liNum){
                    var div = document.getElementById('boxs3');

                    for (var i=0; i<div.children.length;i++) {
//                console.log(div.children[i].style.display);
                        //除了自身,其余的设置隐藏, 自身显示 liNum自身,
                        if(i != liNum){
                            div.children[i].setAttribute('class', 'hide');
                            div.children[liNum].setAttribute('class', 'show');
                        }

                    }
                }
            </script>
        </div>
        <div class="tabdivright">
            <div class="recommended" style="margin-bottom: 10px;">
                <div class="title">本站公告</div>
                <ul><li><a href="/article/91642.htm" title="编程之路投稿中心正式上线，欢迎大家踊跃投稿" target="_blank">编程之路投稿中心正式上线，欢迎大家踊跃</a></li>
                    <li><a href="/article/88075.htm" title="编程之路 寻求cdn赞助(广告置换)" target="_blank">编程之路 寻求cdn赞助(广告置换)</a></li>
                    <li><a href="/article/73947.htm" title="编程之路诚征下载服务器赞助了" target="_blank">编程之路诚征下载服务器赞助了</a></li>
                    <li><a href="/article/72969.htm" title="关于近期编程之路网站被360报木马网站的声明" target="_blank">关于近期编程之路网站被360报木马网站的声</a></li>
                    <li><a href="/article/52310.htm" title="编程之路无法访问或访问较慢临时解决方案" target="_blank">编程之路无法访问或访问较慢临时解决方案</a></li>
                </ul>
            </div>
            <div class="recommended">
                <div class="title">推荐软件</div>
                <ul>
                    <li><span class="active">1</span><a href="/softs/490396.html" title="快手直播伴侣电脑版 V1.8.7.785 官方安装免费版" target="_blank">快手直播伴侣电脑版 V1.8.7.785 官方安装免费版
                        </a></li><li><span class="active">2</span><a href="/softs/403522.html" title="aardio(桌面软件快速开发) v16.58 官方免费绿色版" target="_blank">aardio(桌面软件快速开发) v16.58 官方免费绿色版
                        </a></li><li><span class="active">3</span><a href="/softs/587177.html" title="VC++运行库合集安装包Visual C++ AIO Installer V’  2018.02.08 一键自动安装版" target="_blank">VC++运行库合集安装包Visual C++ AIO Installer V’  2018.02.08 一键自动安装版
                        </a></li><li><span>4</span><a href="/softs/475997.html" title="风之影浏览器 17.0.9.0 中文官方安装版 64位" target="_blank">风之影浏览器 17.0.9.0 中文官方安装版 64位
                        </a></li><li><span>5</span><a href="/softs/460756.html" title="谷歌浏览器(Google Chrome) v64.0.3282.119 官方离线正式版 64位" target="_blank">谷歌浏览器(Google Chrome) v64.0.3282.119 官方离线正式版 64位
                        </a></li><li><span>6</span><a href="/softs/598481.html" title="IntelliJ IDEA 社区版 2018.1 中文激活破解版(附汉化包+安装教程+注册码)" target="_blank">IntelliJ IDEA 社区版 2018.1 中文激活破解版(附汉化包+安装教程+注册码)
                        </a></li><li><span>7</span><a href="/softs/598467.html" title="IntelliJ IDEA Ultimate 2018.1 中文激活破解版(附汉化包+安装教程+注册码)" target="_blank">IntelliJ IDEA Ultimate 2018.1 中文激活破解版(附汉化包+安装教程+注册码)
                        </a></li><li><span>8</span><a href="/softs/537059.html" title="3DQuickPress v6.2.5 64位 官方免费版(附安装教程+破解文件)" target="_blank">3DQuickPress v6.2.5 64位 官方免费版(附安装教程+破解文件)
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--tab切换页1-->

    <div style="width: 1200px;margin:0 auto;height: 60px;background: #999999;">
        广告区
    </div>

    <!--文章列表1-->
    <div class="listarticle">

        @foreach($collectArticles as $k=>$v)
        <div class="list">
            <h3><a style="border-bottom: 3px solid #00A1EA;position: absolute;padding-bottom: 5px;" href="http://{{$v['cate_domain']}}" title="">{{$v['cate_name']}}</a><a href="http://{{$v['cate_domain']}}" style="float: right">更多>></a></h3>
            <ul class="rank">
                @foreach($v['articleList'] as $k1=>$v1)
                    <li class="lis" style="">
                        <h4>
                            <a href="http://{{$v['cate_domain']}}/article{{$v['cate_id'].'-'.$v1['art_id']}}.html" title="{{$v1->art_title}}" target="_blank">
                                {{$v1['art_title']}}
                            </a>
                            <span>{{date('m-d', $v1['art_time'])}}</span>
                        </h4>
                    </li>
                @endforeach
            </ul>
        </div>
        @endforeach

        <div class="list">
            <h3><a style="border-bottom: 3px solid #00A1EA;position: absolute;padding-bottom: 5px;" href="{{url('/cate/'.$kaiyuancms['cate_id'])}}" title="">{{$kaiyuancms['cate_name']}}</a><a href="" style="float: right">更多>></a></h3>
            <ul class="rank">
                @foreach($kaiyuancms['data'] as $k1=>$v1)
                    <li class="lis" style="">
                        <h4>
                            <a href="{{url('a/'.$v1->art_id)}}" title="{{$v1->art_title}}" target="_blank">{{$v1->art_title}}</a>
                            <span>{{date('m-d', $v1->art_dingTime)}}</span>
                        </h4>
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="list">
            <h3><a style="border-bottom: 3px solid #00A1EA;position: absolute;padding-bottom: 5px;" href="{{url('/cate/'.$heike['cate_id'])}}" title="">{{$heike['cate_name']}}</a><a href="" title="">更多>></a></h3>
            <ul class="rank">
                @foreach($heike['data'] as $k1=>$v1)
                    <li class="lis" style="">
                        <h4>
                            <a href="{{url('a/'.$v1->art_id)}}" title="{{$v1->art_title}}" target="_blank">{{$v1->art_title}}</a>
                            <span>{{date('m-d', $v1->art_dingTime)}}</span>
                        </h4>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
    <!--文章列表1-->

    <div style="width: 1200px;margin:0 auto;height: 60px;background: #999999;">
        广告区
    </div>

    <!--文章列表2-->
    <div class="listarticle">
        <div class="list">
            <h3><a style="border-bottom: 3px solid #00A1EA;position: absolute;padding-bottom: 5px;" href="{{url('/cate/'.$apaches['cate_id'])}}" title="">{{$apaches['cate_name']}}</a><a href="" style="float: right">更多>></a></h3>
            <ul class="rank">
                @foreach($apaches['data'] as $k1=>$v1)
                    <li class="lis" style="">
                        <h4>
                            <a href="{{url('a/'.$v1->art_id)}}" title="{{$v1->art_title}}" target="_blank">{{$v1->art_title}}</a>
                            <span>{{date('m-d', $v1->art_dingTime)}}</span>
                        </h4>
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="list">
            <h3><a style="border-bottom: 3px solid #00A1EA;position: absolute;padding-bottom: 5px;" href="{{url('/cate/'.$nginxs['cate_id'])}}" title="">{{$nginxs['cate_name']}}</a><a href="" style="float: right">更多>></a></h3>
            <ul class="rank">
                @foreach($nginxs['data'] as $k1=>$v1)
                    <li class="lis" style="">
                        <h4>
                            <a href="{{url('a/'.$v1->art_id)}}" title="{{$v1->art_title}}" target="_blank">{{$v1->art_title}}</a>
                            <span>{{date('m-d', $v1->art_dingTime)}}</span>
                        </h4>
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="list">
            <h3><a style="border-bottom: 3px solid #00A1EA;position: absolute;padding-bottom: 5px;" href="{{url('/cate/'.$macs['cate_id'])}}" title="">{{$macs['cate_name']}}</a><a href="" title="">更多>></a></h3>
            <ul class="rank">
                @foreach($macs['data'] as $k1=>$v1)
                    <li class="lis" style="">
                        <h4>
                            <a href="{{url('a/'.$v1->art_id)}}" title="{{$v1->art_title}}" target="_blank">{{$v1->art_title}}</a>
                            <span>{{date('m-d', $v1->art_dingTime)}}</span>
                        </h4>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
    <!--文章列表2-->

    <!--文章列表3-->
    <div class="listarticle">
        <div class="list">
            <h3><a style="border-bottom: 3px solid #00A1EA;position: absolute;padding-bottom: 5px;" href="{{url('/cate/'.$gits['cate_id'])}}" title="">{{$gits['cate_name']}}</a><a href="" style="float: right">更多>></a></h3>
            <ul class="rank">
                @foreach($gits['data'] as $k1=>$v1)
                    <li class="lis" style="">
                        <h4>
                            <a href="{{url('a/'.$v1->art_id)}}" title="{{$v1->art_title}}" target="_blank">{{$v1->art_title}}</a>
                            <span>{{date('m-d', $v1->art_dingTime)}}</span>
                        </h4>
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="list">
            <h3><a style="border-bottom: 3px solid #00A1EA;position: absolute;padding-bottom: 5px;" href="{{url('/cate/'.$svns['cate_id'])}}" title="">{{$svns['cate_name']}}</a><a href="" style="float: right">更多>></a></h3>
            <ul class="rank">
                @foreach($svns['data'] as $k1=>$v1)
                    <li class="lis" style="">
                        <h4>
                            <a href="{{url('a/'.$v1->art_id)}}" title="{{$v1->art_title}}" target="_blank">{{$v1->art_title}}</a>
                            <span>{{date('m-d', $v1->art_dingTime)}}</span>
                        </h4>
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="list">
            <h3><a style="border-bottom: 3px solid #00A1EA;position: absolute;padding-bottom: 5px;" href="{{url('/cate/'.$shujukus['cate_id'])}}" title="">{{$shujukus['cate_name']}}</a><a href="" title="">更多>></a></h3>
            <ul class="rank">
                @foreach($shujukus['data'] as $k1=>$v1)
                    <li class="lis" style="">
                        <h4>
                            <a href="{{url('a/'.$v1->art_id)}}" title="{{$v1->art_title}}" target="_blank">{{$v1->art_title}}</a>
                            <span>{{date('m-d', $v1->art_dingTime)}}</span>
                        </h4>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
    <!--文章列表3-->

    <div style="width: 1200px;margin:0 auto;height: 60px;background: #999999;">
        广告区
    </div>

    <!--文章列表4-->
    <div class="listarticle">
        <div class="list">
            <h3><a style="border-bottom: 3px solid #00A1EA;position: absolute;padding-bottom: 5px;" href="{{url('/cate/'.$seos['cate_id'])}}" title="">{{$seos['cate_name']}}</a><a href="" style="float: right">更多>></a></h3>
            <ul class="rank">
                @foreach($seos['data'] as $k1=>$v1)
                    <li class="lis" style="">
                        <h4>
                            <a href="{{url('a/'.$v1->art_id)}}" title="{{$v1->art_title}}" target="_blank">{{$v1->art_title}}</a>
                            <span>{{date('m-d', $v1->art_dingTime)}}</span>
                        </h4>
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="list">
            <h3><a style="border-bottom: 3px solid #00A1EA;position: absolute;padding-bottom: 5px;" href="{{url('/cate/'.$apps['cate_id'])}}" title="">{{$apps['cate_name']}}</a><a href="" style="float: right">更多>></a></h3>
            <ul class="rank">
                @foreach($apps['data'] as $k1=>$v1)
                    <li class="lis" style="">
                        <h4>
                            <a href="{{url('a/'.$v1->art_id)}}" title="{{$v1->art_title}}" target="_blank">{{$v1->art_title}}</a>
                            <span>{{date('m-d', $v1->art_dingTime)}}</span>
                        </h4>
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="list">
            <h3><a style="border-bottom: 3px solid #00A1EA;position: absolute;padding-bottom: 5px;" href="{{url('/cate/'.$linuxs['cate_id'])}}" title="">{{$linuxs['cate_name']}}</a><a href="" title="">更多>></a></h3>
            <ul class="rank">
                @foreach($linuxs['data'] as $k1=>$v1)
                    <li class="lis" style="">
                        <h4>
                            <a href="{{url('a/'.$v1->art_id)}}" title="{{$v1->art_title}}" target="_blank">{{$v1->art_title}}</a>
                            <span>{{date('m-d', $v1->art_dingTime)}}</span>
                        </h4>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
    <!--文章列表4-->

    <div style="width: 1200px;margin:0 auto;height: 60px;background: #999999;">
        广告区
    </div>

    <!--文章列表5-->
    <div class="listarticle">
        <div class="list">
            <h3><a style="border-bottom: 3px solid #00A1EA;position: absolute;padding-bottom: 5px;" href="{{url('/cate/'.$webs['cate_id'])}}" title="">{{$webs['cate_name']}}</a><a href="" style="float: right">更多>></a></h3>
            <ul class="rank">
                @foreach($webs['data'] as $k1=>$v1)
                    <li class="lis" style="">
                        <h4>
                            <a href="{{url('a/'.$v1->art_id)}}" title="{{$v1->art_title}}" target="_blank">{{$v1->art_title}}</a>
                            <span>{{date('m-d', $v1->art_dingTime)}}</span>
                        </h4>
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="list">
            <h3><a style="border-bottom: 3px solid #00A1EA;position: absolute;padding-bottom: 5px;" href="{{url('/cate/'.$zixunnews['cate_id'])}}" title="">{{$zixunnews['cate_name']}}</a><a href="" style="float: right">更多>></a></h3>
            <ul class="rank">
                @foreach($zixunnews['data'] as $k1=>$v1)
                    <li class="lis" style="">
                        <h4>
                            <a href="{{url('a/'.$v1->art_id)}}" title="{{$v1->art_title}}" target="_blank">{{$v1->art_title}}</a>
                            <span>{{date('m-d', $v1->art_dingTime)}}</span>
                        </h4>
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="list">
            <h3><a style="border-bottom: 3px solid #00A1EA;position: absolute;padding-bottom: 5px;" href="{{url('/cate/'.$linuxs['cate_id'])}}" title="">{{$linuxs['cate_name']}}</a><a href="" title="">更多>></a></h3>
            <ul class="rank">
                @foreach($linuxs['data'] as $k1=>$v1)
                    <li class="lis" style="">
                        <h4>
                            <a href="{{url('a/'.$v1->art_id)}}" title="{{$v1->art_title}}" target="_blank">{{$v1->art_title}}</a>
                            <span>{{date('m-d', $v1->art_dingTime)}}</span>
                        </h4>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
    <!--文章列表5-->

    <div style="width: 1200px;margin:0 auto;height: 60px;background: #999999;">
        广告区
    </div>

    {{--@foreach($linuxs['data'] as $k1=>$v1)--}}
    <!--专题列表1-->
    <div class="bigbox">
        <div id="category">
            <h3><a href="/softjc/" target="_blank">软件教程</a></h3>
            <span>
                <a href="/softjc/list512_1.html" target="_blank">手机软件</a> |
                <a href="/office/" target="_blank">办公软件</a> |
                <a href="/softjc/list77_1.html" target="_blank">安全相关</a> |
                <a href="/softjc/list76_1.html" target="_blank">文件管理</a> |
                <a href="/softjc/list73_1.html" target="_blank">网络通讯</a> |
                <a href="/softjc/list579_1.html" target="_blank">媒体工具</a> |
                <a href="/softjc/list79_1.html" target="_blank">其他工具</a>
            </span>
        </div>
        <div class="col-left">
            <div class="c-1">
                <div class="top">
                    <h2><a href="/os/61460.html" title="简单易上手 固态硬盘SSD安装WIN7系统的3种" target="_blank" class="red">简单易上手 固态硬盘SSD安装WIN7系统的3种</a></h2>
                </div>
                <div class="node">
                    <ul class="sub"><li><u>平面<i></i></u><span></span></li><li><u>办公<i></i></u><span></span></li></ul>
                    <ul class="art-list f14 lh28">
                        <li><u class="icon1"></u><a href="/photoshop/600222.html" target="_blank">ps精修品牌玻璃瓶化妆品图片教程</a></li><li><u class="icon1"></u><a href="/photoshop/600213.html" target="_blank">ps怎样制作漂亮好看的浪漫情人节金属纹理字</a></li><li><u class="icon1"></u><a href="/photoshop/600113.html" target="_blank">ps怎么设计双半圆环抱的图标? ps立体图标的</a></li><li><u class="icon1"></u><a href="/photoshop/600075.html" target="_blank">ps怎么画小恐龙简笔画?  ps画恐龙的教程</a></li><li><u class="icon1"></u><a href="/photoshop/600069.html" target="_blank">ps怎么绘制鞭炮简笔画? ps绘制点燃的鞭炮的</a></li>
                        <li class="hr"></li>
                        <li><u class="icon1"></u><a href="/office/excel/600136.html" target="_blank">excel表格怎么绘制立体的物料分析流程图?</a></li><li><u class="icon1"></u><a href="/office/wps/600127.html" target="_blank">WPS表格输入文本默认为繁体字该怎么解决?</a></li><li><u class="icon1"></u><a href="/office/powerpoint/600126.html" target="_blank">ppt怎么手绘地球仪矢量图标? ppt画地球仪的</a></li><li><u class="icon1"></u><a href="/office/excel/600079.html" target="_blank">Excel表格怎么快速圈出高于80分的成绩?</a></li><li><u class="icon1"></u><a href="/office/excel/600078.html" target="_blank">excel2016中sumsq函数怎么用 sumsq函数在ex</a></li>
                    </ul>
                </div>
            </div>
            <div class="c-2">
                <div class="box simbox">
                    <div class="hd">
                        <h5><u></u>手机软件</h5>
                        <span class="more icon"><a href="/softjc/list512_1.html" target="_blank">更多</a></span>
                    </div>
                    <div class="bd">
                        <div class="top">
                            <h2><a href="/softjc/591731.html" title="什么软件能代替迅雷下载？五款能够完美替代" target="_blank" class="red">什么软件能代替迅雷下载？五款能够完美替代</a></h2>
                        </div>
                        <ul class="art-list f14 lh28">
                            <li><u class="icon"></u><a href="/softjc/600167.html" target="_blank">微信怎么设置空白头像和昵称?iPhone手机设</a></li><li><u class="icon"></u><a href="/softjc/600097.html" target="_blank">支付宝饿了么答题赢奖活动在哪里?</a></li><li><u class="icon"></u><a href="/softjc/600090.html" target="_blank">支付宝蚂蚁森林怎么邀请微博好友合种树?</a></li><li><u class="icon"></u><a href="/softjc/600022.html" target="_blank">支付宝app怎么给好友送礼? 2018支付宝新春</a></li><li><u class="icon"></u><a href="/softjc/599952.html" target="_blank">高德地图2018年新年红包活动有哪些?</a></li><li><u class="icon"></u><a href="/softjc/599951.html" target="_blank">今日头条app怎么增加抽生肖卡的次数?</a></li><li><u class="icon"></u><a href="/softjc/599923.html" target="_blank">抖音视频红包是什么?抖音视频红包玩法规则</a></li><li><u class="icon"></u><a href="/softjc/599906.html" target="_blank">新浪微博快速拖动功能在哪？怎么开启？</a></li><li><u class="icon"></u><a href="/softjc/599857.html" target="_blank">微信跳一跳多人模式已上线 微信跳一跳多人</a></li><li><u class="icon"></u><a href="/softjc/599844.html" target="_blank">蚂蚁森林怎么浇水得福卡 蚂蚁森林每天浇水</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-auto">
            <div class="box hot">
                <div class="hd">
                    <h5><u></u>热门排行</h5>
                </div>
                <div class="tab-content bd">
                    <ul class="hot-list">
                        <li><u class="number a1">1</u><a href="/softjc/39828.html" title="怎么做网线，网线水晶头接法和线序（图文详解）" target="_blank">怎么做网线，网线水晶头接法和线序（图文详解）</a></li><li><u class="number a2">2</u><a href="/softjc/39398.html" title="fast无线路由器设置方法 FAST FW300R无线路由器设置图解" target="_blank">fast无线路由器设置方法 FAST FW300R无线路由器设置图解</a></li><li><u class="number a3">3</u><a href="/softjc/39394.html" title="TP-link 无线路由器WDS设置方法图解_无线桥接设置" target="_blank">TP-link 无线路由器WDS设置方法图解_无线桥接设置</a></li><li><u class="number a4">4</u><a href="/os/windows/Win2003/1904.html" title="Windows Server 2003 SP2 企业版 ISO附CD2  下载" target="_blank">Windows Server 2003 SP2 企业版 ISO附CD2  下载</a></li><li><u class="number a5">5</u><a href="/softjc/39395.html" title="TP-Link 无线路由器设置密码方法_设置tp link路由器的无线密码方法图解" target="_blank">TP-Link 无线路由器设置密码方法_设置tp link路由器的无线密码方法图解</a></li><li><u class="number a6">6</u><a href="/softjc/74395.html" title="google chrome浏览器怎么设置主页" target="_blank">google chrome浏览器怎么设置主页</a></li><li><u class="number a7">7</u><a href="/softjc/44889.html" title="老毛桃U盘启动盘制作工具的详细使用方法(图文教程)" target="_blank">老毛桃U盘启动盘制作工具的详细使用方法(图文教程)</a></li><li><u class="number a8">8</u><a href="/softjc/230924.html" title="如何快速破解压缩包(rar,zip,7z,tar)密码的方法" target="_blank">如何快速破解压缩包(rar,zip,7z,tar)密码的方法</a></li><li><u class="number a9">9</u><a href="/softjc/68770.html" title="在VMware虚拟机中安装中文版Win7系统详细教程 附虚拟机下载" target="_blank">在VMware虚拟机中安装中文版Win7系统详细教程 附虚拟机下载</a></li><li><u class="number a10">10</u><a href="/os/60159.html" title="如何给电脑重装系统 重装系统步骤图解" target="_blank">如何给电脑重装系统 重装系统步骤图解</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--专题列表1-->
    {{--@endforeach--}}


    <div style="width: 1200px;margin:0 auto;height: 60px;background: #999999;">
        广告区
    </div>

    <!--专题列表2-->
    <div class="bigbox">
        <div id="category">
            <h3><a href="/softjc/" target="_blank">软件教程</a></h3>
            <span>
                <a href="/softjc/list512_1.html" target="_blank">手机软件</a> |
                <a href="/office/" target="_blank">办公软件</a> |
                <a href="/softjc/list77_1.html" target="_blank">安全相关</a> |
                <a href="/softjc/list76_1.html" target="_blank">文件管理</a> |
                <a href="/softjc/list73_1.html" target="_blank">网络通讯</a> |
                <a href="/softjc/list579_1.html" target="_blank">媒体工具</a> |
                <a href="/softjc/list79_1.html" target="_blank">其他工具</a>
            </span>
        </div>
        <div class="col-left">
            <div class="c-1">
                <div class="top">
                    <h2><a href="/os/61460.html" title="简单易上手 固态硬盘SSD安装WIN7系统的3种" target="_blank" class="red">简单易上手 固态硬盘SSD安装WIN7系统的3种</a></h2>
                </div>
                <div class="node">
                    <ul class="sub"><li><u>平面<i></i></u><span></span></li><li><u>办公<i></i></u><span></span></li></ul>
                    <ul class="art-list f14 lh28">
                        <li><u class="icon1"></u><a href="/photoshop/600222.html" target="_blank">ps精修品牌玻璃瓶化妆品图片教程</a></li><li><u class="icon1"></u><a href="/photoshop/600213.html" target="_blank">ps怎样制作漂亮好看的浪漫情人节金属纹理字</a></li><li><u class="icon1"></u><a href="/photoshop/600113.html" target="_blank">ps怎么设计双半圆环抱的图标? ps立体图标的</a></li><li><u class="icon1"></u><a href="/photoshop/600075.html" target="_blank">ps怎么画小恐龙简笔画?  ps画恐龙的教程</a></li><li><u class="icon1"></u><a href="/photoshop/600069.html" target="_blank">ps怎么绘制鞭炮简笔画? ps绘制点燃的鞭炮的</a></li>
                        <li class="hr"></li>
                        <li><u class="icon1"></u><a href="/office/excel/600136.html" target="_blank">excel表格怎么绘制立体的物料分析流程图?</a></li><li><u class="icon1"></u><a href="/office/wps/600127.html" target="_blank">WPS表格输入文本默认为繁体字该怎么解决?</a></li><li><u class="icon1"></u><a href="/office/powerpoint/600126.html" target="_blank">ppt怎么手绘地球仪矢量图标? ppt画地球仪的</a></li><li><u class="icon1"></u><a href="/office/excel/600079.html" target="_blank">Excel表格怎么快速圈出高于80分的成绩?</a></li><li><u class="icon1"></u><a href="/office/excel/600078.html" target="_blank">excel2016中sumsq函数怎么用 sumsq函数在ex</a></li>
                    </ul>
                </div>
            </div>
            <div class="c-2">
                <div class="box simbox">
                    <div class="hd">
                        <h5><u></u>手机软件</h5>
                        <span class="more icon"><a href="/softjc/list512_1.html" target="_blank">更多</a></span>
                    </div>
                    <div class="bd">
                        <div class="top">
                            <h2><a href="/softjc/591731.html" title="什么软件能代替迅雷下载？五款能够完美替代" target="_blank" class="red">什么软件能代替迅雷下载？五款能够完美替代</a></h2>
                        </div>
                        <ul class="art-list f14 lh28">
                            <li><u class="icon"></u><a href="/softjc/600167.html" target="_blank">微信怎么设置空白头像和昵称?iPhone手机设</a></li><li><u class="icon"></u><a href="/softjc/600097.html" target="_blank">支付宝饿了么答题赢奖活动在哪里?</a></li><li><u class="icon"></u><a href="/softjc/600090.html" target="_blank">支付宝蚂蚁森林怎么邀请微博好友合种树?</a></li><li><u class="icon"></u><a href="/softjc/600022.html" target="_blank">支付宝app怎么给好友送礼? 2018支付宝新春</a></li><li><u class="icon"></u><a href="/softjc/599952.html" target="_blank">高德地图2018年新年红包活动有哪些?</a></li><li><u class="icon"></u><a href="/softjc/599951.html" target="_blank">今日头条app怎么增加抽生肖卡的次数?</a></li><li><u class="icon"></u><a href="/softjc/599923.html" target="_blank">抖音视频红包是什么?抖音视频红包玩法规则</a></li><li><u class="icon"></u><a href="/softjc/599906.html" target="_blank">新浪微博快速拖动功能在哪？怎么开启？</a></li><li><u class="icon"></u><a href="/softjc/599857.html" target="_blank">微信跳一跳多人模式已上线 微信跳一跳多人</a></li><li><u class="icon"></u><a href="/softjc/599844.html" target="_blank">蚂蚁森林怎么浇水得福卡 蚂蚁森林每天浇水</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-auto">
            <div class="box hot">
                <div class="hd">
                    <h5><u></u>热门排行</h5>
                </div>
                <div class="tab-content bd">
                    <ul class="hot-list">
                        <li><u class="number a1">1</u><a href="/softjc/39828.html" title="怎么做网线，网线水晶头接法和线序（图文详解）" target="_blank">怎么做网线，网线水晶头接法和线序（图文详解）</a></li><li><u class="number a2">2</u><a href="/softjc/39398.html" title="fast无线路由器设置方法 FAST FW300R无线路由器设置图解" target="_blank">fast无线路由器设置方法 FAST FW300R无线路由器设置图解</a></li><li><u class="number a3">3</u><a href="/softjc/39394.html" title="TP-link 无线路由器WDS设置方法图解_无线桥接设置" target="_blank">TP-link 无线路由器WDS设置方法图解_无线桥接设置</a></li><li><u class="number a4">4</u><a href="/os/windows/Win2003/1904.html" title="Windows Server 2003 SP2 企业版 ISO附CD2  下载" target="_blank">Windows Server 2003 SP2 企业版 ISO附CD2  下载</a></li><li><u class="number a5">5</u><a href="/softjc/39395.html" title="TP-Link 无线路由器设置密码方法_设置tp link路由器的无线密码方法图解" target="_blank">TP-Link 无线路由器设置密码方法_设置tp link路由器的无线密码方法图解</a></li><li><u class="number a6">6</u><a href="/softjc/74395.html" title="google chrome浏览器怎么设置主页" target="_blank">google chrome浏览器怎么设置主页</a></li><li><u class="number a7">7</u><a href="/softjc/44889.html" title="老毛桃U盘启动盘制作工具的详细使用方法(图文教程)" target="_blank">老毛桃U盘启动盘制作工具的详细使用方法(图文教程)</a></li><li><u class="number a8">8</u><a href="/softjc/230924.html" title="如何快速破解压缩包(rar,zip,7z,tar)密码的方法" target="_blank">如何快速破解压缩包(rar,zip,7z,tar)密码的方法</a></li><li><u class="number a9">9</u><a href="/softjc/68770.html" title="在VMware虚拟机中安装中文版Win7系统详细教程 附虚拟机下载" target="_blank">在VMware虚拟机中安装中文版Win7系统详细教程 附虚拟机下载</a></li><li><u class="number a10">10</u><a href="/os/60159.html" title="如何给电脑重装系统 重装系统步骤图解" target="_blank">如何给电脑重装系统 重装系统步骤图解</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--专题列表2-->

    <div style="width: 1200px;margin:0 auto;height: 60px;background: #999999;">
        广告区
    </div>

    <!--专题列表3-->
    <div class="bigbox">
        <div id="category">
            <h3><a href="/softjc/" target="_blank">软件教程</a></h3>
            <span>
                <a href="/softjc/list512_1.html" target="_blank">手机软件</a> |
                <a href="/office/" target="_blank">办公软件</a> |
                <a href="/softjc/list77_1.html" target="_blank">安全相关</a> |
                <a href="/softjc/list76_1.html" target="_blank">文件管理</a> |
                <a href="/softjc/list73_1.html" target="_blank">网络通讯</a> |
                <a href="/softjc/list579_1.html" target="_blank">媒体工具</a> |
                <a href="/softjc/list79_1.html" target="_blank">其他工具</a>
            </span>
        </div>
        <div class="col-left">
            <div class="c-1">
                <div class="top">
                    <h2><a href="/os/61460.html" title="简单易上手 固态硬盘SSD安装WIN7系统的3种" target="_blank" class="red">简单易上手 固态硬盘SSD安装WIN7系统的3种</a></h2>
                </div>
                <div class="node">
                    <ul class="sub"><li><u>平面<i></i></u><span></span></li><li><u>办公<i></i></u><span></span></li></ul>
                    <ul class="art-list f14 lh28">
                        <li><u class="icon1"></u><a href="/photoshop/600222.html" target="_blank">ps精修品牌玻璃瓶化妆品图片教程</a></li><li><u class="icon1"></u><a href="/photoshop/600213.html" target="_blank">ps怎样制作漂亮好看的浪漫情人节金属纹理字</a></li><li><u class="icon1"></u><a href="/photoshop/600113.html" target="_blank">ps怎么设计双半圆环抱的图标? ps立体图标的</a></li><li><u class="icon1"></u><a href="/photoshop/600075.html" target="_blank">ps怎么画小恐龙简笔画?  ps画恐龙的教程</a></li><li><u class="icon1"></u><a href="/photoshop/600069.html" target="_blank">ps怎么绘制鞭炮简笔画? ps绘制点燃的鞭炮的</a></li>
                        <li class="hr"></li>
                        <li><u class="icon1"></u><a href="/office/excel/600136.html" target="_blank">excel表格怎么绘制立体的物料分析流程图?</a></li><li><u class="icon1"></u><a href="/office/wps/600127.html" target="_blank">WPS表格输入文本默认为繁体字该怎么解决?</a></li><li><u class="icon1"></u><a href="/office/powerpoint/600126.html" target="_blank">ppt怎么手绘地球仪矢量图标? ppt画地球仪的</a></li><li><u class="icon1"></u><a href="/office/excel/600079.html" target="_blank">Excel表格怎么快速圈出高于80分的成绩?</a></li><li><u class="icon1"></u><a href="/office/excel/600078.html" target="_blank">excel2016中sumsq函数怎么用 sumsq函数在ex</a></li>
                    </ul>
                </div>
            </div>
            <div class="c-2">
                <div class="box simbox">
                    <div class="hd">
                        <h5><u></u>手机软件</h5>
                        <span class="more icon"><a href="/softjc/list512_1.html" target="_blank">更多</a></span>
                    </div>
                    <div class="bd">
                        <div class="top">
                            <h2><a href="/softjc/591731.html" title="什么软件能代替迅雷下载？五款能够完美替代" target="_blank" class="red">什么软件能代替迅雷下载？五款能够完美替代</a></h2>
                        </div>
                        <ul class="art-list f14 lh28">
                            <li><u class="icon"></u><a href="/softjc/600167.html" target="_blank">微信怎么设置空白头像和昵称?iPhone手机设</a></li><li><u class="icon"></u><a href="/softjc/600097.html" target="_blank">支付宝饿了么答题赢奖活动在哪里?</a></li><li><u class="icon"></u><a href="/softjc/600090.html" target="_blank">支付宝蚂蚁森林怎么邀请微博好友合种树?</a></li><li><u class="icon"></u><a href="/softjc/600022.html" target="_blank">支付宝app怎么给好友送礼? 2018支付宝新春</a></li><li><u class="icon"></u><a href="/softjc/599952.html" target="_blank">高德地图2018年新年红包活动有哪些?</a></li><li><u class="icon"></u><a href="/softjc/599951.html" target="_blank">今日头条app怎么增加抽生肖卡的次数?</a></li><li><u class="icon"></u><a href="/softjc/599923.html" target="_blank">抖音视频红包是什么?抖音视频红包玩法规则</a></li><li><u class="icon"></u><a href="/softjc/599906.html" target="_blank">新浪微博快速拖动功能在哪？怎么开启？</a></li><li><u class="icon"></u><a href="/softjc/599857.html" target="_blank">微信跳一跳多人模式已上线 微信跳一跳多人</a></li><li><u class="icon"></u><a href="/softjc/599844.html" target="_blank">蚂蚁森林怎么浇水得福卡 蚂蚁森林每天浇水</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-auto">
            <div class="box hot">
                <div class="hd">
                    <h5><u></u>热门排行</h5>
                </div>
                <div class="tab-content bd">
                    <ul class="hot-list">
                        <li><u class="number a1">1</u><a href="/softjc/39828.html" title="怎么做网线，网线水晶头接法和线序（图文详解）" target="_blank">怎么做网线，网线水晶头接法和线序（图文详解）</a></li><li><u class="number a2">2</u><a href="/softjc/39398.html" title="fast无线路由器设置方法 FAST FW300R无线路由器设置图解" target="_blank">fast无线路由器设置方法 FAST FW300R无线路由器设置图解</a></li><li><u class="number a3">3</u><a href="/softjc/39394.html" title="TP-link 无线路由器WDS设置方法图解_无线桥接设置" target="_blank">TP-link 无线路由器WDS设置方法图解_无线桥接设置</a></li><li><u class="number a4">4</u><a href="/os/windows/Win2003/1904.html" title="Windows Server 2003 SP2 企业版 ISO附CD2  下载" target="_blank">Windows Server 2003 SP2 企业版 ISO附CD2  下载</a></li><li><u class="number a5">5</u><a href="/softjc/39395.html" title="TP-Link 无线路由器设置密码方法_设置tp link路由器的无线密码方法图解" target="_blank">TP-Link 无线路由器设置密码方法_设置tp link路由器的无线密码方法图解</a></li><li><u class="number a6">6</u><a href="/softjc/74395.html" title="google chrome浏览器怎么设置主页" target="_blank">google chrome浏览器怎么设置主页</a></li><li><u class="number a7">7</u><a href="/softjc/44889.html" title="老毛桃U盘启动盘制作工具的详细使用方法(图文教程)" target="_blank">老毛桃U盘启动盘制作工具的详细使用方法(图文教程)</a></li><li><u class="number a8">8</u><a href="/softjc/230924.html" title="如何快速破解压缩包(rar,zip,7z,tar)密码的方法" target="_blank">如何快速破解压缩包(rar,zip,7z,tar)密码的方法</a></li><li><u class="number a9">9</u><a href="/softjc/68770.html" title="在VMware虚拟机中安装中文版Win7系统详细教程 附虚拟机下载" target="_blank">在VMware虚拟机中安装中文版Win7系统详细教程 附虚拟机下载</a></li><li><u class="number a10">10</u><a href="/os/60159.html" title="如何给电脑重装系统 重装系统步骤图解" target="_blank">如何给电脑重装系统 重装系统步骤图解</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--专题列表3-->

    <div style="width: 1200px;margin:0 auto;height: 60px;background: #999999;">
        广告区
    </div>

    <!--专题列表4-->
    <div class="bigbox">
        <div id="category">
            <h3><a href="/softjc/" target="_blank">软件教程</a></h3>
            <span>
                <a href="/softjc/list512_1.html" target="_blank">手机软件</a> |
                <a href="/office/" target="_blank">办公软件</a> |
                <a href="/softjc/list77_1.html" target="_blank">安全相关</a> |
                <a href="/softjc/list76_1.html" target="_blank">文件管理</a> |
                <a href="/softjc/list73_1.html" target="_blank">网络通讯</a> |
                <a href="/softjc/list579_1.html" target="_blank">媒体工具</a> |
                <a href="/softjc/list79_1.html" target="_blank">其他工具</a>
            </span>
        </div>
        <div class="col-left">
            <div class="c-1">
                <div class="top">
                    <h2><a href="/os/61460.html" title="简单易上手 固态硬盘SSD安装WIN7系统的3种" target="_blank" class="red">简单易上手 固态硬盘SSD安装WIN7系统的3种</a></h2>
                </div>
                <div class="node">
                    <ul class="sub"><li><u>平面<i></i></u><span></span></li><li><u>办公<i></i></u><span></span></li></ul>
                    <ul class="art-list f14 lh28">
                        <li><u class="icon1"></u><a href="/photoshop/600222.html" target="_blank">ps精修品牌玻璃瓶化妆品图片教程</a></li><li><u class="icon1"></u><a href="/photoshop/600213.html" target="_blank">ps怎样制作漂亮好看的浪漫情人节金属纹理字</a></li><li><u class="icon1"></u><a href="/photoshop/600113.html" target="_blank">ps怎么设计双半圆环抱的图标? ps立体图标的</a></li><li><u class="icon1"></u><a href="/photoshop/600075.html" target="_blank">ps怎么画小恐龙简笔画?  ps画恐龙的教程</a></li><li><u class="icon1"></u><a href="/photoshop/600069.html" target="_blank">ps怎么绘制鞭炮简笔画? ps绘制点燃的鞭炮的</a></li>
                        <li class="hr"></li>
                        <li><u class="icon1"></u><a href="/office/excel/600136.html" target="_blank">excel表格怎么绘制立体的物料分析流程图?</a></li><li><u class="icon1"></u><a href="/office/wps/600127.html" target="_blank">WPS表格输入文本默认为繁体字该怎么解决?</a></li><li><u class="icon1"></u><a href="/office/powerpoint/600126.html" target="_blank">ppt怎么手绘地球仪矢量图标? ppt画地球仪的</a></li><li><u class="icon1"></u><a href="/office/excel/600079.html" target="_blank">Excel表格怎么快速圈出高于80分的成绩?</a></li><li><u class="icon1"></u><a href="/office/excel/600078.html" target="_blank">excel2016中sumsq函数怎么用 sumsq函数在ex</a></li>
                    </ul>
                </div>
            </div>
            <div class="c-2">
                <div class="box simbox">
                    <div class="hd">
                        <h5><u></u>手机软件</h5>
                        <span class="more icon"><a href="/softjc/list512_1.html" target="_blank">更多</a></span>
                    </div>
                    <div class="bd">
                        <div class="top">
                            <h2><a href="/softjc/591731.html" title="什么软件能代替迅雷下载？五款能够完美替代" target="_blank" class="red">什么软件能代替迅雷下载？五款能够完美替代</a></h2>
                        </div>
                        <ul class="art-list f14 lh28">
                            <li><u class="icon"></u><a href="/softjc/600167.html" target="_blank">微信怎么设置空白头像和昵称?iPhone手机设</a></li><li><u class="icon"></u><a href="/softjc/600097.html" target="_blank">支付宝饿了么答题赢奖活动在哪里?</a></li><li><u class="icon"></u><a href="/softjc/600090.html" target="_blank">支付宝蚂蚁森林怎么邀请微博好友合种树?</a></li><li><u class="icon"></u><a href="/softjc/600022.html" target="_blank">支付宝app怎么给好友送礼? 2018支付宝新春</a></li><li><u class="icon"></u><a href="/softjc/599952.html" target="_blank">高德地图2018年新年红包活动有哪些?</a></li><li><u class="icon"></u><a href="/softjc/599951.html" target="_blank">今日头条app怎么增加抽生肖卡的次数?</a></li><li><u class="icon"></u><a href="/softjc/599923.html" target="_blank">抖音视频红包是什么?抖音视频红包玩法规则</a></li><li><u class="icon"></u><a href="/softjc/599906.html" target="_blank">新浪微博快速拖动功能在哪？怎么开启？</a></li><li><u class="icon"></u><a href="/softjc/599857.html" target="_blank">微信跳一跳多人模式已上线 微信跳一跳多人</a></li><li><u class="icon"></u><a href="/softjc/599844.html" target="_blank">蚂蚁森林怎么浇水得福卡 蚂蚁森林每天浇水</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-auto">
            <div class="box hot">
                <div class="hd">
                    <h5><u></u>热门排行</h5>
                </div>
                <div class="tab-content bd">
                    <ul class="hot-list">
                        <li><u class="number a1">1</u><a href="/softjc/39828.html" title="怎么做网线，网线水晶头接法和线序（图文详解）" target="_blank">怎么做网线，网线水晶头接法和线序（图文详解）</a></li><li><u class="number a2">2</u><a href="/softjc/39398.html" title="fast无线路由器设置方法 FAST FW300R无线路由器设置图解" target="_blank">fast无线路由器设置方法 FAST FW300R无线路由器设置图解</a></li><li><u class="number a3">3</u><a href="/softjc/39394.html" title="TP-link 无线路由器WDS设置方法图解_无线桥接设置" target="_blank">TP-link 无线路由器WDS设置方法图解_无线桥接设置</a></li><li><u class="number a4">4</u><a href="/os/windows/Win2003/1904.html" title="Windows Server 2003 SP2 企业版 ISO附CD2  下载" target="_blank">Windows Server 2003 SP2 企业版 ISO附CD2  下载</a></li><li><u class="number a5">5</u><a href="/softjc/39395.html" title="TP-Link 无线路由器设置密码方法_设置tp link路由器的无线密码方法图解" target="_blank">TP-Link 无线路由器设置密码方法_设置tp link路由器的无线密码方法图解</a></li><li><u class="number a6">6</u><a href="/softjc/74395.html" title="google chrome浏览器怎么设置主页" target="_blank">google chrome浏览器怎么设置主页</a></li><li><u class="number a7">7</u><a href="/softjc/44889.html" title="老毛桃U盘启动盘制作工具的详细使用方法(图文教程)" target="_blank">老毛桃U盘启动盘制作工具的详细使用方法(图文教程)</a></li><li><u class="number a8">8</u><a href="/softjc/230924.html" title="如何快速破解压缩包(rar,zip,7z,tar)密码的方法" target="_blank">如何快速破解压缩包(rar,zip,7z,tar)密码的方法</a></li><li><u class="number a9">9</u><a href="/softjc/68770.html" title="在VMware虚拟机中安装中文版Win7系统详细教程 附虚拟机下载" target="_blank">在VMware虚拟机中安装中文版Win7系统详细教程 附虚拟机下载</a></li><li><u class="number a10">10</u><a href="/os/60159.html" title="如何给电脑重装系统 重装系统步骤图解" target="_blank">如何给电脑重装系统 重装系统步骤图解</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--专题列表4-->


    <!--源码tab页1-->

    <!--源码tab页1-->

    <!--网站地图导航-->
    <div id="ontools">
        <div>
            <h2><span>网站地图导航</span></h2>
            <p><a href="/list/index_96.htm" target="_blank"><strong>脚本专栏</strong></a><a href="/list/list_114_1.htm" title="vbs" target="_blank">vbscript</a><a href="/list/list_106_1.htm" target="_blank">批处理</a><a href="/list/list_97_1.htm" target="_blank">python</a><a href="/list/list_125_1.htm" target="_blank">perl</a><a href="/shouce/" target="_blank">在线手册</a><a href="/list/index_1.htm" target="_blank"><strong>网络编程</strong></a><a href="/list/list_2_1.htm" target="_blank">ASP编程</a><a href="/list/list_15_1.htm" target="_blank">PHP编程</a><a href="/list/list_21_1.htm" target="_blank">ASP.NET</a><a href="/list/list_83_1.htm" target="_blank">JSP编程</a><a href="/list/list_6_1.htm" target="_blank">正则表达式</a><a href="/list/index_84.htm" target="_blank"><strong>软件编程</strong></a><a href="/list/list_93_1.htm" target="_blank">vb</a><a href="/list/list_85_1.htm" target="_blank">C#</a><a href="/list/list_159_1.htm" target="_blank">C 语言</a><a href="/list/list_134_1.htm" target="_blank">Java编程</a><a href="/list/list_206_1.htm" target="_blank">Delphi</a><a href="/list/list_207_1.htm" target="_blank">java</a><a href="/list/list_233_1.htm" target="_blank">Android</a><a href="/codes/" target="_blank"><strong>源码下载</strong></a><a href="/codes/asp.html" target="_blank">Asp源码</a> <a href="/codes/aspnet.html" target="_blank">.net源码</a> <a href="/codes/php.html" target="_blank">PHP源码</a>  <a href="/codes/jsp.html" target="_blank">jsp源码</a> <a href="/codes/editor.html" target="_blank">网页编辑器</a><a href="/softs/" target="_blank"><strong>软件下载</strong></a><a href="/tools.htm" target="_blank">网站开发常用软件</a><a href="http://s.jb51.net" target="_blank">服务器常用软件</a><a href="/softs/list24_1.html" target="_blank">编程开发</a><a href="/softs/list64_1.html" target="_blank">网页设计</a><a href="/photoshop/" target="_blank">photoshop教程</a><a href="/Fireworks/" target="_blank">Fireworks教程</a><a href="/CorelDraw/" target="_blank">CorelDraw教程</a><a href="/media/" title="媒体动画" target="_blank">媒体动画</a><a href="/os/" target="_blank"><strong>操作系统</strong></a><a href="/os/windows/" target="_blank">Windows系列</a><a href="/os/Solaris/" target="_blank">Solaris</a><a href="/os/qilin/" target="_blank">麒麟系统</a><a href="/os/Unix/" target="_blank">Unix/BSD</a><a href="/os/Fedora/" target="_blank">Fedora</a><a href="/os/RedHat/" target="_blank">RedHat</a><a href="/os/hongqi/" target="_blank">红旗Linux</a><a href="/hardware/" target="_blank">硬件教程</a><a href="/softs/list52_1.html" target="_blank">图形图像</a><a href="/softs/list51_1.html" target="_blank">媒体工具</a><a href="/softjc/" title="软件教学" target="_blank">软件教学</a><a href="/softs/list24_1.html" target="_blank">编程工具</a><a href="/softs/list56_1.html" target="_blank">黑客相关</a><a href="/tools.htm" target="_blank">网站开发常用软件</a><a href="http://play.jb51.net" target="_blank">播放器之家</a><a href="/qudong/" target="_blank">驱动下载</a><a href="http://sc.jb51.net" target="_blank">素材之家</a><a href="/fonts/" target="_blank">字体下载</a><a href="/linux/" target="_blank">Linux常用命令全集</a><a href="http://office.jb51.net" target="_blank">office教程</a><a href="/dazi/" title="打字学习" target="_blank">打字练习</a><a href="/gonglue/" title="游戏攻略" target="_blank" class="noborder">游戏攻略</a></p>
        </div>
    </div>
    <!--网站地图导航-->


    <!--友情链接-->
    <div id="friendlinks">
        <div class="hd"><font>欢迎交换友情链接 联系QQ： 841287295</font><span></span><h2>友情链接</h2></div>
        <p>
        @foreach($links as $k=>$v)
            <a href="{{$v->link_url}}" title="{{$v->link_title}}" target="_blank">{{$v->link_name}}</a>
        @endforeach
            <a href="" target="_blank" class="noborder">更多</a>
        </p>
    </div>
    <!--友情链接-->




@endsection
