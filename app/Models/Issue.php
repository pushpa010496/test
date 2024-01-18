<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{
  
   public function category()
    {
    	return $this->belongsTo(Category::class,'category');
    }
	
	   public function categories(){
    	return $this->belongsToMany('App\Models\Category')->orderBy('ordering','asc');
    }
}
