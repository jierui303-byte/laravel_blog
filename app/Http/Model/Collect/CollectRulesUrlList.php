<?php

namespace App\Http\Model\Collect;

use Illuminate\Database\Eloquent\Model;
use DB;


class CollectRulesUrlList extends Model
{
    protected $table = 'collect_rules_url_list';
    protected $primaryKey = 'url_id';
    public $timestamps = false;
    protected $guarded = [];

}
