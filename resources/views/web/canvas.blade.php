<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        #c1{
            background:orange;
        }
    </style>
</head>
<script>
    window.onload = function(){
        var oc = document.getElementById('c1'); //获取canvas元素
        var ogc = oc.getContext('2d');//getContext绘制环境

        var num = 0;

        ogc.fillRect(0, 0, 100, 100);

        setInterval(function(){
            num++;
            ogc.clearRect(0, 0, oc.width, oc.height);
            ogc.fillRect(num, num, 100, 100);
        }, 30);


    }
</script>
<body>


<a href="{{url('/otot')}}">移动屏切换</a>
<br>

<canvas id="c1" width="600px" height="600px">
    <span>不支持canvas的浏览器</span>
</canvas>





</body>
</html>