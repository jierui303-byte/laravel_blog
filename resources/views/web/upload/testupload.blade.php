
                <div class="form-group clearfix" style="">
                    <label class="col-sm-2 col-xs-3 control-label clearfix" style="text-align: right">课程名称：</label>
                    <div class="col-sm-9 col-xs-12">
                        <input class="form-control" required="required" type='text' name="teach_name" placeholder="请输入课程名称">
                    </div>
                </div>
                <div class="form-group clearfix">
                    <label class="col-sm-2 col-xs-3 control-label clearfix" style="text-align: right">课程封面：</label>
                    <div class="col-sm-9 col-xs-12">
                        <div class="input-group ">
                            <input name="teach_img" class="form-control webuploader-input" value="" type="text" placeholder="请选择封面图片">
                            <span class="input-group-btn">
                                <button class="btn btn-default webuploader-btn" type="button" data-toggle="modal" data-target="#modal-wechat-webuploader" style="height: 34px; width:100%;">选择图片</button>
                            </span>
                        </div>
                        <div class="input-group " style="margin-top:.5em;">
                            <img src="/Public/Mp/img/nopic.jpg" data-nopic="/Public/Mp/img/nopic.jpg" class="img-responsive img-thumbnail webuploader-picture" width="150">
                            <em class="close" style="position:absolute; top: 0px; right: -14px;" title="删除这张图片">×</em>
                        </div>
                        <div><p>图片规格：16:9 的比例图片</p></div>
                    </div>
                </div>
                <div class="form-group clearfix uploadPath" id="slider-warpper">
                    <label class="col-sm-2 col-xs-3 control-label clearfix" style="text-align: right">课程章节：</label>
                    <div class="col-xs-8 col-sm-8" style="position: relative">
                        <ul class="clearfix team-list-content">
                            <li data-liid="1">
                                <div class="form-group clearfix chapter-title">
                                    <label class="col-sm-2 col-xs-3 control-label clearfix" style="text-align: right">第&nbsp;<span class="chapter-number">1</span>&nbsp;节：</label>
                                    <div class="col-xs-8 col-sm-8" style="position: relative;margin-bottom: 3px;">
                                        <div class="col-xs-12 col-sm-12 input-group">
                                            <input type="text" name="teach_content[1][teaching_name]" class="form-control" placeholder="请输入章节名称" style="width: 100%">
                                        </div>
                                    </div>
                                </div>
                                <div class="shipin-list-all">
                                    <div class="shipin-list">
                                        <div class="form-group clearfix shipin">
                                            <label class="col-sm-2 col-xs-3 control-label clearfix" style="text-align: right">视频&nbsp;<span class="course-number">1</span>&nbsp;：</label>
                                            <div class="col-xs-8 col-sm-8" style="position: relative;margin-bottom: 5px;">
                                                <div class="mainContainer">
                                                    <!--<form method="post" enctype="multipart/form-data" id="form" action="upload">-->
                                                        <div id="box2">
                                                            <div class="col-xs-8 col-sm-8" style="padding-left:0px;position: relative;margin-bottom: 5px;">
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control shipinName11" placeholder="请选择本章节视频" name="teach_content[1][teaching_content][1][url]" accept="video/*"/>
                                                                    <span class="input-group-addon select-button" id="basic-addon1">选择文件</span>
                                                                </div>
                                                                <input type="file" id="select11" class="form-control file-input" onchange="aa(this, 1, 1)" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; z-index: 1; opacity: 0;">
                                                            </div>
                                                        </div>
                                                    <!--</form>-->
                                                    <div class="nav-box" style="margin-top:30px">
                                                        <div id="process" class="tab-content">
                                                            <div class="tab-pane fade in active" id="h5">
                                                                <table class="table table-striped table-hover text-left" style="margin-top:30px">
                                                                    <thead>
                                                                    <tr>
                                                                        <th class="col-md-4">文件名称</th>
                                                                        <th class="col-md-2">文件大小</th>
                                                                        <th class="col-md-6">上传进度</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody id="fsUploadProgress11"></tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group clearfix  spname">
                                            <label class="col-sm-2 col-xs-2 control-label clearfix" style="text-align: right">名称&nbsp;<span class="course-number">1</span>&nbsp;：</label>
                                            <div class="col-xs-8 col-sm-8 clearfix" style="position: relative;margin-bottom: 3px;">
                                                <div class="input-group" style="width:100%;">
                                                    <span style="display: inline-block;float: left;line-height: 35px;padding-right: 5px;"></span>
                                                    <input type="text" name="teach_content[1][teaching_content][1][spname]" class="form-control" placeholder="请输入当前视频名称" style=" width:70%;display: inline-block;">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group clearfix  price">
                                            <label class="col-sm-2 col-xs-3 control-label clearfix" style="text-align: right">价格&nbsp;<span class="course-number">1</span>&nbsp;：</label>
                                            <div class="col-xs-4 col-sm-4" style="position: relative;margin-bottom: 3px;">
                                                <div class="col-xs-12 col-sm-12 input-group">
                                                    <span style="display: inline-block;float: left;line-height: 35px;padding-right: 5px;"></span>
                                                    <input type="text" name="teach_content[1][teaching_content][1][price]" class="form-control input-price" placeholder="请输入价格 只限数字" style=" width: 70%;display: inline-block;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-list-footer shipinClick1">
                                    <a href="javascript:;" onclick="clickNUM(this, 1)" class="add-slider-scope-shipin" style="padding-left: 100px;">+增加视频</a>
                                </div>
                            </li>
                        </ul>
    <script src="http://cdn.bootcss.com/jquery/1.9.0/jquery.min.js"></script>
    <script src="http://cdn.static.runoob.com/libs/jquery/1.10.2/jquery.min.js"></script>
   <script src="http://cdn.static.runoob.com/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.bootcss.com/json3/3.3.2/json3.min.js"></script>
    <!--<script type="text/javascript" src='./Addons/Teaching/View/Public/qiniu//js/plupload.full.min.js'></script>-->
    <script src="https://cdn.staticfile.org/plupload/2.1.9/plupload.full.min.js"></script>
    <script type="text/javascript" src='https://unpkg.com/qiniu-js@v2.2.2/dist/qiniu.min.js'></script>
    <!--<script type="text/javascript" src='./Addons/Teaching/View/Public/qiniu/component/widget.js'></script>-->
    <!--<script type="text/javascript" src='./Addons/Teaching/View/Public/qiniu/common/common.js'></script>-->
    <!--<script type="text/javascript" src='./Addons/Teaching/View/Public/qiniu/component/ui.js'></script>-->
    <!--<script type="text/javascript" src='./Addons/Teaching/View/Public/qiniu/scripts/uploadWithOthers.js'></script>-->
    <!--<script type="text/javascript" src='./Addons/Teaching/View/Public/qiniu/scripts/uploadWithForm.js'></script>-->
    <!--<script type="text/javascript" src='./Addons/Teaching/View/Public/qiniu/scripts/uploadWithSDK.js'></script>-->
    <!--<script type="text/javascript" src='./Addons/Teaching/View/Public/qiniu/main.js'></script>-->

    <script type="text/javascript">
        var iss = false;
        var aaa = false;
        function aa(thisObj, zhangjienum, shipinnum) {
            // var form = document.forms[index]; //index 是文件域的form索引
            // form.reset();
            // console.log(document.forms[1]);
            // var token = null;
            // var domain = null;
            var config = null;
            var putExtra = {};
            var num = 0;
            var isstart = null;
            if(iss){
                iss = true;
                alert('有视频正在上传中。。。请稍后');
                return false;
            }
            // var accessKey = 'q1njNIB7V5QIxETDckw21XE9eaML17ZoEDlwi1cS';
            // var secretKey = 'EMFnwJtXI1iL-PsjFm15nwum7m9gW-2CdOVt17N6';
            // var mac = qiniu.auth.digest.Mac(accessKey, secretKey);
            // //自定义凭证有效期（示例2小时，expires单位为秒，为上传凭证的有效时间）
            // var options = {
            //     scope: bucket,
            //     expires: 7200
            // };
            // var putPolicy = qiniu.rs.PutPolicy(options);
            // var token = putPolicy.uploadToken(mac);
            // config = {
            //     useCdnDomain: true, //表示是否使用 cdn 加速域名，为布尔值，true 表示使用，默认为 false。
            //     disableStatisticsReport: false, //是否禁用日志报告，为布尔值，默认为false。
            //     retryCount: 6, //上传自动重试次数（整体重试次数，而不是某个分片的重试次数）；默认 3 次（即上传失败后最多重试两次）；目前仅在上传过程中产生 599 内部错误时生效，但是未来很可能会扩展为支持更多的情况。
            //     region: qiniu.region.z0,  //选择上传域名区域；当为 null 或 undefined 时，自动分析上传域名区域
            // };
            // num = Math.random()*700 + 800;
            // num = parseInt(num, 10);
            // var domain = 'p6zwn0l96.bkt.clouddn.com';
            $.ajax({
                url: "http://jierui303.com/qiniu_token",
                success: function(res){
                    token = res.uptoken;//验证token
                    domain = res.domain;//访问绑定域名
                    console.log(token);
                    config = {
                        useCdnDomain: true, //表示是否使用 cdn 加速域名，为布尔值，true 表示使用，默认为 false。
                        disableStatisticsReport: false, //是否禁用日志报告，为布尔值，默认为false。
                        retryCount: 6, //上传自动重试次数（整体重试次数，而不是某个分片的重试次数）；默认 3 次（即上传失败后最多重试两次）；目前仅在上传过程中产生 599 内部错误时生效，但是未来很可能会扩展为支持更多的情况。
                        region: qiniu.region.z0,  //选择上传域名区域；当为 null 或 undefined 时，自动分析上传域名区域
                    };
                    num = Math.random()*700 + 800;
                    num = parseInt(num, 10);
                }});
            // 切换tab后进行一些css操作   //此处对应七牛h5上传
            document.getElementById("box2").className = "";
            //先判断一下当时是否已经有一个程序已经上传 只允许上传一个
            var fsUploadProgressObj = $('#fsUploadProgress'+parseInt(zhangjienum)+''+parseInt(shipinnum));
            var lengths = fsUploadProgressObj.find('tr').length;
            if(lengths >= 1){
                alert('已经上传过视频了，若更换，请先删除上一个视频');
                return false;
            }
            var file = $("#select"+parseInt(zhangjienum)+""+parseInt(shipinnum))[0].files[0];
            console.log(file);
            var finishedAttr = [];
            var compareChunks = [];
            var observable;
                if (file) {
                    console.log('aajksdfjsdf');
                    var key = file.name;
                    var arr_url = key.split('.');
                    var lengths = arr_url.length;
                    // 添加上传dom面板
                    var BLOCK_SIZE = 3 * 1024 * 1024;//分块上传
                    var keys = '';
                    var timestamp = new Date().getTime();
                    num = Math.random()*700 + 800;
                    keys = 'video'+timestamp+parseInt(num, 10)+'.'+arr_url[lengths-1];//自定义新的文件名
                    //获取文件名后缀
                    var type = '';
                    var count = Math.ceil(file.size / BLOCK_SIZE);
                    var data = { num: count, name: key, size: file.size };
                    //添加元素到上传及进度条
                    var name = data.name;
                    var size = data.size;
                    var parent =
                        "<td style='line-height:30px;'>" +
                        name +
                        "<div class='wraper'><a class='linkWrapper'></a></div>" +
                        "</td>" +
                        "<td style='line-height:30px;'>" +
                        size +
                        "</td>" +
                        "<td><div><div id='totalBar' style='float:left;width:50%; height:30px;border:1px solid;border-radius:3px'>" +
                        "<div id='totalBarColor' style='width:0;border:0;background-color:rgba(232,152,39,0.8);height:28px;'></div>" +
                        "<p class='speed'></p>" +
                        "</div>" +
                        "<div class='control-container'>" +
                        '<button class="btn btn-default control-upload" style="margin-left:10px;">开始上传</button>' +
                        "</div><a href='javascript:;' class='closes' data-delname='"+keys+"' style='position: relative;top: -23px;right: -116px;'><img src='/imgback/del.gif' width='20px' height='20px'></a>" +
                        "</div>" +
                        "</td>";
                    var tr = document.createElement("tr");
                    $(tr).html(parent);
                    fsUploadProgressObj.append(tr);//把要添加的元素添加进去
                    //点击删除视频按钮 相应删除七牛云上的视频
                    $(tr).find(".closes").on("click", function() {
                        //判断是否在上传中
                        if(iss && !aaa){
                            alert('有视频正在上传中。');
                            return false;
                        }
                        //清空file input的值
                        $("#select"+parseInt(zhangjienum)+""+parseInt(shipinnum)).val('');
                        // file.value = ''; //虽然file的value不能设为有字符的值，但是可以设置为空值
                       //此处写视频删除功能  删除上传元素
                        $(this).parents('#fsUploadProgress'+parseInt(zhangjienum)+""+parseInt(shipinnum)).empty();
                        $('.shipinName'+parseInt(zhangjienum)+""+parseInt(shipinnum)).val('');
                    });
                    if (file.size > 100 * 1024 * 1024) {
                        fsUploadProgressObj.html("本实例最大上传文件100M");
                        return "";
                    }
                    count > 1 && type != "3"
                        ? ""
                        : fsUploadProgressObj.find(".resume").addClass("hide");
                    if (!fsUploadProgressObj) {
                        return;
                    }
                    putExtra = {
                        fname: key,//fname: string，文件原文件名
                        params: {
                            "x:name": key.split(".")[0]
                        },//params: object，用来放置自定义变量
                        mimeType: ["video/mp4"] //null || array，用来限制上传文件类型，为 null 时表示不对文件类型限制；限制类型放到数组里： ["image/png", "image/jpeg", "image/gif"]
                    };
                    isstart = true;
                    var dom_total = fsUploadProgressObj.find("#totalBar").children("#totalBarColor");

                    // 设置next,error,complete对应的操作，分别处理相应的进度信息，错误信息，以及完成后的操作
                    //error: 上传错误后触发，当不是 xhr 请求错误时，会把当前错误产生原因直接抛出，
                    // 诸如 JSON 解析异常等；当产生 xhr 请求错误时，参数 err 为一个包含 code、message、isRequestError 三个属性的 object：
                    var error = function(err) {
                        isstart = true;
                        iss = true;
                        fsUploadProgressObj.find(".control-upload").text("继续上传");
                        if(err.isRequestError){
                            alert("上传出错,错误码："+err.code+"错误说明："+err.message+"xhr请求错误的 X-Reqid："+err.reqId+"用于区分是否 xhr 请求错误: "+err.isRequestError)
                        }
                    };

                    //complete: 接收上传完成后的后端返回信息，res 参数为一个 object， 为上传成功后后端返回的信息，具体返回结构取决于后端sdk的配置，可参考上传策略
                    var complete = function(res) {
                        console.log(res);
                        iss = false;
                        aaa = true;
                        var urls = 'http://'+domain+'/'+res.key;
                        fsUploadProgressObj.find("#totalBar").addClass("hide");//隐藏进度条
                        fsUploadProgressObj.find(".control-container").html('上传成功^_^ ');
                        if (res.key && res.key.match(/\.(mp4|mp3)$/)) {
                            $('.shipinName'+parseInt(zhangjienum)+""+parseInt(shipinnum)).val(urls);
                        }
                    };

                    //next: 接收上传进度信息，res 参数是一个带有 total 字段的 object，
                    // 包含loaded、total、percent三个属性，提供上传进度信息。
                    var next = function(response) {
                        var chunks = response.chunks||[];
                        var total = response.total;
                        // 这里对每个chunk更新进度，并记录已经更新好的避免重复更新，同时对未开始更新的跳过
                        for (var i = 0; i < chunks.length; i++) {
                            if (chunks[i].percent === 0 || finishedAttr[i]){
                                continue;
                            }
                            if (compareChunks[i].percent === chunks[i].percent){
                                continue;
                            }
                            if (chunks[i].percent === 100){
                                finishedAttr[i] = true;
                            }
                            fsUploadProgressObj.find(".fragment-group li").eq(i).find("#childBarColor").css(
                                    "width",
                                    chunks[i].percent + "%"
                                );
                        }
                        fsUploadProgressObj.find(".speed").text("" + total.percent + "% ");
                        dom_total.css(
                            "width",
                            total.percent + "%"
                        );
                        compareChunks = chunks;
                        iss = true;
                    };

                    var subObject = {
                        next: next,
                        error: error,
                        complete: complete
                    };
                    var subscription;
                    var headers;
                    //参数：file对象，上传的文件 key: 文件资源名  token: 上传验证信息，前端通过接口请求后端获得
                    fsUploadProgressObj.find(".control-upload").on("click", function() {
                        // 调用sdk上传接口获得相应的observable，控制上传和暂停
                        observable = qiniu.upload(file, keys, token, putExtra, config);
                            if(isstart){
                                $(this).text("暂停上传");
                                isstart = false;
                                iss = true;
                                subscription = observable.subscribe(subObject);//上传开始 并传递参数
                            }else{
                                isstart = true;
                                iss = false;
                                $(this).text("继续上传");
                                subscription.unsubscribe();//上传取消
                            }
                            return false;
                        });
                }
        }

       </script>
