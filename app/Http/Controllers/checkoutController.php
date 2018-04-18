<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Order;
use DB;
use App\OrderDetail;
use App\Item;
use App\Transaction;
use \Cart as Cart;
use Validator;

class checkoutController extends Controller
{

    public function __construct(){
    $this->middleware('auth');
  }
  public function index(Request $request){
    if (isset($request->pay_id)) {
      $pay_id = $request->pay_id;
      if(Transaction::where('transaction_id',$pay_id)->count()>0){
        return redirect('cart')->withErrorMessage('Sorry!!This transaction id already used');
      }
    }else {
      return redirect('cart')->withErrorMessage('Please pay first');
    }
  	if(sizeof(Cart::content())>0){
		$userID=Auth::user()->user_id;
		$successCount=1;
		$errorCount=1;
    $price=0;
    date_default_timezone_set("Asia/Dhaka");
    $datetime = date("Y-m-d H:i:s");

		foreach(Cart::content() as $item){

		$availableQty=Item::where('item_id',$item->name)->pluck('item_availability')->first();
		   if($availableQty>=$item->qty){
			$ordered=Item::where('item_id',$item->name)->pluck('item_ordered')->first();
			Item::where('item_id',$item->name)->update(['item_availability'=>($availableQty-$item->qty),'item_ordered'=>($ordered+$item->qty)]);

			$data[$successCount]['item_id'] = $item->name;
			$data[$successCount]['menu_item_quantity'] = $item->qty;
			$price = $price + $item->price*$item->qty;
			$tax =((15*$price)/100);
			$price= $price+$tax;
			$successCount = $successCount + 1;
			//var_dump($data);
		   }else{
				$errorData[$errorCount]['item_id']=$item->name;
				$errorCount = $errorCount + 1;

	               }
		}
		if(isset($data)&&$this->create($data,$userID,$price,$datetime,$pay_id)){
				if(sizeof(Cart::content())==sizeof($data)){
				Cart::destroy();
				return redirect('cart')->withSuccessMessage('Your Order Has been placed successfully');
				}else{

						$message = '';
					foreach($errorData as $item){
						$item_name = Item::where('item_id',$item['item_id'])->pluck('item_name')->first();
						$message = $message.$item_name.',';}
					if(sizeof(Cart::content())==sizeof($errorData)){
					Cart::destroy();
					return redirect('cart')->withErrorMessage('Sorry!! Quantity of '.$message.'You are ordering is not available right now');
				}else{
					Cart::destroy();
					return redirect('cart')->withErrorMessage('Sorry!! Quantity of '.$message.'You are ordering is not available right now , but we took other orders');
				}
			}
		    }else{
					$message = '';
					foreach($errorData as $item){
						$item_name = Item::where('item_id',$item['item_id'])->pluck('item_name')->first();
						$message = $message.$item_name.',';}
					if(sizeof(Cart::content())==sizeof($errorData)){
					Cart::destroy();
					return redirect('cart')->withErrorMessage('Sorry!! Quantity of '.$message.'You are ordering is not available right now');
				}else{
					Cart::destroy();
					return redirect('cart')->withErrorMessage('Sorry!! Quantity of '.$message.'You are ordering is not available right now , but we took other orders');
				}
			//return redirect('cart')->withErrorMessage('Sorry!! we are not able to take your order right now');
		}

	}
	else{
		return redirect('cart')->withErrorMessage('There is no item in your cart to checkout');
	}

  }

   protected function create(array $data,$userID,$price,$datetime,$pay_id){
		 Transaction::create(['transaction_id'=>$pay_id]);
		 $user = Auth::user();
		 $email=$user->user_email;
		 $order=NULL;
		 $flag=DB::table('food_order')->select('order_type')->where('user_id',$user->user_id)->where('total_price',0)->get();
		 if(count($flag)>0)
		 {
			$order2=DB::table('food_order')->select('order_id')->
			where('user_id',$user->user_id)->where('total_price',0)->get();

			foreach ($order2 as $key => $value) {
				$order_id2 = $value ->order_id;
		}

			$value=array('total_price'=>$price,'transaction_id'=>$pay_id) ;
				DB::table('food_order')->where('user_id',$user->user_id)->where('total_price',0)->
				update($value);
				
		 }
		 else
		 {
			$order = Order::create([
				'user_id'=>$userID,
				'datetime'=>$datetime,
				'total_price'=>$price,
				'transaction_id'=>$pay_id,
				]);
					$order_id2 = $order->order_id;
		 }
		 if($order)
		 {
		 $values=array('user_email'=>$email,'transaction_type'=>'food_order','event_id'=>$order->order_id,'vendor'=>
		 'BKash',	'vendor_trx_id'=>$pay_id,'transaction_amount'=>$price,'transaction_status'=>'P');
		 DB::table('transaction')->insert($values);
		 }
		 
	   
     if($order_id2){
       $orderID=$order_id2;
    	foreach($data as $orderDetail){
    		$successChecker=0;
    		$checker = OrderDetail::create([
    		'food_order_id'=>$orderID,
    		'menu_item_id'=>$orderDetail['item_id'],
    		'menu_item_quantity'=>$orderDetail['menu_item_quantity'],
    		]);
    		if($checker)
    			$successChecker = $successChecker + 1;
    	}

    	if($successChecker>0)
    		return true;
    	else
    	return false;
    }else {
      return false;
    }

  }

   /*public function showError(array $errorData){
		$message = '';
					foreach($errorData as $item){
						$item_name = Item::where('item_id',$item['item_id'])->pluck('item_name')->first();
						$message = $message.$item_name.',';}
					if(sizeof(Cart::content())==sizeof($errorData)){
					Cart::destroy();
					return redirect('cart')->withErrorMessage('Sorry!! Quantity of '.$message.'You are ordering is not available right now');
				}else{
					Cart::destroy();
					return redirect('cart')->withErrorMessage('Sorry!! Quantity of '.$message.'You are ordering is not available right now , but we took other orders');
				}

	}*/
  public function payform()
  {
    return view('payform');
  }
}
