<?php

namespace App\Http\Controllers\AppApi;

use App\Http\Model\Links;
use Illuminate\Contracts\Validation\Validator;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

/**
 * Class ApiController  专门为手机APP请求提供数据封装的接口
 * @package App\Http\Controllers\AppApi
 */
class LinksController extends Controller
{
    public function get(){
        $pics = [];
        //这里的图片URL地址可以遍历处理一下哦
        
        return response()->json($pics);

    }
}
