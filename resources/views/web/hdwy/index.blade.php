<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>惠达卫浴</title>
    <style>
        *{margin:0;padding:0;text-decoration: none;list-style-type: none;}
        .huida{
            width:868px;
            margin:0 auto;
        }

        /*头部*/
        .huida-header{
            width:100%;
            display: table;
        }
        .huida-header>a{
            float:left;
            margin-top: 20px;
        }
        .huida-header>div{
            float:right;
        }
        .huida-header>div>ul{
            list-style-type:none;
        }
        .huida-header>div>ul>li{
            float:left;
            height:30px;
            margin:20px 10px;
            line-height: 30px;
        }
        .huida-header>div>ul>li>a{
            font-size: 14px;
        }
        .huida-header>div>ul>li>a:hover{
            color: blue;
        }


        /*nav部分*/
        .huida-nav{
            width:100%;
            height:30px;
            background:#fff url({{url('resources/views/web/hdwy/images/nav_bg.png')}}) repeat-x -389px 0;
        }
        .huida-nav>ul{
            margin-left: 6px;
        }
        .huida-nav>ul>li{
            float:left;
            margin-right:43px;
            line-height: 30px;
            width: 62px;
            height:30px;
            text-align: center;
        }
        .huida-nav>ul>li:nth-child(1){
            background:url({{url('resources/views/web/hdwy/images/li-bg.gif')}}) no-repeat;
        }
        .huida-nav>ul>li:hover{
            background:url({{('resources/views/web/hdwy/images/li-bg.gif')}}) no-repeat;
        }
        .huida-nav>ul>li>a{
            color:#fff;
            font-size: 11px;
        }


        /*banner部分*/
        .huida-banner{
            margin-top: 11px;
        }


        /*content部分*/
        .huida-main{
            width:100%;
            overflow: hidden;
            margin-top: 12px;
        }
        .huida-main .left{
            float:left;
            width:33%;
            background: #f6f6f6;
            padding:8px;
            height:156px;
            margin-right: 4px;
        }
        .huida-main .left h2, .huida-main .center h2{
            color: #6a6a6a;
            font-size: 16px;
            height:20px;
            line-height: 20px;
            padding:2px 0 5px 5px;
            border-bottom: 1px solid #666666;
        }
        .huida-main .left h2 a, .huida-main .center h2 a{
            color:#6a6a6a;
            font-size: 5px;
            float:right;
            padding:2px 0 0 5px;
        }
        .huida-main .left h2 a:hover, .huida-main .center h2 a:hover{
            color:blue;
        }
        .huida-main .left ul{
            padding-left: 8px;
            list-style-type:none;
        }
        .huida-main .left ul li{
            background: #f6f6f6 url({{('resources/views/web/hdwy/images/jt.png')}}) no-repeat 0 12px;
            padding-left: 15px;
        }
        .huida-main .left ul li a{
            font-size: 12px;
            height: 26px;
            line-height: 26px;
        }
        .huida-main .left ul li a em{
            float:right;
            line-height: 26px;
            height:26px;
            font-style: normal;
        }
        .huida-main .left ul li:hover a, .huida-main .left ul li:hover a em{
            color:blue;
        }
        .huida-main .center{
            float:left;
            width:35%;
            background: #f6f6f6;
            margin:0 12px;
            padding:8px;
            height:156px;
        }
        .huida-main .center>div{

        }
        .huida-main .center>div a{
            float:left;
            margin: 6px;
            border:1px solid #dedede;
            height:115px;
            position: relative;
        }
        .huida-main .center>div a:hover{
            border:1px solid blue;
        }
        .huida-main .center>div a p{
            text-align: center;
            padding:5px 0 6px 21px;
            position:absolute;
            top:94px;
            font-size: 11px;
        }
        .huida-main .right{
            float:right;
            width:25%;
            height: 172px;
            background: #f6f6f6;
            position: relative;
            padding:30px;
            box-sizing:border-box;
            font-size:12px;
        }
        .huida-main .right>img{
            position:absolute;
            top:13px;
            left:29px;
        }
        .huida-main .right>div:nth-of-type(1){
            position:absolute;
            top:13px;
            left:71px;
        }
        .huida-main .right>div:nth-of-type(1) h2{
            color:#1b1b1b;
            font-size: 13px;
        }
        .huida-main .right>div:nth-of-type(1) p{
            color:#e4525f;
            font-size: 13px;
            font-weight: bolder;
            margin-top: 15px;
            font-style: italic;
        }
        .huida-main .right>div:nth-of-type(2){
            position:absolute;
            top:72px;
            left:20px;
        }
        .huida-main .right>div:nth-of-type(2) input[type=button]{
            color:red;
            margin-left: 10px;
        }
        .huida-main .right>div:nth-of-type(2) a{
            float:right;
            padding-top: 5px;
        }
        .huida-main .right>div:nth-of-type(2) a:hover{
            color:blue;
        }


      	/*footer部分*/
        .huida-footer{
            height:82px;
            background:#ededed;
            padding:25px 150px;
            box-sizing:border-box;
        }
        .huida-footer p{
	    width:670px;
            font-size: 12px;
            color:#878787;
            padding-bottom: 11px;
        }
    </style>
