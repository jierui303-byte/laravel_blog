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

            var win = $(document).height();
            $('#warp, .page_index').css('height', win + 'px');
        }
    </script>
</head>

<body>
<div id="warp">
    <div class="page_index info_bg">
        <div class="page_head clearfix">
            <a class="page_logo01" href="javascript:void(0);"><img src="{{url('resources/views/web/spring/images/m-spring/logo01.png')}}" /></a>
            <a class="page_logo01" href="javascript:void(0);"><img src="{{url('resources/views/web/spring/images/m-spring/logo02.png')}}" /></a>
        </div>

        <div class="info_box">
            <div class="info_label">
                <ul>
                    <li><span>车主姓名</span><input type="text" /></li>
                    <li><span>联系方式</span><input type="text" /></li>
                    <li><span>车牌号</span><input type="text" /></li>
                    <li><span>VIN核对</span><input type="text" value="7W7HSUE638HB467HT" /></li>
                    <li><span>车牌号</span>
                        <select class="info_wid01">
                            <option value="北京">北京</option>
                            <option value="天津">天津</option>
                            <option value="南京">南京</option>
                        </select>
                        <select class="info_wid01">
                            <option value="北京">北京</option>
                            <option value="天津">天津</option>
                            <option value="南京">南京</option>
                        </select>
                    </li>
                    <li><span>选择经销商</span>
                        <select class="info_wid02">
                            <option value="北京">北京</option>
                            <option value="天津">天津</option>
                            <option value="南京">南京</option>
                        </select>
                    </li>
                </ul>
            </div>
            <!--end: info_label-->
            <div class="info_mr"><input type="checkbox" /><em></em>我已阅读并同意<a href="###" class="js_provisition">《个人信息收集，使用和保护条款》</a></div>
            <div class="info_btn js_submit"><a href="javascript:void(0);">提交</a></div>
        </div>
    </div>
    <!--end:info_bg-->
</div>
<!--end:warp-->

<!--begin:推荐认证码浮层-->
<div class="detail_fn hidden js_success">
    <div class="detail_box detail_wid">
        <a class="detail_close" href="javascript:void(0);"><img src="{{url('resources/views/web/spring/images/m-spring/close01.png')}}" /></a>
        <div class="detail_top">
            <h2>领取成功</h2>
        </div>
        <div class="detail_ok"><img src="{{url('resources/views/web/spring/images/m-spring/ok.png')}}" /></div>
        <div class="detail_font">
            <h1>恭喜您！福利领取成功！</h1>
            <p>请前往选择的经销商使用福利。</p>
            <p>最终解释权归东风英菲尼迪所有</p>
            <p>*  如有问题，可联系英菲尼迪官方服务热线</p>
            <p class="detail_txt01">400-880-9090</p>
        </div>
    </div>
</div>
<!--begin:推荐认证码浮层-->

