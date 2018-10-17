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


class KeywordsController extends CommonController
{
    protected $collectRulesData;//文章数据库模型
    protected $collectNewsData;//文章数据库模型
    protected $collectArticleData;//文章数据库模型
    protected $subWebTypeData;//文章数据库模型
    protected $keywordsData;//文章数据库模型
    protected $keywordsTypeData;//文章数据库模型
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
        $data = $this->keywordsData
            ->join('category','keywords.cate_pid','=','category.cate_id')
            ->where('key_pai_ming', '!=', '')
            ->orderBy('key_id', 'desc')
            ->get([
                'keywords.key_id',
                'keywords.key_name',
                'keywords.key_search_reault_number',
                'keywords.key_pai_ming',
                'keywords.update_time',
                'category.cate_name',
                'category.cate_domain',
            ]);
        $count = count($data);
        return view('admin/keywords/index', compact('data', 'count'));
    }

    public function create()
    {
        if($this->request->getMethod() == 'POST'){
            $data['cate_pid'] = $this->request->get('cate_pid');
            $data['create_time'] = $this->currentTime;
//            $data['key_level'] = $this->request->get('key_level');
//            if($this->request->get('key_level') == 0){
//                $data['key_level_pid'] = 0;
//            }else{
//                $data['key_level_pid'] = $this->request->get('key_pid');
//            }

            $keywordsContent = $this->request->get('keywordsContent');

            $rules = [
                'cate_pid' => 'required',
            ];

            $message = [
                'cate_pid.required' => '词根不能为空!',
            ];

            //把关键词进行格式转成数组
            $keywordsContent = nl2br($keywordsContent);
            $keyword_arr = explode("<br />", trim($keywordsContent));
//            var_dump('<pre>', $keyword_arr);exit;

            //文章新增时新增到对应的分类表中
            $validator = Validator::make($data, $rules, $message);//Validator数据格式匹配验证类  $rules规则数组
            if ($validator->passes()) {
                //通过article模型入库
                foreach($keyword_arr as $k=>$value){
                    $data['key_name'] = $value;
                    $re = $this->keywordsData->create($data);
                    if (!$re) {
                        return $this->error('数据填充失败，请稍后再试!', 'admin/keywords');
                    }
                }

                if ($re) {
                    return $this->success('添加成功!', 'admin/keywords');
                } else {
                    return $this->error('数据填充失败，请稍后再试!', 'admin/keywords');
                }
            } else {
                return $this->error($validator->customMessages, 'admin/keywords');
            }

        }else{
            $dataCate = $this->categoryData->oneTree();//获取分类列表
            return view('admin.keywords.add', compact('data', 'dataCate'));
        }
    }

    public function edit($id)
    {
        if($this->request->getMethod() == 'PUT'){
            $data['key_name'] = $this->request->get('key_name');
            $re = $this->keywordsData->where('key_id', $id)->update($data);
            if ($re) {
                return $this->success('修改成功!', 'admin/keywords');
            } else {
                return $this->error('数据更新失败，请稍后再试!', 'admin/keywords');
            }
        }else{
            $field = $this->keywordsData->find($id);
            $dataCate = $this->categoryData->oneTree();//获取分类列表
            return view('admin.keywords.edit', compact('data', 'field', 'dataCate'));
        }

    }

    //删除单个(公共方法)
    public function del($id)
    {
        $res = $this->keywordsData->destroy($id);
        if ($res) {
            $this->success('删除成功', 'admin/keywords');
        } else {
            $this->error('删除失败', 'admin/keywords');
        }
    }

    //删除多个(公共方法)
    public function del_all()
    {
        $ids = $this->request->get('id');
        $ids = explode(',', $ids);
        $res = $this->keywordsData->destroy($ids);
        if ($res) {
            $this->success('删除成功', 'admin/keywords');
        } else {
            $this->error('删除失败', 'admin/keywords');
        }
    }

    public function getKeyLevel()
    {
        $key_level = $this->request->get('key_level');
        $res = $this->keywordsData->where('key_level', $key_level)->get()->toArray();
        if($res){
            $data = array(
                'code'=>1,
                'data'=>$res
            );
        }else{
            $data = array(
                'code'=>0,
                'data'=>$res
            );
        }
        return json_encode($data);
    }

}
