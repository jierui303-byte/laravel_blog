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
    <link href="{{asset('resources/views/web/spring/css/animate.css')}}" rel="stylesheet" type="text/css">

    <script src="{{asset('resources/views/web/spring/js/jquery-1.11.0.min.js')}}"></script>
    <script src="{{asset('resources/views/web/spring/js/m-spring.js')}}"></script>
    <script src="{{asset('resources/views/web/spring/js/shake.js')}}"></script>

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
    <div id="media" class="hidden">
        <audio id="bgmusic" src="{{url('resources/views/web/spring/media/shake.mp3')}}" preload></audio>
    </div>
    <a class="btn-menu" href="javascript:void(0);"><i class="icon-volume-high"></i></a>

    <div class="page_index shark_bg">
        <div class="page_head clearfix">
            <a class="page_logo01" href="javascript:void(0);"><img src="{{url('resources/views/web/spring/images/m-spring/logo01.png')}}" /></a>
            <a class="page_logo02" href="javascript:void(0);"><img src="{{url('resources/views/web/spring/images/m-spring/logo02.png')}}" /></a>
        </div>

        <a class="new_img01" href="javascript:void(0);"><img src="{{url('resources/views/web/spring/images/m-spring/new01.png')}}" /></a>

        <div class="shark_box">
            <a class="shark_color" href="javascript:void(0);"><img src="{{url('resources/views/web/spring/images/m-spring/shake_bg1.png')}}" /></a>
            <a class="shark_icon01" href="javascript:void(0);"><img src="{{url('resources/views/web/spring/images/m-spring/shake_bg.png')}}" /></a>
            <a class="shark_icon02" href="javascript:void(0);"><img src="{{url('resources/views/web/spring/images/m-spring/head.png')}}" /></a>
        </div>
        <div class="shark_menu">
            <a class="shark_top" href="javascript:void(0);"><img src="{{url('resources/views/web/spring/images/m-spring/new02.png')}}" /></a>
            <div class="shark_list">
                <div class="shark_button shark_active">
                    <p class="shark_new04"></p>
                </div>
                <div class="shark_button shark_active">
                    <p class="shark_new01 shark_new02 shark_new03"></p>
                </div>
                <div class="shark_button shark_add">
                    <a class="shark_a" href="javascript:void(0);"><img src="{{url('resources/views/web/spring/images/m-spring/test03.png')}}" /></a>
                </div>
            </div>
        </div>
    </div>
    <!--end:info_bg-->
</div>
<!--end:warp-->

<!--begin:福利详情弹层-->
<div class="detail_fn hidden js_fuli">
    <div class="detail_box">
        <a class="detail_close" href="javascript:void(0);"><img src="{{url('resources/views/web/spring/images/m-spring/close01.png')}}" /></a>
        <div class="detail_top">
            <h2>福利详情</h2>
        </div>
        <div class="detail_font detail_hig">

            <div class="fu_box hidden">
                <p class="fu_img01"><img src="{{url('resources/views/web/spring/images/m-spring/new03.png')}}" /></p>
                <span class="fu_txt01">价值¥300英菲尼迪品牌精品雨伞</span>
            </div>

            <div class="fu_box">
                <p class="fu_img01"><img src="{{url('resources/views/web/spring/images/m-spring/new04.png')}}" /></p>
                <span class="fu_txt02">兑换有效期至2016年12月31日，请在有效期内到您选择的经销商使用该券</span>
            </div>

            <h1>车主大礼包</h1>
            <p>•到店尽享全车换季免费检测</p>
            <p>•更换4条轮胎送价值千元原厂防盗螺母1套</p>
            <p>•空调清洗服务零件工时双7折优惠</p>
            <p>•车载空气净化器新品限时8折特惠</p>
            <p>•续保优惠</p>
            <p>•换季用车贴士</p>

            <a class="fu_btn js_info" href="javascript:void(0);">填写信息 领取福利</a>
        </div>
    </div>
</div>
<!--end:福利详情弹层-->

<!--begin:领取成功弹层-->
<div class="detail_fn hidden">
    <div class="detail_box detail_wid">
        <div class="detail_top">
            <h2>领取成功</h2>
        </div>
        <div class="detail_ok"><img src="{{url('resources/views/web/spring/images/m-spring/ok.png')}}" /></div>
        <div class="detail_font">
            <h1>恭喜您！福利领取成功！</h1>
            <div class="detail_txt02">获得 <span>“车主大礼包”</span>使用有效期截止5月10号</div>
            <p>请在礼品对应有效期内前往选择的经销商领取福利（再次进入活动页面即可使用福利）</p>
            <p>最终解释权归东风英菲尼迪所有</p>
            <p>*  如有问题，可联系英菲尼迪官方服务热线</p>
            <p class="detail_txt01">400-880-9090</p>
            <div class="detail_btn hidden"><a href="javascript:void(0);">我已到店，现在使用福利</a></div>

            <div class="new_btn"><a href="javascript:void(0);">福利领取完毕</a></div>

            <p>与经销商店确认领取福利后，点此按钮确认</p>
        </div>
    </div>
</div>
<!--end:领取成功弹层-->