<!--begin:保护条款弹层-->
<div class="provision_fn hidden">
    <a href="javascript:void(0);"><img src="{{url('resources/views/web/spring/images/m-spring/close.png')}}" /></a>
    <div class="wrapper">
        <div id="scroll" class="prov_box">
            <h1>我已阅读并同意</h1>
            <h1>《个人信息收集、使用和保护条款》</h1>
            <span>个人信息收集、使用和保护条款</span>
            <p>一、为了能够与您取得联系并给予您及时的反馈，日产（中国）投资有限公司（以下称“NCIC”）和东风英菲尼迪汽车有限公司（以下称“DFI”）将会在您注册会员、报名参加英菲尼迪品牌各项活动的过程中收集您的个人信息（包括但不限于姓名、手机号/电话号码、联系地址、有效证件号、车辆信息等）并将该信息用于包括但不限于如下目的：</p>
            <p>（1）对您的注册或报名给予反馈并解答您提出的问询或咨询；</p>
            <p>（2）告知您会员活动或其他英菲尼迪品牌活动并向您发出邀请；</p>
            <p>（3）作为在您报名参加的会员活动或英菲尼迪品牌活动中与您取得联系的必要方式；</p>
            <p>（4）向您发出与英菲尼迪品牌及其产品和服务相关的调查的邀请；</p>
            <p>（5）向您发出与英菲尼迪产品或服务相关的产品信息、服务信息或邀请（包括但不限于与英菲尼迪产品或服务相关的促销活动信息或邀请、产品或服务介绍、市场活动信息等）；</p>
            <p>（6）其他经您同意可使用该信息的目的。</p>
            <p>二、您同意NCIC和DFI可将收集到的您的个人信息提供给英菲尼迪品牌经销商（以下称“经销商”）并由经销商按照以上第一条所述的目的使用您的个人信息，前提是NCIC和DFI确保经销商不会非法泄露、篡改、出售或者非法向无关方提供您的个人信息，并且，NCIC和DFI确保经销商应仅为了第一条所述的目的而使用您的个人信息。</p>
            <p>三、NCIC和DFI承诺除非另外获得您的书面同意，不会将收集到的您的个人信息用于本条款约定以外的目的和范围，也不会向本条款约定的主体以外的其他方提供您的个人信息，但司法机关、行政机关等国家公权力机关或仲裁机构根据法律规定依法要求提供的除外。</p>
            <p>以上条款将在您表示同意后生效。</p>
        </div>
    </div>

