<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>王瑞杰在线简历</title>
    <link rel="stylesheet" href="{{asset('resources/views/home/aboutSources/style/animate/animate.min.css')}}">
    <script src="{{asset('resources/views/home/aboutSources/js/js/jquery-2.1.1.min.js')}}"></script>
    <style>
        *{
            padding:0;
            margin:0;
        }
        body{
            background-attachment:fixed;
        }

        /*第一屏*/
        .box{
            width: 100%;
            height: 710px;
            position: relative;
            left: 0;
            top: 0;
            z-index: 1;
            overflow: hidden;
        }
        .box .bj1, .box .bj2, .box .bj3{
            width: 100%;
            height: 100%;
            position: absolute;
            left: 0;
            top: 0;
        }
        #box1{
            background: url("{{url('resources/views/home/aboutSources/images/bg_home.jpg')}}") no-repeat center top;
        }
        #box1 .bj1{
            background: url("{{url('resources/views/home/aboutSources/images/petale.png')}}") no-repeat center top;
        }

        #box1 .bj2{
            background: url("{{url('resources/views/home/aboutSources/images/triangles.png')}}") no-repeat center top;
        }

        #box1 .txt1{
            float:right;
            width: 52%;
            color:#fff;
            position: relative;
            top: -45px;
        }
        #box1 .txt1 .txtCon p{
            line-height: 30px;
        }
        #box1 .txt1 .txtCon p:nth-of-type(2){
            text-indent: 20px;
        }
        #box1 .txt1 .txtCon p:nth-of-type(4){
            text-indent: 240px;
            padding-top: 60px;
            font-size: 23px;
        }
        #box1 .txt1 .txtCon p:nth-of-type(5){
            text-indent: 363px;
            padding-top: 10px;
            font-size: 23px;
        }



        /*第二屏*/
        #box2{
            background: url("{{url('resources/views/home/aboutSources/images/home_bg.jpg')}}") no-repeat center top;
        }
        #box2 .bj1{
            background: url("{{url('resources/views/home/aboutSources/images/home_frei.png')}}") no-repeat 50% 0;
        }

        #box2 .bj2{
            background: url("{{url('resources/views/home/aboutSources/images/triangles.png')}}") no-repeat center bottom;
        }

        #box2 .bj3{
            background: url("{{url('resources/views/home/aboutSources/images/niao.png')}}") no-repeat 399px -4px;
            background-size: 50%;
            transform: rotate(-38deg);
        }

        #box2 .txt1{
            float:left;
            width: 40%;
            color:#d7d721;
            margin-left: 20px;
            position: relative;
            top:100px;
            left:-600px;
            text-align: right;
        }
        #box2 .txt2{
            float:right;
            width: 40%;
            color:#d7d721;
            margin-right: 20px;
            /*margin-top: 200px;*/
            position: relative;
            top:300px;
        }
        #box2 .txt1 .logo1{
            padding-bottom: 30px;
        }
        #box2 .txt1 .logo1 img{
            position: relative;
            right:-78px;
        }
        #box2 .txt1 .txtCon{
            /*border-right: 4px solid #c4c4c4;*/
        }
        #box2 .txt1 .txtCon p{

            height: 30px;
            line-height: 30px;
            /*color:#A9BB3A;*/
            color:#000;
        }
        #box2 .txt2 .logo1{
            padding-bottom: 30px;
        }
        #box2 .txt2 .logo1 img{
            position: relative;
            left:-60px;
        }
        #box2 .txt2 .txtCon{
            /*border-right: 4px solid #c4c4c4;*/
        }
        #box2 .txt2 .txtCon p{

            height: 30px;
            line-height: 30px;
            /*color:#A9BB3A;*/
            color:#000;
        }


        /*作品列表*/
        #box3{
            background: url("{{url('resources/views/home/aboutSources/images/design_bg.jpg')}}") no-repeat center top;
        }
        #box3 .bj1{
            background: url("{{url('resources/views/home/aboutSources/images/niao.png')}}") no-repeat center bottom;
            background-size: 50%;
            z-index: 0;
        }
        #box3 .txt1{
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.4);
        }
        #box3 .txt1 h2{
            text-align: center;
            padding:30px 0;
            margin:30px 0;
            text-indent: -999px;
            background: url("{{url('resources/views/home/aboutSources/images/z3.png')}}") no-repeat center bottom;
        }
        #box3 .txt1 .box3Uls{
            list-style-type: none;
            width: 90%;
            margin:0 auto;
        }
        #box3 .txt1 .box3Uls li{
            float:left;
            width: 24%;
            height: 180px;
            background: olive;
            margin:0 1% 10px 0;
            overflow: hidden;
            position: relative;
        }
        #box3 .txt1 .box3Uls li:nth-of-type(4n){
            margin-right: 0;
        }
        #box3 .txt1 .box3Uls li a{
            display: block;
            width: 100%;
            height: 180px;
        }
        #box3 .txt1 .box3Uls li a img{
            display: block;
            width:100%;
            opacity: 0.9;
            transition:all 1s;
        }
        #box3 .txt1 .box3Uls li:hover a img{
            opacity: 1;
        }
        #box3 .txt1 .box3Uls li .box3UlsTitle{
            position: absolute;
            bottom:-180px;
            left:0;
            width: 100%;
            height: 100%;
            background: rgba(4, 4, 4, 0.8);
            transition:all 1s;
            text-align: center;
            color:#fff;
        }
        #box3 .txt1 .box3Uls li:hover .box3UlsTitle{
            bottom:-116px;
        }
        #box3 .txt1 .box3Uls li .box3UlsTitle p:nth-of-type(1){
            margin-top: 2px;
        }
        #box3 .txt1 .box3Uls li .box3UlsTitle p:nth-of-type(2){
            margin-top: 2px;
        }



        /*铅笔头*/
        #box4{
            background: url("{{url('resources/views/home/aboutSources/images/design_bg.jpg')}}") no-repeat center top;
        }
        #box4 .bj1{
            background: url("{{url('resources/views/home/aboutSources/images/design_sprite_frei.png')}}") no-repeat 300px bottom;
        }

        #box4 .bj2{
            background: url("{{url('resources/views/home/aboutSources/images/cj.png')}}") no-repeat center -200px;
        }

        #box4 .txt1{
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.4);
        }
        #box4 .txt1 h2{
            text-align: center;
            padding:30px 0;
            margin:30px 0;
            text-indent: -999px;
            background: url("{{url('resources/views/home/aboutSources/images/z4.png')}}") no-repeat center bottom;
        }
        #box4 .txt1 .box3Uls{
            list-style-type: none;
            width: 90%;
            margin:0 auto;
        }
        #box4 .txt1 .box3Uls li{
            float:left;
            width: 24%;
            height: 180px;
            background: olive;
            margin:0 1% 10px 0;
            overflow: hidden;
            position: relative;
        }
        #box4 .txt1 .box3Uls li:nth-of-type(4n){
            margin-right: 0;
        }
        #box4 .txt1 .box3Uls li a{
            display: block;
            width: 100%;
            height: 180px;
        }
        #box4 .txt1 .box3Uls li a img{
            display: block;
            width:100%;
            opacity: 0.9;
            transition:all 1s;
        }
        #box4 .txt1 .box3Uls li:hover a img{
            opacity: 1;
        }
        #box4 .txt1 .box3Uls li .box3UlsTitle{
            position: absolute;
            bottom:-180px;
            left:0;
            width: 100%;
            height: 100%;
            background: rgba(4, 4, 4, 0.8);
            transition:all 1s;
            text-align: center;
            color:#fff;
        }
        #box4 .txt1 .box3Uls li:hover .box3UlsTitle{
            bottom:-116px;
        }
        #box4 .txt1 .box3Uls li .box3UlsTitle p:nth-of-type(1){
            margin-top: 2px;
        }
        #box4 .txt1 .box3Uls li .box3UlsTitle p:nth-of-type(2){
            margin-top: 2px;
        }



        /*#box4 .txt1 #lunboAll{*/
        /*width:1225px;*/
        /*height:460px;*/
        /*position:relative;*/
        /*margin:0 auto;*/
        /*overflow: hidden;*/
        /*}*/

        /*#box4 .txt1 #lunboAll ul{width:600%;height:460px;list-style-type: none;position:absolute;left:0;}*/
        /*#box4 .txt1 #lunboAll ul li{float:left;}*/


        /*#box4 .txt1 #dianList{position:absolute;bottom:30px;left:600px;}*/
        /*#box4 .txt1 #dianList div{width:10px;height:10px;border-radius:50%;background:rgba(0,123,255,.6);float:left;margin:10px;}*/

        /*#box4 .txt1 .left, .right{position:absolute;width:60px;height:100px;background:rgba(0,0,0,.2);color:rgba(255,255,255,.6);line-height: 100px;text-align: center;display:none;}*/
        /*#box4 .txt1 .left{top:180px;left:0;}*/
        /*#box4 .txt1 .left:hover{color:rgba(255,255,255,.8);}*/
        /*#box4 .txt1 .right{top:180px;right:0;}*/
        /*#box4 .txt1 .right:hover{color:rgba(255,255,255,.8);}*/


        /*#box4 .txt1 .dingwei{position:absolute;left:0;top:0;width:300px;height:100%;background: rgba(45,75,123,.5);}*/



        /*灯泡*/
        #box5{
            background: #262f37 url("{{url('resources/views/home/aboutSources/images/lampe.png')}}") no-repeat -230px top;
        }
        #box5 .bj1{
            background: url("{{url('resources/views/home/aboutSources/images/pap2.png')}}") no-repeat center top;
        }
        #box5 .bj1{
            background: url("{{url('resources/views/home/aboutSources/images/pap3.png')}}") no-repeat 90px bottom;
        }

        #box5 .bj3{
            background: url("{{url('resources/views/home/aboutSources/images/pap1.png')}}") no-repeat -94px bottom;
        }

        #box5 .txt1{
            /*float:left;*/
            /*width: 100%;*/
            color:#fff;
            /*margin-left: 20px;*/
            position: relative;
            z-index: 3;
            background: rgba(39, 48, 56, 0.37);

            /*background: #e9babc;*/
            width: 50%;
            height: 100%;
            overflow: hidden;
            float: right;

        }

        #box5 .txt1 .shuXian{
            width:5px;
            height: 710px;
            background: #2d363e;
            position: absolute;
            left:100px;
        }

        .gz1{
            position: absolute;
            left:165px;
            top:150px;

        }
        .gz1 p {
            line-height: 30px;
            height: 30px;
        }
        .circle1{
            position: absolute;
            top:150px;
            left:92px;
            width:20px;
            height: 20px;
            border-radius: 50%;
            background: rgb(227, 255, 255);
        }


        .gz2{
            position: absolute;
            left:165px;
            top:180px;

        }
        .gz2 p {
            line-height: 30px;
            height: 30px;
        }
        .circle2{
            position: absolute;
            top:180px;
            left:92px;
            width:20px;
            height: 20px;
            border-radius: 50%;
            background: #4e5a64;
        }


        .gz3{
            position: absolute;
            left:165px;
            top:320px;

        }
        .gz3 p {
            line-height: 30px;
            height: 30px;
        }
        .circle3{
            position: absolute;
            top:320px;
            left:92px;
            width:20px;
            height: 20px;
            border-radius: 50%;
            background: #4e5a64;
        }


        .gz4{
            position: absolute;
            left:165px;
            top:460px;

        }
        .gz4 p {
            line-height: 30px;
            height: 30px;
        }
        .circle4{
            position: absolute;
            top:460px;
            left:92px;
            width:20px;
            height: 20px;
            border-radius: 50%;
            background: #4e5a64;
        }











        /*键盘*/
        #box6{
            background: url("{{url('resources/views/home/aboutSources/images/bg4.jpg')}}") no-repeat center top;
        }
        #box6 .bj1{
            background: url("{{url('resources/views/home/aboutSources/images/touches.png')}}") no-repeat 300px bottom;
        }

        #box6 .bj2{
            background: url("{{url('resources/views/home/aboutSources/images/touches2.png')}}") no-repeat center bottom;
        }

        #box6 .txt1{
            float:left;
            width: 50%;
            color:#fff;
            margin-left: 20px;
            position: relative;
            z-index: 3;
        }
        #box6 .txt1 .logo1{
            width:100px;
            height: 100px;
            overflow: hidden;
            border-radius: 50%;
        }
        #box6 .txt1 .logo1 img{
            width: 100%;
        }
        #box6 .txt1 .txtCon{

        }

        #box6 .txt1 .txtCon h3{
            width:440px;
            margin-top: 200px;
            margin-bottom: 30px;
            padding-bottom: 5px;
            border-bottom: 1px solid #F98A53;
            font-size: 30px;
        }
        #box6 .txt1 .txtCon p{
            line-height: 30px;
            height: 30px;
        }
        #box6 .txt1 .txtCon p:last-of-type{
            text-indent:218px;
        }
        #box6 .txt1 .txtCon p:last-of-type a{
            display: block;
            text-decoration: none;
            color: #c5664d;
            font-weight: 900;
            padding-top: 20px;
        }




        /*第七屏*/
        #box7{
            background: url("{{url('resources/views/home/aboutSources/images/bg.jpg')}}") no-repeat center top;
        }
        #box7 .bj1{
            background: url("{{url('resources/views/home/aboutSources/images/bg_design1.png')}}") no-repeat 300px bottom;
        }

        #box7 .bj2{
            background: url("{{url('resources/views/home/aboutSources/images/bg_design2.png')}}") no-repeat center bottom;
        }

        #box7 .txt1{
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            background: rgba(0,0,0,0.4);
        }
        #box7 .txt1 h2{
            text-align: center;
            padding:30px 0;
            margin:30px 0;
            height: 100px;
            text-indent: -999px;
            background: url("{{url('resources/views/home/aboutSources/images/z5.png')}}") no-repeat center bottom;
            z-index: 5;
            background-size: 50%;
        }

        #box7 .imgs{
            width:90%;
            height: 100%;
            /*background: red;*/
            margin:0 auto;
        }
        #box7 .imgs h4 {
            color:#fff;
            font-size: 30px;
            text-align: center;
            padding:100px 0 40px 0;
        }
        #box7 .imgs a{
            display: block;
            width:319px;
            height: 323px;
            overflow: hidden;
            margin:0 auto;
        }
        #box7 .imgs .left{
            float:left;
            /*background: olive;*/
            width:50%;
            height: 100%;
        }
        #box7 .imgs .right{
            float:right;
            /*background: orange;*/
            width:50%;
            height: 100%;
        }


        /*header*/
        .header{
            position: fixed;
            top:0;
            left:0;
            width:100%;
            height: 65px;
            margin-top: 5px;
            z-index: 2000;
        }
        .header .nav{
            width:956px;
            margin:0 auto;
        }
        .header .nav #logo{
            float:left;
        }
        .header .nav .ulList{
            float:left;
        }
        .header .nav #link{
            float:left;
        }


        .header .nav .ulList #bjList{
            list-style-type: none;
        }

        .header .nav .ulList #bjList li{
            float:left;
            width:110px;
            height: 34px;
            overflow: hidden;
            position: relative;
        }

        .header .nav .ulList #bjList li .bjcor1,
        .header .nav .ulList #bjList li .bjcor2,
        .header .nav .ulList #bjList li .bjcor3,
        .header .nav .ulList #bjList li .bjcor4,
        .header .nav .ulList #bjList li .bjcor5,
        .header .nav .ulList #bjList li .bjcor6,
        .header .nav .ulList #bjList li .bjcor7
        {
            position:absolute;
            /*left:0;*/
            /*top:0;*/
            width: 110px;
            height: 34px;
            overflow: hidden;
            top: 34px;
            left: 10px;
            transition:all 1s;
        }
        .header .nav .ulList #bjList li:hover .bjcor1,
        .header .nav .ulList #bjList li:hover .bjcor2,
        .header .nav .ulList #bjList li:hover .bjcor3,
        .header .nav .ulList #bjList li:hover .bjcor4,
        .header .nav .ulList #bjList li:hover .bjcor5,
        .header .nav .ulList #bjList li:hover .bjcor6,
        .header .nav .ulList #bjList li:hover .bjcor7
        {
            left:0;
            top:0;
        }

        .header .nav .ulList #bjList li .bjcor1
        {
            top:0;
            left:0;
        }

        .header .nav .ulList #bjList li div img {
            width: 110px;
            height: 34px;
        }
        .header .nav .ulList #bjList li a{
            position: absolute;
            left: 10px;
            top: 0;
            width: 100px;
            height: 34px;
            color: #fff;
            line-height: 34px;
            background: url({{url('resources/views/home/aboutSources/img/Bar_agence.png')}}) no-repeat left 31px;
            text-align: center;
            text-decoration: none;
        }
        .header .nav .ulList #bjList li:nth-of-type(2) a{
            position: absolute;
            left: 10px;
            top: 0;
            width: 100px;
            height: 34px;
            color: #fff;
            line-height: 34px;
            background: url({{url('resources/views/home/aboutSources/img/Bar_strategie.png')}}) no-repeat left 31px;
            text-align: center;
            text-decoration: none;
        }
        .header .nav .ulList #bjList li:nth-of-type(3) a{
            position: absolute;
            left: 10px;
            top: 0;
            width: 100px;
            height: 34px;
            color: #fff;
            line-height: 34px;
            background: url({{url('resources/views/home/aboutSources/img/Bar_design.png')}}) no-repeat left 31px;
            text-align: center;
            text-decoration: none;
        }
        .header .nav .ulList #bjList li:nth-of-type(4) a{
            position: absolute;
            left: 10px;
            top: 0;
            width: 100px;
            height: 34px;
            color: #fff;
            line-height: 34px;
            background: url({{url('resources/views/home/aboutSources/img/Bar_techno.png')}}) no-repeat left 31px;
            text-align: center;
            text-decoration: none;
        }
        .header .nav .ulList #bjList li:nth-of-type(5) a{
            position: absolute;
            left: 10px;
            top: 0;
            width: 100px;
            height: 34px;
            color: #fff;
            line-height: 34px;
            background: url({{url('resources/views/home/aboutSources/img/Bar_reference.png')}}) no-repeat left 31px;
            text-align: center;
            text-decoration: none;
        }
        .header .nav .ulList #bjList li:nth-of-type(6) a{
            position: absolute;
            left: 10px;
            top: 0;
            width: 100px;
            height: 34px;
            color: #fff;
            line-height: 34px;
            background: url({{url('resources/views/home/aboutSources/img/Bar_contact.png')}}) no-repeat left 31px;
            text-align: center;
            text-decoration: none;
        }
    </style>
