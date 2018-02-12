<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class emailController extends Controller
{
	public static function notify ($title,$content,$email) {
	
	 Mail::send('email.send',['title'=>$title,'content'=>$content],function ($message) use ($email,$content)
        {

          $message->from('no-reply@ekhunichai.com', 'Administrator');

            $message->to($email);

           // $message->attach($attach);

            $message->subject($content['subject']);
            $message->replyTo("support@ekhunichai.com","Adminsitrator");

        });

	
	}
   
}
