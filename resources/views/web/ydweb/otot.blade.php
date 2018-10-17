<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <link rel="stylesheet" href="{{asset('resources/views/web/ydweb/css/ydweb.css')}}">
    <link rel="stylesheet" href="{{asset('resources/views/web/ydweb/css/animate.css')}}">
    <script src="{{asset('resources/views/web/ydweb/js/jquery.js')}}"></script>
    <script src="{{asset('resources/views/web/ydweb/js/hammer.js')}}"></script>
</head>

<body>


    {{--
        1. 动态计算可视屏幕的高度, 然后, 把每一屏的高度动态更改
        2. 监听窗口大小的改变时间 onsize
        2. 监听手势下滑, 往下切换一屏,  切换到最后一屏时, 再回到第一屏

    --}}
    <div id="content">
        <div id="test" class="test">
            <div class="p p1">
                <span class="z z1 wow slideInLeft" data-wow-duration="2s" data-wow-delay="0.5s">水</span>
                <span class="z z2 wow slideInRight" data-wow-duration="4s" data-wow-delay="1.5s">墨</span>
                <span class="z z3 wow fadeInDownBig" data-wow-duration="4s" data-wow-delay="2.5s">酒</span>
                <span class="z z4 wow fadeInUpBig" data-wow-duration="4s" data-wow-delay="3s">吧</span>
            </div>
            <div class="p p2"></div>
            <div class="p p3"></div>
            <div class="p p4"></div>
            <div class="p p5"></div>
        </div>
    </div>


    <script src="{{asset('resources/views/web/ydweb/js/wow.js')}}"></script>
    <script type="text/javascript">

        $(function(){

            wow = new WOW({
                animateClass: 'animated',
                offset: 100
            });
            wow.init();

            //data-wow-duration（动画持续时间）和 data-wow-delay（动画延迟时间）属性
            //属性/方法	类型	默认值	说明
            //boxClass	字符串	‘wow’	‘wow’需要执行动画的元素的 class
            //animateClass	字符串	‘animated’	‘animated’animation.css 动画的 class
            //offset	整数	0	距离可视区域多少开始执行动画
            //mobile	布尔值	true	是否在移动设备上执行动画
            //live	布尔值	true	异步加载的内容是否有效





            $('#content').css({
                'height': $(window).height()+'px',
                'overflow': 'hidden'
            });
            $('.p').css('height', $(window).height()+'px');

            //监听窗口变化
            $(window).resize(function () {
                $('#content').css({
                    'height': $(window).height()+'px',
                    'overflow': 'hidden'
                });
                $('.p').css('height', $(window).height()+'px');
            });

            //监听下滑手势
            //创建一个新的hammer对象并且在初始化时指定要处理的dom元素
            var hammertime = new Hammer(document.getElementById("content"));
            //为该dom元素指定触屏移动事件  左滑事件
            var nTop = 0;
            hammertime.get('swipe').set({ direction: Hammer.DIRECTION_ALL });
            hammertime.on("swipedown", function (ev) {
                //控制台输出
                console.log(ev.target.offsetTop);
                console.log(ev.target.offsetHeight);
                console.log('监听下滑手势');
                nTop = ev.target.offsetHeight + ev.target.offsetTop;

                if(nTop >= ev.target.offsetHeight*$('.p').length){
                    //把top值置为0
                    nTop = 0;
                }

                //document.getElementById('test').style.top = '-'+nTop+'px';
                //document.getElementById('test').style.transition = 'all 1s';
                $('#test').animate({
                    'top': '-'+nTop+'px',
                    'left':0,
                    'transition': 'all 1s'
                }, 100, function(){
                    console.log('捏合触发');
                });

            });

            //捏合触发
//            hammertime.on("pinchin", function (ev) {
//                //控制台输出
//                console.log(ev);
//                console.log('捏合触发');
//
//            });
//
//
//            //按压超过500ms触发
//            hammertime.on("press", function (ev) {
//                //控制台输出
//                console.log(ev);
//                console.log('按压超过500ms触发');
//
//            });
//
//
//            //旋转触发
//            hammertime.on("rotate", function (ev) {
//                //控制台输出
//                console.log(ev);
//                console.log('旋转触发');
//
//            });


            //



        });


        {{--
            hammer.js的下载地址: http://hammerjs.github.io
            1、  Pan事件：在指定的dom区域内，一个手指放下并移动事件，即触屏中的拖动事件。这个事件在屏触开发中比较常用，如：左拖动、右拖动等，如手要上使用QQ时向右滑动出现功能菜单的效果。该事件还可以分别对以下事件进行监听并处理：

            Panstart：拖动开始、Panmove：拖动过程、Panend：拖动结束、Pancancel：拖动取消、Panleft：向左拖动、Panright：向右拖动、Panup：向上拖动、Pandown：向下拖动

            2、  Pinch事件：在指定的dom区域内，两个手指（默认为两个手指，多指触控需要单独设置）或多个手指相对（越来越近）移动或相向（越来越远）移动时事件。该事件事以分别对以下事件进行监听并处理：

            Pinchstart：多点触控开始、Pinchmove：多点触控过程、Pinchend：多点触控结束、Pinchcancel：多点触控取消、Pinchin：多点触控时两手指距离越来越近、Pinchout：多点触控时两手指距离越来越远

            3、  Press事件：在指定的dom区域内触屏版本的点击事件，这个事件相当于PC端的Click事件，该不能包含任何的移动，最小按压时间为500毫秒，常用于我们在手机上用的“复制、粘贴”等功能。该事件分别对以下事件进行监听并处理：

            Pressup：点击事件离开时触发

            4、  Rotate事件：在指定的dom区域内，当两个手指或更多手指成圆型旋转时触发（就像两个手指拧螺丝一样）。该事件分别对以下事件进行监听并处理：

            Rotatestart：旋转开始、Rotatemove：旋转过程、Rotateend：旋转结束、Rotatecancel：旋转取消

            5、  Swipe事件：在指定的dom区域内，一个手指快速的在触屏上滑动。即我们平时用到最多的滑动事件。

            Swipeleft：向左滑动、Swiperight：向右滑动、Swipeup：向上滑动、Swipedown：向下滑动

            6、Tap事件：在指定的dom区域内，一个手指轻拍或点击时触发该事件(类似PC端的click)。该事件最大点击时间为250毫秒，如果超过250毫秒则按Press事件进行处理。
        --}}



    </script>

</body>
</html>
<script>



</script>