</head>
<body>

<div class="header">
    <div class="nav clear">
        <h3 id="logo"></h3>
        <div class="ulList clear">
            <ul id="bjList">
                <li class="active">
                    <div class="bjcor1"><img src="{{url('resources/views/home/aboutSources/img/agence.png')}}" class="bjCor" style="top: 0; left: 0;"></div>
                    <a href="#box1" class="cor1">首 页</a>
                </li>
                <li>
                    <div class="bjcor2"><img src="{{url('resources/views/home/aboutSources/img/strategie.png')}}" class="bjCor" style="top: 34px; left: 10px;"></div>
                    <a href="#box2" class="cor2">我的技能</a>
                </li>
                <li>
                    <div class="bjcor3"><img src="{{url('resources/views/home/aboutSources/img/design.png')}}" class="bjCor" style="top: 34px; left: 10px;"></div>
                    <a href="#box3" class="cor3">个人作品</a>
                </li>
                <li>
                    <div class="bjcor5"><img src="{{url('resources/views/home/aboutSources/img/techno.png')}}" class="bjCor" style="top: 2130px; left: 10px;"></div>
                    <a href="#box5" class="cor4">学习历程</a>
                </li>
                <li>
                    <div class="bjcor6"><img src="{{url('resources/views/home/aboutSources/img/reference.png')}}" class="bjCor" style="top: 2840px; left: 10px;"></div>
                    <a href="#box6" class="cor5">个人简介</a>
                </li>
                <li>
                    <div class="bjcor7"><img src="{{url('resources/views/home/aboutSources/img/contact.png')}}" class="bjCor" style="top: 3550px; left: 10px;"></div>
                    <a href="#box7" class="cor6">混合APP</a>
                </li>
                <li>
                    <div class="bjcor4"><img src="{{url('resources/views/home/aboutSources/img/techno.png')}}" class="bjCor" style="top: 2130px; left: 10px;"></div>
                    <a href="http://www.jierui303.com" target="_blank" class="cor4">个人博客</a>
                </li>
            </ul>
        </div>
        <!--<div id="link">-->
        <!--<a href="https://www.facebook.com/agence.Kalixo" target="_blank" class="facebook"><img src="img/btn_facebook.png')}}"></a>-->
        <!--<a href="https://twitter.com/agencekalixo" target="_blank" class="twitter"><img src="img/btn_twitter.png')}}"></a>-->
        <!--</div>-->
    </div>
</div>


