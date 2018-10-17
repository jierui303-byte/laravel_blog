<?php

namespace App\Http\Model\Keywords;

use Illuminate\Database\Eloquent\Model;
use DB;

/**
 * Class CjArticle
 * @package App\Http\Model
 * 此类专门从后台获取采集文章的
 * 用来获取不同分类的文章
 * 其中该采集文章表中涉及的分类重新定义了，需要一个caiji分类表，与我个人写的原创文章分开存储
 * 两者互相不影响
 *
 */
class Keywords extends Model
{
    protected $table = 'keywords';
    protected $primaryKey = 'key_id';
    public $timestamps = false;
    protected $guarded = [];

    public function oneTree()
    {
        $categroys = $this->where('key_level', 0)->get();
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
}
