<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
  protected $table='menu_category';
 protected $primaryKey = 'category_id';
	public $timestamps =false;
	
    protected $fillable = [
        'category_name',
    ];
}
