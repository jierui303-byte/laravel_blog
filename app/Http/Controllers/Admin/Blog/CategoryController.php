<?php

namespace App\Http\Controllers\Admin\Blog;

use App\Http\Controllers\Admin\CommonController;
use App\Http\Model\Blog\Category;
use App\Http\Model\Tag;
use App\Http\Model\Templates\Templates;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class CategoryController extends CommonController
{
    protected $categoryData;//分类数据库模型
    protected $templatesData;//分类数据库模型
    protected $currentTime;//当前时间

    public function __construct(Request $request)
    {
        parent::__construct($request);

        $this->categoryData = new Category();
        $this->templatesData = new Templates();
        $this->tagData = new Tag();
        $this->currentTime = date('Y-m-d h:i:s');
    }

    public function index()
    {
        $data = $this->categoryData
            ->where('cate_pid', 0)
            ->get();
        $count = count($data);
        return view('admin.category.index', compact('data', 'count'));
    }

    public function create()
    {
        if($this->request->getMethod() == 'POST'){
            $data['cate_name'] = $this->request->get('cate_name');
            $data['cate_title'] = $this->request->get('cate_title');
            $data['cate_keywords'] = $this->request->get('cate_keywords');
            $data['cate_description'] = $this->request->get('cate_description');
            $data['cate_math'] = $this->request->get('cate_math');
            $data['cate_domain'] = $this->request->get('cate_domain');
            $data['cate_ip_address'] = $this->request->get('cate_ip_address');
            $data['temp_id'] = $this->request->get('temp_id');
            $data['is_open'] = $this->request->get('is_open');
            $data['create_time'] = $this->currentTime;

            $rules = [
                'cate_name' => 'required',
                'cate_title' => 'required',
            ];

            $message = [
                'cate_name.required' => '分类名称不能为空!',
                'cate_title.required' => '分类标题不能为空!',
            ];


            //文章新增时新增到对应的分类表中
            $validator = Validator::make($data, $rules, $message);//Validator数据格式匹配验证类  $rules规则数组
            if ($validator->passes()) {
                //通过article模型入库
                $re = $this->categoryData->create($data);

                if ($re) {
                    return $this->success('添加成功!', 'admin/category');
                } else {
                    return $this->error('数据填充失败，请稍后再试!', 'admin/category');
                }
            } else {
                return $this->error($validator->customMessages, 'admin/category');
            }

        }else{
            $data = $this->categoryData
                ->where('cate_pid', 0)
                ->get();//获取分类列表
            //获取模板列表
            $templatesData = $this->templatesData->get();

            return view('admin.category.add', compact('data', 'templatesData'));
        }
    }

    public function edit($id)
    {
        if($this->request->getMethod() == 'PUT'){
            $data['cate_name'] = $this->request->get('cate_name');
            $data['cate_title'] = $this->request->get('cate_title');
            $data['cate_keywords'] = $this->request->get('cate_keywords');
            $data['cate_description'] = $this->request->get('cate_description');
            $data['cate_math'] = $this->request->get('cate_math');
            $data['cate_domain'] = $this->request->get('cate_domain');
            $data['temp_id'] = $this->request->get('temp_id');
            $data['is_open'] = $this->request->get('is_open');
            $data['cate_ip_address'] = $this->request->get('cate_ip_address');

            $re = $this->categoryData->where('cate_id', $id)->update($data);
            if ($re) {
                return $this->success('修改成功!', 'admin/category');
            } else {
                return $this->error('数据更新失败，请稍后再试!', 'admin/category');
            }
        }else{
            $data = $this->categoryData
                ->where('cate_pid', 0)
                ->get();
            $field = $this->categoryData->find($id);
            //获取模板列表
            $templatesData = $this->templatesData->get();
            return view('admin.category.edit', compact('data', 'field', 'templatesData'));
        }

    }

    public function create_two($id)
    {
        if($this->request->getMethod() == 'POST'){
            $data['cate_name'] = $this->request->get('cate_name');
            $data['cate_title'] = $this->request->get('cate_title');
            $data['cate_keywords'] = $this->request->get('cate_keywords');
            $data['cate_description'] = $this->request->get('cate_description');
            $data['cate_math'] = $this->request->get('cate_math');
            $data['cate_domain'] = $this->request->get('cate_domain');
            $data['cate_ip_address'] = $this->request->get('cate_ip_address');
            $data['create_time'] = $this->currentTime;

            $rules = [
                'cate_name' => 'required',
                'cate_title' => 'required',
            ];

            $message = [
                'cate_name.required' => '分类名称不能为空!',
                'cate_title.required' => '分类标题不能为空!',
            ];


            //文章新增时新增到对应的分类表中
            $validator = Validator::make($data, $rules, $message);//Validator数据格式匹配验证类  $rules规则数组
            if ($validator->passes()) {
                //通过article模型入库
                $re = $this->categoryData->create($data);

                if ($re) {
                    return $this->success('添加成功!', 'admin/category');
                } else {
                    return $this->error('数据填充失败，请稍后再试!', 'admin/category');
                }
            } else {
                return $this->error($validator->customMessages, 'admin/category');
            }

        }else{
            $data = $this->categoryData
                ->where('cate_pid', 0)
                ->get();//获取分类列表
            return view('admin.category.add_two', compact('data', 'id'));
        }
    }

    public function cate_two_show($id)
    {
        $data = $this->categoryData->where('cate_pid', $id)->get();
        return view('admin.category.cate_two_show', compact('data', 'id'));
    }

    public function edit_two($id)
    {
        if($this->request->getMethod() == 'PUT'){
            $data['cate_name'] = $this->request->get('cate_name');
            $data['cate_title'] = $this->request->get('cate_title');
            $data['cate_keywords'] = $this->request->get('cate_keywords');
            $data['cate_description'] = $this->request->get('cate_description');
            $data['cate_math'] = $this->request->get('cate_math');
            $data['cate_domain'] = $this->request->get('cate_domain');
            $data['cate_ip_address'] = $this->request->get('cate_ip_address');

            $re = $this->categoryData->where('cate_id', $id)->update($data);
            if ($re) {
                return $this->success('修改成功!', 'admin/category');
            } else {
                return $this->error('数据更新失败，请稍后再试!', 'admin/category');
            }
        }else{
            $data = $this->categoryData
                ->where('cate_pid', 0)
                ->get();
            $field = $this->categoryData->find($id);

            return view('admin.category.edit_two', compact('data', 'field'));
        }

    }

    //删除单个(公共方法)
    public function del($id)
    {
        $res = $this->categoryData->destroy($id);
        if ($res) {
            $this->success('删除成功', 'admin/category');
        } else {
            $this->error('删除失败', 'admin/category');
        }
    }

    //删除多个(公共方法)
    public function del_all()
    {
        $ids = $this->request->get('id');
        $ids = explode(',', $ids);
        $res = $this->categoryData->destroy($ids);
        if ($res) {
            $this->success('删除成功', 'admin/category');
        } else {
            $this->error('删除失败', 'admin/category');
        }
    }

    public function edit_category_is_open()
    {
        $id = $this->request->get('id');
        if($this->request->getMethod() == 'PUT'){
            $data['is_open'] = $this->request->get('is_open');

            $re = $this->categoryData->where('cate_id', $id)->update($data);
            if ($re) {
                if($this->request->get('is_open') == 1){
                    return $this->success('分类开启成功!', 'admin/category');
                }else{
                    return $this->success('分类关闭成功!', 'admin/category');
                }
            } else {
                return $this->error('数据更新失败，请稍后再试!', 'admin/category');
            }
        }else{
            return $this->error('数据更新失败，请稍后再试!', 'admin/category');
        }

    }

    public function edit_category_is_open_pseudo()
    {
        $id = $this->request->get('id');
        if($this->request->getMethod() == 'PUT'){
            $data['is_open_pseudo'] = $this->request->get('is_open_pseudo');

            $re = $this->categoryData->where('cate_id', $id)->update($data);
            if ($re) {
                if($this->request->get('is_open_pseudo') == 1){
                    return $this->success('伪原创开启成功!', 'admin/category');
                }else{
                    return $this->success('伪原创关闭成功!', 'admin/category');
                }
            } else {
                return $this->error('数据更新失败，请稍后再试!', 'admin/category');
            }
        }else{
            return $this->error('数据更新失败，请稍后再试!', 'admin/category');
        }

    }

    //ajax分类排序
    public function changeorder()
    {
        $input = Input::all();
        $cate = $this->categoryData->find($input['cate_id']);
        $cate->cate_order = $input['cate_order'];
        $re = $cate->update();
        if ($re) {
            $data = [
                'status' => 0,
                'msg' => '分类排序更新成功!',
            ];
        } else {
            $data = [
                'status' => 1,
                'msg' => '分类排序更新失败,请稍后重试!',
            ];
        }
        return $data;
    }




}
