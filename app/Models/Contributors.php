<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contributors extends Model
{
    protected $guarded = ['id'];   

       public function editorials(){
    	return $this->belongsToMany(Editorialarticle::class);
    } 
}
