<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class menuController extends Controller
{
   public function index()
   {
	   $menu_category=DB::select('select category_name from menu_category');
	   return view('layout.menu',compact('menu_category'));
   }
   
}
