<?php

namespace App\Http\Controllers\Admin\Blog;

use App\Http\Model\Blog\Article;
use App\Http\Controllers\Admin\CommonController;
use App\Http\Model\Tag;
use App\Http\Model\Blog\Category;
use \Illuminate\Pagination\Paginator;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class ArticleController extends CommonController
{
    protected $articleData;//文章数据库模型
    protected $categoryData;//分类数据库模型
    protected $tagData;//分类数据库模型
    protected $currentTime;//当前时间

    public function __construct(Request $request)
    {
        parent::__construct($request);

        $this->articleData = new Article();
        $this->categoryData = new Category();
        $this->tagData = new Tag();
//        $this->currentTime = date('Y-m-d h:i:s');
        $this->currentTime = time();
    }

    public function index()
    {
        $data = $this->articleData
            ->join('category','article.cate_pid','=','category.cate_id')
            ->orderBy('art_id', 'desc')
            ->get([
                'article.art_id',
                'article.art_title',
                'article.art_isSouLu',
                'article.art_souLuDate',
                'article.art_view',
                'article.art_dingTime',
                'category.cate_name',
            ]);
        $count = count($data);
        return view('admin.article.article_list', compact('data', 'count'));
    }

    public function create()
    {
        if($this->request->getMethod() == 'POST'){
            $data['_token'] = $this->request->get('_token');
            $data['art_title'] = $this->request->get('art_title');
            $data['art_tag'] = $this->request->get('art_tag');
            $data['art_description'] = $this->request->get('art_description');
            $data['art_editor'] = $this->request->get('art_editor');
            $data['art_laiYuanUrl'] = $this->request->get('art_laiYuanUrl');
            $data['art_status'] = $this->request->get('art_status');
            $data['art_content'] = $this->request->get('art_content');
            $data['cate_id'] = $this->request->get('cate_id');
            $data['art_time'] = $this->currentTime;
            $data['art_dingTime'] = $this->currentTime;

            $rules = [
                'art_title' => 'required',
                'art_content' => 'required',
            ];

            $message = [
                'art_title.required' => '文章标题不能为空!',
                'art_content.required' => '文章内容不能为空!',
            ];

            //判断文章当前所属栏目ID是否是顶级栏目，是顶级栏目，cate_id=cate_pid设为当前栏目ID
            //不是顶级栏目，获取顶级栏目ID
            $categoryInfo = $this->categoryData->find($this->request->get('cate_id'));
            if($categoryInfo['cate_pid'] == 0){
                $data['cate_pid'] = $this->request->get('cate_id');
            }else{
                $data['cate_pid'] = $categoryInfo['cate_pid'];
            }

            //文章新增时新增到对应的分类表中
            $validator = Validator::make($data, $rules, $message);//Validator数据格式匹配验证类  $rules规则数组
            if ($validator->passes()) {
                //通过article模型入库
                $re = (new Article())->create($data);

                if ($re) {
                    return $this->success('添加成功!', 'admin/article');
                } else {
                    return $this->error('数据填充失败，请稍后再试!', 'admin/article');
                }
            } else {
                return $this->error($validator->customMessages, 'admin/article');
            }

        }else{
            $data = $this->categoryData->tree();//获取分类列表
            return view('admin.article.article_add', compact('data'));
        }
    }

    public function edit($id)
    {
        if($this->request->getMethod() == 'PUT'){
            $data['art_title'] = $this->request->get('art_title');
            $data['art_tag'] = $this->request->get('art_tag');
            $data['art_description'] = $this->request->get('art_description');
            $data['art_editor'] = $this->request->get('art_editor');
            $data['art_laiYuanUrl'] = $this->request->get('art_laiYuanUrl');
            $data['art_status'] = $this->request->get('art_status');
            $data['art_content'] = $this->request->get('art_content');
            $data['cate_id'] = $this->request->get('cate_id');
            $field = $this->articleData->find($id);
            $data['art_dingTime'] = $field['art_time'];
            //判断文章当前所属栏目ID是否是顶级栏目，是顶级栏目，cate_id=cate_pid设为当前栏目ID
            //不是顶级栏目，获取顶级栏目ID
            $categoryInfo = $this->categoryData->find($this->request->get('cate_id'));
            if($categoryInfo['cate_pid'] == 0){
                $data['cate_pid'] = $this->request->get('cate_id');
            }else{
                $data['cate_pid'] = $categoryInfo['cate_pid'];
            }
            $re = $this->articleData->where('art_id', $id)->update($data);
            if ($re) {
                return $this->success('修改成功!', 'admin/article');
            } else {
                return $this->error('数据更新失败，请稍后再试!', 'admin/article');
            }
        }else{
            $data = $this->categoryData->tree();
            $field = $this->articleData->find($id);
            //获取所有的文章所属分类的tag标签
            $tagLists = $this->tagData->where('tag_category_id',$field['cate_id'])->get();

            $art_tag = explode('/', $field['art_tag']);

            return view('admin.article.article_edit', compact('data', 'field', 'tagLists', 'art_tag'));
        }

    }

    //删除单个(公共方法)
    public function del($id)
    {
        $res = $this->articleData->destroy($id);
        if ($res) {
            $this->success('删除成功', 'admin/article');
        } else {
            $this->error('删除失败', 'admin/article');
        }
    }

    //删除多个(公共方法)
    public function del_all()
    {
        $ids = $this->request->get('id');
        $ids = explode(',', $ids);
        $res = $this->articleData->destroy($ids);
        if ($res) {
            $this->success('删除成功', 'admin/article');
        } else {
            $this->error('删除失败', 'admin/article');
        }
    }


}
