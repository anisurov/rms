<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Order;

class OnlineOrderController extends Controller
{
    public function showAllOrder () {
		$order=Order::select(['date', 'time','user_id'])->groupBy(['date', 'time','user_id'])
               ->paginate(5);
			  //var_dump($order);
		return view('showOnlineOrder',compact('order'));
	
	}
}
