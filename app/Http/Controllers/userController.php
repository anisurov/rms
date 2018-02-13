<?php

namespace App\Http\Controllers;
use App\Userdata;
use Illuminate\Http\Request;
use DB;
class userController extends Controller
{
   public function index()
   {
	  $user=Userdata::orderBy('user_name', 'desc')
               ->paginate(5);
		return view('showAlluser',compact('user'));
   }	   
}
