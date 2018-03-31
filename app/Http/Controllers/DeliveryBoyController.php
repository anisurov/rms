<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use DB;
class DeliveryBoyController extends Controller
{
    public function index()
    {
        return view('deliveryboy');
    }

    public function insert(Request $request)
    {
        $this->validator($request->all());
        $name = $request -> input('delivery_boy_name');
        $mobile_number = $request -> input('delivery_boy_number');
        $address = $request -> input('delivery_boy_address');
        $email = $request -> input('delivery_boy_email');
        $data= array( 'delivery_boy_name'=>$name, 'delivery_boy_number' => $mobile_number, 'delivery_boy_address' => $address ,
         'delivery_boy_email'=> $email);
        DB::table('delivery_boy')->insert($data);
        
        if ($request -> input('addm') == 'true') {
			//alert('success', 'Your Product Entry was Successful!!');
			return view('deliveryboy');
		} else {

			//alert('success', 'Your Product Entry was Successful!!');

            return redirect('/')->withErrorMessage('Delivery Boy Added successfully');
		}
    }

    public function approve(Request $request)
    {
        $title = "Deliver the Order";
        $content['subject'] = "Order Delivery";
        $email2 = DB::table('delivery_boy')->select('delivery_boy_email')-> where('delivery_boy_name',$request ->delivery_boy_name2)->get();
        foreach($email2 as $email3)
        $email=$email3->delivery_boy_email;
        $content['customer'] = $request ->delivery_boy_name2;
        $content['pay']="no";
        $content['reservation']="Order";
        emailController::notify($title, $content, $email);
        return redirect('/')->withSuccessMessage('Notification sent through email');
    }

    public function ShowAllDeliveryBoy()
    {
        $data=DB::table('delivery_boy')->select('delivery_boy_name','delivery_boy_number','delivery_boy_address','delivery_boy_email')->get();
        return view('showalldeliveryBoy', compact('data'));
    }

    protected function validator(array $data)
	{
	    return Validator::make($data, [
	        'delivery_boy_name' => 'required|string|max:255',
	        'delivery_boy_number' => 'required|string|min:11|max:255',
	        'delivery_boy_address' => 'required|string|max:255',
	    ])->validate();
	}
}
