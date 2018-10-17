<!DOCTYPE html>
<!-- saved from url=(0041)http://jierui303/zhuanti/1/ -->
<html lang="zh-CN"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://v3.bootcss.com/favicon.ico">

    <title>Dashboard Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('resources/views/zhuanti/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="{{asset('resources/views/zhuanti/css/ie10-viewport-bug-workaround.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('resources/views/zhuanti/css/dashboard.css')}}" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]>
    <script src="{{asset('resources/views/zhuanti/js/ie8-responsive-file-warning.js')}}"></script>
    <![endif]-->
    <script src="{{asset('resources/views/zhuanti/js/ie-emulation-modes-warning.js')}}"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top ">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="http://jierui303/zhuanti/1/#">Web技术手册教程</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-left">
                <li><a href="http://w3cschool.jierui303.com">首页</a></li>
                <li><a href="http://w3cschool.jierui303.com/php">PHP教程</a></li>
                <li><a href="http://jierui303.com/zhuanti/1/#">Bootstrap教程</a></li>
                <li><a href="http://jierui303.com/zhuanti/1/#">Jquery教程</a></li>
                <li><a href="http://jierui303.com/zhuanti/1/#">Mysql教程</a></li>
                <li><a href="http://jierui303.com/zhuanti/1/#">Html5教程</a></li>
                <li><a href="http://jierui303.com/zhuanti/1/#">Javascript教程</a></li>
                <li><a href="http://jierui303.com">博客</a></li>
                <li><a href="http://jierui303.com/zhuanti/1/#">学习视频</a></li>
                <li><a href="http://jierui303.com/zhuanti/1/#">相册</a></li>

            </ul>
            <form class="navbar-form navbar-right">
                <input type="text" class="form-control" placeholder="Search...">
            </form>
        </div>
    </div>
