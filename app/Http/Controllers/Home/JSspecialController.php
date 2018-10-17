<?php

namespace App\Http\Controllers\Home;

use App\Http\Model\Article;
use App\Http\Model\Category;
use App\Http\Model\Links;
use App\Http\Model\Navs;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;

class JSspecialController extends CommonController
{
    //JS特效练习首页
    public function index()
    {
	return view('jsFile.index');
    }

    //地址选择下拉框三级联动特效
    public function sjld()
    {
    	return view('jsFile.exmple.sjld.index');
    }

    //港湾有巢单页
    public function gwyc()
    {
    	return view('web.gwyc.index');
    }

    //博彩网络单页
    public function bcwl()
    {
    	return view('web.bcwl.index');
    }

    //火盈投资首页
    public function hytz()
    {
    	return view('web.hytz.index');
    }
    //火盈投资列表页
    public function hytz_list()
    {
    	return view('web.hytz.list');
    }
    //火盈系统页
    public function hytz_system()
    {
    	return view('web.hytz.system');
    }
    //火盈师资页
    public function hytz_strength()
    {
    	return view('web.hytz.strength');
    }
    //火盈内容页
    public function hytz_content()
    {
    	return view('web.hytz.content');
    }
    //关于火盈介绍页
    public function hytz_about()
    {
    	return view('web.hytz.about');
    }









    //特效小示例
    public function special()
    {
    	return view('special.special');
    }
}