</head>
<body>
    <div class="huida">
        <header class="huida-header">
            <a href="#">
                <h2>
                    <img src="{{url('resources/views/web/hdwy/images/logo.gif')}}" alt="">
                </h2>
            </a>
            <div>
                <ul>
                    <li><a href="#">登录</a></li>
                    <li><a href="#">注册</a></li>
                    <li><a href="#">联系我们</a></li>
                    <li><a href="#">服务热线</a></li>
                </ul>
            </div>
        </header>

        <nav class="huida-nav">
            <ul>
                <li><a href="#">首页</a></li>
                <li><a href="#">关于惠达</a></li>
                <li><a href="#">惠达新闻</a></li>
                <li><a href="#">卫浴产品</a></li>
                <li><a href="#">磁砖产品</a></li>
                <li><a href="#">技术创新</a></li>
                <li><a href="#">服务支持</a></li>
                <li><a href="#">工程案例</a></li>
            </ul>
        </nav>

        <div class="huida-banner">
            <a href="#"><img src="{{url('resources/views/web/hdwy/images/banner.gif')}}" alt=""></a>
        </div>

        <div class="huida-main">
            <div class="left">
                <h2>新闻动态<a href="#">MORE</a></h2>
                <ul>
                    <li><a href="#"><em>2010-7-14</em>唐山悲壮一幕再现荧屏</a></li>
                    <li><a href="#"><em>2010-7-14</em>惠达卫浴华南区营销工作会议顺利召开</a></li>
                    <li><a href="#"><em>2010-7-12</em>提升自我 树立民族品牌形象</a></li>
                    <li><a href="#"><em>2010-7-12</em>规范企业发展 提升企业竞争力</a></li>
                    <li><a href="#"><em>2010-7-12</em>加强服务 向国际一流企业看齐</a></li>
                </ul>
            </div>
            <div class="center">
                <h2>产品展示<a href="#">MORE</a></h2>
                <div>
                    <a href="#">
                        <img src="{{url('resources/views/web/hdwy/images/tu1.gif')}}" alt="">
                        <p>厨卫龙头</p>
                    </a>
                    <a href="#">
                        <img src="{{url('resources/views/web/hdwy/images/tu2.gif')}}" alt="">
                        <p>厨房水龙</p>
                    </a>
                    <a href="#">
                        <img src="{{url('resources/views/web/hdwy/images/tu3.gif')}}" alt="">
                        <p>浴室龙头</p>
                    </a>
                </div>
            </div>
            <div class="right">
                <img src="{{url('resources/views/web/hdwy/images/ren.gif')}}" alt="">
                <div>
                    <h2>总部电话</h2>
                    <p>020-872837294</p>
                </div>
                <div>
                    <form action="#" method="post">
                        用 户 名:  <input type="text"><br><br>
                        密&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;码: <input type="password"><br><br>
                        <input type="submit" value="登录">
                        <input type="button" value="注册">
                        <a href="#">忘记密码?</a>
                    </form>
                </div>
            </div>
        </div>

        <footer class="huida-footer">
            <p>市场部:0577-62723777 客服电话:0577-62751363 传真:0577-61788000 商务合作:0577-62727209</p>
            <p>ICP证:浙 B2- 2005 0336   Email:info@chinaswitch.com</p>
        </footer>
    </div>
</body>
</html>
