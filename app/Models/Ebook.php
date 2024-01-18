<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ebook extends Model
{
     public function issue()
    {
    	return $this->belongsTo(Issue::class,'issue_id');
    }

   


   
}
