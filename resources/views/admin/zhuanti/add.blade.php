@extends('layouts.admin')

@section('content')

    <!--面包屑导航 开始-->
    <div class="crumb_warp">
        <!--<i class="fa fa-bell"></i> 欢迎使用登陆网站后台，建站的首选工具。-->
        <i class="fa fa-home"></i> <a href="{{url('admin/info')}}">首页</a> &raquo; 教程专题管理
    </div>
    <!--面包屑导航 结束-->

	<!--结果集标题与导航组件 开始-->
	<div class="result_wrap">
        <div class="result_title">
            <h3>添加教程专题分类</h3>
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
                <a href="{{url('admin/zhuanti/create')}}"><i class="fa fa-plus"></i>添加教程专题</a>
                <a href="{{url('admin/zhuanti')}}"><i class="fa fa-recycle"></i>全部教程专题</a>
            </div>
        </div>
    </div>
    <!--结果集标题与导航组件 结束-->
    
    <div class="result_wrap">
        <form action="{{url('admin/zhuanti')}}" method="post">
            {{csrf_field()}}
            <table class="add_tab">
                <tbody>
                    <tr>
                        <th width="120"><i class="require">*</i>父级分类：</th>
                        <td>
                            <select name="zhuan_pid">
                                <option value="0">==顶级分类==</option>
                                @foreach($data as $d)
                                <option value="{{$d->zhuan_id}}">{{$d->zhuan_name}}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th><i class="require">*</i>分类名称：</th>
                        <td>
                            <input type="text" name="zhuan_name">
                            <span><i class="fa fa-exclamation-circle yellow"></i>分类名称必须填写</span>
                        </td>
                    </tr>
                    <tr>
                        <th><i class="require">*</i>分类路由名称：</th>
                        <td>
                            <input type="text" name="zhuan_URL_name">
                            <span><i class="fa fa-exclamation-circle yellow"></i>1.可以自定义名称 2.默认拼音全拼</span>
                        </td>
                    </tr>
                    <tr>
                        <th>分类标题：</th>
                        <td>
                            <input type="text" class="lg" name="zhuan_title">
                        </td>
                    </tr>
                    <tr>
                        <th><i class="require">*</i>分类SEO关键词：</th>
                        <td>
                            <textarea name="zhuan_keywords"></textarea>
                            <span><i class="fa fa-exclamation-circle yellow"></i>分类SEO关键词之间必须用英文逗号隔开，中文逗号不会进行关键词拆分</span>
                        </td>
                    </tr>
                    <tr>
                        <th>分类SEO描述：</th>
                        <td>
                            <textarea name="zhuan_description"></textarea>
                        </td>
                    </tr>

                    <tr>
                        <th><i class="require">*</i>排序：</th>
                        <td>
                            <input type="text" class="sm" name="zhuan_order">
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