<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Jerry的个人练习汇总</title>
    <style>
        /*样式重置*/
        blockquote,body,button,dd,dl,dt,fieldset,form,h1,h2,h3,h4,h5,h6,hr,input,legend,li,ol,p,pre,td,textarea,th,ul{margin:0;padding:0}body,button,input,select,textarea{font:12px/1.5 tahoma,arial,'Hiragino Sans GB','\5b8b\4f53',sans-serif}h1,h2,h3,h4,h5,h6{font-size:100%}address,cite,dfn,em,var{font-style:normal}code,kbd,pre,samp{font-family:courier new,courier,monospace}small{font-size:12px}ol,ul{list-style:none}a{text-decoration:none}a:hover{text-decoration:underline}sup{vertical-align:text-top}sub{vertical-align:text-bottom}legend{color:#000}fieldset,img{border:0}button,input,select,textarea{font-size:100%}table{border-collapse:collapse;border-spacing:0}
        ul,div{padding:0;margin:0;}


        nav{width:100%;height:60px;background:#191C1E;}
        nav ul{width:100%;height:60px;margin:0 auto;list-style-type: none;}
        nav ul li{width:10%;height:60px;line-height: 60px;text-align: center;float:left;position:relative;  }
        nav>ul>li:hover>ul{display:block;}
        nav>ul>li>a{display:block;width:100%;height:100%;color:#fff;font-size: 16px;transition:all .6s ease;}
        nav>ul>li:hover>a{background:#535350;text-decoration: none;}
        nav>ul>li>ul{width:100%;height:100%;display:none;position:absolute;top:60px;left:0;z-index:1;}
        nav>ul>li>ul li{width:100%;height:35px;text-align:center;line-height:35px;}
        nav>ul>li>ul li>a{display:block;width:100%;height:100%;background:#191c2E;color:#fff;}
        nav>ul>li>ul li:hover>a{background:#535350;text-decoration:none;}





        #main{width:90%;margin:0 auto;overflow:hidden;}
        .pin{width:100%;height:430px;margin:0 auto;padding:10px;overflow:hidden;box-sizing: border-box;border:1px solid #fff;}
        .box{width:28%;float:left;overflow: hidden;padding:9px;margin:10px;border:1px solid #ccc;opacity: .6;transition:all 1s linear;}
        .box:nth-child(3n){margin-right:0;}
        .box:hover{opacity: 1;}
        .box>div:nth-of-type(1){width: 100%;height: 300px;overflow: hidden;}
        .box>div:nth-of-type(1)>a{display:block;width: 100%;height:auto;}
        .box>div:nth-of-type(1)>a>img{width: 100%;height:auto;}
        .box>div:nth-of-type(2){width:100%;height:60px;margin-top:10px;background: #F6F6F6;}
        .box>div:nth-of-type(2)>a{width: 50%;height:100%;display:block;float:left;line-height: 60px;color:#535350;text-align: center;font-size: 15px;transition:all .8s linear;}
        .box>div:nth-of-type(2)>a:hover{text-decoration: none;background: #535350;color:#fff;}
        .box>div:nth-of-type(2)>a:nth-of-type(1){}
        .box>div:nth-of-type(2)>a:nth-of-type(2){}



    </style>
</head>
<body>

    <!--导航 站酷-->
    <nav>
        <ul>
            <li><a href="{{url('/')}}">返回首页</a></li>
            <li><a href="{{url('/special')}}">CSS特效练习</a></li>
            <li><a href="{{url('/JSspecial')}}">JS特效练习</a></li>
            <li><a href="{{url('/AVspecial')}}">音/视频特效</a></li>
            <li><a href="{{url('/JQueryspecial')}}">特效练习</a></li>
            <li><a href="http://123.56.247.220/">Canvas特效练习</a></li>
            <li>
                <a href="{{url('/')}}">后端语言</a>
                <ul>
                    <li><a href="#">PHP</a></li>
                    <li><a href="#">Android</a></li>
                    <li><a href="#">JAVA</a></li>
                    <li><a href="#">IOS</a></li>
                    <li><a href="#">C++</a></li>
                    <li><a href="#">Payton</a></li>
                </ul>
            </li>
            <li>
                <a href="{{url('/')}}">数据库</a>
                <ul>
                    <li><a href="#">MySQL</a></li>
                    <li><a href="#">Memcache</a></li>
                    <li><a href="#">Redis</a></li>
                    <li><a href="#">Mongodb</a></li>
                    <li><a href="#">Oracle</a></li>
                </ul>
            </li>
            <li>
                <a href="{{url('/')}}">web前端</a>
                <ul>
                    <li><a href="#">CSS3</a></li>
                    <li><a href="#">JavaScript</a></li>
                    <li><a href="#">HTML5</a></li>
                    <li><a href="#">Canvas</a></li>
                    <li><a href="#">Svg</a></li>
                    <li><a href="#">Less/Sass</a></li>
                    <li><a href="#">BootStrap</a></li>
                    <li><a href="#">JQuery</a></li>
                </ul>
            </li>
            <li>
                <a href="{{url('/cate/3')}}">Node</a>
                <ul>
                    <li><a href="#">Node.js</a></li>
                    <li><a href="#">Angular.js</a></li>
                    <li><a href="#">Zepto.js</a></li>
                    <li><a href="#">Ext.js</a></li>
                    <li><a href="#">jQueryMobile</a></li>
                    <li><a href="#">PhoneGap</a></li>
                    <li><a href="#">senchaTouch</a></li>
                </ul>
            </li>
            <li>
                <a href="{{url('/')}}">Linux</a>
                <ul>
                    <li><a href="#">Lamp</a></li>
                    <li><a href="#">Lnmp</a></li>
                </ul>
            </li>
        </ul>
    </nav>





    <a href="{{url('/JSspecial/sjld')}}">三级联动地址特效</a>

</body>
</html>



