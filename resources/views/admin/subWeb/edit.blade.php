@include('admin.common._meta')

<title>新增文章 - 资讯管理 - H-ui.admin v3.0</title>
<meta name="keywords" content="H-ui.admin v3.0,H-ui网站后台模版,后台模版下载,后台管理系统模版,HTML后台模版下载">
<meta name="description" content="H-ui.admin v3.0，是一款由国人开发的轻量级扁平化网站后台模板，完全免费开源的网站后台管理系统模版，适合中小型CMS后台系统。">
</head>
<body>
<article class="page-container">
	<form action="" method="post" class="form form-horizontal" id="my-form-submit">
		<input type="hidden" name="_method" value="put">
		{{csrf_field()}}
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>网站名称：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="{{$field->web_name}}" placeholder="" id="web_name" name="web_name">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">网站URL：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="{{$field->web_url}}" placeholder="" id="web_url" name="web_url">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>网站类型：</label>
			<div class="formControls col-xs-8 col-sm-9"> <span class="select-box">
					<select name="web_type_pid" id="web_type_pid" class="select">
						@foreach($data as $k=>$d)
                            @if($d->type_pid == 0)
                                <option value="{{$d->type_id}}" disabled>{{$d->_type_name}}</option>
                            @else
                                <option value="{{$d->type_id}}">{{$d->_type_name}}</option>
                            @endif
						@endforeach
					</select>
				</span>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">IP地址：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="{{$field->web_ip}}" placeholder="" id="web_ip" name="web_ip">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">百度收录：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="{{$field->web_baidu_soulu}}" placeholder="" id="web_baidu_soulu" name="web_baidu_soulu">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">用户名：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="{{$field->web_user_name}}" placeholder="" id="web_user_name" name="web_user_name">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">密码：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="{{$field->web_user_pwd}}" placeholder="" id="web_user_pwd" name="web_user_pwd">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">首页友链包月：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="{{$field->web_home_link_price}}" placeholder="" id="web_home_link_price" name="web_home_link_price">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">全站友链包月：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="{{$field->web_all_link_price}}" placeholder="" id="web_all_link_price" name="web_all_link_price">
			</div>
		</div>
		<div class="row cl">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
				<input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
			</div>
			{{--<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">--}}
				{{--<button onClick="article_save_submit();" class="btn btn-primary radius" type="submit"><i class="Hui-iconfont">&#xe632;</i> 保存并提交审核</button>--}}
				{{--<button onClick="article_save();" class="btn btn-secondary radius" type="button"><i class="Hui-iconfont">&#xe632;</i> 保存草稿</button>--}}
				{{--<button onClick="removeIframe();" class="btn btn-default radius" type="button">&nbsp;&nbsp;取消&nbsp;&nbsp;</button>--}}
			{{--</div>--}}
		</div>
	</form>
</article>

@include('admin.common._footer')

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="{{asset('resources/views/admin/lib/My97DatePicker/4.8/WdatePicker.js')}}"></script>
<script type="text/javascript" src="{{asset('resources/views/admin/lib/jquery.validation/1.14.0/jquery.validate.js')}}"></script>
<script type="text/javascript" src="{{asset('resources/views/admin/lib/jquery.validation/1.14.0/validate-methods.js')}}"></script>
<script type="text/javascript" src="{{asset('resources/views/admin/lib/jquery.validation/1.14.0/messages_zh.js')}}"></script>
<script type="text/javascript" src="{{asset('resources/views/admin/lib/webuploader/0.1.5/webuploader.min.js')}}"></script>
{{--<script type="text/javascript" src="{{asset('resources/views/admin/lib/ueditor/1.4.3/ueditor.config.js')}}"></script>--}}
{{--<script type="text/javascript" src="{{asset('resources/views/admin/lib/ueditor/1.4.3/ueditor.all.min.js')}}"> </script>--}}
{{--<script type="text/javascript" src="{{asset('resources/views/admin/lib/ueditor/1.4.3/lang/zh-cn/zh-cn.js')}}"></script>--}}
<script type="text/javascript" charset="utf-8" src="{{asset('resources/org/ueditor/ueditor.config.js')}}"></script>
<script type="text/javascript" charset="utf-8" src="{{asset('resources/org/ueditor/ueditor.all.min.js')}}"> </script>
<script type="text/javascript" charset="utf-8" src="{{asset('resources/org/ueditor/ueditor.all.js')}}"></script>
<!-- 建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败,这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
<script type="text/javascript" charset="utf-8" src="{{asset('resources/org/ueditor/lang/zh-cn/zh-cn.js')}}"></script>
<script type="text/javascript">
$(function(){
	$('.skin-minimal input').iCheck({
		checkboxClass: 'icheckbox-blue',
		radioClass: 'iradio-blue',
		increaseArea: '20%'
	});

	$("#my-form-submit").validate({
		rules:{
			web_name:{
				required:true,
			},
			web_url:{
				required:true,
			},
			web_ip:{
				required:true,
			},
			web_user_name:{
				required:true,
			},
			web_user_pwd:{
				required:true,
			},
			web_home_link_price:{
				required:true,
			},
			web_all_link_price:{
				required:true,
			},
            web_baidu_soulu:{
                required:true,
			}
		},
		onkeyup:false,
		focusCleanup:true,
		success:"valid",
		submitHandler:function(form){
			$(form).ajaxSubmit({
				url:"{{url('admin/subWeb/edit', ['id'=>$field->web_id])}}",//form提交数据的地址  data数据不用带了自动加上了
				type:'post',　　　  //form提交的方式(method:post/get)
				beforeSerialize:function(){}, //序列化提交数据之前的回调函数
				beforeSubmit:function(){},　　//提交前执行的回调函数
				success:function(responseData){
					console.log(responseData.statusText);
					if(responseData.code == 1){
						//添加成功
						layer.msg(responseData.msg,{icon:"6",time:responseData.wait*1000});
						setTimeout(function(){
							var index = parent.layer.getFrameIndex(window.name);//获取子页面元素
							parent.location.reload();//刷新父页面
							parent.layer.close(index);//关闭子页面元素
						},1000);//定时器关闭子页面
					}else{
						//添加失败
						layer.msg(responseData.msg,{icon:"5",time:responseData.wait*1000});
					}
				},//提交成功后执行的回调函数
				error:function(responseData){
					layer.msg('提交失败',{icon:"5",time:3*1000});
				},//提交失败执行的函数
				dataType:'json',　　　　　　　//服务器返回数据类型
				clearForm:true,　　　　　　 //提交成功后是否清空表单中的字段值
				restForm:true,　　　　　　  //提交成功后是否重置表单中的字段值，即恢复到页面加载时的状态
				timeout:6000 　　　　　 　 //设置请求时间，超过该时间后，自动退出请求，单位(毫秒).
			});

			return false;
		}
	});

});

</script>
<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>