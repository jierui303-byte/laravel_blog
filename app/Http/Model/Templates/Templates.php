<?php

namespace App\Http\Model\Templates;

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
class Templates extends Model
{
    protected $table = 'templates';
    protected $primaryKey = 'temp_id';
    public $timestamps = false;
    protected $guarded = [];

}
