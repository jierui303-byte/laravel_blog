<?php

namespace App\Http\Controllers\Admin\ExternalLinksWeb;

use App\Http\Controllers\Admin\CommonController;
use App\Http\Model\ExternalLinksWeb\ExternalLinksWeb;
use App\Http\Model\Links\Links;
use App\Http\Model\ExternalLinks\ExternalLinks;
use Illuminate\Http\Request;

use App\Http\Model\SubWeb\SubWeb;
use App\Http\Model\SubWebType\SubWebType;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class ExternalLinksWebController extends CommonController
{
    protected $subWebData;//文章数据库模型
    protected $subWebTypeData;//文章数据库模型
    protected $linksData;//文章数据库模型
    protected $currentTime;//当前时间

    public function __construct(Request $request)
    {
        parent::__construct($request);

        $this->subWebData = new SubWeb();
        $this->subWebTypeData = new SubWebType();
        $this->linksData = new Links();
        $this->externalLinksWebData = new ExternalLinksWeb();
        $this->currentTime = time();
    }

    public function index()
    {
        $data = $this->externalLinksWebData->orderBy('web_id', 'desc')->get();
        $count = count($data);
        return view('admin.externalLinksWeb.index', compact('data', 'count'));
    }

    public function create()
    {
        if($this->request->getMethod() == 'POST'){
            $data['web_name'] = $this->request->get('web_name');
            $data['web_domain'] = $this->request->get('web_domain');

            $rules = [
                'web_name' => 'required',
                'web_domain' => 'required',
            ];

            $message = [
                'web_name.required' => '链接名称不能为空!',
                'web_domain.required' => '链接URL不能为空!',
            ];

            //文章新增时新增到对应的分类表中
            $validator = Validator::make($data, $rules, $message);//Validator数据格式匹配验证类  $rules规则数组
            if ($validator->passes()) {
                //通过article模型入库
                $re = $this->externalLinksWebData->create($data);

                if ($re) {
                    return $this->success('添加成功!', 'admin/externalLinksWeb');
                } else {
                    return $this->error('数据填充失败，请稍后再试!', 'admin/externalLinksWeb');
                }
            } else {
                return $this->error($validator->customMessages, 'admin/externalLinksWeb');
            }

        }else{
            $data = $this->subWebTypeData->tree();//获取分类列表
            return view('admin.externalLinksWeb.add', compact('data'));
        }
    }

    public function edit($id)
    {
        if($this->request->getMethod() == 'PUT'){
            $data['web_name'] = $this->request->get('web_name');
            $data['web_domain'] = $this->request->get('web_domain');

            $re = $this->externalLinksWebData->where('web_id', $id)->update($data);
            if ($re) {
                return $this->success('修改成功!', 'admin/externalLinksWeb');
            } else {
                return $this->error('数据更新失败，请稍后再试!', 'admin/externalLinksWeb');
            }
        }else{
            $field = $this->externalLinksWebData->find($id);

            return view('admin.externalLinksWeb.edit', compact('data', 'field'));
        }

    }

    //删除单个(公共方法)
    public function del($id)
    {
        $res = $this->externalLinksWebData->destroy($id);
        if ($res) {
            $this->success('删除成功', 'admin/externalLinksWeb');
        } else {
            $this->error('删除失败', 'admin/externalLinksWeb');
        }
    }

    //删除多个(公共方法)
    public function del_all()
    {
        $ids = $this->request->get('id');
        $ids = explode(',', $ids);
        $res = $this->externalLinksWebData->destroy($ids);
        if ($res) {
            $this->success('删除成功', 'admin/externalLinksWeb');
        } else {
            $this->error('删除失败', 'admin/externalLinksWeb');
        }
    }

}
