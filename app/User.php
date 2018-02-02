<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $table = 'user';
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
	 public function getAuthPassword(){
           return $this->user_password;
         }
	protected $primaryKey = 'user_id';
	public $timestamps =false;
	
    protected $fillable = [
        'user_name', 'user_email', 'user_password','user_mobile','user_dob','user_address',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'user_password', 'remember_token',
    ];
}
