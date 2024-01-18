<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Advetorial extends Model
{
	protected $table = 'advetoriales';
 

    public function issue(){
    	return $this->belongsTo(Issue::class,'issue_id');
    }
    public function category(){
    	return $this->belongsTo(Category::class,'category_id');
    }
    public function author(){
    	return $this->belongsTo(Contributors::class,'author_id');
    }

    public function authors(){
        return $this->belongsToMany('App\Models\Contributors')->withTimestamps();
    }
    
      public function getSearchResult(): SearchResult
        {
           
          $category=  Category::find($this->category_id);
        
            $url = url($category->url, $this->url);
          
             $description=$this->description;
            return new SearchResult(
                $this,
                $this->title,
                $url,
                $description
             );
        }
}
