<?php

namespace App\Http\Controllers;
use App\Table;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use DB;
class TableController extends Controller
{
   public function index()
   {
	$time = date('h')+6;
		
		
	if($time<8&&$time>23)
	{
	
		return redirect('/')->withErrorMessage('Website Closed');
	}
	else
	   return view('tablereserve');
   }
   public function reserve(Request $request)
   {
		$this->validator($request->all());
	   	$person_name = $request -> input('name');
		$email = $request -> input('email');
		$table_name = $request -> input('table');
		$dat = $request -> input('dat');
		$tim = $request -> input('time');
		$person_no = $request -> input('person');
		$message = $request -> input('message');
		$user = DB::select('select user_id from user where user_email = "' . $email . '"');
			foreach ($user as $key => $value) {
			$user_id = $value -> user_id;
		}
		$user = Auth::user();
		$email=$user->user_email;
		$branch =DB::select('select branch_name from branch_name where user_email = "' . $email . '"');
		foreach ($branch as $key => $value) {
			$branch_name = $value -> branch_name;
		}
		$data= array('date'=>$dat , 'time'=>$tim, 'noofperson'=>$person_no,
		'message' => $message, 'user_id' => $user_id , 'branch_name'=>$branch_name ,'status'=> 'P' , 'table_name' => $table_name);
		DB::table('table_reservation') -> insert($data);
		$event_id=DB::table('table_reservation')->select('id')->where('date',$dat)->where('time',$tim)->get();
		foreach ($event_id as $key => $value) {
			$id = $value -> id;
		}
		if(($request->input('addm')==true))
		{
			$user = Auth::user();
		$id=$user->user_id;
			$id2=2;
			$data=array('user_id'=>$id,'total_price'=>0,'order_type'=>'preorder');
			DB::table('food_order')->insert($data);
		return view('tablepayment',compact('id','id2'))->withSuccessMessage("thanks!for your booking");

		}
   }

   public function showAllreservation () {
		$table=Table::orderBy('id', 'desc')
               ->paginate(5);

		return view('showTablreservation',compact('table'));

	}
	   public function showAllreservation2 () {
		$user = Auth::user();
		$email=$user->user_email;
		$branch =DB::select('select branch_name from branch_name where user_email = "' . $email . '"');
		foreach ($branch as $key => $value) {
			$branch_name = $value -> branch_name;
		}
	$table=Table::where('branch_name',$branch_name)->where('status','A')->orderBy('id', 'desc')
               ->paginate(5);

		return view('showTablreservation2',compact('table'));

	}
  protected function validator(array $data)
	{
	    return Validator::make($data, [
	        'name' => 'required|string|max:255',
	        'table' => 'required|string',
	        'email' => 'required|email',
	        'message' => 'string|max:800',
	        'person' => 'numeric|between:1,10',
	        'dat' => 'required|date|after:yesterday',
	        'time' => 'required|date_format:H:i',
	    ])->validate();
	}

  public function approveReservation(Request $request){
		if($request->status=='P') {
			if(Table::where('id',$request->eventID)->update(['status'=>'A'])){
				DB::table('transaction')->where('event_id',$request->eventID)->update(['transaction_status'=>'A']);
				$title = "Table reservation approval";
				$content['subject'] = "Table reservation approval";
				$users = User::where('user_id',Table::where('id',$request->eventID)->pluck('user_id')->first())->get();
				$content['customer']="customer";
        $email = 'test@xyz.tld';
				$content['pay']="yes";
				$content['reservation']="Table";
				//var_dump($users);
				if($users) {
					foreach($users as $user){
							$email = $user->user_email;
							$content['customer']=$user->user_name;
							//var_dump($user);
					}
				}

				emailController::notify($title,$content,$email);
				return redirect('/')->withSuccessMessage('Table approved successfully');
			}else
			return redirect('/')->withErrorMessage('Table approval failed');
		}
		if($request->status=='A') {
			if(Table::where('id',$request->eventID)->update(['status'=>'P'])){
				return redirect('/')->withSuccessMessage('Table disapproved successfully');
			}
			return redirect('/')->withErrorMessage('Table disapproval failed');
		}
	}

}
