<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use SoftDeletes;
class Testimonial extends Model
{
    public function Author(){
      return $this->belongsTo('App\Models\User','author_id');
    }
}