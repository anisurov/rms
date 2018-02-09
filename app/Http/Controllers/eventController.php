<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class eventController extends Controller
{
    public function index()
	{
		return view('eventreserve');
	}
	public function reserve(Request $request)
	{
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
		DB::table('event_reservation') -> insert($data);
		return view('welcome');
	}
}
