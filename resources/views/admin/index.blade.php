@extends('layouts.admin')

@section('content')

	<!--头部 开始-->
	<div class="top_box">
		<div class="top_left">
			<div class="logo"><a href="{{url('admin/info')}}" target="main">杰瑞后台管理模板</a></div>
			<ul>
				<li><a href="javascript:0;" target="_blank" class="active">博客管理</a></li>
				<li><a href="javascript:0;" target="main" >采集管理</a></li>
				<li><a href="javascript:0;" target="main" >词库管理</a></li>
				<li><a href="javascript:0;" target="main" >专题管理</a></li>
				<li><a href="javascript:0;" target="main" >文件管理</a></li>
				<li><a href="javascript:0;" target="main" >留言管理</a></li>
				<li><a href="javascript:0;" target="main" >系统管理</a></li>
				<li><a href="javascript:0;" target="main" >插件工具</a></li>
			</ul>
		</div>
		<div class="top_right">
			<ul>
				<li>管理员：admin</li>
				<li><a href="{{url('admin/pass')}}" target="main">修改密码</a></li>
				<li><a href="{{url('admin/quit')}}">退出</a></li>
			</ul>
		</div>
	</div>
	<!--头部 结束-->

	<!--左侧导航 开始-->
	<div class="menu_box">
		<ul class="top_left_sub_menu">
			<li>
				<h3><i class="fa fa-fw fa-clipboard"></i>博客板块</h3>
				<ul class="sub_menu">
					<li>
						<h3><i class="fa fa-fw fa-clipboard"></i>分类管理</h3>
						<ul class="sub_menu">
{{--							<li><a href="{{url('admin/category/create')}}" target="main"><i class="fa fa-fw fa-plus-square"></i>添加分类</a></li>--}}
							<li><a href="{{url('admin/category')}}" target="main"><i class="fa fa-fw fa-list-ul"></i>分类列表</a></li>
						</ul>
					</li>
					<li>
						<h3><i class="fa fa-fw fa-clipboard"></i>文章管理</h3>
						<ul class="sub_menu">
							{{--<li><a href="{{url('admin/article/create')}}" target="main"><i class="fa fa-fw fa-plus-square"></i>添加文章</a></li>--}}
							<li><a href="{{url('admin/article')}}" target="main"><i class="fa fa-fw fa-list-ul"></i>文章列表</a></li>
							{{--<li><a href="{{url('admin/article/sitemap')}}" target="main"><i class="fa fa-refresh"></i>更新网站地图</a></li>--}}
{{--							<li><a href="{{url('admin/article/shoulu')}}" target="main"><i class="fa fa-refresh"></i>更新文章收录</a></li>--}}
						</ul>
					</li>
					<li>
						<h3><i class="fa fa-fw fa-cog"></i>数据分析</h3>
						<ul class="sub_menu">
							<li><a href="{{url('admin/links')}}" target="main"><i class="fa fa-fw fa-image"></i>排名监测</a></li>
							<li><a href="{{url('admin/navs')}}" target="main"><i class="fa fa-fw fa-navicon"></i>收录监测</a></li>
							<li><a href="{{url('admin/navs')}}" target="main"><i class="fa fa-fw fa-navicon"></i>蜘蛛监测</a></li>
							<li><a href="{{url('admin/navs')}}" target="main"><i class="fa fa-fw fa-navicon"></i>蜘蛛监测</a></li>
						</ul>
					</li>
					{{--<li>--}}
						{{--<h3><i class="fa fa-fw fa-file-text-o"></i>文章管理</h3>--}}
						{{--<ul class="sub_menu">--}}
							{{--<li><a href="{{url('admin/article/create')}}" target="main"><i class="fa fa-fw fa-plus-square"></i>添加文章</a></li>--}}
							{{--<li><a href="{{url('admin/article')}}" target="main"><i class="fa fa-fw fa-list-ul"></i>文章列表</a></li>--}}
							{{--<li><a href="{{url('admin/article/sitemap')}}" target="main"><i class="fa fa-refresh"></i>更新网站地图</a></li>--}}
							{{--<li><a href="{{url('admin/article/shoulu')}}" target="main"><i class="fa fa-refresh"></i>更新文章收录</a></li>--}}
						{{--</ul>--}}
					{{--</li>--}}
				</ul>
			</li>
		</ul>
		<ul class="top_left_sub_menu">
			<li>
				<h3><i class="fa fa-fw fa-clipboard"></i>采集管理</h3>
				<ul class="sub_menu">
					<li><a href="{{url('admin/caiji')}}" target="main"><i class="fa fa-fw fa-list-ul"></i>采集规则列表</a></li>
					<li><a href="{{url('admin/caijiNews')}}" target="main"><i class="fa fa-fw fa-list-ul"></i>采集文章列表</a></li>
				</ul>
			</li>
		</ul>
		<ul class="top_left_sub_menu">
			<li>
				<h3><i class="fa fa-fw fa-clipboard"></i>词库管理</h3>
				<ul class="sub_menu">
					<li><a href="{{url('admin/category/create')}}" target="main"><i class="fa fa-fw fa-plus-square"></i>添加关键词</a></li>
					<li><a href="{{url('admin/category')}}" target="main"><i class="fa fa-fw fa-list-ul"></i>词库列表</a></li>
					<li><a href="{{url('admin/category')}}" target="main"><i class="fa fa-fw fa-list-ul"></i>内链列表</a></li>

				</ul>
			</li>
			<li>
				<h3><i class="fa fa-fw fa-tags"></i>标签管理</h3>
				<ul class="sub_menu">
					<li><a href="{{url('admin/tag/create')}}" target="main"><i class="fa fa-fw fa-plus-square"></i>添加Tag标签</a></li>
					<li><a href="{{url('admin/tag')}}" target="main"><i class="fa fa-fw fa-list-ul"></i>Tag标签列表</a></li>
				</ul>
			</li>
		</ul>
		<ul class="top_left_sub_menu">
			<li>
				<h3><i class="fa fa-fw fa-clipboard"></i>专题管理</h3>
				<ul class="sub_menu">
					<li><a href="{{url('admin/zhuanti/create')}}" target="main"><i class="fa fa-fw fa-plus-square"></i>添加教程专题名称</a></li>
					<li><a href="{{url('admin/zhuanti')}}" target="main"><i class="fa fa-fw fa-list-ul"></i>教程专题名称列表</a></li>
				</ul>
			</li>
		</ul>
		<ul class="top_left_sub_menu">
			<li>
				<h3><i class="fa fa-fw fa-film"></i>视频文件管理</h3>
				<ul class="sub_menu">
					<li><a href="{{url('admin/article/create')}}" target="main"><i class="fa fa-fw fa-cloud-upload"></i>上传视频文件</a></li>
					<li><a href="{{url('admin/article')}}" target="main"><i class="fa fa-fw fa-list-ul"></i>视频文件列表</a></li>
				</ul>
			</li>
			<li>
				<h3><i class="fa fa-fw fa-picture-o"></i>个人相册管理</h3>
				<ul class="sub_menu">
					<li><a href="{{url('admin/article/create')}}" target="main"><i class="fa fa-fw fa-cloud-upload"></i>上传相册图片</a></li>
					<li><a href="{{url('admin/article')}}" target="main"><i class="fa fa-fw fa-list-ul"></i>相册图片列表</a></li>
				</ul>
			</li>
			<li>
				<h3><i class="fa fa-fw fa-picture-o"></i>个人作品管理</h3>
				<ul class="sub_menu">
					<li><a href="{{url('admin/article/create')}}" target="main"><i class="fa fa-fw fa-cloud-upload"></i>上传网页作品</a></li>
					<li><a href="{{url('admin/article')}}" target="main"><i class="fa fa-fw fa-list-ul"></i>作品列表</a></li>
				</ul>
			</li>
			<li>
				<h3><i class="fa fa-fw fa-picture-o"></i>电子书管理</h3>
			</li>
			<li>
				<h3><i class="fa fa-fw fa-picture-o"></i>电子书管理</h3>
			</li>
		</ul>
		<ul class="top_left_sub_menu">
			<li>
				<h3><i class="fa fa-fw fa-file-text-o"></i>留言管理</h3>
				<ul class="sub_menu">
					<li><a href="{{url('admin/article')}}" target="main"><i class="fa fa-fw fa-list-ul"></i>留言列表</a></li>
				</ul>
			</li>
		</ul>
		<ul class="top_left_sub_menu">
			<li>
				<h3><i class="fa fa-fw fa-cog"></i>系统设置</h3>
				<ul class="sub_menu">
					<li><a href="{{url('admin/links')}}" target="main"><i class="fa fa-fw fa-image"></i>友情链接</a></li>
					<li><a href="{{url('admin/navs')}}" target="main"><i class="fa fa-fw fa-navicon"></i>自定义导航</a></li>
					<li><a href="{{url('admin/config')}}" target="main"><i class="fa fa-fw fa-cogs"></i>网站配置</a></li>
					<li><a href="{{url('admin/users')}}" target="main"><i class="fa fa-fw fa-cogs"></i>用户管理</a></li>
					<li><a href="{{url('admin/users')}}" target="main"><i class="fa fa-fw fa-cogs"></i>积分管理</a></li>
				</ul>
			</li>
		</ul>
		<ul class="top_left_sub_menu">
			<li>
				<h3><i class="fa fa-fw fa-thumb-tack"></i>工具导航</h3>
				<ul class="sub_menu">
					<li><a href="http://www.yeahzan.com/fa/facss.html" target="main"><i class="fa fa-fw fa-font"></i>图标调用</a></li>
					<li><a href="http://hemin.cn/jq/cheatsheet.html" target="main"><i class="fa fa-fw fa-chain"></i>Jquery手册</a></li>
					<li><a href="http://tool.c7sky.com/webcolor/" target="main"><i class="fa fa-fw fa-tachometer"></i>配色板</a></li>
					<li><a href="element.html" target="main"><i class="fa fa-fw fa-tags"></i>其他组件</a></li>
				</ul>
			</li>
		</ul>
	</div>
	<!--左侧导航 结束-->
