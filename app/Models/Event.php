<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use SoftDeletes;

class Event extends Model
{
  protected $guarded = ['id'];
    public function Author(){
      return $this->belongsTo('App\Models\User','author_id');
    }
    public function eventprofile()
	{
	   return $this->hasOne('App\Models\EventProfile','event_id');
	}
	public function eventorg()
    {
        return $this->belongsTo('App\Models\EventOrg','event_org_id');
    }
    public function eventseo(){
      return $this->hasMany('App\Models\SeoEvent');
    }
    public function eventspeaker(){
      return $this->hasMany('App\Models\EventSpeaker');
    }
    public function eventpartner(){
      return $this->hasMany('App\Models\EventPartner');
    }
    public function eventgallery(){
      return $this->hasMany('App\Models\EventGallery');
    }
     
}