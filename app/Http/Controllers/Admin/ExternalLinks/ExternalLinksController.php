<?php

namespace App\Http\Controllers\Admin\ExternalLinks;

use App\Http\Controllers\Admin\CommonController;
use App\Http\Model\Links\Links;
use App\Http\Model\ExternalLinks\ExternalLinks;
use Illuminate\Http\Request;

use App\Http\Model\SubWeb\SubWeb;
use App\Http\Model\SubWebType\SubWebType;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class ExternalLinksController extends CommonController
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
        $this->externalLinksData = new ExternalLinks();
        $this->currentTime = time();
    }

    public function index()
    {
        $data = $this->externalLinksData->orderBy('link_id', 'desc')->get();
        $count = count($data);
        $data = [];
        return view('admin.externalLinks.index', compact('data', 'count'));
    }

    public function create()
    {
        if($this->request->getMethod() == 'POST'){
            $data['link_url'] = $this->request->get('link_url');

            $rules = [
                'link_url' => 'required',
            ];

            $message = [
                'link_url.required' => '链接URL不能为空!',
            ];

            //文章新增时新增到对应的分类表中
            $validator = Validator::make($data, $rules, $message);//Validator数据格式匹配验证类  $rules规则数组
            if ($validator->passes()) {
                //通过article模型入库
                $re = $this->externalLinksData->create($data);

                if ($re) {
                    return $this->success('添加成功!', 'admin/externalLinks');
                } else {
                    return $this->error('数据填充失败，请稍后再试!', 'admin/externalLinks');
                }
            } else {
                return $this->error($validator->customMessages, 'admin/externalLinks');
            }

        }else{
            return view('admin.externalLinks.add', compact(''));
        }
    }

    public function edit($id)
    {
        if($this->request->getMethod() == 'PUT'){
            $data['link_url'] = $this->request->get('link_url');

            $re = $this->externalLinksData->where('link_id', $id)->update($data);
            if ($re) {
                return $this->success('修改成功!', 'admin/externalLinks');
            } else {
                return $this->error('数据更新失败，请稍后再试!', 'admin/externalLinks');
            }
        }else{
            $field = $this->externalLinksData->find($id);

            return view('admin.externalLinks.edit', compact('field'));
        }

    }

    //删除单个(公共方法)
    public function del($id)
    {
        $res = $this->externalLinksData->destroy($id);
        if ($res) {
            $this->success('删除成功', 'admin/externalLinks');
        } else {
            $this->error('删除失败', 'admin/externalLinks');
        }
    }

    //删除多个(公共方法)
    public function del_all()
    {
        $ids = $this->request->get('id');
        $ids = explode(',', $ids);
        $res = $this->externalLinksData->destroy($ids);
        if ($res) {
            $this->success('删除成功', 'admin/externalLinks');
        } else {
            $this->error('删除失败', 'admin/externalLinks');
        }
    }

}
