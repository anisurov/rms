<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table='event_reservation';
 protected $primaryKey = 'event_id';
	public $timestamps =false;
	
    protected $fillable = [
        'event_id','user_id','event_type','event_no_of_people','event_exterior_decoration','event_date','event_time','event_custom_message',
    ];
}
