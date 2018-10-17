<?php
/**
 * Created by PhpStorm.
 * User: mac
 * Date: 2018/9/15
 * Time: 下午3:54
 */
namespace App\Http\Controllers\AppApi;

use App\Http\Model\Article;
use App\Http\Requests\Request;
use Illuminate\Contracts\Validation\Validator;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

/**
 * Class ApiController  专门为手机APP请求提供数据封装的接口
 * @package App\Http\Controllers\AppApi
 */
class CommonApiController extends Controller
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }
}