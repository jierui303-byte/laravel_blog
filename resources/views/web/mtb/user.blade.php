<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <title>仿淘宝个人中心-Jerry的编程之路</title>
    <link rel="stylesheet" href="{{asset('resources/views/web/mtb/css/reset.css')}}">
    <link rel="stylesheet" href="{{asset('resources/views/web/mtb/css/func.css')}}">
    <link rel="stylesheet" href="{{asset('resources/views/web/mtb/css/user.css')}}">
</head>
<body>
    
    <header>
        <div>设置</div>
        <div><img src="{{url('resources/views/web/mtb/img/upic.jpg')}}" alt=""></div>
        <div>王瑞杰jierui303</div>
    </header>

    <section class="unav">
        <div>
            <p>904</p>
            <p>收藏的宝贝</p>
        </div>
        <div>
            <p>618</p>
            <p>收藏的店铺</p>
        </div>
        <div>
            <p>241</p>
            <p>我的足迹</p>
        </div>
    </section>



    <section class="dfk">
        <ul>
            <li>
                <p>待付款</p>
            </li>
            <li>
                <p>待发货</p>
            </li>
            <li>
                <p>待收货</p>
            </li>
            <li>
                <p>待评价</p>
            </li>
            <li>
                <p>退款/售后</p>
            </li>
        </ul>
        <div>
            <p><span>全部订单</span><span>查看全部订单</span></p>
        </div>
    </section>


    <section class="gwc">
        <div>
            <p><span>购物车</span><span>a</span></p>
        </div>
        <div>
            <p><span>搜索</span><span>a</span></p>
        </div>
        <div>
            <p><span>支付宝</span><span>a</span></p>
        </div>
        <div>
            <p><span>旺旺</span><span>a</span></p>
        </div>
    </section>


    <section class="cp">
        <div>
            <p><span>我的彩票</span><span>a</span></p>
        </div>
        <div>
            <p><span>我的机票</span><span>a</span></p>
        </div>
    </section>



    <section class="tb">
        <p>王瑞杰jierui303</p>
        <p>退出</p>
        <p>意见反馈</p>
        <p>电脑版</p>
    </section>



    <div class="footer">
        <div class="footerDiv">
            <a href="#">首页</a>
            <a href="#">物流</a>
            <a href="#">购物车</a>
            <a href="#">我的淘宝</a>
            <a href="#">更多</a>
        </div>
    </div>

</body>
<script>
    (function(window){
        var dw = window.document.documentElement.clientWidth;
        var font = dw / 10 > 54 ? 54 : dw/10;
        font += 'px';
        // 1rem = 10vw; width*10%
        window.document.documentElement.style.fontSize = font;


        //监听窗口大小改变事件
        window.addEventListener('resize', function(){
            var dw = window.document.documentElement.clientWidth;
            var font = dw / 10 > 54 ? 54 : dw/10;
            font += 'px';
            // 1rem = 10vw; width*10%
            window.document.documentElement.style.fontSize = font;
        }, false);
    })(window)
</script>
</html>
