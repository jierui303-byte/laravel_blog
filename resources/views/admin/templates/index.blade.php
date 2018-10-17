﻿@include('admin.common._meta')

<title>词库管理 - 词库管理 - H-ui.admin v3.0</title>
<meta name="keywords" content="H-ui.admin v3.0,H-ui网站后台模版,后台模版下载,后台管理系统模版,HTML后台模版下载">
<meta name="description" content="H-ui.admin v3.0，是一款由国人开发的轻量级扁平化网站后台模板，完全免费开源的网站后台管理系统模版，适合中小型CMS后台系统。">
<style>
	.icheckbox-blue, .iradio-blue{
		margin: 5px;
	}
</style>
</head>
<body>
@include('admin.common._header')

@include('admin.common._menu')

<section class="Hui-article-box">
	<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页
		<span class="c-gray en">&gt;</span>
		词库管理
		<span class="c-gray en">&gt;</span>
		词库管理
		<a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a>
	</nav>
	<div class="Hui-article">
		<article class="cl pd-20">
			<div class="text-c">
				<span class="select-box inline">
				<select name="" class="select">
					<option value="0">全部分类</option>
					<option value="1">分类一</option>
					<option value="2">分类二</option>
				</select>
				</span>
				日期范围：
				<input type="text" onfocus="WdatePicker({maxDate:'#F{$dp.$D(\'logmax\')||\'%y-%M-%d\'}'})" id="logmin" class="input-text Wdate" style="width:120px;">
				-
				<input type="text" onfocus="WdatePicker({minDate:'#F{$dp.$D(\'logmin\')}',maxDate:'%y-%M-%d'})" id="logmax" class="input-text Wdate" style="width:120px;">
				<input type="text" name="" id="" placeholder=" 资讯名称" style="width:250px" class="input-text">
				<button name="" id="" class="btn btn-success" type="submit"><i class="Hui-iconfont">&#xe665;</i> 搜资讯</button>
			</div>
			<div class="cl pd-5 bg-1 bk-gray mt-20">
				<span class="l">
				    <a href="javascript:;" onclick="all_del()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a>
					{{--<a class="btn btn-primary radius" data-title="词根分类" onclick="article_add('词根分类','{{url('admin/keywordsType/create')}}', '400', '200')" href="javascript:;"><i class="Hui-iconfont">&#xe600;</i> 词根分类</a>--}}
					<a class="btn btn-primary radius" data-title="添加模板" onclick="article_add('添加模板','{{url('admin/templates/create')}}', '800', '300')" href="javascript:;"><i class="Hui-iconfont">&#xe600;</i> 添加模板</a>
				</span>
				<span class="r">共有数据：<strong>{{$count}}</strong> 条</span>
			</div>
			<div class="portfolio-content skin-minimal">
				<ul class="cl portfolio-area">
					<li class="item">
						<div class="portfoliobox">
							<div class="picTool">
							</div>
							<div class="picbox">
								<a href="{{url('resources/views/common/default')}}/temp.png" data-lightbox="gallery" data-title="默认模板">
									<img src="{{url('resources/views/common/default')}}/temp.png">
								</a>
							</div>
							<div class="textbox" style="display: block;background: #ea0f19;color: #fff;text-align: center;padding: 5px;width: 100%;box-sizing: border-box;margin: 0;">默认模板</div>
						</div>
					</li>
					@foreach($data as $v)
					<li class="item">
						<div class="portfoliobox">
							<div class="picTool">
								<input class="checkbox" name="" type="checkbox" value="">
								<a class="ml-5 picDel" onClick="del('{{$v->temp_id}}')" href="javascript:;" title="删除">
									<i class="Hui-iconfont">&#xe6e2;</i>
								</a>
							</div>
							<div class="picbox">
								<a href="{{url($v->temp_source_path)}}/temp.png" data-lightbox="gallery" data-title="{{$v->temp_name}}">
									<img src="{{url($v->temp_source_path)}}/temp.png">
								</a>
							</div>
							<div class="textbox" style="display: block;background: #5eb95e;color: #fff;text-align: center;padding: 5px;width: 100%;box-sizing: border-box;margin: 0;">{{$v->temp_name}} </div>
						</div>
					</li>
					@endforeach
				</ul>
			</div>
		</article>
	</div>
</section>

@include('admin.common._footer')

		<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="{{asset('resources/views/admin/lib/My97DatePicker/4.8/WdatePicker.js')}}"></script>
<script type="text/javascript" src="{{asset('resources/views/admin/lib/datatables/1.10.0/jquery.dataTables.min.js')}}"></script>
<script type="text/javascript" src="{{asset('resources/views/admin/lib/laypage/1.2/laypage.js')}}"></script>
<script type="text/javascript">
	$(function(){
		$('.skin-minimal input').iCheck({
			checkboxClass: 'icheckbox-blue',
			radioClass: 'iradio-blue',
			increaseArea: '20%'
		});
		//全选与反选
		var checkAll = $('#checkboxAll');
		var checkboxes = $('input[name=picCheck]');
		checkAll.on('ifChecked ifUnchecked', function(event) {
			if (event.type == 'ifChecked') {
				checkboxes.iCheck('check');
			} else {
				checkboxes.iCheck('uncheck');
			}
		});
		checkboxes.on('ifChanged', function(event){
			if(checkboxes.filter(':checked').length == checkboxes.length) {
				checkAll.prop('checked', 'checked');
			} else {
				checkAll.removeProp('checked');
			}
			checkAll.iCheck('update');
		});

		$('.table-sort').dataTable({
			"aaSorting": [[ 1, "desc" ]],//默认第几个排序
			"bStateSave": true,//状态保存
			"aoColumnDefs": [
				//{"bVisible": false, "aTargets": [ 3 ]} //控制列的隐藏显示
				{"orderable":false,"aTargets":[0,6]}// 不参与排序的列
			]
		});
	});

	/*资讯-添加*/
	function article_add(title,url,w,h){
		var index = layer.open({
			type: 2,
			area: [w+'px', h +'px'],
			title: title,
			content: url
		});
//        layer.full(index);
	}

	/*资讯-编辑*/
	function article_edit(title,url,w,h){
		var index = layer.open({
			type: 2,
			area: [w+'px', h +'px'],
			title: title,
			content: url
		});
//        layer.full(index);
	}

	/*单条删除*/
	function del(dataId) {
		var postUrl = '{{url('admin/collectRules/del')}}/'+dataId;
		layer.confirm('你确定要删除吗？', {
			btn: ['确定','取消'] //按钮
		}, function(){
			//model为数据模型类名
			$.post(postUrl,{'_method':'delete', '_token':'{{csrf_token()}}'},function(responseData){
				if (responseData.code == 1) {
					layer.msg(responseData.msg,{icon:"6",time:responseData.wait*1000});
					setTimeout(function(){
						window.location.href = responseData.url;
					},1000)
				} else {
					layer.msg(responseData.msg,{icon:"6",time:responseData.wait*1000});
					setTimeout(function(){
						window.location.href = responseData.url;
					},1000)
				}
			});
		}, function(){
			layer.msg('取消成功', {icon:"6",time: 1000});
		});
	}
	/*多条删除*/
	function all_del(){
		var postUrl = "{{url('admin/collectRules/del_all')}}";
		var str = '';
		$(".zsort").each(function(){
			if($(this).find('input').prop('checked')){
				str += $(this).data('id')+',';
			}
		});
		if(!str){
			layer.msg('请先选中待删除数据', {icon:"6",time: 1000});
			return false;
		}
		layer.confirm('你确定要删除选中的多项吗？', {
			btn: ['确定','取消'] //按钮
		}, function(){
			console.log(str);
			//model为数据模型类名
			$.post(postUrl,{
				'id':str,
				'_method':'delete',
				'_token':'{{csrf_token()}}'
			},function(responseData){
				if (responseData.code == 1) {
					layer.msg(responseData.msg,{icon:"6",time:responseData.wait*1000});
					setTimeout(function(){
						window.location.href = responseData.url;
					},1000)
				} else {
					layer.msg(responseData.msg,{icon:"5",time:responseData.wait*1000});
					setTimeout(function(){
						window.location.href = responseData.url;
					},1000)
				}
			});
		}, function(){
			layer.msg('取消成功', {icon:"6",time: 1000});
		});
	}

	/*资讯-审核*/
	function article_shenhe(obj,id){
		layer.confirm('审核文章？', {
					btn: ['通过','不通过','取消'],
					shade: false,
					closeBtn: 0
				},
				function(){
					$(obj).parents("tr").find(".td-manage").prepend('<a class="c-primary" onClick="article_start(this,id)" href="javascript:;" title="申请上线">申请上线</a>');
					$(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">已发布</span>');
					$(obj).remove();
					layer.msg('已发布', {icon:6,time:1000});
				},
				function(){
					$(obj).parents("tr").find(".td-manage").prepend('<a class="c-primary" onClick="article_shenqing(this,id)" href="javascript:;" title="申请上线">申请上线</a>');
					$(obj).parents("tr").find(".td-status").html('<span class="label label-danger radius">未通过</span>');
					$(obj).remove();
					layer.msg('未通过', {icon:5,time:1000});
				});
	}
	/*资讯-下架*/
	function article_stop(obj,id){
		layer.confirm('确认要下架吗？',function(index){
			$(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="article_start(this,id)" href="javascript:;" title="发布"><i class="Hui-iconfont">&#xe603;</i></a>');
			$(obj).parents("tr").find(".td-status").html('<span class="label label-defaunt radius">已下架</span>');
			$(obj).remove();
			layer.msg('已下架!',{icon: 5,time:1000});
		});
	}

	/*资讯-发布*/
	function article_start(obj,id){
		layer.confirm('确认要发布吗？',function(index){
			$(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="article_stop(this,id)" href="javascript:;" title="下架"><i class="Hui-iconfont">&#xe6de;</i></a>');
			$(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">已发布</span>');
			$(obj).remove();
			layer.msg('已发布!',{icon: 6,time:1000});
		});
	}
	/*资讯-申请上线*/
	function article_shenqing(obj,id){
		$(obj).parents("tr").find(".td-status").html('<span class="label label-default radius">待审核</span>');
		$(obj).parents("tr").find(".td-manage").html("");
		layer.msg('已提交申请，耐心等待审核!', {icon: 1,time:2000});
	}
</script>
<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>