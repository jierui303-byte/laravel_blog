@include('admin.common._meta')

<title>新增文章 - 资讯管理 - H-ui.admin v3.0</title>
<meta name="keywords" content="H-ui.admin v3.0,H-ui网站后台模版,后台模版下载,后台管理系统模版,HTML后台模版下载">
<meta name="description" content="H-ui.admin v3.0，是一款由国人开发的轻量级扁平化网站后台模板，完全免费开源的网站后台管理系统模版，适合中小型CMS后台系统。">
<link href="{{asset('resources/views/admin/lib/webuploader/0.1.5/webuploader.css')}}" rel="stylesheet" type="text/css" />

</head>
<body>
<article class="page-container">
    {{--<form action="" method="post" enctype="multipart/form-data" class="form form-horizontal" id="my-form-submit">--}}
        {{--{{csrf_field()}}--}}
        {{--<div class="row cl">--}}
            {{--<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>分类管理：</label>--}}
            {{--<div class="formControls col-xs-8 col-sm-9">--}}
                {{--<select name="key_cate_id" id="key_cate_id" class="select">--}}
                    {{--@foreach($dataCate as $k=>$d)--}}
                        {{--<option value="{{$d->cate_id}}">{{$d->cate_name}}</option>--}}
                    {{--@endforeach--}}
                {{--</select>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="row cl key_levelObj">--}}
            {{--<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>模板名称：</label>--}}
            {{--<div class="formControls col-xs-8 col-sm-9">--}}
                {{--<input type="text" class="input-text" value="" placeholder="" id="link_name" name="link_name">--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="row cl key_levelObj">--}}
            {{--<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>模板静态文件存放路径：</label>--}}
            {{--<div class="formControls col-xs-8 col-sm-9">--}}
                {{--<input type="text" class="input-text" value="/public/resources/views/common/a10/images/weibo.jpg" placeholder="" id="link_name" name="link_name">--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="row cl key_levelObj">--}}
            {{--<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>模板文件存放路径：</label>--}}
            {{--<div class="formControls col-xs-8 col-sm-9">--}}
                {{--<input type="text" class="input-text" value="resources/views/common/a10/index.html" placeholder="" id="link_name" name="link_name">--}}
            {{--</div>--}}
        {{--</div>--}}
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2">缩略图：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <div class="uploader-thum-container">
                    <div id="fileList" class="uploader-list"></div>
                    <div id="filePicker">选择图片</div>
                    <button id="btn-star" class="btn btn-default btn-uploadstar radius ml-10">开始上传</button>
                </div>
            </div>
        </div>
        {{--<div class="row cl">--}}
            {{--<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">--}}
                {{--<input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</form>--}}
</article>

@include('admin.common._footer')

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="{{asset('resources/views/admin/lib/My97DatePicker/4.8/WdatePicker.js')}}"></script>
<script type="text/javascript" src="{{asset('resources/views/admin/lib/jquery.validation/1.14.0/jquery.validate.js')}}"></script>
<script type="text/javascript" src="{{asset('resources/views/admin/lib/jquery.validation/1.14.0/validate-methods.js')}}"></script>
<script type="text/javascript" src="{{asset('resources/views/admin/lib/jquery.validation/1.14.0/messages_zh.js')}}"></script>
<script type="text/javascript" src="{{asset('resources/views/admin/lib/webuploader/0.1.5/webuploader.min.js')}}"></script>
<script type="text/javascript">
    $(function(){
//        $('.skin-minimal input').iCheck({
//            checkboxClass: 'icheckbox-blue',
//            radioClass: 'iradio-blue',
//            increaseArea: '20%'
//        });

        $list = $("#fileList"),
                $btn = $("#btn-star"),
                state = "pending",
                uploader;

        var uploader = WebUploader.create({
            auto: false,
            swf: 'lib/webuploader/0.1.5/Uploader.swf',
            formData: {
                _token: "{{csrf_token()}}"
            },

            // 文件接收服务端。
            server: '{{url('admin/templates/fileUpload')}}',

            // 选择文件的按钮。可选。
            // 内部根据当前运行是创建，可能是input元素，也可能是flash.
            pick: {
                id: '#filePicker',
                multiple:false,
                label: '点击选择模板'
            },
            fileNumLimit:1,
            fileSizeLimit: 20*1024*1024,//限制上传所有文件大小
            fileSingleSizeLimit: 20*1024*1024,//限制上传单个文件大小

            // 不压缩image, 默认如果是jpeg，文件上传前会压缩一把再上传！
            resize: false,
            // 只允许选择图片文件。
            accept: {
                title: 'Files',
                extensions: 'zip',
                mimeTypes: 'application/zip,application/x-zip-compressed'
            }
        });
        uploader.on( 'fileQueued', function( file ) {
            var $li = $(
                            '<div id="' + file.id + '" class="item">' +
                            '<div class="pic-box"><img></div>'+
                            '<div class="info">' + file.name + '</div>' +
                            '<p class="state">等待上传...</p>'+
                            '</div>'
                    ),
                    $img = $li.find('img');
            $list.append( $li );

            // 创建缩略图
            // 如果为非图片文件，可以不用调用此方法。
            // thumbnailWidth x thumbnailHeight 为 100 x 100
//            uploader.makeThumb( file, function( error, src ) {
//                if ( error ) {
//                    $img.replaceWith('<span>不能预览</span>');
//                    return;
//                }
//
//                $img.attr( 'src', src );
//            }, thumbnailWidth, thumbnailHeight );
        });
        // 文件上传过程中创建进度条实时显示。
        uploader.on( 'uploadProgress', function( file, percentage ) {
            var $li = $( '#'+file.id ),
                    $percent = $li.find('.progress-box .sr-only');

            // 避免重复创建
            if ( !$percent.length ) {
                $percent = $('<div class="progress-box"><span class="progress-bar radius"><span class="sr-only" style="width:0%"></span></span></div>').appendTo( $li ).find('.sr-only');
            }
            $li.find(".state").text("上传中");
            $percent.css( 'width', percentage * 100 + '%' );
        });

        uploader.on('error', function(handler) {
            if(handler=="Q_EXCEED_NUM_LIMIT"){
                layer.msg('超出最大文件数',{icon:"5",time:1000});
            }
            if(handler=="F_DUPLICATE"){
                layer.msg('文件重复',{icon:"5",time:1000});
            }
        });

        // 文件上传成功，给item添加成功class, 用样式标记上传成功。
        uploader.on( 'uploadSuccess', function( file , response) {
            console.log(response._raw);
            console.log(response._raw.err);
            $( '#'+file.id ).addClass('upload-state-success').find(".state").text("已上传");
        });

        // 文件上传失败，显示上传出错。
        uploader.on( 'uploadError', function( file , reason) {
            layer.msg(file.name+'上传出错了',{icon:"5",time:3*1000});
            $( '#'+file.id ).addClass('upload-state-error').find(".state").text("上传出错");
        });

        // 完成上传完了，成功或者失败，先删除进度条。
        uploader.on( 'uploadComplete', function( file ) {
            $( '#'+file.id ).find('.progress-box').fadeOut();
        });
        uploader.on('all', function (type) {
            if (type === 'startUpload') {
                state = 'uploading';
            } else if (type === 'stopUpload') {
                state = 'paused';
            } else if (type === 'uploadFinished') {
                state = 'done';
            }

            if (state === 'uploading') {
                $btn.text('暂停上传');
            } else {
                $btn.text('开始上传');
            }
        });

        $btn.on('click', function () {
            if (state === 'uploading') {
                uploader.stop();
            } else {
                uploader.upload();
            }
        });

    });
</script>
<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>