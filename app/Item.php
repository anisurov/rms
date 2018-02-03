<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table='menu_item';
 protected $primaryKey = 'item_id';
	public $timestamps =false;
	
    protected $fillable = [
        	'item_image','item_name','category_id','item_description','item_stock','item_rating','item_availability',
	'item_ordered','item_price',
    ];
}
