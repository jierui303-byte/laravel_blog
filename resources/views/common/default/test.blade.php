{{$aaa}}

<?php

use App\Http\Model\Blog\Category;

$a = (new Category())->where('cate_pid', 0)->get()->toArray();
//var_dump('<pre>', $a);
echo '<h1 style="color:red;">外面添加使用（after和before）</h1>';

$aaa = 'hhhhh';
$boot = "http://www.jierui303.com/resources/views/common/a10";
?>


{{--上传模板文件包进来，然后执行文件获取--}}
@include('common.default.test')