<!--第一屏 个人引导 紫罗兰花 开始-->
<div class="box" id="box1">
    <div class="bj1 bj" style="top: -52px;"></div>
    <div class="bj2 bj" style="top: -52px;"></div>
    <div class="rightbox">
        <div class="leftIcon">
            <!--<img src="{{url('resources/views/home/aboutSources/img/Arrow.png')}}" class="before">-->
            <!--<img src="{{url('resources/views/home/aboutSources/img/Arrow_vert.png')}}" class="after">-->
        </div>
        <div class="infoShow">
            <!--<h1 style="color: red;position:relative; top:100px;">我在滚动</h1>-->
        </div>
    </div>
    <div class="txt1">
        <div class="logo1">
            <img src="{{url('resources/views/home/aboutSources/img/logo1.png')}}">
        </div>
        <div class="txtCon" style="left: 0px; display: block;">
            <p>一个人的性格决定他的机遇。如果你喜欢保持你的性格，那么，你就无权拒绝你的机遇。</p>
            <br>
            <p>——罗曼.罗兰.</p>
            <br>
            <br>
            <br>
            <p>——So, &nbsp;坚持不懈 + 刻苦专研 = 走的更远&nbsp;&nbsp;&nbsp;敬我那颗爱好编程的心...</p>
            <p>——王瑞杰 Web前端开发工程师</p>
            <p>PHP开发工程师</p>

        </div>
    </div>
</div>
<!--第一屏 个人引导 紫罗兰花 结束-->



<!--第二屏 前端技术 千纸鹤 开始-->
<div class="box" id="box2">
    <div class="bj1 bj" style="top: 0;"></div>
    <div class="bj2 bj" style="top: 0;"></div>
    <div class="bj3 bj" style="top: 0;"></div>
    <div class="rightbox">
        <div class="leftIcon">
            <!--<img src="{{url('resources/views/home/aboutSources/img/Arrow.png')}}" class="before">-->
            <!--<img src="{{url('resources/views/home/aboutSources/img/Arrow_vert.png')}}" class="after">-->
        </div>
        <div class="infoShow">
            <!--<h1 style="color: red;position:relative; top:100px;">我在滚动</h1>-->
        </div>
    </div>
    <div class="txt1 erp">
        <div class="logo1">
            <img src="{{url('resources/views/home/aboutSources/img/z.png')}}">
        </div>
        <div class="txtCon" style="left: 0px; display: block;">
            <p>基础：HTML5,&nbsp;CSS3,&nbsp;Javascript</p>
            <p>框架：jQuery,&nbsp;jQuery UI,&nbsp;jQueryMobile,&nbsp;Bootstrap,</p>
            <p>css预处理器：Less,&nbsp;Sass</p>
            <p>mvc框架：Angular,&nbsp;Express</p>
            <p>APP开发：Ionic,&nbsp;H5+</p>
            <p>服务器端：Node,&nbsp;</p>
            <p>模版引擎：EJS,&nbsp;Jade</p>
            <br>
        </div>
    </div>
    <div class="txt2">
        <div class="logo1">
            <img src="{{url('resources/views/home/aboutSources/img/z1.png')}}">
        </div>
        <div class="txtCon" style="left: 0px; display: block;">
            <p>基础：PHP,&nbsp;</p>
            <p>数据库：MySQL,&nbsp;Mongodb,&nbsp;Redis</p>
            <p>框架：ThinkPHP,&nbsp;Laravel,&nbsp;</p>
            <p>mvc框架：Smarty,&nbsp;</p>
            <p>服务器端：LNMP,&nbsp;LAMP</p>
            <p>版本控制：SVN,&nbsp;GIT</p>
            <br>
        </div>
    </div>
</div>
<!--第二屏 前端技术 千纸鹤 结束-->

<!--第三屏 后端技术 作品列表 开始-->
<div class="box" id="box3">
    <div class="bj1 bj" style="top: 0;"></div>
    <div class="bj2 bj" style="top: 0;"></div>
    <div class="rightbox">
        <div class="leftIcon">
            <!--<img src="{{url('resources/views/home/aboutSources/img/Arrow.png')}}" class="before">-->
            <!--<img src="{{url('resources/views/home/aboutSources/img/Arrow_vert.png')}}" class="after">-->
        </div>
        <div class="infoShow">
            <!--<h1 style="color: red;position:relative; top:100px;">我在滚动</h1>-->
        </div>
    </div>
    <div class="txt1">
        <h2>我的作品</h2>
        <ul class="box3Uls">
            <li>
                <a href="{{url('/bcwl')}}" target="_blank"><img src="{{url('resources/views/home/aboutSources/images/bcwl.png')}}" alt=""></a>
                <div class="box3UlsTitle">
                    <p>仿博彩网络</p>
                    <p>CSS3&nbsp;+&nbsp;HTML5</p>
                </div>
            </li>
            <li>
                <a href="{{url('/gwyc')}}" target="_blank"><img src="{{url('resources/views/home/aboutSources/images/gwyc.png')}}" alt=""></a>
                <div class="box3UlsTitle">
                    <p>仿港湾有巢</p>
                    <p>CSS3&nbsp;+&nbsp;HTML5</p>
                </div>
            </li>
            <li>
                <a href="{{url('/hdwy')}}" target="_blank"><img src="{{url('resources/views/home/aboutSources/images/hdwy.png')}}" alt=""></a>
                <div class="box3UlsTitle">
                    <p>仿惠达卫浴</p>
                    <p>CSS3&nbsp;+&nbsp;HTML5</p>
                </div>
            </li>
            <li>
                <a href="{{url('/qt')}}" target="_blank"><img src="{{url('resources/views/home/aboutSources/images/qt.png')}}" alt=""></a>
                <div class="box3UlsTitle">
                    <p>psd切图制作</p>
                    <p>CSS3&nbsp;+&nbsp;HTML5</p>
                </div>
            </li>
            <li>
                <a href="{{url('/hytz')}}" target="_blank"><img src="{{url('resources/views/home/aboutSources/images/hytz.png')}}" alt=""></a>
                <div class="box3UlsTitle">
                    <p>仿火盈投资</p>
                    <p>CSS3&nbsp;+&nbsp;HTML5</p>
                </div>
            </li>
            <li>
                <a href="{{url('/xmgw')}}" target="_blank"><img src="{{url('resources/views/home/aboutSources/images/xmgw.png')}}" alt=""></a>
                <div class="box3UlsTitle">
                    <p>仿小米官网</p>
                    <p>CSS3&nbsp;+&nbsp;HTML5</p>
                </div>
            </li>
            <li>
                <a href="{{url('/yht')}}" target="_blank"><img src="{{url('resources/views/home/aboutSources/images/yht.png')}}" alt=""></a>
                <div class="box3UlsTitle">
                    <p>仿悦合同</p>
                    <p>CSS3&nbsp;+&nbsp;HTML5</p>
                </div>
            </li>
            <li>
                <a href="{{url('/allx')}}" target="_blank"><img src="{{url('resources/views/home/aboutSources/images/allx.gif')}}" alt=""></a>
                <div class="box3UlsTitle">
                    <p>仿阿里旅行手机版</p>
                    <p>CSS3&nbsp;+&nbsp;HTML5</p>
                </div>
            </li>
            <li>
                <a href="{{url('/mtb')}}" target="_blank"><img src="{{url('resources/views/home/aboutSources/images/mtb.png')}}" alt=""></a>
                <div class="box3UlsTitle">
                    <p>仿淘宝手机版</p>
                    <p>CSS3&nbsp;+&nbsp;HTML5</p>
                </div>
            </li>
            <li>
                <a href="{{url('/mtbxq')}}" target="_blank"><img src="{{url('resources/views/home/aboutSources/images/mtbxq.png')}}" alt=""></a>
                <div class="box3UlsTitle">
                    <p>仿淘宝商品详情</p>
                    <p>CSS3&nbsp;+&nbsp;HTML5</p>
                </div>
            </li>
            <li>
                <a href="{{url('/mtbcart')}}" target="_blank"><img src="{{url('resources/views/home/aboutSources/images/mtbcart.png')}}" alt=""></a>
                <div class="box3UlsTitle">
                    <p>仿淘宝购物车</p>
                    <p>CSS3&nbsp;+&nbsp;HTML5</p>
                </div>
            </li>
            <li>
                <a href="{{url('/mtbuser')}}" target="_blank"><img src="{{url('resources/views/home/aboutSources/images/mtbuser.png')}}" alt=""></a>
                <div class="box3UlsTitle">
                    <p>仿淘宝个人中心</p>
                    <p>CSS3&nbsp;+&nbsp;HTML5</p>
                </div>
            </li>
        </ul>
    </div>

</div>
<!--第三屏 后端技术 作品列表 结束-->


<!--第四屏 其他作品 铅笔头 开始-->
<div class="box" id="box4">
    <div class="bj1 bj" style="top: 0;"></div>
    <!--<div class="bj2 bj" style="top: 0;"></div>-->
    <div class="rightbox">
        <div class="leftIcon">
            <!--<img src="./aboutSources/img/Arrow.png" class="before">-->
            <!--<img src="./aboutSources/img/Arrow_vert.png" class="after">-->
        </div>
        <div class="infoShow">
            <!--<h1 style="color: red;position:relative; top:100px;">我在滚动</h1>-->
        </div>
    </div>
    <div class="txt1">
        <!--<h2>其他作品</h2>-->
        <ul class="box3Uls">
            <li>
                <a href="http://node.jierui303.com" target="_blank"><img src="{{url('resources/views/home/aboutSources/images/czl.png')}}" alt=""></a>
                <div class="box3UlsTitle">
                    <p>node+express搭建博客</p>
                    <p>Bootstrap&nbsp;+&nbsp;SASS+&nbsp;Jquery</p>
                </div>
            </li>
            {{--<li>--}}
                {{--<a href="#" target="_blank"><img src="{{url('resources/views/home/aboutSources/images/qt.png')}}" alt=""></a>--}}
                {{--<div class="box3UlsTitle">--}}
                    {{--<p>仿百度音乐播放器</p>--}}
                    {{--<p>CSS3&nbsp;+&nbsp;HTML5</p>--}}
                {{--</div>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<a href="#" target="_blank"><img src="{{url('resources/views/home/aboutSources/images/qt.png')}}" alt=""></a>--}}
                {{--<div class="box3UlsTitle">--}}
                    {{--<p>自制视频播放器</p>--}}
                    {{--<p>CSS3&nbsp;+&nbsp;HTML5</p>--}}
                {{--</div>--}}
            {{--</li>--}}
        </ul>

        <!--做轮播图展示-->
        <!--<div id="lunboAll">-->
        <!--<ul id="ulLabel">-->
        <!--<li><a href="#"><img src="{{url('resources/views/home/aboutSources/images/lun1.jpg')}}" alt=""></a></li>-->
        <!--<li><a href="#"><img src="{{url('resources/views/home/aboutSources/images/lun2.jpg')}}" alt=""></a></li>-->
        <!--<li><a href="#"><img src="{{url('resources/views/home/aboutSources/images/lun3.jpg')}}" alt=""></a></li>-->
        <!--<li><a href="#"><img src="{{url('resources/views/home/aboutSources/images/lun4.jpg')}}" alt=""></a></li>-->
        <!--<li><a href="#"><img src="{{url('resources/views/home/aboutSources/images/lun6.jpg')}}" alt=""></a></li>-->
        <!--</ul>-->
        <!--<div id="dianList">-->
        <!--<div></div>-->
        <!--<div></div>-->
        <!--<div></div>-->
        <!--<div></div>-->
        <!--<div></div>-->
        <!--</div>-->
        <!--<div class="left">上一张</div>-->
        <!--<div class="right">下一张</div>-->
        <!--&lt;!&ndash;<div class="dingwei">&ndash;&gt;-->
        <!--&lt;!&ndash;<h3>shhhhhh</h3>&ndash;&gt;-->
        <!--&lt;!&ndash;<h3>shhhhhh</h3>&ndash;&gt;-->
        <!--&lt;!&ndash;<h3>shhhhhh</h3>&ndash;&gt;-->
        <!--&lt;!&ndash;<h3>shhhhhh</h3>&ndash;&gt;-->
        <!--&lt;!&ndash;<h3>shhhhhh</h3>&ndash;&gt;-->
        <!--&lt;!&ndash;</div>&ndash;&gt;-->
        <!--</div>-->
    </div>
