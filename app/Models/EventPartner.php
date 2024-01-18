<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use SoftDeletes;
use App\Models\User;
use App\Models\Event;
class EventPartner extends Model
{
    public function Author(){
      return $this->belongsTo('App\User','author_id');
    }
   	public function event()
    {
        return $this->belongsTo('App\Event');
    }
}