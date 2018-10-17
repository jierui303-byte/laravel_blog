<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <!--悦合同 仿站 使用bootstrap：http://www.yuehetong.com/-->
    <title>悦合同 仿站 使用bootstrap：http://www.yuehetong.com/</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="{{asset('resources/views/web/yht/dist/css/bootstrap.min.css')}}">
    <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
    <script src="{{asset('resources/views/web/yht/dist/js/jquery.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('resources/views/web/yht/css/yht.css')}}">
</head>
<body>
<!--
.col-md- : 中等屏幕, 桌面显示器,>=992px
.col-lg- : 大屏幕, 大桌面显示器 >=1200px
.col-sm- : 小屏幕, 平板 >=768px
.col-xs- : 超小屏幕, 手机 < 768px

.container-fluid宽度百分百
.container固定宽度且居中

.col-md-offset-2 列偏移2  相当于position：relative；left：2%*元素宽度；


-->


    <!--导航条开始-->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <!--logo开始-->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed navbar-menu" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand logo" href="#"><h1>悦合同</h1></a>
                <span class="hidden-xs hidden-sm ">企业第一份合同</span>
            </div>
            <!--logo结束-->
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse " id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right" id="navbar">
                    <li><a href="#">悦读</a></li>
                    <li><a href="#">悦活动</a></li>
                    <li><a href="#">智能合同</a></li>
                    <li><a href="#">写合同</a></li>
                    <li><a href="#">审合同</a></li>
                    <li><a href="#">企业顾问</a></li>
                    <li class="hidden-sm hidden-xs dl"><a href="#">登录</a></li>
                    <li class="hidden-sm hidden-xs"><a href="#">注册</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    <!--导航条结束-->


    <!--轮播图组件-->
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="{{url('resources/views/web/yht/img/001.jpg')}}" alt="...">
                <div class="carousel-caption">
                    {{--<h3>001.jpg</h3>--}}
                </div>
            </div>
            <div class="item">
                <img src="{{url('resources/views/web/yht/img/002.jpg')}}" alt="...">
                <div class="carousel-caption">
                    {{--<h3>002.jpg</h3>--}}
                </div>
            </div>
            <div class="item">
                <img src="{{url('resources/views/web/yht/img/003.jpg')}}" alt="...">
                <div class="carousel-caption">
                    {{--<h3>003.jpg</h3>--}}
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!--轮播图组件-->

    <!--search-->
    <div id="search">
        <div class="container">
            <div class="row searchhetong">
                <div class="col-xs-12 col-sm-4">合同范本：<b>2</b><b>3</b><b>9</b>份</div>
                <div class="col-xs-12 col-sm-4">生成合同：<b>2</b><b>4</b><b>4</b><b>8</b>份</div>
            </div>
            <div class="row">
                <div class="form-group">
                    <div class="input-group inputsearch">
                        <input class="form-control" type="email" placeholder="请输入您要搜索的关键字，如股权转让合同、版权授权、劳动">
                        <div class="input-group-addon">
                            <span class="glyphicon glyphicon-search"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--search-->


    <!--热门合同-->
    <div id="hot">
        <div class="container">
            <h3>热门合同</h3>
            <div class="row">
                <a href="#">股权转让协议</a>
            </div>
        </div>
    </div>
    <!--热门合同-->


    <!--热销产品-->
    <div id="hotProduct">
        <div class="container">
            <h3>热销产品</h3>
            <div class="row productlist">
                <div class="col-sm-3 col-xs-6">
                    <a href="">
                        <div class="productbg">
                            <div class="circle">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </div>
                            <p>规范， 智能<br>1秒生成合同</p>
                        </div>
                        <div class="row">
                            <h3>智能合同</h3>
                            <p>
                                <span>0元</span>起<br>
                                <span> </span>
                            </p>
                        </div>
                    </a>
                </div>

                <div class="col-sm-3 col-xs-6">
                    <a href="">
                        <div class="productbg">
                            <div class="circle">
                                <span class="glyphicon glyphicon-edit"></span>
                            </div>
                            <p>你提需求<br>我出合同</p>
                        </div>
                        <div class="row">
                            <h3>智能合同</h3>
                            <p>
                                普通会员： <span>1000</span>元／次<br>
                                金牌会员： <span>628</span>元／次
                            </p>
                        </div>
                    </a>
                </div>
                <div class="col-sm-3 col-xs-6">
                    <a href="">
                        <div class="productbg">
                            <div class="circle">
                                <span class="glyphicon glyphicon-credit-card"></span>
                            </div>
                            <p>合同陷阱<br>专业诊断</p>
                        </div>
                        <div class="row">
                            <h3>审合同</h3>
                            <p>
                                普通会员： <span>1000</span>元／次<br>
                                金牌会员： <span>628</span>元／次
                            </p>
                        </div>
                    </a>
                </div>
                <div class="col-sm-3 col-xs-6">
                    <a href="">
                        <div class="productbg">
                            <div class="circle">
                                <span class="glyphicon glyphicon-cloud-download"></span>
                            </div>
                            <p>快速专业<br>企业管家</p>
                        </div>
                        <div class="row">
                            <h3>企业顾问</h3>
                            <p>
                                <span>3万／年</span>起<br>
                                联系: gw@yuehetong.com
                            </p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!--热销产品-->


    <div class="yuehuodong">
        <!--悦活动-->
        <div class="container yuehuodongTop">
            <div class="row">
                <div class="col-sm-3 smallLunbo">
                    <!--轮播图组件-->
                    <div id="carousel-example-generic-small" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic-small" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic-small" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic-small" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img src="{{url('resources/views/web/yht/img/s1.jpg')}}" alt="...">
                            </div>
                            <div class="item">
                                <img src="{{url('resources/views/web/yht/img/s2.jpg')}}" alt="...">
                            </div>
                            <div class="item">
                                <img src="{{url('resources/views/web/yht/img/s3.jpg')}}" alt="...">
                            </div>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic-small" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic-small" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <!--轮播图组件-->
                </div>
                <div class="col-sm-3 h2s">
                    <h2>悦活动</h2>
                    <ul class="uls">
                        <li><a href="#">悦合同周末参加血液银行公益服务</a></li>
                        <li><a href="#">祝壹心理五周年生日快乐</a></li>
                        <li><a href="#">老司机带你避开公司创立的法律障碍</a></li>
                    </ul>
                </div>
                <div class="col-sm-3 h2s">
                    <h2>悦读</h2>
                    <ul class="uls">
                        <li><a href="#">网站用户协议的法律风险如何通过书写进行有效防范</a></li>
                        <li><a href="#">有限公司章程范本的法律风险如何修改达到有效防范</a></li>
                        <li><a href="#">企业起草解除协议书，给自己挖坑自己跳</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <ul class="uls">
                        <li><a href="#">书写股权转让协议有效防范法律风险</a></li>
                        <li><a href="#">推广合作协议分成结算不明，导致分毫不收</a></li>
                        <li><a href="#">看战略投资协议，识破骗局，帮创业公司挽回1万元损失</a></li>
                        <li><a href="#">又一喜讯，我们两个字帮客户购销合同减少损失80万</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!--悦活动-->

        <!--五大块 8年-->
        <div class="container fiveModel">
            <div class="row">
                <div class="col-sm-3 col-xs-6">
                    <h3>8年+</h3>
                    <p>专业律师经验</p>
                </div>
                <div class="col-sm-2 col-xs-6">
                    <h3>10万+</h3>
                    <p>司法数据支撑</p>
                </div>
                <div class="col-sm-2 col-xs-6">
                    <h3>＜1小时</h3>
                    <p>最快回复</p>
                </div>
                <div class="col-sm-2 col-xs-6">
                    <h3>7×24</h3>
                    <p>小时智能生成</p>
                </div>
                <div class="col-sm-3 col-xs-6 hidden-xs">
                    <h3>1V1</h3>
                    <p>大客户服务</p>
                </div>
            </div>
        </div>
        <!--五大块-->

    </div>





    <!--100家企业明智的选择-->
    <div class="xuanbg">
        <div class="container xuanze">
            <h3><span>100+</span>家企业明智的选择</h3>
            <div class="row">
                <div class="col-md-2 col-xs-3">
                    <img src="{{url('resources/views/web/yht/img/bosk.png')}}" alt="">
                </div>
                <div class="col-md-2 col-xs-3">
                    <img src="{{url('resources/views/web/yht/img/xinli001.png')}}" alt="">
                </div>
                <div class="col-md-2 col-xs-3">
                    <img src="{{url('resources/views/web/yht/img/wyqc.png')}}" alt="">
                </div>
                <div class="col-md-2 col-xs-3">
                    <img src="{{url('resources/views/web/yht/img/xns.png')}}" alt="">
                </div>
                <div class="col-md-2 col-xs-3">
                    <img src="{{url('resources/views/web/yht/img/rjl.png')}}" alt="">
                </div>
                <div class="col-md-2 col-xs-3">
                    <img src="{{url('resources/views/web/yht/img/byzs.png')}}" alt="">
                </div>
                <div class="col-md-2 col-xs-3">
                    <img src="{{url('resources/views/web/yht/img/ctyxfzjjh.png')}}" alt="">
                </div>
                <div class="col-md-2 col-xs-3">
                    <img src="{{url('resources/views/web/yht/img/kesuichong.jpg')}}" alt="">
                </div>
                <div class="col-md-2 col-xs-3">
                    <img src="{{url('resources/views/web/yht/img/zmr.png')}}" alt="">
                </div>
                <div class="col-md-2 col-xs-3">
                    <img src="{{url('resources/views/web/yht/img/rrck.png')}}" alt="">
                </div>
                <div class="col-md-2 col-xs-3">
                    <img src="{{url('resources/views/web/yht/img/smarter.png')}}" alt="">
                </div>
                <div class="col-md-2 col-xs-3">
                    <img src="{{url('resources/views/web/yht/img/meiyi1.png')}}" alt="">
                </div>
                <div class="col-md-2 col-xs-3">
                    <img src="{{url('resources/views/web/yht/img/bomboo.jpg')}}" alt="">
                </div>
                <div class="col-md-2 col-xs-3">
                    <img src="{{url('resources/views/web/yht/img/painimei.jpg')}}" alt="">
                </div>
                <div class="col-md-2 col-xs-3">
                    <img src="{{url('resources/views/web/yht/img/dandelo.jpg')}}" alt="">
                </div>
                <div class="col-md-2 col-xs-3">
                    <img src="{{url('resources/views/web/yht/img/ever-win.jpg')}}" alt="">
                </div>
                <div class="col-md-2 col-xs-3">
                    <img src="{{url('resources/views/web/yht/img/zway.jpg')}}" alt="">
                </div>
                <div class="col-md-2 col-xs-3">
                    <img src="{{url('resources/views/web/yht/img/yhc.png')}}" alt="">
                </div>
            </div>
        </div>
        <!--100家企业明智的选择-->
    </div>


    <!--悦合同合作方-->
    <div class="container hezuo">
        <h3>悦合同合作方</h3>
        <div class="row">
            <div class="col-md-2 col-xs-3">
                <img src="{{url('resources/views/web/yht/img/qcloud.png')}}" alt="">
            </div>
            <div class="col-md-2 col-xs-3">
                <img src="{{url('resources/views/web/yht/img/1918.png')}}" alt="">
            </div>
            <div class="col-md-2 col-xs-3">
                <img src="{{url('resources/views/web/yht/img/36kr.png')}}" alt="">
            </div>
            <div class="col-md-2 col-xs-3">
                <img src="{{url('resources/views/web/yht/img/duoyoumi.jpg')}}" alt="">
            </div>
            <div class="col-md-2 col-xs-3">
                <img src="{{url('resources/views/web/yht/img/makerstreet2.jpg')}}" alt="">
            </div>
            <div class="col-md-2 col-xs-3">
                <img src="{{url('resources/views/web/yht/img/ezhanggui.jpg')}}" alt="">
            </div>
            <div class="col-md-2 col-xs-3">
                <img src="{{url('resources/views/web/yht/img/zhizhu.jpg')}}" alt="">
            </div>
        </div>
    </div>
    <!--悦合同合作方-->


    <!--footer-->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-xs-12">
                    <div class="col-sm-4 col-md-2 col-xs-6">
                        <h3>产品</h3>
                        <ul>
                            <li><a href="#">智能合同</a></li>
                            <li><a href="#">写合同</a></li>
                            <li><a href="#">审合同</a></li>
                            <li><a href="#">企业顾问</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4 col-md-2 col-xs-6">
                        <h3>政策</h3>
                        <ul>
                            <li><a href="#">服务协议</a></li>
                            <li><a href="#">常见问题</a></li>
                            <li><a href="#">会员政策</a></li>
                            <li><a href="#">定价标准</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4 col-md-2 col-xs-6">
                        <h3>公司</h3>
                        <ul>
                            <li><a href="#">品牌故事</a></li>
                            <li><a href="#">关于我们</a></li>
                            <li><a href="#">联系我们</a></li>
                            <li><a href="#">加入我们</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4 col-md-2 col-xs-6">
                        <h3>资源</h3>
                        <ul>
                            <li><a href="#">网站地图</a></li>
                            <li><a href="#">意见反馈</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12">
                    <p>&copy; 悦合同<br>

                        www.yuehetong.com<br>

                        粤ICP备16004471号
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!--footer-->
</body>
</html>
<script src="{{asset('resources/views/web/yht/dist/js/bootstrap.min.js')}}"></script>