</nav>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
            <ul class="nav nav-sidebar">
                <li class="active"><a href="http://w3cschool.jierui303.com">全部教程 <span class="sr-only">(current)</span></a></li>
                <li><a href="http://w3cschool.jierui303.com/htmlCss.html">HTML/CSS</a></li>
                <li><a href="http://w3cschool.jierui303.com/javascript.html">Javascript</a></li>
                <li><a href="http://w3cschool.jierui303.com/service.html">服务端</a></li>
                <li><a href="http://w3cschool.jierui303.com/database.html">数据库</a></li>
                <li><a href="http://w3cschool.jierui303.com/phone.html">移动端</a></li>
                <li><a href="http://w3cschool.jierui303.com/xml.html">XML教程</a></li>
                <li><a href="http://w3cschool.jierui303.com/asp.html">asp.net</a></li>
                <li><a href="http://w3cschool.jierui303.com/openTool.html">开发工具</a></li>
            </ul>

            <ul class="nav nav-sidebar">
                <li class="active"><a href="http://w3cschool.jierui303.com">友情链接 <span class="sr-only">(current)</span></a></li>
                <li><a href="http://w3cschool.jierui303.com/htmlCss.html">Jerry的编程之路</a></li>
                <li><a href="http://w3cschool.jierui303.com/javascript.html">深圳小一SEO博客</a></li>
                <li><a href="http://w3cschool.jierui303.com/javascript.html">菜菜小站</a></li>
            </ul>

        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">HTML/CSS</h3>
                </div>
                <div class="panel-body">
                    {{--Panel conten--}}

                    <div class="row placeholders">
                        <a href="http://w3cschool.jierui303.com/htmlCss/webService.html" class="col-xs-6 col-sm-4 placeholder">
                            <h4 style="text-align: left">学习 web service</h4>
                            <img src="//static.runoob.com/images/icon/webservices.png" width="50" height="50" class="img-responsive" alt="Generic placeholder thumbnail" style="float: left;margin: 10px 0;">
                            <span class="text-muted" style="display: block;margin: 10px 0;">Web Service 脚本平台需支持 XML + HTTP </span>
                        </a>
                        <a href="#" class="col-xs-6 col-sm-4 placeholder">
                            <h4 style="text-align: left">学习 WSDL</h4>
                            <img src="//static.runoob.com/images/icon/wsdl.png" width="50" height="50" class="img-responsive" alt="Generic placeholder thumbnail" style="float: left;margin: 10px 0;">
                            <span class="text-muted" style="display: block;margin: 10px 0;">WSDL是一门基于 XML 的语言，用于描述 Web Service 以及如何对它们进行访问</span>
                        </a>
                        <a href="#" class="col-xs-6 col-sm-4 placeholder">
                            <h4 style="text-align: left">学习 SOAP</h4>
                            <img src="//static.runoob.com/images/icon/soap.png" width="50" height="50" class="img-responsive" alt="Generic placeholder thumbnail" style="float: left;margin: 10px 0;">
                            <span class="text-muted" style="display: block;margin: 10px 0;">SOAP 是一种简单的基于 XML 的协议，它使应用程序通过 HTTP 来交换信息</span>
                        </a>
                        <a href="#" class="col-xs-6 col-sm-4 placeholder">
                            <h4 style="text-align: left">学习 RSS</h4>
                            <img src="//static.runoob.com/images/icon/rss.png" width="50" height="50" class="img-responsive" alt="Generic placeholder thumbnail" style="float: left;margin: 10px 0;">
                            <span class="text-muted" style="display: block;margin: 10px 0;">RSS基于XML标准，在互联网上被广泛采用的内容包装和投递协议</span>
                        </a>
                        <a href="#" class="col-xs-6 col-sm-4 placeholder">
                            <h4 style="text-align: left">学习 RDF</h4>
                            <img src="//static.runoob.com/images/icon/rdf.png" width="50" height="50" class="img-responsive" alt="Generic placeholder thumbnail" style="float: left;margin: 10px 0;">
                            <span class="text-muted" style="display: block;margin: 10px 0;">DF(资源描述框架)是描述网络资源的 W3C 标准</span>
                        </a>
                        <a href="#" class="col-xs-6 col-sm-4 placeholder">
                            <h4 style="text-align: left">学习 RDF</h4>
                            <img src="//static.runoob.com/images/icon/rdf.png" width="50" height="50" class="img-responsive" alt="Generic placeholder thumbnail" style="float: left;margin: 10px 0;">
                            <span class="text-muted" style="display: block;margin: 10px 0;">DF(资源描述框架)是描述网络资源的 W3C 标准</span>
                        </a>
                        <a href="#" class="col-xs-6 col-sm-4 placeholder">
                            <h4 style="text-align: left">学习 RDF</h4>
                            <img src="//static.runoob.com/images/icon/rdf.png" width="50" height="50" class="img-responsive" alt="Generic placeholder thumbnail" style="float: left;margin: 10px 0;">
                            <span class="text-muted" style="display: block;margin: 10px 0;">DF(资源描述框架)是描述网络资源的 W3C 标准</span>
                        </a>
                    </div>

                </div>
                {{--<div class="panel-footer">Panel footer</div>--}}
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Javascript</h3>
                </div>
                <div class="panel-body">
                    {{--Panel content--}}

                    <div class="row placeholders">
                        <div class="col-xs-6 col-sm-4 placeholder">
                            <h4 style="text-align: left">学习 WSDL</h4>
                            <img src="//static.runoob.com/images/icon/wsdl.png" width="50" height="50" class="img-responsive" alt="Generic placeholder thumbnail" style="float: left;margin: 10px 0;">
                            <span class="text-muted" style="display: block;margin: 10px 0;">WSDL是一门基于 XML 的语言，用于描述 Web Service 以及如何对它们进行访问</span>
                        </div>
                        <div class="col-xs-6 col-sm-4 placeholder">
                            <h4 style="text-align: left">学习 SOAP</h4>
                            <img src="//static.runoob.com/images/icon/soap.png" width="50" height="50" class="img-responsive" alt="Generic placeholder thumbnail" style="float: left;margin: 10px 0;">
                            <span class="text-muted" style="display: block;margin: 10px 0;">SOAP 是一种简单的基于 XML 的协议，它使应用程序通过 HTTP 来交换信息</span>
                        </div>
                        <div class="col-xs-6 col-sm-4 placeholder">
                            <h4 style="text-align: left">学习 RSS</h4>
                            <img src="//static.runoob.com/images/icon/rss.png" width="50" height="50" class="img-responsive" alt="Generic placeholder thumbnail" style="float: left;margin: 10px 0;">
                            <span class="text-muted" style="display: block;margin: 10px 0;">RSS基于XML标准，在互联网上被广泛采用的内容包装和投递协议</span>
                        </div>
                        <div class="col-xs-6 col-sm-4 placeholder">
                            <h4 style="text-align: left">学习 WSDL</h4>
                            <img src="//static.runoob.com/images/icon/wsdl.png" width="50" height="50" class="img-responsive" alt="Generic placeholder thumbnail" style="float: left;margin: 10px 0;">
                            <span class="text-muted" style="display: block;margin: 10px 0;">WSDL是一门基于 XML 的语言，用于描述 Web Service 以及如何对它们进行访问</span>
                        </div>
                        <div class="col-xs-6 col-sm-4 placeholder">
                            <h4 style="text-align: left">学习 SOAP</h4>
                            <img src="//static.runoob.com/images/icon/soap.png" width="50" height="50" class="img-responsive" alt="Generic placeholder thumbnail" style="float: left;margin: 10px 0;">
                            <span class="text-muted" style="display: block;margin: 10px 0;">SOAP 是一种简单的基于 XML 的协议，它使应用程序通过 HTTP 来交换信息</span>
                        </div>
                        <div class="col-xs-6 col-sm-4 placeholder">
                            <h4 style="text-align: left">学习 RSS</h4>
                            <img src="//static.runoob.com/images/icon/rss.png" width="50" height="50" class="img-responsive" alt="Generic placeholder thumbnail" style="float: left;margin: 10px 0;">
                            <span class="text-muted" style="display: block;margin: 10px 0;">RSS基于XML标准，在互联网上被广泛采用的内容包装和投递协议</span>
                        </div>
                    </div>

                </div>
                {{--<div class="panel-footer">Panel footer</div>--}}
            </div>

        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{asset('resources/views/zhuanti/js/jquery.min.js')}}"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="{{asset('resources/views/zhuanti/js/bootstrap.min.js')}}"></script>
<!-- Just to make our placeholder images work. Don't actually copy the next line! -->
<script src="{{asset('resources/views/zhuanti/js/holder.min.js')}}"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="{{asset('resources/views/zhuanti/js/ie10-viewport-bug-workaround.js')}}"></script>


<div id="cli_dialog_div"></div></body></html>