@include('admin.common._meta')

<title>新增文章 - 资讯管理 - H-ui.admin v3.0</title>
<meta name="keywords" content="H-ui.admin v3.0,H-ui网站后台模版,后台模版下载,后台管理系统模版,HTML后台模版下载">
<meta name="description" content="H-ui.admin v3.0，是一款由国人开发的轻量级扁平化网站后台模板，完全免费开源的网站后台管理系统模版，适合中小型CMS后台系统。">
</head>
<body>
<article class="page-container">
    <form action="" method="post" class="form form-horizontal" id="my-form-submit">
        {{csrf_field()}}
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>分类栏目：</label>
            <div class="formControls col-xs-8 col-sm-9"> <span class="select-box">
					<select name="cate_pid" id="cate_pid" class="select">
                        <option value="0">==顶级分类==</option>
                        @foreach($data as $k=>$d)
                            <option value="{{$d->cate_id}}">{{$d->cate_name}}</option>
                        @endforeach
					</select>
				</span>
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>分类名称：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="" placeholder="自定义分类名字" id="cate_name" name="cate_name">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>分类名称缩写：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="" placeholder="自定义分类名字缩写 必须字母" id="cate_math" name="cate_math">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2">分类标题[80]：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="" placeholder="分类title" id="cate_title" name="cate_title">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2">分类关键词[100]：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="" placeholder="关键词用英文逗号隔开" id="cate_keywords" name="cate_keywords">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2">分类描述[200]：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <div class="cl">
                    <span class="r count_txt">共计<strong id="currentLength">0</strong>条</span>
                </div>
                <textarea name="cate_description" id="cate_description" cols="" rows="" class="textarea"  placeholder="一行一个关键词" dragonfly="true" onKeyUp="checkLength(this);"></textarea>
                <p class="textarea-numberbar"><em class="textarea-length">0</em>/100</p>
            </div>
        </div>
        <div class="row cl" id="collect_page_total_div">
            <label class="form-label col-xs-4 col-sm-2">绑定域名：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="" placeholder="分类作为二级子站绑定域名地址" id="cate_domain" name="cate_domain">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2">绑定IP：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="" placeholder="" id="cate_ip_address" name="cate_ip_address">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2">綁定模板：</label>
            <div class="formControls col-xs-8 col-sm-9"> <span class="select-box">
					<select name="temp_id" id="temp_id" class="select">
                        <option value="0">绑定 默认模板</option>
                        @foreach($templatesData as $k=>$d)
                            <option value="{{$d->temp_id}}">模板{{$d->temp_math}}__{{$d->temp_name}}</option>
                        @endforeach
                    </select>
				</span>
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>是否开启：</label>
            <div class="formControls col-xs-8 col-sm-9 skin-minimal">
                <div class="radio-box">
                    <input type="radio" value="1" id="is_open-1" name="is_open">
                    <label for="is_open-1">开启</label>
                </div>
                <div class="radio-box">
                    <input type="radio" value="2" id="is_open-2" name="is_open" checked>
                    <label for="is_open-2">关闭</label>
                </div>
            </div>
        </div>
        <div class="row cl">
            <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
                <input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
            </div>
        </div>
    </form>
</article>

@include('admin.common._footer')

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="{{asset('resources/views/admin/lib/My97DatePicker/4.8/WdatePicker.js')}}"></script>
<script type="text/javascript" src="{{asset('resources/views/admin/lib/jquery.validation/1.14.0/jquery.validate.js')}}"></script>
<script type="text/javascript" src="{{asset('resources/views/admin/lib/jquery.validation/1.14.0/validate-methods.js')}}"></script>
<script type="text/javascript" src="{{asset('resources/views/admin/lib/jquery.validation/1.14.0/messages_zh.js')}}"></script>
<script type="text/javascript">
    $(function(){
        $('.skin-minimal input').iCheck({
            checkboxClass: 'icheckbox-blue',
            radioClass: 'iradio-blue',
            increaseArea: '20%'
        });

        $('input[name=collect_is_open_page]').on('ifChecked', function(event){
            if($(this).val() == 1){
                $('#collect_page_total_div').show();
            }else{
                $('#collect_page_total_div').hide().find('#collect_page_total').val('');
            }
        });

        $("#my-form-submit").validate({
            rules:{
                cate_name:{
                    required:true,
                },
                cate_title:{
                    required:true,
                },
                cate_keywords:{
                    required:true,
                },
                cate_description:{
                    required:true,
                },
                cate_math:{
                    required:true,
                },
                cate_domain:{
                    required:true,
                },
                cate_ip_address:{
                    required:true,
                },
                temp_id:{
                    required:true,
                },
                is_open:{
                    required:true,
                }
            },
            onkeyup:false,
            focusCleanup:true,
            success:"valid",
            submitHandler:function(form){
                $(form).ajaxSubmit({
                    url:"{{url('admin/category/create')}}",//form提交数据的地址  data数据不用带了自动加上了
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