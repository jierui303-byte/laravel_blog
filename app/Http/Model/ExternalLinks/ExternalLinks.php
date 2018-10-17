<?php

namespace App\Http\Model\ExternalLinks;

use Illuminate\Database\Eloquent\Model;

class ExternalLinks extends Model
{
    protected $table = 'external_links';
    protected $primaryKey = 'link_id';
    public $timestamps = false;
    protected $guarded = [];
}
