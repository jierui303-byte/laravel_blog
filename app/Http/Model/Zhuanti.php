<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Zhuanti extends Model
{
    protected $table = 'zhuanti';
    protected $primaryKey = 'zhuan_id';
    public $timestamps = false;
    protected $guarded = [];

    public function tree()
    {
        $zhuantis = $this->orderBy('zhuan_order', 'asc')->get();
        $data = $this->getTree($zhuantis, 'zhuan_name', 'zhuan_id', 'zhuan_pid', 0);
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
    public function getAllTopZhuanId(){
        $topNav = $this->orderBy('zhuan_order', 'desc')->where('zhuan_pid', 0)->get(['zhuan_id', 'zhuan_name']);//获取了所有的顶级栏目
        return $topNav;
    }

    //通过分类ID获取分类名称
    public function getZhuanName($zhuan_id){
        $ZhuanName = $this->where('zhuan_id', $zhuan_id)->first();
        return $ZhuanName;
    }

}
