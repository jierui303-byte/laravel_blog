<?php

namespace App\Http\Model\Blog;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';
    protected $primaryKey = 'cate_id';
    public $timestamps = false;
    protected $guarded = [];

    public function oneTree()
    {
        $categroys = $this->orderBy('cate_order', 'asc')->where('cate_pid', 0)->get();
        return $categroys;
    }

    public function tree()
    {
        $categroys = $this->orderBy('cate_order', 'asc')->get();
        $data = $this->getTree($categroys, 'cate_name', 'cate_id', 'cate_pid', 0);
        return $data;
    }
    
    public function getTree($data, $field_name, $field_id, $field_pid, $pid)
    {
        $arr = array();
        foreach ($data as $k=>$v) {
            if ($v->$field_pid == $pid) {
                $data[$k]['_'.$field_name] = ''.$data[$k][$field_name];
                $arr[] = $data[$k];
                foreach ($data as $m=>$n) {
                    if ($n->$field_pid == $v->$field_id) {
                        $data[$m]['_'.$field_name] = '├── '.$data[$m][$field_name];
                        $arr[] = $data[$m];
                    }
                }
            }
        }
        return $arr;
    }

    //获取所有顶级分类ID及其分类名称
    public function getAllTopCategoryId()
    {
        $topNav = $this
            ->orderBy('cate_order', 'desc')
            ->where([
                'cate_pid' => 0,
                'is_open' => 1
            ])
            ->get([
                'cate_id',
                'cate_name',
                'cate_math',
                'cate_domain',
            ]);//获取了所有的顶级栏目
        return $topNav;
    }

    //通过顶级分类ID获取分类名称
    public function getCategoryName($cate_pid)
    {
        $CategoryName = $this->where('cate_id', $cate_pid)->first();
        return $CategoryName['cate_name'];
    }

    public function getCategoryInfo($cate_pid)
    {
        $CategoryName = $this->where('cate_id', $cate_pid)->first();
        return $CategoryName;
    }

    //通过顶级分类ID获取其所有自分类ID
    public function getTwoCategory($topId)
    {
        $data = $this->where('cate_pid', $topId)->get();
        return $data;
    }

    /**
     * Notes:无限级分类代码
     * User: wangruijie9009
     * 数据库表结构
     *建表语句
    DROP TABLE IF EXISTS `sc_cate`;
    CREATE TABLE `sc_cate` (
    `id` smallint(6) NOT NULL AUTO_INCREMENT COMMENT '栏目id',
    `cate_name` varchar(20) DEFAULT NULL COMMENT '栏目名称',
    `cate_type` tinyint(1) DEFAULT '5' COMMENT '1:系统分类     2:帮助分类   3:网店帮助   4:网店信息    5:普通分类',
    `keywords` varchar(100) DEFAULT NULL COMMENT '关键词',
    `description` varchar(150) DEFAULT NULL COMMENT '描述',
    `show_nav` tinyint(1) DEFAULT '0' COMMENT '0:不显示到导航栏 1:显示到导航栏',
    `sort` smallint(50) DEFAULT '50' COMMENT '排序',
    `pid` smallint(6) DEFAULT '0' COMMENT '上级栏目id',
    PRIMARY KEY (`id`)
    ) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;
     *
     * 加表数据
    INSERT INTO `blog`.`sc_cate`(`id`, `cate_name`, `cate_type`, `keywords`, `description`, `show_nav`, `sort`, `pid`) VALUES (2, '网店信息', 4, '网店信息', '网店信息', 0, 50, 3);
    INSERT INTO `blog`.`sc_cate`(`id`, `cate_name`, `cate_type`, `keywords`, `description`, `show_nav`, `sort`, `pid`) VALUES (3, '网店帮助分类', 2, '网店帮助分类', '网店帮助分类', 0, 50, 14);
    INSERT INTO `blog`.`sc_cate`(`id`, `cate_name`, `cate_type`, `keywords`, `description`, `show_nav`, `sort`, `pid`) VALUES (14, '系统', 5, '系统', '系统', 0, 50, 0);
    INSERT INTO `blog`.`sc_cate`(`id`, `cate_name`, `cate_type`, `keywords`, `description`, `show_nav`, `sort`, `pid`) VALUES (15, '系统二级', 5, NULL, NULL, 0, 50, 14);
    INSERT INTO `blog`.`sc_cate`(`id`, `cate_name`, `cate_type`, `keywords`, `description`, `show_nav`, `sort`, `pid`) VALUES (16, '系统三级', 5, NULL, NULL, 0, 50, 14);
    INSERT INTO `blog`.`sc_cate`(`id`, `cate_name`, `cate_type`, `keywords`, `description`, `show_nav`, `sort`, `pid`) VALUES (17, '网店帮助分类一', 5, NULL, NULL, 0, 50, 3);
    INSERT INTO `blog`.`sc_cate`(`id`, `cate_name`, `cate_type`, `keywords`, `description`, `show_nav`, `sort`, `pid`) VALUES (18, '网店帮助分类二', 5, NULL, NULL, 0, 50, 3);
    INSERT INTO `blog`.`sc_cate`(`id`, `cate_name`, `cate_type`, `keywords`, `description`, `show_nav`, `sort`, `pid`) VALUES (19, '系统三级一', 5, NULL, NULL, 0, 50, 16);
    INSERT INTO `blog`.`sc_cate`(`id`, `cate_name`, `cate_type`, `keywords`, `description`, `show_nav`, `sort`, `pid`) VALUES (20, '系统四级一', 5, NULL, NULL, 0, 50, 19);
    INSERT INTO `blog`.`sc_cate`(`id`, `cate_name`, `cate_type`, `keywords`, `description`, `show_nav`, `sort`, `pid`) VALUES (21, '系统五级一', 5, NULL, NULL, 0, 50, 20);
     */
    public function wuXianCategory()
    {
        $cates = $this->get();//获取所有的分类 数据
        $q = $this->sort($cates, 0, 0);//sort函数进行分类层级排序及层级判定

        echo '<select name="" id="">';
        foreach($q as $k=>$v){
            if($v['level'] == 0){
                echo '<option value="'.$v['id'].'">'.$v['cate_name'].'&&&&&'.$v['level'].'</option>';//顶级分类
            }elseif($v['level'] == 1){
                echo '<option value="'.$v['id'].'">===='.$v['cate_name'].'&&&&&'.$v['level'].'</option>';//顶级分类
            }elseif($v['level'] == 2){
                echo '<option value="'.$v['id'].'">二二二二二'.$v['cate_name'].'&&&&&'.$v['level'].'</option>';//二级或者三级甚至更多
            }elseif($v['level'] == 3){
                echo '<option value="'.$v['id'].'">ssanjisanjisanjisanjianji'.$v['cate_name'].'&&&&&'.$v['level'].'</option>';//二级或者三级甚至更多
            }elseif($v['level'] == 4){
                echo '<option value="'.$v['id'].'">aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'.$v['cate_name'].'&&&&&'.$v['level'].'</option>';//二级或者三级甚至更多
            }
        }
        echo '</select>';
    }

    public function sort($cateRes, $pid=0, $level=0){
        static $arr=array();
        foreach ($cateRes as $k=>$v){
            if($v['pid'] == $pid){
                //顶级分类
                $v['level'] = $level;//给这条数据添加一个分类层数变量    0为顶级   1为二级   2为三级    3为四级  。。。
                $arr[] = $v;
                $this->sort($cateRes, $v['id'], $level+1);//找到顶级id并作为父级id传进来，然后把level+1
            }
        }
        return $arr;
    }

}
