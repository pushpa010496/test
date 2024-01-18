<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use app\subCategory;
use Nestable\NestableTrait;
use DB;

class Category extends Model
{
		//use NestableTrait;

    protected $parent = 'parent_id';

    public function Author(){
      return $this->belongsTo('App\Models\User','author_id');
    }
 
  	public function issues()
	{	    return $this->belongsToMany('App\Models\Issue')
	      ->withTimestamps();
	}
	
	
}