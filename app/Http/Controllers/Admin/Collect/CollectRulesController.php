<?php

namespace App\Http\Controllers\Admin\Collect;

use App\Http\Controllers\Admin\CommonController;
use App\Http\Model\Blog\Category;
use App\Http\Model\Collect\CollectRules;
use App\Http\Model\Collect\CollectNews;
use App\Http\Model\Tag;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use QL\QueryList;


class CollectRulesController extends CommonController
{
    protected $collectRulesData;
    protected $collectNewsData;
    protected $categoryData;
    protected $subWebTypeData;
    protected $tagData;
    protected $currentTime;

    public function __construct(Request $request)
    {
        parent::__construct($request);

        $this->collectRulesData = new CollectRules();
        $this->collectNewsData = new CollectNews();
        $this->categoryData = new Category();
        $this->tagData = new Tag();
        $this->currentTime = time();
    }

    public function index()
    {
        $data = $this->collectRulesData
            ->join('category','collect_rules.collect_cate_id','=','category.cate_id')
            ->orderBy('collect_id', 'desc')
            ->get([
                'collect_rules.collect_id',
                'collect_rules.collect_name',
                'collect_rules.collect_list_url',
                'collect_rules.collect_is_open',
                'category.cate_name',
            ]);
        $count = count($data);
        return view('admin.collect.index', compact('data', 'count'));
    }

    public function create()
    {
        if($this->request->getMethod() == 'POST'){
            $data['collect_name'] = $this->request->get('collect_name');
            $data['collect_list_url'] = $this->request->get('collect_list_url');
            $data['collect_is_open_page'] = $this->request->get('collect_is_open_page');
            $data['collect_page_total'] = $this->request->get('collect_page_total');
            $data['collect_url_jquery'] = $this->request->get('collect_url_jquery');
            $data['collect_url_attr_id'] = $this->request->get('collect_url_attr_id');
            $data['collect_title_jquery'] = $this->request->get('collect_title_jquery');
            $data['collect_content_jquery'] = $this->request->get('collect_content_jquery');
            $data['collect_content_del_jquery'] = $this->request->get('collect_content_del_jquery');
            $data['collect_code'] = $this->request->get('collect_code');
            $data['collect_is_open'] = $this->request->get('collect_is_open');
            $data['collect_cate_id'] = $this->request->get('collect_cate_id');
            $data['collect_is_load_img'] = $this->request->get('collect_is_load_img');
            $data['collect_is_commit'] = $this->request->get('collect_is_commit');
            $data['create_time'] = $this->currentTime;

            $rules = [
                'collect_name' => 'required',
                'collect_list_url' => 'required',
            ];

            $message = [
                'collect_name.required' => '链接名称不能为空!',
                'collect_list_url.required' => '链接URL不能为空!',
            ];

            //文章新增时新增到对应的分类表中
            $validator = Validator::make($data, $rules, $message);//Validator数据格式匹配验证类  $rules规则数组
            if ($validator->passes()) {
                //通过article模型入库
                $re = $this->collectRulesData->create($data);

                if ($re) {
                    return $this->success('添加成功!', 'admin/collectRules');
                } else {
                    return $this->error('数据填充失败，请稍后再试!', 'admin/collectRules');
                }
            } else {
                return $this->error($validator->customMessages, 'admin/collectRules');
            }

        }else{
            $data = $this->categoryData->Tree();//获取分类列表
            return view('admin.collect.add', compact('data'));
        }
    }

    public function edit($id)
    {
        if($this->request->getMethod() == 'PUT'){
            $data['collect_name'] = $this->request->get('collect_name');
            $data['collect_list_url'] = $this->request->get('collect_list_url');
            $data['collect_is_open_page'] = $this->request->get('collect_is_open_page');
            $data['collect_page_total'] = $this->request->get('collect_page_total');
            $data['collect_url_jquery'] = $this->request->get('collect_url_jquery');
            $data['collect_url_attr_id'] = $this->request->get('collect_url_attr_id');
            $data['collect_title_jquery'] = $this->request->get('collect_title_jquery');
            $data['collect_content_jquery'] = $this->request->get('collect_content_jquery');
            $data['collect_content_del_jquery'] = $this->request->get('collect_content_del_jquery');
            $data['collect_code'] = $this->request->get('collect_code');
            $data['collect_is_open'] = $this->request->get('collect_is_open');
            $data['collect_cate_id'] = $this->request->get('collect_cate_id');
            $data['collect_is_load_img'] = $this->request->get('collect_is_load_img');
            $data['collect_is_commit'] = $this->request->get('collect_is_commit');
//            var_dump('<pre>', $data);exit;
            $re = $this->collectRulesData->where('collect_id', $id)->update($data);
            if ($re) {
                return $this->success('修改成功!', 'admin/collectRules');
            } else {
                return $this->error('数据更新失败，请稍后再试!', 'admin/collectRules');
            }
        }else{
            $data = $this->categoryData->Tree();
            $field = $this->collectRulesData->find($id);

            return view('admin.collect.edit', compact('data', 'field'));
        }

    }

    //删除单个(公共方法)
    public function del($id)
    {
        $res = $this->collectRulesData->destroy($id);
        if ($res) {
            $this->success('删除成功', 'admin/collectRules');
        } else {
            $this->error('删除失败', 'admin/collectRules');
        }
    }