</div>
<!--end:保护条款弹层-->
</body>
</html>
<script type="text/javascript">
    $(function(){


        var prize_id = "{$prize_id}";

        //城市选择 动态添加
        $('.js_province').change(function(){
            var area_id = $(this).val();
            var postData = {
                'area_id' : area_id
            };

            //ajax获取该区域下的省市
            $.post(siteUrl+'/spring/m/ajax_get_city', postData, function(json){
                if(json.info == 'ok'){
                    $('.js_city option').remove();
                    $('.js_distributor option').remove();
                    $('.js_city').append(json.str);
                    $('.js_distributor').append(json.dis_str);
                }
            }, 'json');

        });

        //经销商选择 动态添加
        $('.js_city').change(function(){
            var province_id = $(this).val();
            var postData = {
                'province_id' : province_id
            };

            //ajax获取该区域下的省市
            $.post(siteUrl+'/spring/m/ajax_get_distributor', postData, function(json){
                console.log(json);
                if(json.info == 'ok'){
                    $('.js_distributor option').remove();
                    $('.js_distributor').append(json.str);
                }
            }, 'json');

        });



        //提交表单
//        $('.js_submit').click(function(){
//            var name       = $("input[name='name']").val();
//            var mobile     = $("input[name='mobile']").val();
//            var car_number = $("input[name='car_number']").val();
//            var vin_code   = $("input[name='vin_code']").val();
//
//            var area_id        = $('.js_province').val();//区域id
//            var province_id    = $('.js_city').val();//省/市id
//            var distributor_id = $('.js_distributor').val();//经销商
//
//            if (!name) {
//                alert('姓名不能为空');
//                return false;
//            }
//
//            if (!mobile || isNaN(mobile)) {
//                alert('联系方式不能为空且必须为数字格式');
//                return false;
//            }
//
//            {literal}
//            var reg = /^(0|86|17951)?(13[0-9]|15[012356789]|17[678]|18[0-9]|14[57])[0-9]{8}$/;
//            if (!reg.test(mobile)) {
//                alert("号码必须是11位!");
//                return false;
//            }
//            {/literal}
//
//            if (!car_number) {
//                alert('车牌号不能为空');
//                return false;
//            }
//
//            if (!area_id || !province_id) {
//                alert('城市不能为空');
//                return false;
//            }
//
//            if (!distributor_id) {
//                alert('经销商不能为空');
//                return false;
//            }
//
//            var postData = {
//                'name'             : name,
//                'mobile'           : mobile,
//                'car_number'       : car_number,
//                'vin_code'         : vin_code,
//                'area_id'          : area_id,
//                'province_id'      : province_id,
//                'distributor_id'   : distributor_id,
//                'prize_id'         : prize_id
//            };
//
//            //ajax提交领取信息
//            $.post(siteUrl+'/spring/m/ajax_add_user_info', postData, function(json){
//                if (json.info == 'ok') {
//                    if(json.is_canyu == 1){
//                        $('.js_span').append('获得 <span>“车主大礼包”</span>');
//                        $('.js_distributor').html('领取说明: 请于2016年5月10日之前至   '+json.distributor+'  领取福利（再次进入活动页面即可使用福利）');
//                        $('.js_success').show();//领取成功弹层
//                    }else if(json.is_canyu == 2){
//                        $('.js_span').append('获得 <span>“车主大礼包”</span> 、<span>“英菲尼迪定制雨伞”</span> ');
//                        $('.js_distributor').html('领取说明: 请于2016年5月10日之前至   '+json.distributor+'  领取福利（再次进入活动页面即可使用福利）');
//                        $('.js_success').show();//领取成功弹层
//                    }else if(json.is_canyu == 3){
//                        $('.js_span').append('获得 <span>“车主大礼包”</span> 、<span>“1升装原厂全合成机油兑换券”</span> ');
//                        $('.js_distributor').html('领取说明: 请于2016年5月10日之前至   '+json.distributor+'  领取福利，其中1升原厂全合成机油兑换券领取有效期为6月30日（再次进入活动页面即可使用福利）');
//                        $('.js_success').show();//领取成功弹层
//                    }else{
//                        $('.js_span').append('获得 <span>“车主大礼包”</span> 、<span>“1升装原厂全合成机油兑换券”</span> 、<span>"价值 ¥500 续保代金券"</span> ');
//                        $('.js_distributor').html('领取说明: 请于2016年5月10日之前至   '+json.distributor+'  领取福利，其中1升原厂全合成机油兑换券领取有效期为6月30日（再次进入活动页面即可使用福利），500元续保代金券使用有效期至2016年12月31日， 2016年6月30日之前（包括6月30日），可凭借此活动获奖页面或兑换短信（兑换短信会在两个工作日内发送给参与活动的车主）前往选择的经销商领取使用；2016年7月1日-2016年12月31日，可凭借兑换短信前往选择的经销商领取使用。');
//                        $('.js_success').show();//领取成功弹层
//                    }
//
//                } else {
//                    alert('领取失败或您已参与过此活动!');
//                }
//            }, 'json');
//
//
//        });

        //到店领取状态更新
//        $('.js_receive').click(function(){
//            var postData = {
//                'id' : prize_id
//            };
//
//            $.post(siteUrl+'/spring/m/ajax_update_prize_lottery', postData, function(json) {
//                if(json.info == 'ok'){
//                    alert('领取成功,谢谢参与!');
//                    $('.js_success').hide();
//                    $('.js_is_partake').show();
//                }
//            }, 'json');
//        });


        //点击空白位置触发事件
        $('.js_is_partake').click(function(){
            window.location.href = 'http://www.infinitiownerclub.com/m';
        });

        // 按钮
        $('.js_receive').click(function(e){
            e.stopPropagation();
            e.preventDefault();
            var postData = {
                'id' : prize_id
            };

            var thisobj = $(this);
            $.post(siteUrl+'/spring/m/ajax_update_prize_lottery', postData, function(json) {
                if(json.info == 'ok'){
//                    alert('领取成功,谢谢参与!');
                    thisobj.removeClass('detail_btn').addClass('new_btn').find('a').html('福利领取完毕');
//                    $('.js_success').hide();//到店领取
//                    $('.js_is_partake').show();//活动已参与
                }
            }, 'json');
        });

        // 按钮外部div
        $('.js_success').click(function(e){
            e.stopPropagation();
            e.preventDefault();
//            window.location.href = 'http://www.infinitiownerclub.com/m';
        });

        //显示保护协议弹层
        $('.js_provisition').click(function(){
            $('.js_provisition_tc').show();
        });

        //关闭保护协议弹层
        $('.js_close').click(function(){
            $('.js_provisition_tc').hide();
        });


        $('.js_submit').click(function(){
            $('.js_success').show();
        });

    });



</script>


