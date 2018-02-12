<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use DB;
use App\Event;
use App\User;

class eventController extends Controller
{
    public function index()
	{
		return view('eventreserve');
	}
	public function reserve(Request $request)
	{
		$this->validator($request->all());
		$email = $request -> input('email');
		$event_type = $request -> input('event_type');
		$dat = $request -> input('dat');
		$tim = $request -> input('time');
		$person_no = $request -> input('person');
		$message = $request -> input('message');
		$user = DB::select('select user_id from user where user_email = "' . $email . '"');
			foreach ($user as $key => $value) {
			$user_id = $value -> user_id;
		}
		$data= array('event_date'=>$dat , 'event_time'=>$tim,'event_type'=> $event_type, 'event_no_of_people'=>$person_no, 
		'event_custom_message' => $message, 'user_id' => $user_id , 'event_exterior_decoration'=> '1' );
		$num=Event::where('event_date',$dat)->where('event_time',$tim)->count();
		var_dump($num);
		if($num<=0) {
		DB::table('event_reservation') -> insert($data);
		return redirect('/')->withSuccessMessage("thanks!for your booking.we will contact  with you soon!! ");
		}
		return redirect('/')->withErrorMessage("sorry! we are  already booked!! ");
	}
	
	protected function validator(array $data)
	{
	    return Validator::make($data, [
	        'event_type' => 'required|string|max:255',	       
	        'email' => 'required|email',
	        'message' => 'required|string|max:800',
	        'person' => 'required|numeric',
	        'dat' => 'required|date|after:yesterday',
	       'time' =>  array('required','regex:/Day|Night$/'),
	    ])->validate();
	}
	
	public function showAllreservation () {
		$reserve=Event::orderBy('event_date', 'desc')
               ->paginate(5);
		return view('showAllreservation',compact('reserve'));
	
	}
	
	public function approveReservation(Request $request){
		if($request->status==0) {
			if(Event::where('event_id',$request->eventID)->update(['status'=>1])){
				$title = "Event reservation approval";
				$content['subject'] = "Event reservation approval";
				$users = User::where('user_id',Event::where('event_id',$request->eventID)->pluck('user_id')->first())->get();
				$content['customer']="customer";
				$content['pay']="yes";
				$content['reservation']="Event";
				//var_dump($users);
				if($users) {
					foreach($users as $user){
							$email = $user->user_email;
							$content['customer']=$user->user_name;
							//var_dump($user);
					}				
				}
			
				emailController::notify($title,$content,$email);
				return redirect('/')->withSuccessMessage('Event approved successfully');
			}else
			return redirect('/')->withErrorMessage('Event approval failed');		
		}
		if($request->status==1) {
			if(Event::where('event_id',$request->eventID)->update(['status'=>0])){
				return redirect('/')->withSuccessMessage('Event disapproved successfully');
			}
			return redirect('/')->withErrorMessage('Event disapproval failed');		
		}	
	}
}