<!--begin:活动已参与弹层-->
<div class="detail_fn hidden">
    <div class="detail_box detail_frame">
        <a class="detail_close" href="javascript:void(0);"><img src="{{url('resources/views/web/spring/images/m-spring/close01.png')}}" /></a>
        <div class="detail_top">
            <h2>活动已参与</h2>
        </div>
        <div class="detail_ok"><img src="{{url('resources/views/web/spring/images/m-spring/time.png')}}" /></div>
        <div class="detail_font">
            <p>您已参与过本次活动并成功使用</p>
            <p>感谢您的支持！</p>
            <div class="detail_btn"><a href="javascript:void(0);">了解更多敢爱邦活动</a></div>
        </div>
    </div>
</div>
<!--end:活动已参与弹层-->
</body>
</html>
<script type="text/javascript">
    var user_id  = "{$user_id}";

    $(function(){

        //create a new instance of shake.js.
        var myShakeEventCui = new Shake({
            threshold: 100 // 摇动阈值
        });

        // start listening to device motion
        myShakeEventCui.start();//开始监听

        // register a shake event添加 摇一摇 事件监听
        window.addEventListener('shake', shakeEventDidOccurCui, false);//绑定函数

        var i = 1;
        //shake event callback 摇一摇回调函数
        function shakeEventDidOccurCui () {
//            var postData = {
//                'user_id' : user_id
//            };
//
//            if(i == 1) {
//                if (shakeNum >= 3) {
//                    return false;
//                }
//                //判断用户参与摇奖次数 不能超过3次
//                $.post(siteUrl+'/spring/m/ajax_get_lottery', postData, function(json){
//                    if (json.info == 'ok') {
//                        shakeNum++;
//                        var _index = json.ynum-1;
//
////                        $('.shark_list div').eq(_index).addClass('js_check').attr('name', json.info_id);
//                        $('.shark_list div').eq(_index).find('.shark_a').remove();//s删除a节点
//                        $('.shark_list div').eq(_index).removeClass('shark_add').prepend('<p class="'+json.class_name+'"></p>');
//                        $('.shark_list div').eq(_index).addClass('js_check').attr('name', json.info_id);
//                        $('.shark_list div').eq(_index).addClass('js_check').attr('data-type', json.prize_type);
//
//                        $('.js_check').on('click', function(){
//                            var id = $(this).attr('name');
//                            var _type = $(this).data('type');
//                            //判断发光样式是否存在 存在的话就是第二次点击 那么就可以执行跳转
////                            if ($(this).hasClass('shark_active')) {
////                                setTimeout(function(){
////                                    window.location.href = '{$smarty.const.SITE_URL}/spring/m/info?prize_id='+id;
////                                }, 1000);
////                            }
//
//                            //新曾发光样式
//                            $(this).siblings().removeClass('shark_active');
//                            $(this).addClass('shark_active');
//
//                            setTimeout(function(){
//                                $('.js_fuli_'+_type).removeClass("hidden");
//                                $(".js_fuli_"+_type).find(".fu_btn").attr("href", siteUrl+'/spring/m/info?prize_id='+id);
//                            }, 300);
//
//                        });
//
//                    } else if (json.info == 'explain') {
//                        can_shake = 0;
//                        alert(json.explain);
//                        shakeNum = 3;
//                        window.removeEventListener('shake', shakeEventDidOccurCui, false);//取消监听
//                    } else {
//                        return false;
//                    }
//                }, 'json');

//            }
        }

        //关闭弹层
        $('.detail_close').click(function(){
            $('.js_fuli').hide();
        });

        //关闭领取成功弹层
        $('.js_success_close').click(function(){
            $('.js_success').hide();
        });

        $('.js_check').on('click', function(){
            var id = $(this).attr('name');
            var prizeType = $(this).data('type');

            //新曾发光样式
            $(this).siblings().removeClass('shark_active');
            $(this).addClass('shark_active');
            setTimeout(function(){
                $('.js_fuli_'+prizeType).removeClass("hidden");
                $(".js_fuli_"+prizeType).find(".fu_btn").attr("href", siteUrl+'/spring/m/info?prize_id='+id);
            }, 300);

        });

        //点击空白位置触发事件
        $('.js_is_partake').click(function(){
            window.location.href = 'http://www.infinitiownerclub.com/m';
        });

        // 按钮
        $('.js_receive').click(function(e){
            e.stopPropagation();
            e.preventDefault();
            var prize_id = $('.detail_txt02').attr('name');
            var postData = {
                'id' : prize_id
            };

            var thisobj = $(this);

            $.post(siteUrl+'/spring/m/ajax_update_prize_lottery', postData, function(json) {
                if(json.info == 'ok'){
                    thisobj.removeClass('detail_btn').addClass('new_btn').find('a').html('福利领取完毕');

                }
            }, 'json');
        });

        // 按钮外部div
        $('.js_success').click(function(e){
            e.stopPropagation();
            e.preventDefault();
            window.location.href = 'http://www.infinitiownerclub.com/m';
        });

        $(".js_close").on("click", function(){
            $(this).closest(".js_xxx").addClass("hidden");
            $(".js_check").removeClass("shark_active");
        });



        //后来加的
        $('.shark_button').on('click', function(){
            $('.js_fuli').show();
        });
        $('.js_info').on('click', function(){
            window.location.href = '{{url('/201510infinitispring/info')}}';
        });
    });

</script>
