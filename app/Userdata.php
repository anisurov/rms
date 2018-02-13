<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Userdata extends Model
{
    protected $table='user';
 protected $primaryKey = 'user_id';
	public $timestamps =false;
	
    protected $fillable = [
       'user_name', 'user_email','user_mobile','user_dob','user_address',
    ];
}
