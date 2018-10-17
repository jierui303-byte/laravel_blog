@include('admin.common._meta')

    <title>资讯列表 - 资讯管理 - H-ui.admin v3.0</title>
    <meta name="keywords" content="H-ui.admin v3.0,H-ui网站后台模版,后台模版下载,后台管理系统模版,HTML后台模版下载">
    <meta name="description" content="H-ui.admin v3.0，是一款由国人开发的轻量级扁平化网站后台模板，完全免费开源的网站后台管理系统模版，适合中小型CMS后台系统。">
    <style>
        .icheckbox-blue, .iradio-blue{
            position: absolute;
            top: 50%;
            transform: translate(0, -50%);
            left: 32%;
        }
    </style>
</head>
<body>
@include('admin.common._header')

@include('admin.common._menu')

<section class="Hui-article-box">
    <nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页
        <span class="c-gray en">&gt;</span>
        资讯管理
        <span class="c-gray en">&gt;</span>
        资讯列表
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
				<a class="btn btn-primary radius" data-title="添加资讯" onclick="article_add('添加资讯','{{url('admin/article/create')}}')" href="javascript:;"><i class="Hui-iconfont">&#xe600;</i> 添加资讯</a>
				</span>
                <span class="r">共有数据：<strong>{{$count}}</strong> 条</span>
            </div>
            <div class="mt-20 skin-minimal">
                <table class="table table-border table-bordered table-bg table-hover table-sort">
                    <thead>
                    <tr class="text-c">
                        <th width="25" style="position: relative;"><input id="checkboxAll" type="checkbox" name="" value=""></th>
                        <th width="80">ID</th>
                        <th width="80">分类名称</th>
                        <th>标题</th>
                        <th width="40">收录</th>
                        <th width="120">收录时间</th>
                        <th width="120">更新时间</th>
                        <th width="40">浏览</th>
                        <th width="60">发布状态</th>
                        <th width="80">操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $v)
                    <tr class="text-c">
                        <td class="zsort" data-id="{{$v->art_id}}" style="position: relative;">
                            <input name="picCheck" type="checkbox" value="{{$v->art_id}}">
                        </td>
                        <td>100{{$v->art_id}}</td>
                        <td>{{$v->cate_name}}</td>
                        <td class="text-l"><u style="cursor:pointer" class="text-primary" onClick="article_edit('查看','article-zhang.html','10001')" title="查看">{{$v->art_title}}</u></td>
                        <td>
                            @if($v->art_isSouLu == '1')
                                <a href="http://jierui303.com/a/{{$v->art_id}}">
                                    <span class="label label-success radius">已收录</span>
                                </a>
                            @else
                                <span class="label label-danger radius">未收录</span>
                            @endif
                        </td>
                        <td>
                            @if($v->art_souLuDate)
                                {{date('Y-m-d h:i:s', (integer)$v->art_souLuDate)}}
                            @endif
                        </td>
                        <td>{{date('Y-m-d h:i:s', $v->art_dingTime)}}</td>
                        <td>{{$v->art_view}}</td>
                        <td class="td-status">
                            @if($v->art_status == 1)
                                <span class="label label-success radius">已发布</span>
                            @else
                                <span class="label  radius">未发布</span>
                            @endif
                        </td>
                        <td class="f-14 td-manage">
                            <a style="text-decoration:none" class="ml-5" onClick="article_edit('资讯编辑','{{url('admin/article/edit', ['id'=>$v->art_id])}}', '1000', '1000')" href="javascript:;" title="编辑"><i class="Hui-iconfont">&#xe6df;</i></a>
                            <a style="text-decoration:none" class="ml-5" onClick="del('{{$v->art_id}}')" href="javascript:;" title="删除"><i class="Hui-iconfont">&#xe6e2;</i></a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
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
            "serverSide": false,  //启用服务器端分页
            "bSort": false,
            "searching": true,//搜索关闭
            "bLengthChange": true,
            "aoColumnDefs": [
                //{"bVisible": false, "aTargets": [ 3 ]} //控制列的隐藏显示
                {"orderable":false,"aTargets":[0,8]}// 不参与排序的列
            ],
//            "sAjaxSource": "xx/dataGrid.json",//这是要请求json数据的url
//            "fnServerParams": function ( aoData ) {
//                aoData.push({"groupId":"1"});
//            },//服务器请求携带参数设置
            "sPaginationType": "full_numbers",      //翻页界面类型
            "oLanguage": {                          //汉化
                "sLengthMenu": "每页显示 _MENU_ 条记录",
                "sZeroRecords": "没有检索到数据",
                "sInfo": "当前数据为从第 _START_ 到第 _END_ 条数据；总共有 _TOTAL_ 条记录",
                "sInfoEmtpy": "没有数据",
                "sProcessing": "正在加载数据...",
                "oPaginate": {
                    "sFirst": "首页",
//                    "sPrevious": "前页",（注释这2个。页面就会显示上一页 下一页）
//                    "sNext": "后页",
                    "sLast": "尾页"
                }
            },
//            "fnServerData": function ( sSource, aoData, fnCallback) {
////                aoData.push({"groupId":"1"});
//                $.ajax( {
//                    "dataType": 'json',
//                    "type": "POST",
//                    "url": sSource,
//                    "data": aoData,
//                    "success": fnCallback
//                } );
//            },//服务器返回数据列表处理
            //列表表头字段
//            "aoColumns": [
//                { "mData": "teacher_id", "sClass": "center" },
//                { "mData": "teacher_name", "sClass": "center" },
//                { "mData": "organization_name", "sClass": "center" },
//                { "mData": "manageOrganization_name", "sClass": "center" },
//                { "mData": "teacher_phone", "sClass": "center" },
//                { "mData": "teacher_email", "sClass": "center" },
//                { "mData": "admin_id", "sClass": "center" }
//
//            ],
        });
    });

    /*资讯-添加*/
    function article_add(title,url,w,h){
        var index = layer.open({
            type: 2,
            title: title,
            content: url
        });
        layer.full(index);
    }

    /*资讯-编辑*/
    function article_edit(title,url,w,h){
        var index = layer.open({
            type: 2,
            title: title,
            content: url
        });
        layer.full(index);
    }

    /*单条删除*/
    function del(dataId) {
        var postUrl = '{{url('admin/article/del')}}/'+dataId;
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
    /*多条删除*/
    function all_del(){
        var postUrl = "{{url('admin/article/del_all')}}";
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
                        window.location.href = "{{url('admin/article')}}";
                    },1000)
                } else {
                    layer.msg(responseData.msg,{icon:"5",time:responseData.wait*1000});
                    setTimeout(function(){
                        window.location.href = "{{url('admin/article')}}";
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