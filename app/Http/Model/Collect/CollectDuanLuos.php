<?php

namespace App\Http\Model\Collect;

use Illuminate\Database\Eloquent\Model;
use DB;


class CollectDuanLuos extends Model
{
    protected $table = 'caiji_duanluos';
    protected $primaryKey = 'art_id';
    public $timestamps = false;
    protected $guarded = [];


    public function tree($keywords)
    {
        $data = $this->where('art_title', 'like', '%'.$keywords.'%')->orderBy(\DB::raw('RAND()'))->take(50)->get();
        return $data;
    }



}
