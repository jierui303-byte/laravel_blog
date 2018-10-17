<?php

namespace App\Http\Model\SubWeb;

use Illuminate\Database\Eloquent\Model;
use App\Http\Model\Blog\Category;
use DB;

class SubWeb extends Model
{
    protected $table = 'sub_web';
    protected $primaryKey = 'web_id';
    public $timestamps = false;
    protected $guarded = [];

    public function getSubWebByWebTypeId($web_type_id)
    {
        return $this->where('web_type_id', $web_type_id)->count();
    }

}
