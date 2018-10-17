<?php

namespace App\Http\Controllers\Admin\Keywords;

use App\Http\Controllers\Admin\CommonController;
use App\Http\Model\Blog\Category;
use App\Http\Model\Collect\CollectArticle;
use App\Http\Model\Collect\CollectRules;
use App\Http\Model\Collect\CollectNews;
use App\Http\Model\SubWebType\SubWebType;
use App\Http\Model\Keywords\Keywords;
use App\Http\Model\Keywords\KeywordsType;
use App\Http\Model\Tag;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;


class KeywordsTypeController extends CommonController
{
    protected $collectRulesData;//文章数据库模型
    protected $collectNewsData;//文章数据库模型
    protected $collectArticleData;//文章数据库模型
    protected $subWebTypeData;//文章数据库模型
    protected $keywordsData;//文章数据库模型
    protected $tagData;//文章数据库模型
    protected $articleData;//文章数据库模型
    protected $categoryData;//分类数据库模型
    protected $currentTime;//当前时间

    public function __construct(Request $request)
    {
        parent::__construct($request);

        $this->collectRulesData = new CollectRules();
        $this->keywordsData = new Keywords();
        $this->keywordsTypeData = new KeywordsType();
        $this->collectNewsData = new CollectNews();
        $this->subWebTypeData = new SubWebType();
        $this->collectArticleData = new CollectArticle();
        $this->categoryData = new Category();
        $this->tagData = new Tag();
        $this->currentTime = date('Y-m-d h:i:s');
    }

    //全部分类列表
    public function index(Request $request)
    {
        $data = $this->keywordsTypeData->orderBy('key_id', 'desc')->get();
        $count = count($data);
        return view('admin/keywordsType/index', compact('data', 'count'));
    }

    public function create()
    {
        if($this->request->getMethod() == 'POST'){
            $data['type_name'] = $this->request->get('type_name');

            $rules = [
                'type_name' => 'required',
            ];

            $message = [
                'type_name.required' => '名称不能为空!',
            ];

            //文章新增时新增到对应的分类表中
            $validator = Validator::make($data, $rules, $message);//Validator数据格式匹配验证类  $rules规则数组
            if ($validator->passes()) {
                //通过article模型入库
                $re = $this->keywordsTypeData->create($data);

                if ($re) {
                    return $this->success('添加成功!', 'admin/keywordsType');
                } else {
                    return $this->error('数据填充失败，请稍后再试!', 'admin/keywordsType');
                }
            } else {
                return $this->error($validator->customMessages, 'admin/keywordsType');
            }

        }else{
            $data = $this->subWebTypeData->tree();//获取分类列表
            return view('admin.keywordsType.add', compact('data'));
        }
    }

    public function edit($id)
    {
        if($this->request->getMethod() == 'PUT'){
            $data['type_name'] = $this->request->get('type_name');

            $re = $this->keywordsTypeData->where('type_id', $id)->update($data);
            if ($re) {
                return $this->success('修改成功!', 'admin/keywordsType');
            } else {
                return $this->error('数据更新失败，请稍后再试!', 'admin/keywordsType');
            }
        }else{
            $data = $this->subWebTypeData->tree();
            $field = $this->keywordsTypeData->find($id);

            return view('admin.keywordsType.edit', compact('data', 'field'));
        }

    }

    //删除单个(公共方法)
    public function del($id)
    {
        $res = $this->keywordsTypeData->destroy($id);
        if ($res) {
            $this->success('删除成功', 'admin/keywordsType');
        } else {
            $this->error('删除失败', 'admin/keywordsType');
        }
    }

    //删除多个(公共方法)
    public function del_all()
    {
        $ids = $this->request->get('id');
        $ids = explode(',', $ids);
        $res = $this->keywordsTypeData->destroy($ids);
        if ($res) {
            $this->success('删除成功', 'admin/keywordsType');
        } else {
            $this->error('删除失败', 'admin/keywordsType');
        }
    }




}
