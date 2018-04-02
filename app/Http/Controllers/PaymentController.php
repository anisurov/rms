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
