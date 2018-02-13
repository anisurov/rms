<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    protected $table='table_reservation';
 protected $primaryKey = 'id';
	public $timestamps =false;
	
    protected $fillable = [
        'date','time','noofperson','message','user_id','status','table_name',
    ];
	
}
