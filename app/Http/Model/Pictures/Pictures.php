<?php

namespace App\Http\Model\Pictures;

use Illuminate\Database\Eloquent\Model;

class Pictures extends Model
{
    protected $table = 'pictures';
    protected $primaryKey = 'pic_id';
    public $timestamps = false;
    protected $guarded = [];

    //所有文章中最新的6篇文章
    public function getAllLinks()
    {
        $allLinks = $this->orderBy('pic_order', 'asc')->get();
        return $allLinks;
    }

}