    //删除多个(公共方法)
    public function del_all()
    {
        $ids = $this->request->get('id');
        $ids = explode(',', $ids);
        $res = $this->collectRulesData->destroy($ids);
        if ($res) {
            $this->success('删除成功', 'admin/collectRules');
        } else {
            $this->error('删除失败', 'admin/collectRules');
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

    public function collect_url_test()
    {
        header("content-Type: text/html; charset=utf-8");
        $collect_name = $this->request->get('collect_name');
        $collect_list_url = $this->request->get('collect_list_url');
        $collect_is_open_page = $this->request->get('collect_is_open_page');
        $collect_page_total = $this->request->get('collect_page_total');
        $collect_url_jquery = $this->request->get('collect_url_jquery');
        $collect_url_attr_id = $this->request->get('collect_url_attr_id');
        $collect_title_jquery = $this->request->get('collect_title_jquery');
        $collect_content_jquery = $this->request->get('collect_content_jquery');
        $collect_code = $this->request->get('collect_code');
        $collect_is_open = $this->request->get('collect_is_open');
        $collect_cate_id = $this->request->get('collect_cate_id');
        $collect_is_load_img = $this->request->get('collect_is_load_img');
        $collect_is_commit = $this->request->get('collect_is_commit');

        //默认只采集第一页的列表
        $collect_list_url = preg_replace("/@/",1, $collect_list_url);

        //判断目标页面字符集编码格式
        if ($collect_code == 1) {
            //等于1时是utf-8编码
            $ql = (new QueryList())->get($collect_list_url)->encoding('UTF-8');
        } else {
            //等于2时是gbk2312
            $ql = (new QueryList())->get($collect_list_url)->encoding('GB2312');
        }

        //获取列表url值属性
        switch($collect_url_attr_id){
            case 1://text():获取元素内的纯文本
                $result = $ql->find($collect_url_jquery)->text(); //获取搜索结果标题列表
                break;
            case 2://content:获取元素内的所有内容
                $result = $ql->find($collect_url_jquery)->content; //获取搜索结果标题列表
                break;
            case 3://texts():获取所有的纯文本
                $result = $ql->find($collect_url_jquery)->texts(); //获取搜索结果标题列表
                break;
            case 4://attrs('href'):获取a链接的href地址
                $result = $ql->find($collect_url_jquery)->attrs('href'); //获取搜索结果标题列表
                //获取到的URL地址不存在域名的话，手动拼接并返回
                foreach ($result as $k=>$v){
                    if (!preg_match('/(http:\/\/)|(https:\/\/)/i', $v)) {
                        $urlInfo = parse_url($collect_list_url);
                        $result[$k] = $urlInfo['scheme'].'://'.$urlInfo['host'].parse_url($v)['path'];
                    }
                }
                break;
            case 5://src:获取src的URL地址
                $result = $ql->find($collect_url_jquery)->src; //获取搜索结果标题列表
                break;
            case 6://alt:获取img的alt属性值
                $result = $ql->find($collect_url_jquery)->alt; //获取搜索结果标题列表
                break;
            default:
                $result = '';
                break;
        }

        return json_encode($result);
    }


    public function collect_content_test()
    {
        header("content-Type: text/html; charset=utf-8");
        $collect_name = $this->request->get('collect_name');
        $collect_list_url = $this->request->get('collect_list_url');
        $collect_is_open_page = $this->request->get('collect_is_open_page');
        $collect_page_total = $this->request->get('collect_page_total');
        $collect_url_jquery = $this->request->get('collect_url_jquery');
        $collect_url_attr_id = $this->request->get('collect_url_attr_id');
        $collect_title_jquery = $this->request->get('collect_title_jquery');
        $collect_content_jquery = $this->request->get('collect_content_jquery');
        $collect_content_del_jquery = $this->request->get('collect_content_del_jquery');
        $collect_code = $this->request->get('collect_code');
        $collect_is_open = $this->request->get('collect_is_open');
        $collect_cate_id = $this->request->get('collect_cate_id');
        $collect_is_load_img = $this->request->get('collect_is_load_img');
        $collect_is_commit = $this->request->get('collect_is_commit');
        $collect_content_test_url = $this->request->get('collect_content_test_url');

        //判断目标页面字符集编码格式
        if ($collect_code == 1) {
            //等于1时是utf-8编码
            $ql = (new QueryList())->get($collect_content_test_url)->encoding('UTF-8');
        } else {
            //等于2时是gbk2312
            $ql = (new QueryList())->get($collect_content_test_url)->encoding('GB2312');
        }

        $result = [];
        //获取内容页的标题
        $result['title'] = $ql->find($collect_title_jquery)->text(); //获取搜索结果标题列表

        //获取内容页的内容
        $result['content'] = $ql->find($collect_content_jquery)->htmls(); //获取搜索结果标题列表

        return json_encode($result);
    }

    public function edit_collect_is_open()
    {
        $id = $this->request->get('id');
        if($this->request->getMethod() == 'PUT'){
            $data['collect_is_open'] = $this->request->get('collect_is_open');

            $re = $this->collectRulesData->where('collect_id', $id)->update($data);
            if ($re) {
                if($this->request->get('collect_is_open') == 1){
                    return $this->success('开启成功!', 'admin/collectRules');
                }else{
                    return $this->success('关闭成功!', 'admin/collectRules');
                }
            } else {
                return $this->error('数据更新失败，请稍后再试!', 'admin/collectRules');
            }
        }else{
            return $this->error('数据更新失败，请稍后再试!', 'admin/collectRules');
        }

    }


}
