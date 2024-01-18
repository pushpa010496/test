<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use SoftDeletes;

class Article extends Model 
{
	
	// public function author()
	// {
	// 	return $this->belongsTo('App\Contributors','author_id');
	// }
	public function authors(){
		return $this->belongsToMany('App\Models\Contributors')->withTimestamps();
	}
    

}