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
            <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>采集规则名称：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="{{$field->collect_name}}" placeholder="自定义采集规则名字" id="collect_name" name="collect_name">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>采集页面字符编码：</label>
            <div class="formControls col-xs-8 col-sm-9 skin-minimal">
                @if($field->collect_code == 1)
                    <div class="radio-box">
                        <input name="collect_code" value="1" type="radio" id="collect_code-1" checked>
                        <label for="collect_code-1">uft-8</label>
                    </div>
                @else
                    <div class="radio-box">
                        <input name="collect_code" value="1" type="radio" id="collect_code-1">
                        <label for="collect_code-1">uft-8</label>
                    </div>
                @endif
                @if($field->collect_code == 2)
                    <div class="radio-box">
                        <input type="radio" value="2" id="collect_code-2" name="collect_code" checked>
                        <label for="collect_code-2">gb123</label>
                    </div>
                @else
                    <div class="radio-box">
                        <input type="radio" value="2" id="collect_code-2" name="collect_code">
                        <label for="collect_code-2">gb123</label>
                    </div>
                @endif
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>文章分类：</label>
            <div class="formControls col-xs-8 col-sm-9"> <span class="select-box">
					<select name="collect_cate_id" id="collect_cate_id" class="select">
                        @foreach($data as $k=>$d)
                            @if($d->cate_pid == 0)
                                <option value="{{$d->cate_id}}" disabled>{{$d->_cate_name}}</option>
                            @else
                                @if($d->cate_id == $field->collect_cate_id)
                                    <option value="{{$d->cate_id}}" selected>{{$d->_cate_name}}</option>
                                @else
                                    <option value="{{$d->cate_id}}">{{$d->_cate_name}}</option>
                                @endif
                            @endif
                        @endforeach
                    </select>
				</span>
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2">列表URL匹配地址：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="{{$field->collect_list_url}}" placeholder="http://jierui303.com/list_@.html" id="collect_list_url" name="collect_list_url">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2"></label>
            <div class="formControls col-xs-8 col-sm-9">
                <span>注意：页码写成@符号代替，便于正则匹配</span>
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2">开启分页采集</label>
            <div class="formControls col-xs-8 col-sm-9 skin-minimal" id="isOpen" data-is_open="{{$field->collect_is_open_page}}">
                @if($field->collect_is_open_page == 1)
                    <div class="radio-box">
                        <input name="collect_is_open_page" value="1" type="radio" id="collect_is_open_page-1" checked>
                        <label for="collect_is_open_page-1">开启</label>
                    </div>
                @else
                    <div class="radio-box">
                        <input name="collect_is_open_page" value="1" type="radio" id="collect_is_open_page-1">
                        <label for="collect_is_open_page-1">开启</label>
                    </div>
                @endif
                @if($field->collect_is_open_page == 2)
                    <div class="radio-box">
                        <input name="collect_is_open_page" value="2" type="radio" id="collect_is_open_page-2" checked>
                        <label for="collect_is_open_page-2">关闭</label>
                    </div>
                @else
                    <div class="radio-box">
                        <input name="collect_is_open_page" value="2" type="radio" id="collect_is_open_page-2" >
                        <label for="collect_is_open_page-2">关闭</label>
                    </div>
                @endif
            </div>
        </div>
        <div class="row cl" id="collect_page_total_div">
            <label class="form-label col-xs-4 col-sm-2">采集页数：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="{{$field->collect_page_total}}" placeholder="填写页码，数字，默认从第一页采集" id="collect_page_total" name="collect_page_total">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2">列表URL选择器：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="{{$field->collect_url_jquery}}" placeholder="#contents .main .article-content .artlist dt>a" id="collect_url_jquery" name="collect_url_jquery">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2">列表URL值属性：</label>
            <div class="formControls col-xs-8 col-sm-9 skin-minimal">
                <div class="radio-box">
                    <input name="collect_url_attr_id" value="1" type="radio" id="collect_url_attr_id-1" >
                    <label for="collect_url_attr_id-1">text():获取元素内的纯文本</label>
                </div>
                <div class="radio-box">
                    <input name="collect_url_attr_id" value="2" type="radio" id="collect_url_attr_id-2" >
                    <label for="collect_url_attr_id-2">content:获取元素内的所有内容</label>
                </div>
                <div class="radio-box">
                    <input name="collect_url_attr_id" value="3" type="radio" id="collect_url_attr_id-3" >
                    <label for="collect_url_attr_id-3">texts():获取所有的纯文本</label>
                </div>
                <div class="radio-box">
                    <input name="collect_url_attr_id" value="4" type="radio" id="collect_url_attr_id-4" checked>
                    <label for="collect_url_attr_id-4">attrs('href'):获取a链接的href地址</label>
                </div>
                <div class="radio-box">
                    <input name="collect_url_attr_id" value="5" type="radio" id="collect_url_attr_id-5" >
                    <label for="collect_url_attr_id-5">src:获取src的URL地址</label>
                </div>
                <div class="radio-box">
                    <input name="collect_url_attr_id" value="6" type="radio" id="collect_url_attr_id-6" >
                    <label for="collect_url_attr_id-6">alt:获取img的alt属性值</label>
                </div>
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2">
                <button onClick="collect_url_test();" class="btn btn-secondary radius" type="button"><i class="Hui-iconfont">&#xe632;</i> 测试URL采集</button>
            </label>
            <div class="formControls col-xs-8 col-sm-9" id="testUrlResult" style="border: 1px solid #dddddd;margin-left:15px;min-height: 45px;">


            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2"></label>
            <div class="formControls col-xs-8 col-sm-9">
                <P>默认采集列表页时只需要获取URL地址和标题即可，或者直接获取URL地址就行，所以一般都写：attrs('href')</P>
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2">文章标题选择器：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="{{$field->collect_title_jquery}}" placeholder="title" id="collect_title_jquery" name="collect_title_jquery">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2">文章内容选择器：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="{{$field->collect_content_jquery}}" placeholder=".bd>#article_content" id="collect_content_jquery" name="collect_content_jquery">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2">内容过滤选择器：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="{{$field->collect_content_del_jquery}}" placeholder="-a 代表去除a标签  a代表去除a链接保留文字内容" id="collect_content_del_jquery" name="collect_content_del_jquery">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2">内容测试URL地址: </label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="" placeholder="复制测试URL采集回来的地址即可" id="collect_content_test_url" name="collect_content_test_url">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2">
                <button onClick="collect_content_test();" class="btn btn-secondary radius" type="button"><i class="Hui-iconfont">&#xe632;</i> 测试内容采集</button>
            </label>
            <div class="formControls col-xs-8 col-sm-9" id="testContentResult" style="border: 1px solid #dddddd;margin-left:15px;min-height: 45px;">


            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2"></label>
            <div class="formControls col-xs-8 col-sm-9">
                <span>案例：.bd>#article_content</span><br/>
                <span>解释：获取内容页中类.bd下的ID#article_content元素里的内容</span>
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2">采集开关：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <div class="formControls col-xs-8 col-sm-9 skin-minimal">
                    @if($field->collect_is_open == 1)
                        <div class="radio-box">
                            <input name="collect_is_open" value="1" type="radio" id="collect_is_open-1" checked>
                            <label for="collect_is_open-1">开启</label>
                        </div>
                    @else
                        <div class="radio-box">
                            <input name="collect_is_open" value="1" type="radio" id="collect_is_open-1">
                            <label for="collect_is_open-1">开启</label>
                        </div>
                    @endif
                    @if($field->collect_is_open == 2)
                        <div class="radio-box">
                            <input type="radio" value="2" id="collect_is_open-2" name="collect_is_open" checked>
                            <label for="collect_is_open-2">关闭【不执行】</label>
                        </div>
                    @else
                        <div class="radio-box">
                            <input type="radio" value="2" id="collect_is_open-2" name="collect_is_open">
                            <label for="collect_is_open-2">关闭【不执行】</label>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2">是否存图片到本地：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <div class="formControls col-xs-8 col-sm-9 skin-minimal">
                    @if($field->collect_is_load_img == 1)
                        <div class="radio-box">
                            <input name="collect_is_load_img" value="1" type="radio" id="collect_is_load_img-1" checked>
                            <label for="collect_is_load_img-1">存图片到本地服务器</label>
                        </div>
                    @else
                        <div class="radio-box">
                            <input name="collect_is_load_img" value="1" type="radio" id="collect_is_load_img-1">
                            <label for="collect_is_load_img-1">存图片到本地服务器</label>
                        </div>
                    @endif
                    @if($field->collect_is_load_img == 2)
                        <div class="radio-box">
                            <input type="radio" value="2" id="collect_is_load_img-2" name="collect_is_load_img" checked>
                            <label for="collect_is_load_img-2">不保存，采集时自动去除img标签</label>
                        </div>
                    @else
                        <div class="radio-box">
                            <input type="radio" value="2" id="collect_is_load_img-2" name="collect_is_load_img">
                            <label for="collect_is_load_img-2">不保存，采集时自动去除img标签</label>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2">是否直接发布：</label>
            <div class="formControls col-xs-8 col-sm-9 skin-minimal">
                <div class="formControls col-xs-8 col-sm-9 skin-minimal">
                    @if($field->collect_is_commit == 1)
                        <div class="radio-box">
                            <input name="collect_is_commit" value="1" type="radio" id="collect_is_commit-1" checked>
                            <label for="collect_is_commit-1">采集完直接发布</label>
                        </div>
                    @else
                        <div class="radio-box">
                            <input name="collect_is_commit" value="1" type="radio" id="collect_is_commit-1">
                            <label for="collect_is_commit-1">采集完直接发布</label>
                        </div>
                    @endif
                    @if($field->collect_is_commit == 2)
                        <div class="radio-box">
                            <input type="radio" value="2" id="collect_is_commit-2" name="collect_is_commit" checked>
                            <label for="collect_is_commit-2">不发布，存草稿状态，待手工伪原创</label>
                        </div>
                    @else
                        <div class="radio-box">
                            <input type="radio" value="2" id="collect_is_commit-2" name="collect_is_commit">
                            <label for="collect_is_commit-2">不发布，存草稿状态，待手工伪原创</label>
                        </div>
                    @endif
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

        if($('#isOpen').data('is_open') == 2){
            $('#collect_page_total_div').hide().find('#collect_page_total').val('');
        }else{
            $('#collect_page_total_div').show().find('#collect_page_total').val('{{$field->collect_page_total}}');
        }

        $('input[name=collect_is_open_page]').on('ifChecked', function(event){
            if($(this).val() == 1){
                $('#collect_page_total_div').show();
            }else{
                $('#collect_page_total_div').hide().find('#collect_page_total').val('');
            }
        });

        $("#my-form-submit").validate({
            rules:{
                collect_name:{
                    required:true,
                },
                collect_code:{
                    required:true,
                },
                collect_list_url:{
                    required:true,
                },
                collect_is_open_page:{
                    required:true,
                },
                collect_page_total:{
                    required:true,
                },
                collect_url_jquery:{
                    required:true,
                },
                collect_url_attr_id:{
                    required:true,
                },
                collect_title_jquery:{
                    required:true,
                },
                collect_content_jquery:{
                    required:true,
                },
                collect_content_del_jquery:{
                    required:true,
                },
                collect_is_open:{
                    required:true,
                },
                collect_cate_id:{
                    required:true,
                },
                collect_is_load_img:{
                    required:true,
                },
                collect_is_commit:{
                    required:true,
                }
            },
            onkeyup:false,
            focusCleanup:true,
            success:"valid",
            submitHandler:function(form){
                $(form).ajaxSubmit({
                    url:"{{url('admin/collectRules/edit', ['id'=>$field->collect_id])}}",//form提交数据的地址  data数据不用带了自动加上了
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

    function collect_url_test() {
        //获取采集ajax获取的各项数据，然后ajax传递给PHP的queryList来进行抓取测试，然后返回结果
        $.ajax({
            type: "post",
            url: "{{url('admin/collectRules/collect_url_test')}}",
            data:{
                _token : "{{ csrf_token() }}",
                collect_name : $('#collect_name').val(),
                collect_list_url : $('#collect_list_url').val(),
                collect_is_open_page : $('input[name=collect_is_open_page]:checked').val(),
                collect_page_total : $('#collect_page_total').val(),
                collect_url_jquery : $('#collect_url_jquery').val(),
                collect_url_attr_id : $('input[name=collect_url_attr_id]:checked').val(),
                collect_title_jquery : $('#collect_title_jquery').val(),
                collect_content_jquery : $('#collect_content_jquery').val(),
                collect_code : $('input[name=collect_code]:checked').val(),
                collect_is_open : $('input[name=collect_is_open]:checked').val(),
                collect_cate_id : $('#collect_cate_id').val(),
                collect_is_load_img : $('input[name=collect_is_load_img]:checked').val(),
                collect_is_commit : $('input[name=collect_is_commit]:checked').val()
            },
            dataType: "json",
            success: function(data){
                var str = '';
                for(var i=0;i<data.length;i++){
                    str += data[i]+'<br/>';
                };
                str += '<p>共计： <span style="color: red;">'+data.length+'</span> 条</p>';
                $('#testUrlResult').html(str);
            }
        });
    }

    function collect_content_test() {
        //获取采集ajax获取的各项数据，然后ajax传递给PHP的queryList来进行抓取测试，然后返回结果
        $.ajax({
            type: "post",
            url: "{{url('admin/collectRules/collect_content_test')}}",
            data:{
                _token : "{{ csrf_token() }}",
                collect_name : $('#collect_name').val(),
                collect_list_url : $('#collect_list_url').val(),
                collect_is_open_page : $('input[name=collect_is_open_page]:checked').val(),
                collect_page_total : $('#collect_page_total').val(),
                collect_url_jquery : $('#collect_url_jquery').val(),
                collect_url_attr_id : $('input[name=collect_url_attr_id]:checked').val(),
                collect_title_jquery : $('#collect_title_jquery').val(),
                collect_content_jquery : $('#collect_content_jquery').val(),
                collect_content_del_jquery : $('#collect_content_del_jquery').val(),
                collect_code : $('input[name=collect_code]:checked').val(),
                collect_is_open : $('input[name=collect_is_open]:checked').val(),
                collect_cate_id : $('#collect_cate_id').val(),
                collect_is_load_img : $('input[name=collect_is_load_img]:checked').val(),
                collect_is_commit : $('input[name=collect_is_commit]:checked').val(),
                collect_content_test_url : $('#collect_content_test_url').val()
            },
            dataType: "json",
            success: function(data){
                var str = '<span style="color:red;">标题：</span>'+data['title']+'<br/>';
                str += '<span style="color:red;">内容：</span>'+data['content'];
                $('#testContentResult').html(str);
            }
        });
    }
</script>
<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>