<script>
	$(document).ready(function(){
		$('.menu_box .top_left_sub_menu').hide().find('li .sub_menu:nth-child(1)').show();
		$('.menu_box .top_left_sub_menu:nth-child(1)').show();

		$('.top_left').on('click', 'li', function(){
			$(this).find('a').addClass('active').parent().siblings('li').find('a').removeClass('active');
			//对应ul显示出来，其余隐藏
			$('.menu_box').find('.top_left_sub_menu').eq($(this).index()).show().siblings('.top_left_sub_menu').hide();
			$('.menu_box .top_left_sub_menu').eq($(this).index()).find('li .sub_menu:nth-child(1)').show();
		});
		$('.sub_menu').on('click', 'li a', function(){
			$('.menu_box').find('a').css({
				color:'#333'
			});
			$(this).css({
				color:'#428bca'
			}).parent().siblings('li').find('a').css({
				color:'#333'
			});
		});
	});
</script>
	<!--主体部分 开始-->
	<div class="main_box">
		<iframe src="{{url('admin/info')}}" frameborder="0" width="100%" height="100%" name="main"></iframe>
	</div>
	<!--主体部分 结束-->

	<!--底部 开始-->
	<div class="bottom_box">
		CopyRight © 2015. Powered By <a href="http://www.apcline.com">http://www.apcline.com</a>.
	</div>
	<!--底部 结束-->

@endsection
