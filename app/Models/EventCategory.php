<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Nestable\NestableTrait;

class EventCategory extends Model
{
	use NestableTrait;

    protected $parent = 'parent_id';

    public function Author(){
      return $this->belongsTo('App\Models\User','author_id');
    }
   	
}


