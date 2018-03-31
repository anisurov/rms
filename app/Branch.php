<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
  protected $table='branch';
 protected $primaryKey = 'branch_id';
	public $timestamps =false;
	
    protected $fillable = [
        'branch_name',
    ];
}
