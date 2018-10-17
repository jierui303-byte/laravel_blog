@extends('layouts.admin')

@section('content')

    <!--面包屑导航 开始-->
    <div class="crumb_warp">
        <!--<i class="fa fa-bell"></i> 欢迎使用登陆网站后台，建站的首选工具。-->
        <i class="fa fa-home"></i> <a href="{{url('admin/info')}}">首页</a> &raquo; 采集管理
    </div>
    <!--面包屑导航 结束-->

	<!--结果集标题与导航组件 开始-->
	<div class="result_wrap">
        <div class="result_title">
            <h3>添加采集规则</h3>
            @if(count($errors)>0)
                <div class="mark">
                    @if(is_object($errors))
                        @foreach($errors->all() as $error)
                            <p>{{$error}}</p>
                        @endforeach
                    @else
                        <p>{{$errors}}</p>
                    @endif
                </div>
            @endif
        </div>
        <div class="result_content">
            <div class="short_wrap">
                <a href="{{url('admin/caiji/create')}}"><i class="fa fa-plus"></i>添加采集规则</a>
                <a href="{{url('admin/caiji')}}"><i class="fa fa-recycle"></i>全部采集规则</a>
            </div>
        </div>
    </div>
    <!--结果集标题与导航组件 结束-->
    
    <div class="result_wrap">
        <form action="{{url('admin/caiji')}}" method="post">
            {{csrf_field()}}
            <table class="add_tab">
                <tbody>
                    <tr>
                        <th><i class="require">*</i>采集规则名称：</th>
                        <td>
                            <input type="text" name="caiji_name">
                            <span><i class="fa fa-exclamation-circle yellow"></i>分类名称必须填写</span>
                        </td>
                    </tr>
                    <tr>
                        <th><i class="require">*</i>采集目标页面字符编码：</th>
                        <td>
                            <input type="radio" name="caiji_bianma" value="0">UTF-8
                            <input type="radio" name="caiji_bianma" value="1">GBK2312
                            <span><i class="fa fa-exclamation-circle yellow"></i>UTF-8为0；GBK2312为1</span>
                        </td>
                    </tr>
                    <tr>
                        <th width="120"><i class="require">*</i>文章分类：</th>
                        {{--<td>--}}
                            {{--<select name="cate_pid">--}}
                                {{--<option value="0">==顶级分类==</option>--}}
                                {{--<option value="0">=sss</option>--}}
                            {{--</select>--}}
                        {{--</td>--}}
                    </tr>
                    <tr>
                        <th>列表URL地址：</th>
                        <td>
                            <input type="text" class="lg" name="caiji_list_url">
                        </td>
                        {{--<td>--}}
                            {{--模式：--}}
                            {{--<select name="cate_pid">--}}
                                {{--<option value="0">普通模式</option>--}}
                                {{--<option value="0">高级模式</option>--}}
                            {{--</select>--}}
                        {{--</td>--}}
                    </tr>
                    <tr>
                        <th><i class="require">*</i>列表元素选择器：</th>
                        <td>
                            <input type="text" class="lg" name="caiji_title_jquery" placeholder="#newsContent01>li>a">
                            <span><i class="fa fa-exclamation-circle yellow"></i>分类SEO关键词之间必须用英文逗号隔开，中文逗号不会进行关键词拆分</span>
                        </td>
                    </tr>
                    <tr>
                        <th><i class="require">*</i>值属性：</th>
                        <td>
                            <input type="text" class="lg" name="caiji_attr_jquery" placeholder="text(),content ,texts(),attrs('href'),src,alt"><br/>
                            <p>text():获取元素内的纯文本</p>
                            <p>content:获取元素内的所有内容</p>
                            <p>texts():获取所有的纯文本</p>
                            <p>attrs('href'):获取a链接的href地址</p>
                            <p>src:获取src的URL地址</p>
                            <p>alt:获取img的alt属性值</p>
                        </td>
                    </tr>
                    <tr>
                        <th>文章内容选择器：</th>
                        <td>
                            <input type="text" class="lg" name="caiji_content_jquery" placeholder=".bd>#Cnt-Main-Article-QQ[bosszone=content]">
                        </td>
                    </tr>
                    <tr>
                        <th>是否显示：</th>
                        <td>
                            <input type="radio" class="lg" value="1" checked name="caiji_status" >开启
                            <input type="radio" class="lg" value="0" name="caiji_status" >关闭
                        </td>
                    </tr>
                    <tr>
                        <th></th>
                        <td>
                            <input type="submit" value="提交">
                            <input type="button" class="back" onclick="history.go(-1)" value="返回">
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>

@endsection