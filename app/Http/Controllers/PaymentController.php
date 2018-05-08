<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use DB;
class PaymentController extends Controller
{
    public function restaurentpayment()
    {
    return view('restaurentpayment');
    }

    public function restaurentpaymentsave(Request $request)
    {
        echo $request->input('cat');
        return view('restaurentpayment');
    }


    public function preorderpayment(Request $request)
    {
        $t_ID = $request -> input('transaction');
        $email = $request -> input('email');

     $preOrderId= DB::table('food_order')->select('order_id','total_price')->where('order_type','preorder')->where('status','P')->
     where('transaction_id',$t_ID)->get();

     $data=array('status'=>'A');
     DB::table('food_order')->where('transaction_id',$t_ID)->update($data);

     foreach ($preOrderId as $key => $value) {
        $orderId = $value ->order_id;
        $totalPrice=$value ->total_price;
        echo $orderId;
    }
    echo $orderId;
    //return view('preorderpayment');
     $item_id=DB::table('food_order_details')->select('menu_item_id','menu_item_quantity')->where('food_order_id',$orderId)->get();
    //echo $item_id;
     $i =0;
    foreach ($item_id as $key => $value) {
        $menuItemId[$i] = $value ->menu_item_id;
        $menuItemquantity[$i] = $value ->menu_item_quantity;
        $i++;
    }
    $j=0;
    for($j=0;$j<$i;$j++)
    {
        $item_name=DB::table('menu_item')->select('item_name','item_price')->where('item_id',$menuItemId[$j])->get();
        
        foreach ($item_name as $key => $value) {
            $itemName[$j] = $value ->item_name;
            $itemPrice[$j]= $value->item_price;
        }
    }
    echo $itemName[1];
     return view('preorderpayment',compact('itemName','itemPrice','menuItemquantity','totalPrice'));
    }



    public function preorderpaymentemail()
    {
        return view('preorderpayment1');
    }



    public function event(Request $request)
    {
        $user = Auth::user();
		$email=$user->user_email;
        $pay_id= $request->input('pay_id');
        $event_type= $request->input('event_type');
        $event_id= $request->input('event_id');
        $data=array('vendor_trx_id'=>$pay_id, 'user_email'=>$email, 'transaction_type'=>'event_reservation',
        'event_id'=>$event_id,'vendor'=>'Bkash','transaction_amount'=>10000,'transaction_status'=>'p');
        DB::table('transaction')->insert($data);
        return view('home');
    }

    public function table(Request $request)
    {
        $user = Auth::user();
		$email=$user->user_email;
        $pay_id= $request->input('pay_id');
        $event_type= $request->input('event_type');
        $event_id= $request->input('event_id');
        $data=array('vendor_trx_id'=>$pay_id, 'user_email'=>$email, 'transaction_type'=>'table_reservation',
        'event_id'=>$event_id,'vendor'=>'Bkash','transaction_amount'=>500,'transaction_status'=>'p');
        DB::table('transaction')->insert($data);
        $id=$request->input('preorder');
        if(($request->input('preorder'))==2)
        {
            return redirect('cart');
        }
        else{
         return view('home');           
        }
        return view('home');
    }
}
