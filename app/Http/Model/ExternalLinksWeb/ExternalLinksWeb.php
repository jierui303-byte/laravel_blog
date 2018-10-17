<?php

namespace App\Http\Model\ExternalLinksWeb;

use Illuminate\Database\Eloquent\Model;

class ExternalLinksWeb extends Model
{
    protected $table = 'external_links_web';
    protected $primaryKey = 'web_id';
    public $timestamps = false;
    protected $guarded = [];
}
