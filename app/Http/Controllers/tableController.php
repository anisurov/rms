<?php

namespace App\Http\Controllers;
use App\Table;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DB;
class TableController extends Controller
{
   public function index()
   {
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
		$data= array('date'=>$dat , 'time'=>$tim, 'noofperson'=>$person_no, 
		'message' => $message, 'user_id' => $user_id , 'status'=> '0' , 'table_name' => $table_name);
		DB::table('table_reservation') -> insert($data);
		return view('welcome');
   }
   	public function showAllreservation () {
		$table=Table::orderBy('date', 'desc')
               ->paginate(5);
			  
		return view('showTablreservation',compact('table'));
	
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
	
}
