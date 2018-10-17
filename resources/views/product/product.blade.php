<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        .pin{width:100%;margin:0 auto;padding:10px;overflow:hidden;box-sizing: border-box;border:1px solid #fff;}
        .box{width:15%;float:left;overflow: hidden;padding:9px;margin:10px;border:1px solid #ccc;opacity: .6;transition:all 1s linear;}
		.box:nth-child(3n){margin-right:0;}
        .box:hover{opacity: 1;}
        .box>div:nth-of-type(1){width: 100%;height: 200px;overflow: hidden;}
        .box>div:nth-of-type(1)>a{display:block;width: 100%;height:auto;}
        .box>div:nth-of-type(1)>a>img{width: 100%;height:auto;}
        .box>div:nth-of-type(2){width:100%;margin-top:10px;background: #F6F6F6;}
        .box>div:nth-of-type(2)>a{width: 100%;height:100%;display:block;line-height: 60px;color:#535350;text-align: center;font-size: 15px;transition:all .8s linear;}
        .box>div:nth-of-type(2)>a:hover{text-decoration: none;background: #535350;color:#fff;}
        .box>div:nth-of-type(2)>a:nth-of-type(1){}
        .box>div:nth-of-type(2)>a:nth-of-type(2){}

	

    </style>
    <style>
	* { margin: 0; }
	.jq22-container { margin-top: 50px; }
	#div1 { margin: auto; position: relative; }
	.box { float: left; padding: 10px; border: 1px solid #ccc; background: #f7f7f7; box-shadow: 0 0 8px #ccc; }
	.box:hover { box-shadow: 0 0 10px #999; }
	.box img { width: 240px; }
	</style>
	<!--[if IE]>
		<script src="http://libs.baidu.com/html5shiv/3.7/html5shiv.min.js"></script>
	<![endif]-->
</head>
<body>

	<!--导航 站酷-->
	<nav>
		<ul>
			<li><a href="{{url('/')}}">返回首页</a></li>
			<li><a href="{{url('/special')}}">CSS特效Demo</a></li>
			<li><a href="{{url('/JSspecial')}}">JS特效Demo</a></li>
			<li><a href="{{url('/AVspecial')}}">音/视频Demo</a></li>
			<li><a href="{{url('/JQueryspecial')}}">jQuery的Demo</a></li>
			<li><a href="http://123.56.247.220/">Canvas特效Demo</a></li>
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
			{{--<li>--}}
				{{--<a href="{{url('/')}}">数据库</a>--}}
				{{--<ul>--}}
					{{--<li><a href="#">MySQL</a></li>--}}
					{{--<li><a href="#">Memcache</a></li>--}}
					{{--<li><a href="#">Redis</a></li>--}}
					{{--<li><a href="#">Mongodb</a></li>--}}
					{{--<li><a href="#">Oracle</a></li>--}}
				{{--</ul>--}}
			{{--</li>--}}
			{{--<li>--}}
				{{--<a href="{{url('/')}}">web前端</a>--}}
				{{--<ul>--}}
					{{--<li><a href="#">CSS3</a></li>--}}
					{{--<li><a href="#">JavaScript</a></li>--}}
					{{--<li><a href="#">HTML5</a></li>--}}
					{{--<li><a href="#">Canvas</a></li>--}}
					{{--<li><a href="#">Svg</a></li>--}}
					{{--<li><a href="#">Less/Sass</a></li>--}}
					{{--<li><a href="#">BootStrap</a></li>--}}
					{{--<li><a href="#">JQuery</a></li>--}}
				{{--</ul>--}}
			{{--</li>--}}
			{{--<li>--}}
				 {{--<a href="{{url('/cate/3')}}">Node</a>--}}
				 {{--<ul>--}}
					{{--<li><a href="#">Node.js</a></li>--}}
					{{--<li><a href="#">Angular.js</a></li>--}}
					{{--<li><a href="#">Zepto.js</a></li>--}}
					{{--<li><a href="#">Ext.js</a></li>--}}
					{{--<li><a href="#">jQueryMobile</a></li>--}}
					{{--<li><a href="#">PhoneGap</a></li>--}}
					{{--<li><a href="#">senchaTouch</a></li>--}}
				{{--</ul>--}}
			{{--</li>--}}
			{{--<li>--}}
				{{--<a href="{{url('/')}}">Linux</a>--}}
				{{--<ul>--}}
					{{--<li><a href="#">Lamp</a></li>--}}
					{{--<li><a href="#">Lnmp</a></li>--}}
				{{--</ul>--}}
			{{--</li>--}}
		</ul>
	</nav>


	<div id="main">

		<div class="jq22-container">
			<div class="jq22-content bgcolor-3">
				<div class="pin" id="div1">
					<div class="box">
						<div>
							<a href="{{url('/201510infiniti/spring')}}">
								<img src="{{url('resources/views/product/images/201510infinitspring.png')}}" alt="">
							</a>
						</div>
						<div>
							<a href="{{url('/201510infiniti/spring')}}">英菲尼迪摇一摇手机端</a>
						</div>
					</div>
					<div class="box">
						<div>
							<a href="{{url('/201510infiniti/question')}}">
								<img src="{{url('resources/views/product/images/201510infinitiquestion.png')}}" alt="">
							</a>
						</div>
						<div>
							<a href="{{url('/201510infiniti/question')}}">敢爱帮每周十问手机端</a>
						</div>
					</div>
					<div class="box">
						<div>
							<a href="http://node.jierui303.com/" title="node+express+ejs+bootstrap+sass制作">
								<img src="{{url('resources/views/product/images/czl.png')}}" alt="翠竹林官网，使用bootstrap框架+node+express">
							</a>
						</div>
						<div>
							<a href="http://node.jierui303.com/">翠竹林PC端</a>
						</div>
					</div>
					<div class="box">
						<div>
							<a href="{{url('/bcwl')}}">
								<img src="{{url('resources/views/product/images/bcwl.png')}}" alt="">
							</a>
						</div>
						<div>
							<a href="{{url('/bcwl')}}">博彩网络PC端</a>
						</div>
					</div>
					<div class="box">
						<div>
							<a href="{{url('/gwyc')}}">
								<img src="{{url('resources/views/product/images/gwyc.png')}}" alt="">
							</a>
						</div>
						<div>
							<a href="{{url('/gwyc')}}">港湾有巢PC端</a>
						</div>
					</div>
					<div class="box">
						<div>
							<a href="{{url('/hdwy')}}">
								<img src="{{url('resources/views/product/images/hdwy.png')}}" alt="">
							</a>
						</div>
						<div>
							<a href="{{url('/hdwy')}}">惠达卫浴PC端</a>
						</div>
					</div>
					<div class="box">
						<div>
							<a href="{{url('/qt')}}">
								<img src="{{url('resources/views/product/images/qt.png')}}" alt="纯css3样式控制+html布局">
							</a>
						</div>
						<div>
							<a href="{{url('/qt')}}">自学PSD图制作PC端</a>
						</div>
					</div>
					<div class="box">
						<div>
							<a href="{{url('/hytz')}}">
								<img src="{{url('resources/views/product/images/hytz.png')}}" alt="纯css3样式控制+html布局">
							</a>
						</div>
						<div>
							<a href="{{url('/hytz')}}">火盈投资PC端</a>
						</div>
					</div>

					<div class="box">
						<div>
							<a href="{{url('/xmgw')}}">
								<img src="{{url('resources/views/product/images/xmgw.png')}}" alt="使用jquery写特效的小米官网首页">
							</a>
						</div>
						<div>
							<a href="{{url('/xmgw')}}">小米官网[PC端]</a>
						</div>
					</div>
					<div class="box">
						<div>
							<a href="{{url('/yht')}}">
								<img src="{{url('resources/views/product/images/yht.png')}}" alt="仿悦合同官网，使用bootstrap框架">
							</a>
						</div>
						<div>
							<a href="{{url('/yht')}}">悦合同PC端</a>
						</div>
					</div>
					<div class="box">
						<div>
							<a href="{{url('/allx')}}">
								<img src="{{url('resources/views/product/images/allx.gif')}}" alt="仿阿里旅行手机版首页，使用rem适配屏幕">
							</a>
						</div>
						<div>
							<a href="{{url('/allx')}}">阿里旅行手机版首页</a>
						</div>
					</div>
					<div class="box">
						<div>
							<a href="{{url('/mtb')}}">
								<img src="{{url('resources/views/product/images/mtb.png')}}" alt="仿淘宝手机版首页，使用rem适配屏幕">
							</a>
						</div>
						<div>
							<a href="{{url('/mtb')}}">淘宝手机版首页</a>
						</div>
					</div>
					<div class="box">
						<div>
							<a href="{{url('/mtbxq')}}">
								<img src="{{url('resources/views/product/images/mtbxq.png')}}" alt="仿悦合同官网，使用bootstrap框架">
							</a>
						</div>
						<div>
							<a href="{{url('/mtbxq')}}">淘宝商品手机版详情页</a>
						</div>
					</div>
					<div class="box">
						<div>
							<a href="{{url('/mtbcart')}}">
								<img src="{{url('resources/views/product/images/mtbcart.png')}}" alt="仿淘宝手机版首页，使用rem适配屏幕">
							</a>
						</div>
						<div>
							<a href="{{url('/mtbcart')}}">淘宝购物车手机版</a>
						</div>
					</div>
					<div class="box">
						<div>
							<a href="{{url('/mtbuser')}}">
								<img src="{{url('resources/views/product/images/mtbuser.png')}}" alt="仿阿里旅行手机版首页，使用rem适配屏幕">
							</a>
						</div>
						<div>
							<a href="{{url('/mtbuser')}}">淘宝个人中心手机版</a>
						</div>
					</div>
					<div class="box">
						<div>
							<a href="http://node.jierui303.com/" title="赞那时移动端首页，使用bootstrap框架+jQuery实现自适应页面布局">
								<img src="{{url('resources/views/product/images/zns.jpg')}}" alt="赞那时移动端首页，使用bootstrap框架+jQuery实现自适应页面布局">
							</a>
						</div>
						<div>
							<a href="{{url('/zns')}}">赞那时移动端</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<!-- <script src="http://www.jq22.com/jquery/1.7.2/jquery.min.js"></script>  -->
<!-- <script type="text/javascript" src="{{asset('resources/views/product/js/jquery.waterfall.js')}}"></script> -->

</body>
</html>