</div>
<!--第四屏 其他作品 铅笔头 结束-->


<!--第五屏 工作历程 铅笔头 开始-->
<div class="box" id="box5">
    <div class="bj1 bj" style="top: 0;"></div>
    <div class="bj2 bj" style="top: 0;"></div>
    <div class="bj3 bj" style="top: 0;"></div>
    <!--<div class="rightbox">-->
    <!--<div class="leftIcon">-->
    <!--&lt;!&ndash;<img src="{{url('resources/views/home/aboutSources/img/Arrow.png')}}" class="before">&ndash;&gt;-->
    <!--&lt;!&ndash;<img src="{{url('resources/views/home/aboutSources/img/Arrow_vert.png')}}" class="after">&ndash;&gt;-->
    <!--</div>-->
    <!--<div class="infoShow">-->
    <!--&lt;!&ndash;<h1 style="color: red;position:relative; top:100px;">我在滚动</h1>&ndash;&gt;-->
    <!--</div>-->
    <!--</div>-->
    <div class="txt1">
        <div class="shuXian"></div>
        <div class="circle1"></div>
        <div class="gz1">
            <p>2015/10/ -- 至今</p>
            <p>就职： 北京互动阳光科技有限公司</p>
            <p>职位： PHP前端开发工程师</p>
        </div>
        {{--<div class="circle2"></div>--}}
        {{--<div class="gz2">--}}
            {{--<p>2015/05/04 -- 至今</p>--}}
            {{--<p>就职： 北京互动阳光科技有限公司</p>--}}
            {{--<p>职位： PHP开发工程师</p>--}}
        {{--</div>--}}
        <div class="circle3"></div>
        <div class="gz3">
            <p>2015/03 -- 2015/10</p>
            <p>培训： 北京兄弟连IT教育培训机构</p>
            <p>课程： PHP/WEB前端开发</p>
        </div>
        <div class="circle4"></div>
        <div class="gz4">
            <p>2009/06/06 -- 2012/06/06</p>
            <p>学校： 郑州电子信息技术学院</p>
            <p>专业： 电子商务网站开发【专科】</p>
            <p>课程： 计算机基础，C语言，网页设计，Access数据库，Dreamweaver8, Photoshop, Office办公软件</p>
        </div>
    </div>
</div>
<!--第五屏 工作历程 铅笔头 结束-->


<!--第六屏 联系方式 铅笔头 开始-->
<style>
    .sImg{
        animation:sxRun 1s infinite;
        -webkit-animation:sxRun 1s infinite; /* Safari 和 Chrome */
    }
    @keyframes sxRun {
        0%{
            top:20px;
            left:235px;
        }
        60%{
            top:20px;
            left:235px;
        }
        100%{
            top:40px;
            left:239px;
        }
    }
</style>
<div class="box" id="box6">
    <div class="bj1 bj" style="top: 0;"></div>
    <div class="bj2 bj" style="top: 0;"></div>
    <div class="rightbox">
        <div class="leftIcon">
            <!--<img src="{{url('resources/views/home/aboutSources/img/Arrow.png')}}" class="before">-->
            <!--<img src="{{url('resources/views/home/aboutSources/img/Arrow_vert.png')}}" class="after">-->
        </div>
        <div class="infoShow">
            <!--<h1 style="color: red;position:relative; top:100px;">我在滚动</h1>-->
        </div>
    </div>
    <div class="txt1">
        <!--<div class="logo1">-->
        <!--<img src="{{url('resources/views/home/aboutSources/images/m.jpg')}}">-->
        <!--</div>-->
        <div class="txtCon" style="left: 0px; display: block;">
            <h3>个人信息/Personal Information</h3>
            <p><span>姓名：</span>王瑞杰</p>
            <p><span>电话：</span>13523419148</p>
            <p><span>QQ：</span> 841287295</p>
            <p><span>邮箱：</span> jierui303@163.com</p>
            <p><span>地址：</span> 北京市昌平区天通苑半截塔村</p>
            <p>如果您对我感兴趣的话，可以下载我的个人简历哦！</p>
            <p><a href="http://www.500d.me/resume/jierui303/">下载简历</a></p>
            <div><img src="{{url('resources/views/home/aboutSources/img/s.png')}}" alt="" class="sImg" style="width:30px;position: relative;left:235px;top:20px;"></div>
        </div>
    </div>
</div>
<!--第六屏 联系方式 铅笔头 结束-->


<div class="box" id="box7">
    <div class="bj1 bj" style="top: 0;"></div>
    <div class="bj2 bj" style="top: 0;"></div>
    <div class="rightbox">
        <div class="leftIcon">
            <!--<img src="{{url('resources/views/home/aboutSources/img/Arrow.png')}}" class="before">-->
            <!--<img src="{{url('resources/views/home/aboutSources/img/Arrow_vert.png')}}" class="after">-->
        </div>
        <div class="infoShow">
            <!--<h1 style="color: red;position:relative; top:100px;">我在滚动</h1>-->
        </div>
    </div>
    <div class="txt1">
        <div class="imgs">
            <div class="left">
                <h4>测试: Android应用</h4>
                <a href=""><img src="{{url('resources/views/home/aboutSources/images/code.jpeg')}}" alt=""></a>
            </div>
            <div class="right">
                <h4>测试: ios应用</h4>
                <a href=""><img src="{{url('resources/views/home/aboutSources/images/code.jpeg')}}" alt=""></a>
            </div>
        </div>

    </div>
</div>






<!--右侧边栏联系我QQ 开始-->
<style>
    .contact{
        position: fixed;
        top:50%;
        right: 0;
        z-index: 999;
    }
