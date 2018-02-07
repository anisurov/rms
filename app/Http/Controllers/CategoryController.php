<?php namespace App\Http\Controllers;
use Illuminate\Http\Request;
//use \Input as Input;
use DB;
class CategoryController extends Controller {

 public function index()
   {
	   return view('addcategory');
   }
	public function add(Request $request){	
	echo 'welcome';
		$item_category = $request -> input('category_name');
		$data= array( 'category_name'=>$item_category);
		DB::table('menu_category')->insert($data);
		if ($request -> input('addm') == 'true') {
			//alert('success', 'Your Product Entry was Successful!!');
			return view('addcategory');
		} else {

			//alert('success', 'Your Product Entry was Successful!!');

		return view('welcome');
		}

	}
}