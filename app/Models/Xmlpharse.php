<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Xmlpharse extends Model
{
    protected $table='news_xml';

    protected $fillable=['subject','pr_dt','location','type','xml_file_name','meta_title','meta_description','press_url','description','issuer','	issuertype','short_description'];
   // protected $fillable=['news_head','data','location','type','xml_file_name','meta_title','meta_description','news_url'];
}
