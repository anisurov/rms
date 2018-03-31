<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class ProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('userprofile',compact('user'));
    }

    public function update()
    {
        $user = Auth::user();
        return view('userprofileupdate',compact('user'));
    }
    public function insert(Request $request)
    {
        
        $name= $request -> input('user_name');  
        $email= $request -> input('user_email');    
        $mobile= $request -> input('user_mobile');    
        $dob= $request -> input('user_dob');    
        $address= $request -> input('user_address');  

        $data=array('user_name'=>$name,'user_email'=>$email,'user_mobile'=>$mobile,'user_dob'=>$dob,
        'user_address'=>$address);
        $user = Auth::user();
        DB::table('user')->where('user_id',$user->user_id)->update($data);
        return view('userprofile',compact('user'))->withSuccessMessage("Profile updated successfully ");
}
}