<?php

namespace App\Http\Controllers\Admin\Links;

use App\Http\Controllers\Admin\CommonController;
use App\Http\Model\Links\Links;
use Illuminate\Http\Request;

use App\Http\Model\SubWeb\SubWeb;
use App\Http\Model\SubWebType\SubWebType;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class LinksController extends CommonController
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
        $this->currentTime = time();
    }

    public function index()
    {
        $data = $this->linksData->orderBy('link_id', 'desc')->get();
        $count = count($data);
        return view('admin.links.index', compact('data', 'count'));
    }

    public function create()
    {
        if($this->request->getMethod() == 'POST'){
            $data['link_name'] = $this->request->get('link_name');
            $data['link_title'] = $this->request->get('link_title');
            $data['link_url'] = $this->request->get('link_url');
            $data['link_order'] = $this->request->get('link_order');
            $data['link_start_time'] = $this->request->get('link_start_time');
            $data['link_end_time'] = $this->request->get('link_end_time');
            $data['link_web_type_id'] = $this->request->get('link_web_type_id');
            $data['link_web_id'] = join(',', $this->request->get('link_web_id'));

            $rules = [
                'link_name' => 'required',
                'link_url' => 'required',
            ];

            $message = [
                'link_name.required' => '链接名称不能为空!',
                'link_url.required' => '链接URL不能为空!',
            ];

            //文章新增时新增到对应的分类表中
            $validator = Validator::make($data, $rules, $message);//Validator数据格式匹配验证类  $rules规则数组
            if ($validator->passes()) {
                //通过article模型入库
                $re = $this->linksData->create($data);

                if ($re) {
                    return $this->success('添加成功!', 'admin/links');
                } else {
                    return $this->error('数据填充失败，请稍后再试!', 'admin/links');
                }
            } else {
                return $this->error($validator->customMessages, 'admin/links');
            }

        }else{
            $data = $this->subWebTypeData->tree();//获取分类列表
            return view('admin.links.add', compact('data'));
        }
    }

    public function edit($id)
    {
        if($this->request->getMethod() == 'PUT'){
            $data['link_name'] = $this->request->get('link_name');
            $data['link_title'] = $this->request->get('link_title');
            $data['link_url'] = $this->request->get('link_url');
            $data['link_order'] = $this->request->get('link_order');
            $data['link_start_time'] = $this->request->get('link_start_time');
            $data['link_end_time'] = $this->request->get('link_end_time');
            $data['link_web_type_id'] = $this->request->get('link_web_type_id');
            $data['link_web_id'] = join(',', $this->request->get('link_web_id'));

            $re = $this->linksData->where('link_id', $id)->update($data);
            if ($re) {
                return $this->success('修改成功!', 'admin/links');
            } else {
                return $this->error('数据更新失败，请稍后再试!', 'admin/links');
            }
        }else{
            $data = $this->subWebTypeData->tree();
            $field = $this->linksData->find($id);

            return view('admin.links.edit', compact('data', 'field'));
        }

    }

    //删除单个(公共方法)
    public function del($id)
    {
        $res = $this->linksData->destroy($id);
        if ($res) {
            $this->success('删除成功', 'admin/links');
        } else {
            $this->error('删除失败', 'admin/links');
        }
    }

    //删除多个(公共方法)
    public function del_all()
    {
        $ids = $this->request->get('id');
        $ids = explode(',', $ids);
        $res = $this->linksData->destroy($ids);
        if ($res) {
            $this->success('删除成功', 'admin/links');
        } else {
            $this->error('删除失败', 'admin/links');
        }
    }


    //ajax分类排序
    public function changeorder()
    {
        $input = Input::all();
        $links = Links::find($input['link_id']);
        $links->link_order = $input['link_order'];
        $re = $links->update();
        if ($re) {
            $data = [
                'status' => 0,
                'msg' => '友情链接排序更新成功!',
            ];
        } else {
            $data = [
                'status' => 1,
                'msg' => '友情链接排序更新失败,请稍后重试!',
            ];
        }
        return $data;
    }

    public function getWebListByWebTypeId($web_type_id)
    {
        return $this->subWebData
            ->where('web_type_id', $web_type_id)
            ->get([
                'web_name',
                'web_id',
                'web_type_id',
                'web_home_link_price',
                'web_all_link_price',
            ]);
    }


}
