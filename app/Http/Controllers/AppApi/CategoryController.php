<?php

namespace App\Http\Controllers\AppApi;

use App\Http\Model\Category;
use App\Http\Model\Article;
use Illuminate\Contracts\Validation\Validator;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Support\Facades\Input;

/**
 * Class ApiController  专门为手机APP请求提供数据封装的接口
 * @package App\Http\Controllers\AppApi
 */
class CategoryController extends Controller
{
    //获取网站分类顶级栏目列表
    public function getCategoryData(){
        $pics = Category::where('cate_pid', 0)->get();
        //这里的图片URL地址可以遍历处理一下哦
        
        return response()->json($pics);

    }


    //根据顶级栏目id获取二级栏目列表
    public function getTwoCategoryData(){
        //获取到顶级栏目id值先判断是否存在
        $input = Input::all();
//        var_dump($input['categoryId']);
        $pics = Category::where('cate_pid', $input['categoryId'])->get();
        //这里的图片URL地址可以遍历处理一下哦

        return response()->json($pics);
    }



}
