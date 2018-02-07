<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class tableController extends Controller
{
   public function index()
   {
	   return view('tablereserve');
   }
   public function reserve(Request $request)
   {
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
		$data= array('date'=>$dat , 'time'=>$tim, 'noofperson'=>$person_no, 
		'message' => $message, 'user_id' => $user_id , 'status'=> '1' , 'table_name' => $table_name);
		DB::table('table_reservation') -> insert($data);
		return view('welcome');
   }
}
