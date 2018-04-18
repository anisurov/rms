<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Order;
use App\User;

class OnlineOrderController extends Controller
{
    public function showAllOrder()
    {
        $order=Order::select(['order_id','datetime','user_id','status'])->paginate(5);
        $boy= DB::table('delivery_boy')->select(['delivery_boy_name'])->get();
        //var_dump($order);
        return view('showOnlineOrder', compact('order','boy'));
    }

    public function approve(Request $request)
    {
        if ($request->status=='P') {
            if (Order::where('order_id', $request->orderID)->update(['status'=>'A'])) {
                $title = "Order received successfully";
                $content['subject'] = "Order received successfully";
                $users = User::where('user_id', Order::where('order_id', $request->orderID)->pluck('user_id')->first())->get();
                $content['customer']="customer";
                $email = 'test@xyz.tld';
                $content['pay']="yes";
                $content['reservation']="Order";
                //var_dump($users);
                if ($users) {
                    foreach ($users as $user) {
                        $email = $user->user_email;
                        $content['customer']=$user->user_name;
                        //var_dump($user);
                    }
                }

                emailController::notify($title, $content, $email);
                return redirect('/')->withSuccessMessage('Order approved successfully');
            } else {
                return redirect('/')->withErrorMessage('Order approval failed');
            }
        }
        if ($request->status=='A') {
            if (Order::where('order_id', $request->orderID)->update(['status'=>'P'])) {
                return redirect('/')->withSuccessMessage('Order disapproved successfully');
            }
            return redirect('/')->withErrorMessage('Order disapproval failed');
        }
    }
}
