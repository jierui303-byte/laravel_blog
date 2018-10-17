@include('admin.common._meta')

<title>新增文章 - 资讯管理 - H-ui.admin v3.0</title>
<meta name="keywords" content="H-ui.admin v3.0,H-ui网站后台模版,后台模版下载,后台管理系统模版,HTML后台模版下载">
<meta name="description" content="H-ui.admin v3.0，是一款由国人开发的轻量级扁平化网站后台模板，完全免费开源的网站后台管理系统模版，适合中小型CMS后台系统。">
</head>
<body>
<article class="page-container">
    <div class="skin-minimal">
        <table class="table table-border table-bordered table-bg table-hover">
            <thead>
            <tr class="text-c">
                <th width="80">ID</th>
                <th>分类名称</th>
                <th width="120">操作</th>
            </tr>
            </thead>
            <tbody>
            @foreach($data as $v)
                <tr class="text-c">
                    <td>100{{$v->cate_id}}</td>
                    <td class="text-l">
                        <a href="https://www.baidu.com/s?wd=https://jierui303.com/cate/{{$v->cate_id}}">{{$v->cate_name}}</a>
                    </td>
                    <td class="f-14 td-manage">
                        <a style="text-decoration:none" class="ml-5" onClick="article_edit('二级分类编辑','{{url('admin/category/edit_two', ['id'=>$v->cate_id])}}', '1000', '500')" href="javascript:;" title="编辑"><i class="Hui-iconfont">&#xe6df;</i></a>
                        <a style="text-decoration:none" class="ml-5" onClick="del('{{$v->cate_id}}')" href="javascript:;" title="删除"><i class="Hui-iconfont">&#xe6e2;</i></a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
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

    /*资讯-编辑*/
    function article_edit(title,url,w,h){
        var index = layer.open({
            type: 2,
            area: [w+'px', h +'px'],
            title: title,
            content: url
        });
        // layer.full(index);
    }

    /*单条删除*/
    function del(dataId) {
        var postUrl = '{{url('admin/category/del')}}/'+dataId;
        layer.confirm('你确定要删除吗？', {
            btn: ['确定','取消'] //按钮
        }, function(){
            //model为数据模型类名
            $.post(postUrl,{'_method':'delete', '_token':'{{csrf_token()}}'},function(responseData){
                if (responseData.code == 1) {
                    layer.msg(responseData.msg,{icon:"6",time:responseData.wait*1000});
                    setTimeout(function(){
                        window.location.href = "{{url('admin/article')}}";
                    },1000)
                } else {
                    layer.msg(responseData.msg,{icon:"6",time:responseData.wait*1000});
                    setTimeout(function(){
                        window.location.href = "{{url('admin/article')}}";
                    },1000)
                }
            });
        }, function(){
            layer.msg('取消成功', {icon:"6",time: 1000});
        });
    }
</script>
<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>