</style>
<div class="contact">
    <style>
        *{margin:0;padding:0;list-style-type:none;}
        a,img{border:0;}
        /* side */
        .side{position:fixed;width:54px;height:275px;right:0;top:214px;z-index:100;}
        .side ul li{width:54px;height:54px;float:left;position:relative;border-bottom:1px solid #444;}
        .side ul li .sidebox{position:absolute;width:54px;height:54px;top:0;right:0;transition:all 0.3s;background:#000;opacity:0.8;filter:Alpha(opacity=80);color:#fff;font:14px/54px "微软雅黑";overflow:hidden;}
        .side ul li .sidetop{width:54px;height:54px;line-height:54px;display:inline-block;background:#000;opacity:0.8;filter:Alpha(opacity=80);transition:all 0.3s;}
        .side ul li .sidetop:hover{background:#ae1c1c;opacity:1;filter:Alpha(opacity=100);}
        .side ul li img{float:left;}
        .wxCode{
            position: absolute;
            top:-112px;
            right:-320px;
            transition: all 1s;
        }
    </style>
    <!-- 代码部分begin -->
    <div class="side">
        <ul>
            <li><a href="http://www.jierui303.com" target="_blank"><div class="sidebox"><img src="http://demo.lanrenzhijia.com/2014/service1108/side_icon01.png">个人博客</div></a></li>
            <li><a href="#box3"><div class="sidebox"><img src="http://demo.lanrenzhijia.com/2014/service1108/side_icon02.png">个人作品</div></a></li>
            <li class="wxbox"><a href="javascript:;"><div class="sidebox"><img src="{{url('resources/views/home/aboutSources/img/wx.png')}}" style="width:56px;">微信扫扫</div></a></li>
            <li><a href="http://wpa.qq.com/msgrd?v=3&uin=841287295&site=qq&menu=yes" ><div class="sidebox"><img src="http://demo.lanrenzhijia.com/2014/service1108/side_icon04.png">QQ客服</div></a></li>
            <!--<li><a href="javascript:void(0);" ><div class="sidebox"><img src="http://demo.lanrenzhijia.com/2014/service1108/side_icon03.png')}}">个人博客</div></a></li>-->
            <li style="border:none;"><a href="javascript:goTop();" class="sidetop"><img src="http://demo.lanrenzhijia.com/2014/service1108/side_icon05.png"></a></li>
        </ul>
    </div>
    <a href="#" class="wxCode"><img src="{{url('resources/views/home/aboutSources/images/code.jpeg')}}" alt=""></a>

    <script src="http://www.lanrenzhijia.com/ajaxjs/jquery.min.js"></script>
    <script>
        $(function(){
            $(".side ul li").hover(function(){
                $(this).find(".sidebox").stop().animate({"width":"124px"},200).css({"opacity":"1","filter":"Alpha(opacity=100)","background":"#ae1c1c"})
            },function(){
                $(this).find(".sidebox").stop().animate({"width":"54px"},200).css({"opacity":"0.8","filter":"Alpha(opacity=80)","background":"#000"})
            });

            $('.wxbox').hover(function(){
                $('.wxCode').css({
                    'right':'120px'
                });
            }, function(){
                $('.wxCode').css({
                    'right':'-320px'
                });
            });
        });
        //回到顶部函数
        function goTop(){
            $('html,body').animate({'scrollTop':0},300);
        }
    </script>
    <!-- 代码部分end -->

</div>
<!--右侧边栏联系我QQ 结束-->





<!--底部侧边栏 发送简历到您的邮箱 开始-->
<style>
    .sendMail{
        position: fixed;
        bottom:-200px;
        /*bottom:0;*/
        left:0;
        /*transition: all 1s;*/
        z-index: 1;
        width:100%;
        height: 200px;
        background: rgba(0, 0, 0, 0.96);
        color:#fff;
    }
    h1{
        width:1209px;
        height: 30px;
        padding:20px 0 0 0;
        text-align: center;
    }
    .sendMailBtnImg{
        background: url("{{url('resources/views/home/aboutSources/img/info.png')}}") no-repeat 0 0;
        width:120px;
        height: 100px;
        position:absolute;
        top:-60px;
        left:44%;
        z-index: 2;
    }
    .sendMailBottom{
        width:1209px;
        height: 100px;
        margin: 25px auto;
        box-sizing: border-box;
    }
    .sendMailLeft{
        float:left;
        width:30%;
        height: 100%;
        border-right: 5px solid #FFFF00;
        padding-top: 44px;
        padding-left: 60px;
        box-sizing: border-box;
    }
    .sendMailCenter{
        float:left;
        width:30%;
        height: 100%;
        padding-left: 60px;
        padding-top: 10px;
        border-right: 5px solid #FFFF00;
        box-sizing: border-box;
    }
    .sendMailRight{
        float:right;
        width:40%;
        height: 100%;
        padding-top: 10px;
        padding-left: 44px;
        box-sizing: border-box;
    }

    p{
        height:30px;
        line-height: 30px;
    }

    .emailInput{
        height: 25px;
        width:152px;
        margin-left: 5px;
    }
    .sendBtn{
        width:100px;
        height: 30px;
        line-height: 30px;
        background: #9aa458;
        color:#fff;
        text-align: center;
        border-radius: 10px;
        display: inline-block;
        margin-right: 10px;
        /*margin-left: 108px;*/
    }
    .sendBtn+span{
        color:red;
    }
    .a{
        background: url("{{url('resources/views/home/aboutSources/img/info.png')}}") no-repeat 0 0;
        width:120px;
        height: 100px;
        position:absolute;
        top:-60px;
        left:44%;
        z-index: 2;
    }

</style>
<link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<div class="a"></div>

<div class="sendMail">
    <h1>个人信息/Personal Information</h1>
    <div class="sendMailBtnImg"></div>
    <div class="sendMailBottom">
        <div class="sendMailLeft">
            <p>地址: 北京市昌平区天通苑 半截塔村</p>
        </div>
        <div class="sendMailCenter">
            <p>姓名： 王瑞杰</p>
            <p>电话： 13523419148</p>
            <p>邮箱： jierui303@163.com</p>
        </div>
        <div class="sendMailRight">
            <p>简历接收邮箱: <input type="email" class="emailInput" name="email" placeholder="xx@xx.163.com"></p>
            <div style="padding-top:20px;">
                <div class="sendBtn">下载简历</div><span></span>
                <div class="sendBtn">发送简历</div><span>发送成功!</span>
            </div>
            <!--<div style="padding-top:20px;"><div class="sendBtn">发送邮件</div><span>发送成功!</span></p>-->
        </div>
    </div>
</div>
<script>
    $(function(){
//            var isTop = false;
//            $('.sendMailBtnImg').click(function(){
//                if(isTop){
//                    $('.sendMail').css({
//                        'bottom':'-200px'
//                    });
//                    isTop = false;
//                }else{
//                    $('.sendMail').addClass('animated bounce').css({
//                        'bottom':'0'
//                    });
//                    isTop = true;
//                }
//            });


        var isTop = false;
        $('.sendMailBtnImg').click(function(){

            if(isTop){
                $(".sendMail").animate({
                    bottom: "-200px"
                }, 1000 );
                isTop = false;
            }else{
                $(".sendMail").animate({
                    bottom: "0"
                }, 1000 );
                isTop = true;
            }

        });



        //点击发送邮件 按钮
        $('.sendBtn').click(function(){
            window.location.href="ll.html";
        });

    });
</script>
<!--底部侧边栏 发送简历到您的邮箱 结束-->





<!--左侧边栏音乐播放器 开始-->
<style>
    footer{
        /*width:10%;*/
        position:fixed;
        top:50%;
        left:-290px;
        z-index:1;
        /*background: #353c46;*/
        color:#fff;
        transition:all 1s;
    }
    footer ul{list-style-type: none;width: 290px;}
    footer ul li{float:left;width:100%;height: 65px;background: #353c46;}
    footer ul li:first-child{width:100%;}
    footer ul li:first-child a:first-child{display:block;float:left;margin:20px 10px 20px 30%;width:24px;height:24px;background: url("//mu9.bdstatic.com/player/t/i/UzdOx54D.png") no-repeat -96px -1092px;}
    footer ul li:first-child a:nth-child(2){display:block;float:left;margin:10px 0;width:46px;height:46px;background: url("//mu9.bdstatic.com/player/t/i/UzdOx54D.png") no-repeat -336px -1044px;}
    footer ul li:first-child a:last-child{display:block;float:left;margin:20px 10px;width:24px;height:24px;background: url("//mu9.bdstatic.com/player/t/i/UzdOx54D.png") no-repeat -24px -1080px;}


    footer ul li:nth-child(2){width:100%;position: relative;}
    footer ul li:nth-child(2) .musicTitle{
        /*width:587px;*/
        padding-left: 14px;
        height:50px;background: transparent;}
    footer ul li:nth-child(2) .musicTitle>a:first-of-type{
        /*width:420px;*/
        height:50px;line-height: 50px;background: transparent;color:#fff;text-decoration: none;float: left;}
    footer ul li:nth-child(2) .musicTitle ul{
        /*width:167px;*/
        height:50px;float: right;background: transparent}
    footer ul li:nth-child(2) .musicTitle ul li{display:none;width:30px;height:50px;float:left;margin-right:5px;background: transparent}
    footer ul li:nth-child(2) .musicTitle ul li a{display:block;margin-top:10px;width:23px;height:23px;}
    footer ul li:nth-child(2) .musicTitle ul li:first-child a{background:url("//mu9.bdstatic.com/player/t/i/UzdOx54D.png") -324px -1092px no-repeat;}
    footer ul li:nth-child(2) .musicTitle ul li:nth-child(2) a{background:url("//mu9.bdstatic.com/player/t/i/UzdOx54D.png") -408px -1128px no-repeat;}
    footer ul li:nth-child(2) .musicTitle ul li:nth-child(3) a{background:url("//mu9.bdstatic.com/player/t/i/UzdOx54D.png") -432px -1140px no-repeat;}
    footer ul li:nth-child(2) .musicTitle ul li:last-child a{background:url("//mu9.bdstatic.com/player/t/i/UzdOx54D.png") -84px -972px no-repeat;border:none;margin:10px 0 0 0;}

    footer ul li:nth-child(2) .progress{width:80%;padding-left:14px;height:10px;background: #353c46;cursor:pointer;}
    footer ul li:nth-child(2) .progress .progressBg{width:100%;height:3px;position:relative;background: #747779;top:4px;left:0;}

    footer ul li:nth-child(2) .progress .progressBg .progressDo{width:0;height:3px;background: #72adf9;}
    footer ul li:nth-child(2) .progress .progressBg .progressBall{width:8px;height:8px;border-radius: 50%;background: #92c6f9;position: absolute;top:-2px;left:0;}
    footer ul li:nth-child(2) .playTime{
        /*width:108px;*/
        position:absolute;right:10px;bottom:-21px;height:30px;line-height: 30px;background: transparent;}
    footer ul li:nth-child(2) .playTime span{display:inline-block;background: transparent;font-size: 10px;text-align: center;}

    footer ul li:nth-child(3){width:100%;}
    footer ul li:nth-child(3) .playMode{float:left;display: inline-block;width:24px;height: 24px;background: transparent;margin:25px 15px;}
    footer ul li:nth-child(3) a:first-child{background: url("//mu9.bdstatic.com/player/t/i/UzdOx54D.png") no-repeat -120px -1092px;}
    footer ul li:nth-child(3) a:nth-child(2){background: url("//mu9.bdstatic.com/player/t/i/UzdOx54D.png") no-repeat -444px -1116px;}
    footer ul li:nth-child(3) .musicVoice{}
    footer ul li:nth-child(3) .musicVoice{float:left;width:150px;height:10px;position:relative;top:31px;background: #353c46;cursor:pointer;}
    footer ul li:nth-child(3) .musicVoice .musicVoiceBg{width:100%;height:3px;position:relative;top:4px;background: #747779;}
    footer ul li:nth-child(3) .musicVoice .musicVoiceDo{width:0;height:3px;background: #72adf9;}
    footer ul li:nth-child(3) .musicVoice .musicVoiceBall{width:8px;height:8px;border-radius: 50%;background: #92c6f9;position: absolute;top:-2px;left:0;}


    footer ul li:last-child{width:100%;}
    footer ul li:last-child a{display:block;float:right;width:100px;height:30px;margin:16px;font-size: 14px;line-height: 30px;text-align: center;background: transparent;color:#fff;text-decoration: none;}
    footer ul li:last-child a:hover{background: #92c6f9;}

    .doing{background: url("//mu9.bdstatic.com/player/t/i/UzdOx54D.png')}}") no-repeat -420px -228px;}

    /*.asideCenter .tabMusicLis .tabMusicLi1 .musicList li div{background: red;}*/
    .asideCenter .tabMusicLis .tabMusicLi1 .musicList .ui-reelList-active{
        width:16px;height: 50px;float:left;
        /*background: orange;*/
        display: none;
    }
    .asideCenter .tabMusicLis .tabMusicLi1 .musicList .ui-reelList-active .listening-icon {
        float: left;
        display: block;
        height: 50px;
        width: 15px;
        margin-right: 8px;
        background: url(//mu9.bdstatic.com/player/t/i/e5L45fcu.gif) no-repeat center center;
    }

    .asideCenter .tabMusicLis .tabMusicLi1 .musicList .ui-reelList-active .similar-icon {
        display: inline-block;
        width: 17px;
        height: 12px;
        margin-right: 5px;
        background: url(//mu8.bdstatic.com/player/t/i/fuVWlYCr.png) no-repeat;
        background-position: -420px -60px;
    }
    /*音乐播放中显示动态gif图片*/
    .asideCenter .tabMusicLis .tabMusicLi1 .musicList .ui-reelList-active .listening-icon-dt {
        background: url(//mu9.bdstatic.com/player/t/i/qd3ODGuq.gif) no-repeat center center;
    }
    .mu{
        background:rgba(53, 60, 70, 0.51) url("{{url('resources/views/home/aboutSources/img/mu.png')}}") no-repeat center center;
        background-size: 135px;
    }
</style>
<aside class="asidePublic asideCenter" style="display: none;">
    <h3>我喜欢的单曲</h3>
    <ul class="tabMusic">
        <li><a href="#">歌曲</a></li>
        <li><a href="#">歌手</a></li>
        <li><a href="#">专辑</a></li>
    </ul>
    <div class="tabMusicLis">
        <div class="tabMusicLi1">
            <ul class="musicList">
                <li>
                    <div>
                        <div class="ui-reelList-active">
                            <span class="listening-icon"></span>
                            <span class="similar-icon"></span>
                        </div>
                        <a href="#" data-url="{{url('resources/views/home/aboutSources/media/金玉良缘.mp3')}}">金玉良缘O</a>
                    </div>
                </li>
                <li>
                    <div>
                        <div class="ui-reelList-active">
                            <span class="listening-icon"></span>
                            <span class="similar-icon"></span>
                        </div>
                        <a href="#" data-url="{{url('resources/views/home/aboutSources/media/感动天感动地.mp3')}}">感动天感动地</a>
                    </div>
                </li>
                <li>
                    <div>
                        <div class="ui-reelList-active">
                            <span class="listening-icon"></span>
                            <span class="similar-icon"></span>
                        </div>
                        <a href="#" data-url="{{url('resources/views/home/aboutSources/media/天下的姐妹.mp3')}}">天下的姐妹</a>
                    </div>
                </li>
                <li>
                    <div>
                        <div class="ui-reelList-active">
                            <span class="listening-icon"></span>
                            <span class="similar-icon"></span>
                        </div>
                        <a href="#" data-url="{{url('resources/views/home/aboutSources/media/又见山里红.mp3')}}">又见山里红</a>
                    </div>
                </li>
                <li>
                    <div>
                        <div class="ui-reelList-active">
                            <span class="listening-icon"></span>
                            <span class="similar-icon"></span>
                        </div>
                        <a href="#" data-url="{{url('resources/views/home/aboutSources/media/与声音跳舞.mp3')}}">与声音跳舞</a>
                    </div>
                </li>
                <li>
                    <div>
                        <div class="ui-reelList-active">
                            <span class="listening-icon"></span>
                            <span class="similar-icon"></span>
                        </div>
                        <a href="#" data-url="{{url('resources/views/home/aboutSources/media/爱情专属权.mp3')}}">爱情专属权</a>
                    </div>
                </li>
                <li>
                    <div>
                        <div class="ui-reelList-active">
                            <span class="listening-icon"></span>
                            <span class="similar-icon"></span>
                        </div>
                        <a href="#" data-url="{{url('resources/views/home/aboutSources/media/爱你发了疯.mp3')}}">爱你发了疯</a>
                    </div>
                </li>
                <li>
                    <div>
                        <div class="ui-reelList-active">
                            <span class="listening-icon"></span>
                            <span class="similar-icon"></span>
                        </div>
                        <a href="#" data-url="{{url('resources/views/home/aboutSources/media/情话.mp3')}}">情话</a>
                    </div>
                </li>
                <li>
                    <div>
                        <div class="ui-reelList-active">
                            <span class="listening-icon"></span>
                            <span class="similar-icon"></span>
                        </div>
                        <a href="#" data-url="{{url('resources/views/home/aboutSources/media/江南Style.mp3')}}">江南Style</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</aside>
<footer>
    <div class="mu" style="width:100px;height: 100px;border-radius:0 50px 50px 0;float:right;">

    </div>
    <ul style="float:left;">
        <li>
            <!--上一首-->
            <a href="javascript:0;" class="MPlay-prev" data-url=""></a>
            <!--开关-->
            <a href="javascript:0;" class="MPlay"  data-url=""></a>
            <!--下一首-->
            <a href="javascript:0;" class="MPlay-next"  data-url=""></a>
        </li>
        <li>
            <!--进度条-->
            <div class="musicTitle">
                <a href="javascript:0;" class="musicTitleStr">天下的姐妹 - 徐千雅, 凤凰传奇</a>
                <ul>
                    <li><a href="#"></a></li>
                    <li><a href="#"></a></li>
                    <li><a href="#"></a></li>
                    <li><a href="#"></a></li>
                </ul>
            </div>
            <!--播放时间-->
            <div class="progress">
                <div class="progressBg">
                    <div class="progressDo"></div>
                    <div class="progressBall"></div>
                </div>
            </div>
            <div class="playTime">
                <span>00:33</span> / <span>03:43</span>
            </div>
            <!--下载播放-->
        </li>
        <li>
            <!--播放方式: 随机/按序..-->
            <a href="javascript:0;" class="playMode playType" title="顺序"></a>
            <!--音量控制-->
            <a href="javascript:0;" class="playMode musicVoiceBtn"></a>
            <div class="musicVoice">
                <div class="musicVoiceBg">
                    <div class="musicVoiceDo"></div>
                    <div class="musicVoiceBall"></div>
                </div>
            </div>
        </li>
        <!--<li>-->
        <!--<a href="#">选择音质</a>-->
        <!--<a href="#">随心听</a>-->
        <!--</li>-->
    </ul>
</footer>

<!--左侧边栏音乐播放器 结束-->



</body>
</html>
<script>
    $(function() {
        $(window).scroll(function(){
            var scrolled = $(this).scrollTop();
            console.log(scrolled);
//            $('.bj1').css('top',(0-(scrolled*.75))+'px');
//            $('.bj2').css('top',(0-(scrolled*.25))+'px');
//            $('.rightbox').css('top',(0-(scrolled*.15))+'px');

            //滚动距离依次递增， 710*0-710*1 第一屏   0减小 1增大
            //超出710*1--710*2时， 1减小 2增大
            //超出710*2--710*3时， 2减小 3增大
            // 递减同理


            //逻辑猜想:
            /*一屏710px  一个当行高度为34px;
             则求出34px占710px的比例, 从而求出增加的距离
             34*a = 710*走动的距离
             100/710 = 34*100/710
             * */




            var boxTop1 = $('#box1').offset().top;
            var boxTop2 = $('#box2').offset().top;
            var boxTop3 = $('#box3').offset().top;
            var boxTop4 = $('#box4').offset().top;
            var boxTop5 = $('#box5').offset().top;
            var boxTop6 = $('#box6').offset().top;
            var boxTop7 = $('#box7').offset().top;



            var top = 34*(scrolled/710);
            var left = 10*(scrolled/710);
            console.log('==============='+top+'======'+left);






            //第一屏
            //获取第一屏距离顶部的距离
            if(scrolled >= boxTop1 && scrolled <= boxTop2){
                console.log($('.bjcor1').css({'top':'0', 'left':'0'}).parent('li').siblings('li').find('div'));
                $('.bjcor1').css({'top':'0', 'left':'0'}).parent('li').siblings('li').find('div').css({'top':'34px', 'left':'10px'});
                $('#box1 .bj1').css('top',(0-(scrolled*.75))+'px');
                $('#box1 .bj2').css('top',(0-(scrolled*.25))+'px');
                $('#box1 .rightbox').css('top',(0-(scrolled*.15))+'px');
            }

            //第二屏
            //获取第三屏距离顶部的距离
            if(scrolled >= boxTop2 && scrolled <= boxTop3){
                scrolled -= boxTop2;
                $('.bjcor2').css({'top':'0', 'left':'0'}).parent('li').siblings('li').find('div').css({'top':'34px', 'left':'10px'});
                //给第二屏中的元素动态添加动画
                $('.erp').animate({left:0}, 1000);

                $('#box2 .bj1').css('top',(0-(scrolled*.75))+'px');
                $('#box2 .bj2').css('top',(0-(scrolled*.25))+'px');
                $('#box2 .bj3').css('top',(0-(scrolled*.25))+'px');
                $('#box2 .rightbox').css('top',(0-(scrolled*.15))+'px');
            }



            //第三屏
            if(scrolled >= boxTop3 && scrolled <= boxTop4){
                scrolled -= boxTop3;
                $('.bjcor3').css({'top':'0', 'left':'0'}).parent('li').siblings('li').find('div').css({'top':'34px', 'left':'10px'});
                $('#box3 .bj1').css('top',(0-(scrolled*.75))+'px');
                $('#box3 .bj2').css('top',(0-(scrolled*.25))+'px');
                $('#box3 .rightbox').css('top',(0-(scrolled*.15))+'px');
            }


            //第四屏
            if(scrolled >= boxTop4 && scrolled <= boxTop5){
                scrolled -= boxTop4;
                $('.bjcor3').css({'top':'0', 'left':'0'}).parent('li').siblings('li').find('div').css({'top':'34px', 'left':'10px'});
                //获取当前元素距离顶部的距离
                $('#box4 .bj1').css('top',(0-(scrolled*.75))+'px');
                $('#box4 .bj2').css('top',(0-(scrolled*.25))+'px');
                $('#box4 .rightbox').css('top',(0-(scrolled*.15))+'px');
            }


            //第五屏
            if(scrolled >= boxTop5 && scrolled <= boxTop6){
                scrolled -= boxTop5;
                $('.bjcor5').css({'top':'0', 'left':'0'}).parent('li').siblings('li').find('div').css({'top':'34px', 'left':'10px'});
                //获取当前元素距离顶部的距离
                $('#box5 .bj1').css('top',(0-(scrolled*.75))+'px');
                $('#box5 .bj2').css('top',(0-(scrolled*.25))+'px');
                $('#box5 .rightbox').css('top',(0-(scrolled*.15))+'px');
            }




            //第六屏
            if(scrolled >= boxTop6 && scrolled <= boxTop7){
                scrolled -= boxTop6;
                $('.bjcor6').css({'top':'0', 'left':'0'}).parent('li').siblings('li').find('div').css({'top':'34px', 'left':'10px'});
                //获取当前元素距离顶部的距离
                $('#box6 .bj1').css('top',(0-(scrolled*.75))+'px');
                $('#box6 .bj2').css('top',(0-(scrolled*.25))+'px');
                $('#box6 .rightbox').css('top',(0-(scrolled*.15))+'px');
            }


            //第七屏
            if(scrolled >= boxTop7 ){
                scrolled -= boxTop7;
                $('.bjcor7').css({'top':'0', 'left':'0'}).parent('li').siblings('li').find('div').css({'top':'34px', 'left':'10px'});
                //获取当前元素距离顶部的距离
                $('#box7 .bj1').css('top',(0-(scrolled*.75))+'px');
                $('#box7 .bj2').css('top',(0-(scrolled*.25))+'px');
                $('#box7 .rightbox').css('top',(0-(scrolled*.15))+'px');
            }


        });

        $('.rightbox').css({
            'position':'absolute',
            'top':'100px',
            'right':'10px'
        });



    });
</script>

<script>
    //初始化设定一个轮播索引值
    var num = 0;
    var ulWidth = 1225;//轮播图片的宽度
    var imgNum = $('#ulLabel li').length-1;//轮播图片的总数量

    //封装一个自动往下一张走的函数
    function autoPlay(){
        if(num > imgNum){
            num = 0;
        }
        $('#ulLabel').animate({left: -num * ulWidth+'px'}, 1000);
        //把轮播图片对应的小点颜色改变
        $('#dianList div').eq(num).css('background', 'rgba(0,0,0,.5)').siblings().css('background', 'rgba(0,123,255,.6)');
        console.log(num+'自动轮播');
        num++;
    }

    //第一步: 自动走轮播
    var timer = setInterval(autoPlay, 2000);//调用自动下一张函数

    //第二步: 点击小点切换
    $('#dianList div').click(function(){
        //获取点击的是第几个图片
        num = $(this).index();//把点击选中的图片索引值赋给全局轮播num变量
        $('#ulLabel').animate({left: -num * ulWidth+'px'}, 1000);
        //把轮播图片对应的小点颜色改变
        $('#dianList div').eq(num).css('background', 'rgba(0,0,0,.5)').siblings().css('background', 'rgba(0,123,255,.6)');
        console.log(num+'小点切换');//点击0,
//        num++;
    });

    //第三步: 点击上一步
    $('.left').click(function(){
        num--;
        if(num < 0){
            num = imgNum;
            console.log(imgNum);
        }
        console.log(num+'上一步索引');
//        $('#ulLabel').css('left', -num * ulWidth+'px');
        $('#ulLabel').animate({left: -num * ulWidth+'px'}, 1000);
        //把轮播图片对应的小点颜色改变
        $('#dianList div').eq(num).css('background', 'rgba(0,0,0,.5)').siblings().css('background', 'rgba(0,123,255,.6)');
    });

    //第四步: 点击下一步
    $('.right').click(function(){
        num++;
        if(num > imgNum){
            num = 0;
        }
        console.log(num+'下一步索引');
        $('#ulLabel').animate({left: -num * ulWidth+'px'}, 1000);
        //把轮播图片对应的小点颜色改变
        $('#dianList div').eq(num).css('background', 'rgba(0,0,0,.5)').siblings().css('background', 'rgba(0,123,255,.6)');
    });
    //        $('.right').click(autoPlay);


    //第五步: 当鼠标移到轮播图时, 停止自动轮播
    $('#lunboAll').mouseover(function(){
        clearInterval(timer);//停止定时器
        console.log(num+'关闭轮播索引');

        //把上一张, 下一张显示出来
        $('.left').css('display', 'block');
        $('.right').css('display', 'block');
    });

    //第六步: 当鼠标移出轮播图时, 继续自动轮播
    $('#lunboAll').mouseout(function(){
        timer = setInterval(function(){
            num++;

            if(num > imgNum){
                num = 0;
            }
            $('#ulLabel').animate({left: -num * ulWidth+'px'}, 1000);
            $('#dianList div').eq(num).css('background', 'rgba(0,0,0,.5)').siblings().css('background', 'rgba(0,123,255,.6)');

            console.log(num+'重启轮播索引');
        }, 2000);

        //把上一张, 下一张隐藏
        $('.left').css('display', 'none');
        $('.right').css('display', 'none');
    });
    //    $('#lunboAll').mouseout(function(){
    //        timer = setInterval(autoPlay, 2000);
    //
    //        //把上一张, 下一张隐藏
    //        $('.left').css('display', 'none');
    //        $('.right').css('display', 'none');
    //    });


</script>
<!--<script>-->
<!--//这里的for循环可以看做是一个函数执行体-->
<!--for( var a=0;a<=10;a++){-->
<!--//在for循环这个花括号内部, 执行之前先进行变量声明a=0,//此时a的值是undefined-->
<!--//然后再进行函数定义声明, function a(){},-->
<!--//变量a = function(){} , 此时a的数值类型变为函数类型-->
<!--//然后执行代码,打印a变量值时, 是函数体-->
<!--function a(){-->
<!--console.log(a);-->
<!--}-->

<!--document.write(a);-->
<!--}-->

<!--//函数体内部区域叫做局部有效区域, 也就是在函数体内部声明的变量只在局部区域有效-->
<!--//函数体内部区域就是1239行&#45;&#45;1249行-->

<!--//函数体外部的区域就是全局区域,全局区域可以指向window对象-->
<!--console.log(window);-->

<!--//全局环境中, 没有定义a变量,且a也没值-->
<!--alert(a);// NAN 代表此时的a不是一个nulber类型的类型-->
<!--//所以调用a()函数时, a函数不存在-->
<!--a();-->
<!--</script>-->


<script>
    $(function(){
        var musicList = []; //存歌曲列表的
        var musicNum = 0; //记录当前播放的第几首歌曲
        var audio = null;
        var timer = null;
        var voiceNum = 0.3;//音量值  0-1之间
        var playMusicType = 0;//定义歌曲播放模式  0: 顺序播放   1:随机播放

        var MPlay = $('.MPlay'); //播放/暂停
        var MPlayPrev = $('.MPlay-prev'); //上一首
        var MPlayNext = $('.MPlay-next'); //下一首
        var musicTitleStr = $('.musicTitleStr'); //歌名元素
        var playTime = $('.playTime'); //歌曲播放时间元素
        var progressDo = $('.progressDo'); //歌曲进度条
        var progress = $('.progress'); //歌曲进度的外层div
        var musicVoice = $('.musicVoice'); //歌曲音量进度条的外层div
        var musicVoiceDo = $('.musicVoiceDo'); //歌曲音量进度条
        var musicVoiceBtn = $('.musicVoiceBtn'); //音量图标元素
        var playType = $('.playType'); //音量播放模式按钮  分为随机播放/按顺序播放两种


        //获取所有的音乐列表
        function getMusicList(){
            //循环获取
            $('.tabMusicLi1 .musicList li').each(function(){
//            if($(this).find('div:eq(0) input').prop('checked')){
                var a = $(this).find('div:eq(0) a').data('url');
//                musicList.push(a);
                musicList.push({'obj': new Audio(a), 'url':a});//把所有音频的对象组成数组
//            }
            });
            console.log(musicList);

            //初始化
            MPlay.attr('url', musicList[musicNum].url);//把列表第一首绑定给播放按钮
            MPlayNext.attr('url', musicList[musicNum+1].url);//把下一首个给下一个按钮
            musicTitleStr.html(musicList[musicNum].url.split('/')[musicList[musicNum].url.split('/').length-1]);//初始化第一首歌名
            console.log(musicList[musicNum].url.split('/').length);

            //初始化音量进度条  //x/progressDo.width = currentTime/duration;
            musicVoiceDo.css('width', voiceNum*musicVoiceDo.parent('.musicVoiceBg').width()+'px');
            musicVoiceDo.next().css('left', voiceNum*musicVoiceDo.parent('.musicVoiceBg').width()+'px');


            console.log('初始化完毕');
//            /*
             //播放第一首歌
             audio = musicList[musicNum].obj;
             audio.play();
             MPlay.css({'background': 'url("//mu9.bdstatic.com/player/t/i/UzdOx54D.png") no-repeat -420px -228px'});
             //获取第一首歌曲播放进度
             timer = setInterval(function(){
             console.log(musicList[musicNum].obj.currentTime + '=='+ getSecondToTime(musicList[musicNum].obj.duration));
             playTime.find('span:eq(0)').html(getSecondToTime(musicList[musicNum].obj.currentTime));
             playTime.find('span:eq(1)').html(getSecondToTime(musicList[musicNum].obj.duration));

             //计算百分比
             var bf = musicList[musicNum].obj.currentTime/musicList[musicNum].obj.duration;
             console.log(bf+'=='+progressDo.parent('.progress').width());
             //同时更改音乐播放进度条  //x/progressDo.width = currentTime/duration;
             progressDo.css('width', bf*progressDo.parent('.progressBg').width()+'px');
             progressDo.next().css('left', bf*progressDo.parent('.progressBg').width()+'px');

             //第一首播放结束,自动播放第二首  需要判断播放模式
             if(audio.currentTime == audio.duration){
             if(playMusicType == 0){
             //判断播放模式, 如果是顺序播放, 走此
             musicNum += 1;
             }else if(playMusicType == 1){
             //随机播放之前把 上一首歌曲的正在播放图标给隐藏
             $('.tabMusicLi1 .musicList li:eq('+musicNum+')').find('.ui-reelList-active').hide().find('.listening-icon').css('background', 'url(//mu9.bdstatic.com/player/t/i/e5L45fcu.gif) no-repeat center center');//隐藏上首给播放图标
             //如果是随机播放模式, 就随机出下一首歌的编号开始播放
             musicNum = Math.floor(Math.random()*musicList.length);
             }
             //当播放进度和总时长相等时,代表播放完毕
             //                    musicNum += 1;
             audio = musicList[musicNum].obj;//播放下一首
             audio.play();//歌曲播放

             //此时也切换歌名及歌曲信息
             $('.musicTitleStr').html(musicList[musicNum].url.split('/')[musicList[musicNum].url.split('/').length-1]);

             //同时改变歌曲的播放进度及总时长
             timer = setInterval(function(){
             console.log(musicList[musicNum].obj.currentTime + '=='+ getSecondToTime(musicList[musicNum].obj.duration));
             playTime.find('span:eq(0)').html(getSecondToTime(musicList[musicNum].obj.currentTime));
             playTime.find('span:eq(1)').html(getSecondToTime(musicList[musicNum].obj.duration));

             //计算百分比
             var bf = musicList[musicNum].obj.currentTime/musicList[musicNum].obj.duration;
             console.log(bf+'=='+progressDo.parent('.progress').width());
             //同时更改音乐播放进度条  //x/progressDo.width = currentTime/duration;
             progressDo.css('width', bf*progressDo.parent('.progressBg').width()+'px');
             progressDo.next().css('left', bf*progressDo.parent('.progressBg').width()+'px');

             },1000);
             }

             //监控当前播放的歌曲序号, 在网页列表相对应歌曲前面添加一个正在播放的图标
             $('.tabMusicLi1 .musicList li:eq('+(musicNum-1)+')').find('.ui-reelList-active').hide().find('.listening-icon').css('background', 'url(//mu9.bdstatic.com/player/t/i/e5L45fcu.gif) no-repeat center center');//隐藏上首给播放图标
             $('.tabMusicLi1 .musicList li:eq('+musicNum+')').find('.ui-reelList-active').show().find('.listening-icon').css('background', 'url(//mu9.bdstatic.com/player/t/i/qd3ODGuq.gif) no-repeat center center');//显示当前歌曲播放图标
             console.log('sssssss');

             },1000);

//             */


        }


        //初始化获取音乐列表
        getMusicList();
        console.log(audio);

//    var audio = new Audio('./aboutSources/media/金玉良缘.mp3');
//        var audio = new Audio(musicList[1]);


        //歌曲播放, 暂停
        MPlay.click(function(){
            var currentMusicUrl = $(this).attr('url');//获取当前需播放的音乐
            console.log(currentMusicUrl);
            if(musicList.length){
                audio = musicList[musicNum].obj;//默认播放第一首
            }

            //从选中的歌曲中播放
            if(audio.paused){
                audio.play();//歌曲播放
                $(this).css({'background': 'url("//mu9.bdstatic.com/player/t/i/UzdOx54D.png") no-repeat -420px -228px'});
            }else{
                audio.pause();//歌曲暂停
                $(this).css({'background': 'url("//mu9.bdstatic.com/player/t/i/UzdOx54D.png") no-repeat -336px -1044px'});
                $('.tabMusicLi1 .musicList li:eq('+musicNum+')').find('.ui-reelList-active').hide().find('.listening-icon').css('background', 'url(//mu9.bdstatic.com/player/t/i/e5L45fcu.gif) no-repeat center center');
            }

            //开始定时获取音乐播放的时间, 当音乐播放完毕时,切换下一首
            timer = setInterval(function(){
                if(audio.currentTime == audio.duration){
                    musicNum += 1;
                    //当播放进度和总时长相等时,代表播放完毕
                    if(musicNum <= 0){
                        musicNum = musicList.length-1;
                    }
                    audio = musicList[musicNum].obj;//播放下一首
                    audio.play();//歌曲播放

                    //此时也切换歌名及歌曲信息
                    $('.musicTitleStr').html(musicList[musicNum].url.split('/')[musicList[musicNum].url.split('/').length-1]);

                    //同时改变歌曲的播放进度及总时长
                    timer = setInterval(function(){
                        console.log(musicList[musicNum].obj.currentTime + '=='+ getSecondToTime(musicList[musicNum].obj.duration));
                        playTime.find('span:eq(0)').html(getSecondToTime(musicList[musicNum].obj.currentTime));
                        playTime.find('span:eq(1)').html(getSecondToTime(musicList[musicNum].obj.duration));

                        //计算百分比
                        var bf = musicList[musicNum].obj.currentTime/musicList[musicNum].obj.duration;
                        console.log(bf+'=='+progressDo.parent('.progress').width());
                        //同时更改音乐播放进度条  //x/progressDo.width = currentTime/duration;
                        progressDo.css('width', bf*progressDo.parent('.progressBg').width()+'px');
                        progressDo.next().css('left', bf*progressDo.parent('.progressBg').width()+'px');

                    },1000);


                }
            }, 1000);
        });



        //注意: 当手动点击歌曲时, 需取消自动放歌的定时器

        //歌曲切换-上一首
        MPlayPrev.click(function(){
            clearInterval(timer);

            //判断当前是否有歌曲在播放
            if(audio.paused){
                audio.play();//歌曲播放
                MPlay.css({'background': 'url("//mu9.bdstatic.com/player/t/i/UzdOx54D.png") no-repeat -420px -228px'});
            }else{
                audio.pause();//上首歌曲暂停
                MPlay.css({'background': 'url("//mu9.bdstatic.com/player/t/i/UzdOx54D.png") no-repeat -336px -1044px'});
                musicNum -= 1;
                if(musicNum <= 0){
                    musicNum = musicList.length-1;
                }
                audio = musicList[musicNum].obj;//播放下一首
                audio.play();//歌曲播放
                MPlay.css({'background': 'url("//mu9.bdstatic.com/player/t/i/UzdOx54D.png") no-repeat -420px -228px'});

                //此时也切换歌名及歌曲信息
                $('.musicTitleStr').html(musicList[musicNum].url.split('/')[musicList[musicNum].url.split('/').length-1]);

                //同时改变歌曲的播放进度及总时长
                timer = setInterval(function(){
                    console.log(musicList[musicNum].obj.currentTime + '=='+ getSecondToTime(musicList[musicNum].obj.duration));
                    playTime.find('span:eq(0)').html(getSecondToTime(musicList[musicNum].obj.currentTime));
                    playTime.find('span:eq(1)').html(getSecondToTime(musicList[musicNum].obj.duration));

                    //计算百分比
                    var bf = musicList[musicNum].obj.currentTime/musicList[musicNum].obj.duration;
                    console.log(bf+'=='+progressDo.parent('.progress').width());
                    //同时更改音乐播放进度条  //x/progressDo.width = currentTime/duration;
                    progressDo.css('width', bf*progressDo.parent('.progressBg').width()+'px');
                    progressDo.next().css('left', bf*progressDo.parent('.progressBg').width()+'px');

                },1000);
            }

        });

        //歌曲切换-下一首
        MPlayNext.click(function(){
            clearInterval(timer);

            console.log(audio);
            //判断当前是否有歌曲在播放
            if(audio.paused){
                audio.play();//歌曲播放
                MPlay.css({'background': 'url("//mu9.bdstatic.com/player/t/i/UzdOx54D.png") no-repeat -420px -228px'});
            }else{
                audio.pause();//上首歌曲暂停
                MPlay.css({'background': 'url("//mu9.bdstatic.com/player/t/i/UzdOx54D.png") no-repeat -336px -1044px'});
                musicNum += 1;
                if(musicNum >= musicList.length-1){
                    musicNum = 0;
                }
                audio = musicList[musicNum].obj;//播放下一首
                audio.play();//歌曲播放
                MPlay.css({'background': 'url("//mu9.bdstatic.com/player/t/i/UzdOx54D.png") no-repeat -420px -228px'});


                //此时也切换歌名及歌曲信息
                $('.musicTitleStr').html(musicList[musicNum].url.split('/')[musicList[musicNum].url.split('/').length-1]);

                //同时改变歌曲的播放进度及总时长
                timer = setInterval(function(){
                    console.log(musicList[musicNum].obj.currentTime + '=='+ getSecondToTime(musicList[musicNum].obj.duration));
                    playTime.find('span:eq(0)').html(getSecondToTime(musicList[musicNum].obj.currentTime));
                    playTime.find('span:eq(1)').html(getSecondToTime(musicList[musicNum].obj.duration));

                    //计算百分比
                    var bf = musicList[musicNum].obj.currentTime/musicList[musicNum].obj.duration;
                    console.log(bf+'=='+progressDo.parent('.progress').width());
                    //同时更改音乐播放进度条  //x/progressDo.width = currentTime/duration;
                    progressDo.css('width', bf*progressDo.parent('.progressBg').width()+'px');
                    progressDo.next().css('left', bf*progressDo.parent('.progressBg').width()+'px');

                },1000);
            }


        });


        //点击播放模式: 顺序播放  单曲播放   随机播放
        playType.click(function(){
            //获取当前播放的歌曲序号:musicNum

            //判断播放模式是随机播放还是顺序播放
            if(playMusicType == 0){
                //顺序播放 那么修改成随机播放图标
                $(this).css('background', 'url({{url('resources/views/home/aboutSources/img/fuVWlYCr.png')}}) no-repeat -240px -1104px');
                $(this).attr('title', '随机');
                //假如是按顺序播放, 那么先判断一下当前的歌曲播放模式是否是随机播放
                //如果是随机播放, 那么就改变播放方式
                playMusicType = 1;

            }else if(playMusicType == 1){
                //随机播放 那么修改成顺序播放图标
                $(this).css('background', 'url({{url('resources/views/home/aboutSources/img/fuVWlYCr.png')}}) no-repeat -120px -1092px');
                $(this).attr('title', '顺序');
                //假如是随机播放, 那么久暂停当前的顺序播放轮询
                // 当前这首歌播放完毕, 随机出下一首继续播放
                playMusicType = 0;
            }




        });


        //点击播放进度条, 将音频调整到指定的播放时间段进行播放
        progress.click(function(event){
            //获取到当前鼠标相对于进度条的位置
            var sx = event.clientX;
            var sy = event.clientY;
            //获取到元素相对于body的位置
            var offsetLeft = $(this).offset().left;
            var offsetTop = $(this).offset().top;
            //计算出鼠标点击位置在元素中的位置
            var x = sx-offsetLeft;
            console.log(sx+'=鼠标坐标='+sy+'=元素相对坐标='+offsetLeft+'=='+offsetTop);
            console.log(x+'=最后值=');

            //计算比例 x/总长度 = 秒数/总秒数
            var miaoZ = (x/$(this).width()) * audio.duration;
            console.log(miaoZ+'=待调整值=');

            audio.currentTime = miaoZ;//设置当前音频播放的位置


        });


        function getBFB(event, Obj, audio){
            //获取到当前鼠标相对于进度条的位置
            var sx = event.clientX;
            var sy = event.clientY;
            //获取到元素相对于body的位置
            var offsetLeft = Obj.offset().left;
            var offsetTop = Obj.offset().top;
            //计算出鼠标点击位置在元素中的位置
            var x = sx-offsetLeft;
            console.log(sx+'=鼠标坐标='+sy+'=元素相对坐标='+offsetLeft+'=='+offsetTop);
            console.log(x+'=最后值=');

            //计算比例 x/总长度 = 秒数/总秒数
            var miaoZ = (x/Obj.width()) * audio.duration;
            console.log(miaoZ+'=待调整值=');

            audio.currentTime = miaoZ;//设置当前音频播放的位置
        }



        //点击音量按钮时, 把音量调为0
        var clickNum = false;
        musicVoiceBtn.click(function(){
            if(clickNum == false){
                audio.volume = 0;//设置当前音频播放的位置为0
                $(this).css('background', 'url({{url('resources/views/home/aboutSources/img/zLbblj37.png')}}) no-repeat -168px -432px');
                musicVoiceDo.css('width', 0+'px');
                musicVoiceDo.next().css('left', 0+'px');
                clickNum = true;
            }else{
                audio.volume = voiceNum;//恢复到改变之前的那个音量值
                $(this).css('background', 'url({{url('resources/views/home/aboutSources/img/fuVWlYCr.png')}}) no-repeat -372px -1104px');
                musicVoiceDo.css('width', voiceNum*musicVoiceDo.parent('.musicVoiceBg').width()+'px');
                musicVoiceDo.next().css('left', voiceNum*musicVoiceDo.parent('.musicVoiceBg').width()+'px');
                clickNum = false;
            }
        });

        //点击音量进度条设置音量
        musicVoice.click(function(){
            //获取到当前鼠标相对于进度条的位置
            var sx = event.clientX;
            var sy = event.clientY;
            //获取到元素相对于body的位置
            var offsetLeft = $(this).offset().left;
            var offsetTop = $(this).offset().top;
            //计算出鼠标点击位置在元素中的位置
            var x = sx-offsetLeft;
            console.log(sx+'=鼠标坐标='+sy+'=元素相对坐标='+offsetLeft+'=='+offsetTop);
            console.log(x+'=最后值=');

            //计算比例 x/总长度 = 当前音量/总音量值[1]
            var voiceZ = (x/$(this).width()) * 1;
            console.log(voiceZ+'=待调整值=');

            voiceNum = voiceZ;//记录当前调整过的新的音量值
            audio.volume = voiceZ;//设置当前音频播放的位置
            musicVoiceDo.css('width', x+'px');
            musicVoiceDo.next().css('left', x+'px');

        });



        //当鼠标放在音乐图标上时,把音乐显示出来
        var mu = $('.mu');
        var isC = false;
        mu.click(function(){
            if(isC){
                isC = false;
                $(this).parent('footer').css('left', '-290px');
                console.log('jierui');
            }else{
                isC = true;
                $(this).parent('footer').css('left', '0px');
            }
        });


    });



    //封装的转换时间函数
    function getSecondToTime(Time){
        //把播放时长和总时长转换成时/分钟/秒
        var shi = parseInt(Time/3600);
        if(shi <= 9){
            shi = '0' + shi;
        }
        var fen = parseInt(Time%3600/60);
        if(fen <= 9){
            fen = '0' + fen;
        }
        var miao = parseInt(Time%3600%60%60);
        if(miao <= 9){
            miao = '0' + miao;
        }
        if(shi == '00'){
            return fen+':'+miao;
        }else{
            return shi+':'+fen+':'+miao;
        }
    }



</script>
