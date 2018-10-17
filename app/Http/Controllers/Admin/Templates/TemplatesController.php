<?php

namespace App\Http\Controllers\Admin\Templates;

use App\Http\Controllers\Admin\CommonController;
use App\Http\Model\Blog\Category;
use App\Http\Model\Collect\CollectArticle;
use App\Http\Model\Collect\CollectRules;
use App\Http\Model\Collect\CollectNews;
use App\Http\Model\SubWebType\SubWebType;
use App\Http\Model\Keywords\Keywords;
use App\Http\Model\Keywords\KeywordsType;
use App\Http\Model\Tag;
use App\Http\Model\Templates\Templates;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;


class TemplatesController extends CommonController
{
    protected $collectRulesData;//文章数据库模型
    protected $collectNewsData;//文章数据库模型
    protected $templatesData;//文章数据库模型
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
        $this->templatesData = new Templates();
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
        $data = $this->templatesData
            ->orderBy('temp_id', 'desc')
            ->get();
        $count = count($data);
        return view('admin/templates/index', compact('data', 'count'));
    }

    public function create()
    {
        if($this->request->getMethod() == 'POST'){
            $data['key_cate_id'] = $this->request->get('key_cate_id');
            $data['key_level'] = $this->request->get('key_level');
            if($this->request->get('key_level') == 0){
                $data['key_pid'] = 0;
            }else{
                $data['key_pid'] = $this->request->get('key_pid');
            }

            $keywordsContent = $this->request->get('keywordsContent');

            $rules = [
                'key_cate_id' => 'required',
            ];

            $message = [
                'key_cate_id.required' => '词根不能为空!',
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
                    $re = $this->templatesData->create($data);
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
            $data = $this->keywordsTypeData->tree();//获取分类列表
            $dataCate = $this->categoryData->oneTree();//获取分类列表
            return view('admin.templates.add', compact('data', 'dataCate'));
        }
    }

    public function edit($id)
    {
        if($this->request->getMethod() == 'PUT'){
            $data['key_name'] = $this->request->get('key_name');
            $re = $this->templatesData->where('key_id', $id)->update($data);
            if ($re) {
                return $this->success('修改成功!', 'admin/keywords');
            } else {
                return $this->error('数据更新失败，请稍后再试!', 'admin/keywords');
            }
        }else{
            $data = $this->keywordsData->oneTree();
            $field = $this->keywordsData->find($id);
            $dataCate = $this->categoryData->oneTree();//获取分类列表
            return view('admin.templates.edit', compact('data', 'field', 'dataCate'));
        }

    }

    //删除单个(公共方法)
    public function del($id)
    {
        $res = $this->templatesData->destroy($id);
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
        $res = $this->templatesData->destroy($ids);
        if ($res) {
            $this->success('删除成功', 'admin/keywords');
        } else {
            $this->error('删除失败', 'admin/keywords');
        }
    }

    public function getcode($str)
    {
        $s1 = iconv('utf-8','gbk//IGNORE',$str);
        $s0 = iconv('gbk','utf-8//IGNORE',$s1);
        if($s0 == $str){
            return 'utf-8';
        }else{
            return 'gbk';
        }
    }

    public function unzip($source, $destination) {
        @mkdir($destination, 0777, true);

        foreach ((array) glob($source . "/*.zip") as $key => $value) {
            $zip = new ZipArchive;
            if ($zip->open(str_replace("//", "/", $value)) === true) {
                $zip->extractTo($destination);
                $zip->close();
            }
        }
    }


    public function fileUpload()
    {
        header("Content-type:text/html;charset=utf-8");
        $file_name   = $_FILES['file']['name'];
        $file_size   = $_FILES['file']['size'];
        $error     = $_FILES['file']['error'];
        $file_tmp_name = $_FILES['file']['tmp_name'];
        switch($error){
            case 0:
                break;
            case 1:
                return response()->json(['msg' => '超出了php.ini中文件大小'], 502);
                break;
            case 2:
                return response()->json(['msg' => '超出了MAX_FILE_SIZE的文件大小'], 502);
                break;
            case 3:
                return response()->json(['msg' => '文件被部分上传'], 502);
                break;
            case 4:
                return response()->json(['msg' => '没有文件上传'], 502);
                break;
            case 5:
                return response()->json(['msg' => '文件大小为0'], 502);
                break;
            default:
                return response()->json(['msg' => '上传失败'], 502);
                break;
        }
        if ($this->request->hasFile('file')){
            //2.其次检查图片手否合法
            if ($this->request->file('file')->isValid()){
                $file = $this->request->file('file');
                //先得到文件后缀,然后将后缀转换成小写,然后看是否在否和图片的数组内
                if(in_array( strtolower($file->extension()),['zip'])){
                    //3.获取文件相关信息
                    $originalName = $file->getClientOriginalName(); // 文件原名
                    $ext = $file->getClientOriginalExtension(); // 扩展名
                    $realPath = $file->getRealPath(); //临时文件的绝对路径
                    $type = $file->getClientMimeType(); // audio/wave
                    //echo $originalName.'<br/>';// /tmp/phpjdTrLQ
                    //echo $ext.'<br/>';// /tmp/phpjdTrLQ
                    //echo $realPath.'<br/>';// /tmp/phpjdTrLQ
                    //echo $type.'<br/>';// /tmp/phpjdTrLQ

                    //保存之前，不能重复上传，判断一下
                    $temp_name_hash = hash('ripemd160',$originalName);
                    $re = $this->templatesData->where('temp_name_hash', $temp_name_hash)->get()->toArray();
                    if($re){
                        //如果存在了，跳出循环
                        return response()->json(['msg' => '文件已经存在，上传重复了'], 500);
                    }
                    //4.把文件先临时保存在public/uploads/zips目录下
                    $linShiPath = public_path('uploads/zips');
                    //解压该文件到本目录 保持原名不变
                    $path = $file->move($linShiPath, $originalName);//直接存在了public目录下的uploads目录下
                    echo 'path:'.$path.'<br/>';
                    @chmod($path, 0777);//给Zip文件添加最大权限

//                    $zip = new Zipper();
//                    $zip->make($path)->extractTo($linShiPath);//

//                    exit;
                    //5.ZipArchive实例化对象 解压文件
                    $zip = new \ZipArchive();
                    //打开zip文档，如果打开失败返回提示信息
                    if ($zip->open($path) !== TRUE) {
//                        die ("Could not open archive");
                        return response()->json(['msg' => '打开zip文档，如果打开失败返回提示信息'], 502);

                    }
                    echo $linShiPath.'/'.basename($originalName, '.zip').'<br/>';
                    //将压缩文件解压到指定的目录下
//                    $zip->extractTo($linShiPath);
                    if(!is_dir($linShiPath.'/'.basename($originalName, '.zip'))){
                        mkdir($linShiPath.'/'.basename($originalName, '.zip'), 0777, true);
                    }
                    //extractTo解压会有部分文件丢失和不全
                    $zip->extractTo($linShiPath.'/'.basename($originalName, '.zip'));

                    //循环解压文件
//                    for( $i = 0; $i < $zip->numFiles; $i++ ){
//                        $stat = $zip->statIndex( $i );
//                        $is_crc = $stat['crc'];//是否是文件夹 文件夹为0 文件不为0
//                        $fname = basename( $stat['name'] );//文件夹名称
////                        echo '<pre>';
////                        var_dump($stat, '<br/>');
////                        echo '</pre>';
////                        if($is_crc == 0){
////                            echo 'list: '.$stat['name'].'<br/>';
////                        }else{
////                            echo 'file: '.$fname.'<br/>';
////                        }
//                        echo 'file all path: '.$stat['name'].'<br/>';//文件完整路径
//                        echo 'filename: '.$fname.'<br/>';
//                        $linShiPath = $linShiPath.'/'.$fname;
//                        if($is_crc == 0) {
//                            @mkdir($linShiPath, 0777, true);
//                            echo 'create list auth success: '.$linShiPath.'<br/>';
//                        }else{
//                            echo '==========='.dirname($linShiPath).'<br/>';
//                            if(!is_writable(dirname($linShiPath))){
//                                echo 'folder no write auth'.'<br/>';
//                                exit;
//                            }else{
//                                echo 'Zip path: '.'zip://./uploads/zips/'.$originalName.'#'.$stat['name'].'<br/>';
//
////                                var_dump($zip->getStream($stat['name']));
////                                $contents = '';
////                                $fp = fopen('zip://./uploads/zips/'.$originalName.'#'.$stat['name'], 'rb');//这里是绝对路径
////                                if (!$fp) {
////                                    exit("cannot open\n");
////                                }
////                                while (!feof($fp)) {
////                                    $contents .= fread($fp, 2);
////                                }
////                                echo "$contents\n";
////                                fclose($fp);
////                                echo "done.\n";。
//
////
//                                if(copy("zip://./uploads/zips/".$originalName."#".$stat['name'],  dirname($linShiPath))){
//                                    echo $stat['name'].'copy file success'.'<br/>';
//                                }else{
//                                    echo 'copy file error'.'<br/>';
//                                }
//                            }
//                        }
//                    }
                    //关闭zip文档
                    $zip->close();

//                    exit;

                    //6. 进入解压后到原文件夹里 里面固定有style和web两个目录
                    $originalNameNoHz = basename($originalName, '.zip');
                    $cuPath = public_path('uploads/zips/'.$originalNameNoHz);//解压目录路径
                    echo $cuPath;
                    //判断解压后的目录下是不是存在style和web，不存在就在下一个当期那目录名称下
                    if(!is_dir($cuPath.'/style/') && !is_dir($cuPath.'/web/')){
                        echo 'bucunzai ';
                        $cuPath = public_path('uploads/zips/'.$originalNameNoHz.'/'.$originalNameNoHz);//解压目录路径
                    }else{
                        echo 'cunzai';
                    }

                    $id = $this->templatesData->count();//当前数据的模版个数
                    // css和js和图片包，保存在/usr/local/nginx/html/newBlog/public/resources/views/common/temp+id
                    $publicPathCommon = public_path('resources/views/common'.'/temp'.($id+1));
                    // 模版文件，保存在/usr/local/nginx/html/newBlog/resources/views/common/temp+id
                    $resourcesPathCommon = resource_path('views/common'.'/temp'.($id+1));

//                    echo $cuPath.'<br/>';
                    if(!is_dir($publicPathCommon)) {
                        @mkdir($publicPathCommon, 0777, true);
                    }
                    if(!is_dir($resourcesPathCommon)) {
                        @mkdir($resourcesPathCommon, 0777, true);
                    }

                    //7. 把style和web复制到对应的模版目录下
                    $this->recurse_copy($cuPath.'/style/', $publicPathCommon);
                    $this->recurse_copy($cuPath.'/web/', $resourcesPathCommon);
                    //8. 挪动成功后，把文件模版路径和css路径保存再数据库信息中
                    $data['temp_static_path'] = $publicPathCommon;
                    $data['temp_path'] = $resourcesPathCommon;
                    $data['temp_source_path'] = 'resources/views/common'.'/temp'.($id+1);//模版引入css文件路径
                    $data['temp_math'] = 'temp'.($id+1);//新的模版文件夹名称
                    $data['temp_name'] = $originalNameNoHz;//模版文件原名称
                    $data['temp_name_hash'] = hash('ripemd160',$originalName);//模版文件原名称转存hash
                    $res = $this->templatesData->create($data);
                    if($res){
                        //9. 执行成功后，可以执行删除源文件的压缩包和解压过的文件夹
                        $filesa = public_path('uploads/zips/'.$originalName);
                        if (!unlink($filesa))
                        {
//                            echo ("Error deleting $filesa");
                            return response()->json(['msg' => 'Error deleting '.$filesa], 502);

                        }
                        else
                        {
//                            echo ("Deleted $filesa");
                            //10. 文件删除成功后，再执行删除解压的目录
                            $this->del_dir($cuPath);
                        }
                    }else{
//                        echo '写入数据库失败';
                        return response()->json(['msg' => '写入数据库失败'], 502);

                    }

                }else{
                    return response()->json(['msg' => '后缀不符合'], 502);
                }

            }else{
                return response()->json(['msg' => 'zip模板文件格式不合法'], 502);
            }
        }else{
            return response()->json(['msg' => '没有上传模板文件'], 502);
        }

        //5.移动文件到临时存放zip压缩包的目录下,并修改名字
//                    $path = $file->move('resources/views/common',$newName);//直接存在了public目录下的uploads目录下
//                    $dir = 'resources/views/common/a11';//不带扩展名的文件名
//                    $dir = resource_path('views/common/a11');//不带扩展名的文件名
//                    $filename = $dirNewName;//带扩展名的文件名
//                    echo $path; //resources/views/common/join1537354352427891thinkphp_3.2.3_full.zip
//                    if(!is_dir($dir)) {
//                        mkdir($dir, 0777, true);//创建目录保存解压内容
//                    }

//                    echo public_path('uploads');
//                    echo base_path('xx');
//                    echo app_path('xx');
//                    echo resource_path('views/common/a11');
        // /usr/local/nginx/html/newBlog/public/uploads
        ///usr/local/nginx/html/newBlog/xx
        /// /usr/local/nginx/html/newBlog/app/xx
        /// /usr/local/nginx/html/newBlog/resources/xx
        /// Archive extracted to directory

        // 实例化对象
//                    $zip = new \ZipArchive();
//                    //打开zip文档，如果打开失败返回提示信息
//                    if ($zip->open($lpath) !== TRUE) {
//                        die ("Could not open archive");
//                    }
//                    //将压缩文件解压到指定的目录下
//                    $zip->extractTo($dir);
//                    //解压之后，把里面的文件一部分存
//                    //关闭zip文档
//                    $zip->close();
//                    echo 'Archive extracted to directory';
//                    exit;
        //解压文件

//                    $input['card_profile'] = 'uploads/join'.'/'.$newName;
//                    $input['created_at'] = date('Y-m-d H:i:s');
//                    $res = $this->recruitment->add($input);
//                    if ($res){
//                        return back()->with('message','简历投递成功');
//                    }else{
//                        return back()->with('errors','简历投递失败');
//                    }
//        $images=$request->file('file'); //1、使用laravel 自带的request类来获取一下文件
//        $filedir = "public/uploads/"; //2、定义图片上传路径
//        $imagesName=$images->getClientOriginalName(); //3、获取上传图片的文件名
//        $extension = $images -> getClientOriginalExtension(); //4、获取上传图片的后缀名
//        $newImagesName=md5(time()).random_int(5,5).".".$extension;//5、重新命名上传文件名字
////        $path = $images->move($filedir, $newImagesName); //6、使用move方法移动文件.
//        $path = $request->file('file')->store('public/resources/views/common');
//
//        var_dump($path);exit;
//        if($extension == 'zip'){
//            //解压该文件获取到文件中的模板文件和静态文件，分别存到指定目录下
////            $zip = new Zipper();
////            $zip->make(压缩的文件目录)->extractTo(压缩之后的目录);
//        }
//        var_dump('<pre>', $imagesName);
//        var_dump('<pre>', $extension);
//        var_dump('<pre>', $newImagesName);
//        exit;
//
//        //把路径/拆分 获取图片名称
//        $pathArr = explode('/', $path);
//        return $pathArr[1];//路径中多了一个public




    }

    public function recurse_copy($src,$dst) {
        $dir = opendir($src);
        @mkdir($dst);
        while(false !== ( $file = readdir($dir)) ) {
            if (( $file != '.' ) && ( $file != '..' )) {
                if ( is_dir($src . '/' . $file) ) {
                    $this->recurse_copy($src . '/' . $file,$dst . '/' . $file);
                }
                else {
                    copy($src . '/' . $file,$dst . '/' . $file);
                }
            }
        }
        closedir($dir);
    }

    public function del_dir($dir) {
        if (!is_dir($dir)) {
            return false;
        }
        $handle = opendir($dir);
        while (($file = readdir($handle)) !== false) {
            if ($file != "." && $file != "..") {
                is_dir("$dir/$file") ? $this->del_dir("$dir/$file") : @unlink("$dir/$file");
            }
        }
        if (readdir($handle) == false) {
            closedir($handle);
            @rmdir($dir);
        }
    }

}
