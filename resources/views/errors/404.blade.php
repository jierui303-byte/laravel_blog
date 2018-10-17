<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>jquery和JavaScript404跳转页面5秒倒计时页面跳转</title>
    <meta name="description" content="jQuery和JavaScript两个版本的404跳转页面效果，利用倒计时间控制页面在规定多少秒时间内，页面跳转到指定的页面跳转过程。" />
    <style type="text/css">
        html{background:url(images/paper.jpg)!important;}
        a,fieldset,img{border:0;}
        a{color:#221919;text-decoration:none;outline:none;}
        a:hover{color:#3366cc;text-decoration:underline;}
        body{font-size:24px;color:#B7AEB4;}
        body a.link,body h1,body p{-webkit-transition:opacity 0.5s ease-in-out;-moz-transition:opacity 0.5s ease-in-out;transition:opacity 0.5s ease-in-out;}
        #wrapper{text-align:center;margin:100px auto;width:594px;}
        a.link{text-shadow:0px 1px 2px white;font-weight:600;color:#3366cc;opacity:0;}
        h1{text-shadow:0px 1px 2px white;font-size:24px;opacity:0;}
        img{-webkit-transition:opacity 1s ease-in-out;-moz-transition:opacity 1s ease-in-out;transition:opacity 1s ease-in-out;height:202px;width:199px;opacity:0;}
        p{text-shadow:0px 1px 2px white;font-weight:normal;font-weight:200;opacity:0;}
        .fade{opacity:1;}
        @media only screen and (min-device-width:320px) and (max-device-width:480px){
            #wrapper{margin:40px auto;text-align:center;width:280px;}
        }
    </style>
    <script type="text/javascript" src="{{asset('resources/views/errors/js/jquery-1.4.2.min.js')}}"></script>
    <!--解决 IE6 背景缓存-->
    <!--[if IE 6]><script type="text/javascript">document.execCommand("BackgroundImageCache", false, true);</script><![endif]-->
    <script type="text/javascript">
        $(document).ready(function(){
            if (!$.browser.msie){
                $("img").addClass('fade').delay(800).queue(function(next){
                    $("h1, p").addClass("fade");
                    $("a.link").css("opacity", 1);
                    next();
                });
            }else{
                $("img, h1, p").addClass('fade');
                $('a.link').css('opacity', 1);
            }
        });
    </script>
</head>

<body>


<div id="wrapper">
    <a href="http://www.jierui303.com/"><img src="{{url('resources/views/errors/images/404_icon.png')}}"></a>
    <div>
        <h1>唉呀!</h1>
        <p>你正在寻找的页面无法找到。<a style="color:#ff6600;" href="http://www.jierui303.com/">可能在这里！</a></p>
        <a class="link" href="/" onclick="history.go(-1)"><span id="sec">5</span> 秒后返回首页</a>
        <br /><br /><br />
        <a class="link" href="./demo1.html">查看JavaScript版本404页面跳转</a>
    </div>
</div>

<script type="text/javascript">
    $(function () {
        setTimeout("lazyGo();", 1000);
    });
    function lazyGo() {
        var sec = $("#sec").text();
        $("#sec").text(--sec);
        if (sec > 0)
            setTimeout("lazyGo();", 1000);
        else
            window.location.href = "http://www.jierui303.com";
    }
</script>


</body>
</html>
