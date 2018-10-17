<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>英菲尼迪</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,minimum-scale=1,user-scalable=no"/>
    <meta content="yes" name="apple-mobile-web-app-capable" />
    <meta content="black" name="apple-mobile-web-app-status-bar-style" />
    <meta content="telephone=no" name="format-detection" />
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link href="{{asset('resources/views/web/spring/css/base.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('resources/views/web/spring/css/m-spring.css')}}" rel="stylesheet" type="text/css">

    <script src="{{asset('resources/views/web/spring/js/jquery-1.11.0.min.js')}}"></script>
    <script>
        window.onload = window.onresize = function() {
            var view_height = document.getElementsByTagName('html')[0].getBoundingClientRect().height;
            var _html = document.getElementsByTagName('html')[0];
            _html.style.fontSize = view_height / 40 + 'px';
            $("#warp").show();
        }
    </script>
</head>

<body>
<div id="warp">
    <div class="page_index">
        <div class="page_head clearfix">
            <a class="page_logo01" href="javascript:void(0);"><img src="{{url('resources/views/web/spring/images/m-spring/logo01.png')}}" /></a>
            <a class="page_logo02" href="javascript:void(0);"><img src="{{url('resources/views/web/spring/images/m-spring/logo02.png')}}" /></a>
        </div>

        <div class="page_font">
            <a href="javascript:void(0);"><img src="{{url('resources/views/web/spring/images/m-spring/txt01.png')}}" /></a>
            <p>2016东风英菲尼迪春季关怀服务月</p>
            <p>全车换季免费检测、买轮胎送防盗螺母、空调清洗服务7折优惠等尊享特权、更有价值500元续保代金券，原厂全合成机油兑换券，英菲尼迪品牌精品雨伞等您来摇！</p>
        </div>

        <div class="page_btn01 js_explain"><a href="javascript:void(0);"><img src="{{url('resources/views/web/spring/images/m-spring/btn02.png')}}" /></a></div>
        <div class="page_btn02 js_start"><a class="clearfix" href="javascript:void(0);"><span></span></a></div>
    </div>
</div>
<!--end:warp-->

<!--begin:活动详情-->
<div class="page_fn hidden">
    <a class="page_close js_close" href="javascript:void(0);"><img src="{{url('resources/views/web/spring/images/m-spring/close.png')}}" /></a>
    <div class="wrapper">
        <div id="scroll" class="page_box">
            <h2>敢爱春日 执着随心</h2>
            <p class="page_txt01">2016东风英菲尼迪春季关怀服务月</p>
            <p class="page_txt02">活动规则及注意事项：</p>
            <div class="page_txt03">
                <span>1.</span>
                <p>每人有3次摇奖机会，1次领取及使用机会，提交信息并确认领取后则不可再行更改</p>
            </div>
            <!--end:page_txt03-->
            <div class="page_txt03">
                <span>2.</span>
                <p>获得奖品需到填写的指定经销商店内使用</p>
            </div>
            <!--end:page_txt03-->
            <div class="page_txt03">
                <span>3.</span>
                <p>获奖的礼券与车主是唯一对应关系（店端根据提交信息手机号核实），其有效期请以相应提示时间为准</p>
            </div>
            <!--end:page_txt03-->
            <div class="page_txt03">
                <span>4.</span>
                <p>获得奖品使用权不可转让</p>
            </div>
            <!--end:page_txt03-->
            <div class="page_txt03">
                <span>5.</span>
                <p>活动截止时间为2016年5月10日，参与活动的车主须在5月10日之前选择经销商使用福利，逾时则视为主动放弃</p>
            </div>
            <!--end:page_txt03-->
            <div class="page_txt03">
                <span>6.</span>
                <p>个别兑换券如有使用有效期说明，以兑换券有效期为准</p>
            </div>
            <!--end:page_txt03-->
            <div class="page_txt03">
                <span>7.</span>
                <p>奖品图片仅供参考，以实物为准</p>
            </div>
            <!--end:page_txt03-->
            <div class="page_txt03">
                <span>8.</span>
                <p>最终解释权归东风英菲尼迪所有</p>
            </div>
            <!--end:page_txt03-->
            <div class="page_txt03">
                <p>* 如有问题，可联系英菲尼迪官方服务热线400-800-9090</p>
            </div>
        </div>
    </div>
</div>
<!--end:活动详情-->
</body>
</html>
<script type="text/javascript">
    $(function(){
        $('.js_explain').click(function(){
            $('.page_fn').show();
        });

        //游戏go
        $('.js_start').click(function(){
            window.location.href = '{{url('/201510infiniti/spring/shark')}}';
        });

        $('.js_close').click(function(){
            $('.page_fn').hide();
        });

        /*
         //点击空白位置触发事件
         $('.js_is_partake').click(function(){
         window.location.href = 'http://www.infinitiownerclub.com/m';
         });

         // 按钮
         $('.js_receive').click(function(e){
         e.stopPropagation();
         e.preventDefault();
         var prize_id = "{$prize_id}";
         var postData = {
         'id' : prize_id
         };

         $.post(siteUrl+'/spring/m/ajax_update_prize_lottery', postData, function(json) {
         if(json.info == 'ok'){
         alert('领取成功,谢谢参与!');
         $('.js_success').hide();//到店领取
         $('.js_is_partake').show();//活动已参与
         }
         }, 'json');
         });

         // 按钮外部div
         $('.js_success').click(function(e){
         e.stopPropagation();
         e.preventDefault();
         window.location.href = 'http://www.infinitiownerclub.com/m';
         });
         */

    });
</script>
