<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    {{--<link href="css/bootstrap.min.css" rel="stylesheet">--}}
    <link rel="stylesheet" href="{{asset('resources/views/web/zns/css/bootstrap.min.css')}}">

    {{--<link href="css/zns.css" rel="stylesheet">--}}
    <link rel="stylesheet" href="{{asset('resources/views/web/zns/css/zns.css')}}">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

    <div class="container-fluid main">
        <div class="row col-xs-12 banner1">
            <img src="{{url('resources/views/web/zns/images/Mask Group 17.png')}}" alt="">

        </div>
        <div class="row col-xs-12 banner2">
            <img src="{{url('resources/views/web/zns/images/Group 354.png')}}" alt="">
        </div>


        <div class="row col-xs-12 navList">
            <div class="col col-md-2 col1"><img src="{{url('resources/views/web/zns/images/WechatIMG29.png')}}" alt=""></div>
            <div class="col col-md-2 col2"><img src="{{url('resources/views/web/zns/images/WechatIMG29.png')}}" alt=""></div>
            <div class="col col-md-2 col3"><img src="{{url('resources/views/web/zns/images/WechatIMG29.png')}}" alt=""></div>
            <div class="col col-md-2 col4"><img src="{{url('resources/views/web/zns/images/WechatIMG29.png')}}" alt=""></div>
            <div class="col col-md-2 col5"><img src="{{url('resources/views/web/zns/images/WechatIMG29.png')}}" alt=""></div>
            <div class="col col-md-2 col6"><img src="{{url('resources/views/web/zns/images/WechatIMG29.png')}}" alt=""></div>
        </div>

        <div class="row col-xs-12 footer">
            <img src="{{url('resources/views/web/zns/images/Group 369.png')}}" alt="">
        </div>

        <div class="row col-xs-12 contentMe">
            <img src="{{url('resources/views/web/zns/images/new.png')}}" alt="" class="dimg">
            <div class="back"></div>
        </div>

    </div>















