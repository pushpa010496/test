<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use SoftDeletes;
use App\Models\User;
use App\Models\Event;
class EventProfile extends Model
{
    public function Author(){
      return $this->belongsTo('App\Models\User','author_id');
    }
   	public function event(){
    	return $this->belongsTo('App\Models\Event');
    }
}