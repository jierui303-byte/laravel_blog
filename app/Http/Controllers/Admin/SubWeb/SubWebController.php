<?php

namespace App\Http\Controllers\Admin\SubWeb;

use App\Http\Model\Blog\Article;
use App\Http\Controllers\Admin\CommonController;
use App\Http\Model\Blog\Category;
use App\Http\Model\SubWeb\SubWeb;
use App\Http\Model\SubWebType\SubWebType;
use \Illuminate\Pagination\Paginator;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class SubWebController extends CommonController
{
    protected $subWebData;//文章数据库模型
    protected $currentTime;//当前时间

    public function __construct(Request $request)
    {
        parent::__construct($request);

        $this->subWebData = new SubWeb();
        $this->subWebTypeData = new SubWebType();
        $this->currentTime = time();
    }

    public function index()
    {
        $data = $this->subWebData->orderBy('web_id', 'desc')->get();
        $count = count($data);
        return view('admin.subWeb.index', compact('data', 'count'));
    }

    public function create()
    {
        if($this->request->getMethod() == 'POST'){
            $data['web_name'] = $this->request->get('web_name');
            $data['web_url'] = $this->request->get('web_url');
            $data['web_ip'] = $this->request->get('web_ip');
            $data['web_user_name'] = $this->request->get('web_user_name');
            $data['web_user_pwd'] = $this->request->get('web_user_pwd');
            $data['web_home_link_price'] = $this->request->get('web_home_link_price');
            $data['web_all_link_price'] = $this->request->get('web_all_link_price');
            $data['web_baidu_soulu'] = $this->request->get('web_baidu_soulu');
            $data['web_type_id'] = $this->request->get('web_type_pid');
            $data['web_type_name'] = $this->subWebTypeData->getWebTypeNameByTypeId($this->request->get('web_type_id'));

            $rules = [
                'web_name' => 'required',
                'web_url' => 'required',
            ];

            $message = [
                'web_name.required' => '文章标题不能为空!',
                'web_url.required' => '文章内容不能为空!',
            ];

            //文章新增时新增到对应的分类表中
            $validator = Validator::make($data, $rules, $message);//Validator数据格式匹配验证类  $rules规则数组
            if ($validator->passes()) {
                //通过article模型入库
                $re = $this->subWebData->create($data);

                if ($re) {
                    return $this->success('添加成功!', 'admin/subWeb');
                } else {
                    return $this->error('数据填充失败，请稍后再试!', 'admin/subWeb');
                }
            } else {
                return $this->error($validator->customMessages, 'admin/subWeb');
            }

        }else{
            $data = $this->subWebTypeData->tree();//获取分类列表
            return view('admin.subWeb.add', compact('data'));
        }
    }

    public function edit($id)
    {
        if($this->request->getMethod() == 'PUT'){
            $data['web_name'] = $this->request->get('web_name');
            $data['web_url'] = $this->request->get('web_url');
            $data['web_ip'] = $this->request->get('web_ip');
            $data['web_user_name'] = $this->request->get('web_user_name');
            $data['web_user_pwd'] = $this->request->get('web_user_pwd');
            $data['web_home_link_price'] = $this->request->get('web_home_link_price');
            $data['web_all_link_price'] = $this->request->get('web_all_link_price');
            $data['web_baidu_soulu'] = $this->request->get('web_baidu_soulu');
            $data['web_type_id'] = $this->request->get('web_type_pid');
            $data['web_type_name'] = $this->subWebTypeData->getWebTypeNameByTypeId($this->request->get('web_type_pid'));

            $re = $this->subWebData->where('web_id', $id)->update($data);
            if ($re) {
                return $this->success('修改成功!', 'admin/subWeb');
            } else {
                return $this->error('数据更新失败，请稍后再试!', 'admin/subWeb');
            }
        }else{
            $data = $this->subWebTypeData->tree();
            $field = $this->subWebData->find($id);

            return view('admin.subWeb.edit', compact('data', 'field'));
        }

    }

    //删除单个(公共方法)
    public function del($id)
    {
        $res = $this->subWebData->destroy($id);
        if ($res) {
            $this->success('删除成功', 'admin/subWeb');
        } else {
            $this->error('删除失败', 'admin/subWeb');
        }
    }

    //删除多个(公共方法)
    public function del_all()
    {
        $ids = $this->request->get('id');
        $ids = explode(',', $ids);
        $res = $this->subWebData->destroy($ids);
        if ($res) {
            $this->success('删除成功', 'admin/subWeb');
        } else {
            $this->error('删除失败', 'admin/subWeb');
        }
    }


}
