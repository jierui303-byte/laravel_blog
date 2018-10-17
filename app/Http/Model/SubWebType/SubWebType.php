<?php

namespace App\Http\Model\SubWebType;

use Illuminate\Database\Eloquent\Model;
use App\Http\Model\Blog\Category;
use App\Http\Model\SubWeb\SubWeb;
use DB;

class SubWebType extends Model
{
    protected $table = 'sub_web_type';
    protected $primaryKey = 'type_id';
    public $timestamps = false;
    protected $guarded = [];

    public function tree()
    {
        $categroys = $this->get();
        $data = $this->getTree($categroys, 'type_name', 'type_id', 'type_pid', 0);
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
                        //获取二级分类下绑定了多少网站
                        $webNum = (new SubWeb())->getSubWebByWebTypeId($n->type_id);
                        $data[$m]['_'.$field_name] = '├── '.$data[$m][$field_name].'( '.$webNum.' )';
                        $arr[] = $data[$m];
                    }
                }
            }
        }
        return $arr;
    }

    public function getWebTypeNameByTypeId($type_id)
    {
        $categroys = $this->find($type_id);
        if($categroys['type_pid'] == 0){
            return $categroys['type_name'];
        }else{
            $b = $this->find($categroys['type_pid']);
            return $b['type_name'].'>>'.$categroys['type_name'];
        }
    }

}
