<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
  protected $table='food_order';
 protected $primaryKey = 'order_id';
	public $timestamps =false;

    protected $fillable = [
        'order_id','user_id','datetime','total_price','status',
    ];
}
