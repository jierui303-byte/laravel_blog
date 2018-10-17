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


class CollectNewsController extends CommonController
{
    protected $collectRulesData;//文章数据库模型
    protected $collectNewsData;//文章数据库模型
    protected $tagData;//文章数据库模型
    protected $articleData;//文章数据库模型
    protected $categoryData;//分类数据库模型
    protected $currentTime;//当前时间

    public function __construct(Request $request)
    {
        parent::__construct($request);

        $this->collectRulesData = new CollectRules();
        $this->collectNewsData = new CollectNews();
        $this->categoryData = new Category();
        $this->tagData = new Tag();
        $this->currentTime = date('Y-m-d h:i:s');
    }

    //全部分类列表
    public function index(Request $request)
    {
        $data = $this->collectNewsData->orderBy('art_id', 'desc')->get();
        $count = count($data);
        return view('admin/collect/collect_news_list', compact('data', 'count'));
    }

}
