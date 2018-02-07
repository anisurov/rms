<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
  protected $table='order';
 protected $primaryKey = 'order_id';
	public $timestamps =false;
	
    protected $fillable = [
        'order_id','user_id','item_id','date','time','total_price',
    ];
}
