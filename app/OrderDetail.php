<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
  protected $table='food_order_details';
  protected $primaryKey = 'order_details_id';
	public $timestamps =false;
  

  protected $fillable = [
      'food_order_id','menu_item_id','menu_item_quantity',
  ];

}
