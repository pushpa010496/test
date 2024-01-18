<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use SoftDeletes;
use App\Models\User;
use App\Models\Event;
class EventOrgGallery extends Model
{
    public function Author(){
      return $this->belongsTo('App\User','author_id');
    }
   	public function eventorg()
    {
        return $this->belongsTo('App\EventOrg','event_org_id');
    }
}