<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
{{--<script src="js/bootstrap.min.js"></script>--}}
<script src="{{asset('resources/views/web/zns/js/bootstrap.min.js')}}"></script>
</body>
</html>
<script>
    $(function(){

        $('.dimg').load(function(){
            console.log('大图已经记载完毕');
            init();
        });

        init();
        function init(){
            //页面初始化
            var dw = $(document.body).width();
            var font = dw / 10 > 54 ? 54 : dw/10;
            $(document.body).css({
                fontSize : font+'px'
            });
            console.log(dw);


            //自动获取文档的高度
            var dh = $(window).height();
            var mainDiv = $('.main');
            var topTitle = $('.topTitle');
            var bannerDiv = $('.bannerDiv');
            var bottomDiv = $('.bottomDiv');
            var ul1Div = $('.ul1');
            var contentMeDiv = $('.contentMe');
            mainDiv.css({
                width:dw+'px',
                height:dh+'px'
            });
            console.log(dh+'=初始化='+dw);

            //自动计算logo图片的位置 宽度一半减去图片宽度的一半
            var Lv1 = dw/2 - $('.banner1 img').width()/2;
            var Lv2 = dw/2 - $('.banner1 img').width()/2 + 60;
            console.log(Lv1+'kuanduan');
            $('.banner1').css({
                paddingTop:'20px',
                paddingBottom:'0',
                paddingLeft:Lv1+'px',
                paddingRight:'0'
            });
            $('.banner2').css({
                paddingTop:'5px',
                paddingBottom:'0',
                paddingLeft:Lv2+'px',
                paddingRight:'0'
            });




            //初始化contentMe弹窗的宽度和高度
            contentMeDiv.css({
                width : dw+'px',
                height : dh+'px'
            });

            //自动计算col的宽度
            var jw = 6;
            console.log(jw+'px间距');
            var liW = (dw-jw*4)/3;
            $('.col').css({
                width:liW+'px',
                height:liW+'px',
                borderRadius:'50%',
            });
            //计算每个col定位的位置
            var col1Top = 0;
            var col1Left = jw;
            var col2Top = liW/2;
            var col2Left = jw*2+liW;
            var col3Top = liW;
            var col3Left = jw*2+liW*2;
            var col4Top = liW+jw;
            var col4Left = jw;
            var col5Top = liW+liW/2+jw;
            var col5Left = jw*2+liW;
            var col6Top = liW*2+jw;
            var col6Left = liW*2+jw*2;
            $('.col1').css({top:col1Top+'px', left:col1Left+'px'});
            $('.col2').css({top:col2Top+'px', left:col2Left+'px'});
            $('.col3').css({top:col3Top+'px', left:col3Left+'px'});
            $('.col4').css({top:col4Top+'px', left:col4Left+'px'});
            $('.col5').css({top:col5Top+'px', left:col5Left+'px'});
            $('.col6').css({top:col6Top+'px', left:col6Left+'px'});

        }

//        //页面初始化
//        var dw = $(document.body).width();
//        var font = dw / 10 > 54 ? 54 : dw/10;
//        $(document.body).css({
//            fontSize : font+'px'
//        });
//        console.log(dw);
//
//
//        //自动获取文档的高度
//        var dh = $(window).height();
//        var mainDiv = $('.main');
//        var topTitle = $('.topTitle');
//        var bannerDiv = $('.bannerDiv');
//        var bottomDiv = $('.bottomDiv');
//        var ul1Div = $('.ul1');
//        var contentMeDiv = $('.contentMe');
//        mainDiv.css({
//            width:dw+'px',
//            height:dh+'px'
//        });
//        console.log(dh+'=初始化='+dw);
//
//        //自动计算logo图片的位置 宽度一半减去图片宽度的一半
//        var Lv1 = dw/2 - $('.banner1 img').width()/2;
//        var Lv2 = dw/2 - $('.banner1 img').width()/2 + 60;
//        console.log(Lv1+'kuanduan');
//        $('.banner1').css({
//            paddingTop:'20px',
//            paddingBottom:'0',
//            paddingLeft:Lv1+'px',
//            paddingRight:'0'
//        });
//        $('.banner2').css({
//            paddingTop:'5px',
//            paddingBottom:'0',
//            paddingLeft:Lv2+'px',
//            paddingRight:'0'
//        });
//
//
//
//
//        //初始化contentMe弹窗的宽度和高度
//        contentMeDiv.css({
//            width : dw+'px',
//            height : dh+'px'
//        });
//
//        //自动计算col的宽度
//        var jw = 6;
//        console.log(jw+'px间距');
//        var liW = (dw-jw*4)/3;
//        $('.col').css({
//            width:liW+'px',
//            height:liW+'px',
//            borderRadius:'50%',
//        });
//        //计算每个col定位的位置
//        var col1Top = 0;
//        var col1Left = jw;
//        var col2Top = liW/2;
//        var col2Left = jw*2+liW;
//        var col3Top = liW;
//        var col3Left = jw*2+liW*2;
//        var col4Top = liW+jw;
//        var col4Left = jw;
//        var col5Top = liW+liW/2+jw;
//        var col5Left = jw*2+liW;
//        var col6Top = liW*2+jw;
//        var col6Left = liW*2+jw*2;
//        $('.col1').css({top:col1Top+'px', left:col1Left+'px'});
//        $('.col2').css({top:col2Top+'px', left:col2Left+'px'});
//        $('.col3').css({top:col3Top+'px', left:col3Left+'px'});
//        $('.col4').css({top:col4Top+'px', left:col4Left+'px'});
//        $('.col5').css({top:col5Top+'px', left:col5Left+'px'});
//        $('.col6').css({top:col6Top+'px', left:col6Left+'px'});



        //监听窗口大小改变事件
        $(window).resize(function(){
            //重新计算宽高
            var dw = $(document.body).width();
            var dh = $(window).height();
            var font = dw / 10 > 54 ? 54 : dw/10;
            $(document.body).css({
                fontSize : font+'px'
            });
            console.log(dw);

            //自动计算logo图片的位置 宽度一半减去图片宽度的一半
            var Lv1 = dw/2 - $('.banner1 img').width()/2;
            var Lv2 = dw/2 - $('.banner1 img').width()/2 + 60;
            console.log(Lv1+'kuanduan');
            $('.banner1').css({
                paddingTop:'20px',
                paddingBottom:'0',
                paddingLeft:Lv1+'px',
                paddingRight:'0'
            });
            $('.banner2').css({
                paddingTop:'5px',
                paddingBottom:'0',
                paddingLeft:Lv2+'px',
                paddingRight:'0'
            });

            var mainDiv = $('.main');
            mainDiv.css({
                width:dw+'px',
                height:dh+'px'
            }).addClass('mainDiv');

            //初始化tanye的高度和宽度
            $('.tanye').css({
                width : dw+'px',
                height : dh+'px'
            });

            //自动计算col的宽度
            var jw = 6;
            console.log(jw+'px间距');
            var liW = (dw-jw*4)/3;
            $('.col').css({
                width:liW+'px',
                height:liW+'px',
                borderRadius:'50%',
            });
            //计算每个col定位的位置
            var col1Top = 0;
            var col1Left = jw;
            var col2Top = liW/2;
            var col2Left = jw*2+liW;
            var col3Top = liW;
            var col3Left = jw*2+liW*2;
            var col4Top = liW+jw;
            var col4Left = jw;
            var col5Top = liW+liW/2+jw;
            var col5Left = jw*2+liW;
            var col6Top = liW*2+jw;
            var col6Left = liW*2+jw*2;
            $('.col1').css({top:col1Top+'px', left:col1Left+'px'});
            $('.col2').css({top:col2Top+'px', left:col2Left+'px'});
            $('.col3').css({top:col3Top+'px', left:col3Left+'px'});
            $('.col4').css({top:col4Top+'px', left:col4Left+'px'});
            $('.col5').css({top:col5Top+'px', left:col5Left+'px'});
            $('.col6').css({top:col6Top+'px', left:col6Left+'px'});

            //初始化contentMe弹窗的宽度和高度
            var contentMeDiv = $('.contentMe');
            contentMeDiv.css({
                width : dw+'px',
                height : dh+'px'
            });

            //自动计算 toptitle的位置



            //自动计算li的位置

        });






        var isNum = null;
        $('.col').on('touchstart', function(){
            isNum = $(this).index();
            for(var i=0; i<$('.col').length; i++){
                if(i !== isNum){
                    $(this).find('img').css({
                        display:'none',
                        transition: 'all 1s',
                    });
                }
            }
            $(this).find('img').css({
                display:'block',
                transition: 'all 1s',
            });
            console.log('aaaa');
        });

        $('.col').on('touchend', function(){
            isNum = $(this).index();
            for(var i=0; i<$('.col').length; i++){
                $(this).find('img').css({
                    display:'none',
                    transition: 'all 1s',
                });
            }
            switch(isNum){
                case 0:
//                    location.href = "www.baidu.com";
                        alert('松开后执行跳转链接地址');
                    break;
                case 1:

                    break;
                case 2:

                    break;
                case 3:

                    break;
                case 4:

                    break;
                case 5:

                    break;
            }
            console.log('取消样式了');
        });


        //footer底部联系我们点击弹窗事件
        $('.footer').on('touchstart', function(){
            var dh = $(window).height();
            var dw = $(document.body).width();

            //当图片加载成功后再继续执行
            $('.contentMe').css({
                display:'block',
                width:'100%',
                height: dh+'px',
            });
            var btnW = dw/2 - 45;
            $('.back').css({
                width:90+'px',
                height:90+'px',
                bottom: '20px',
                left:btnW+'px'
            });

        });

        $('.back').on('touchstart', function(){
            $('.contentMe').css({
                display:'none'
            });
        });
    });
</script>