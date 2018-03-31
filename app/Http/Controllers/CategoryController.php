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

	public function showallcategory()
	{
		$category=DB::table('menu_category')->select('category_id','category_name')->get();
		return view('showallcategory',compact('category'));
	}

	public function delete(Request $request)
	{
			$id=$request->input('id');
		   DB::table('menu_category')->where('category_id',$id)->delete();
		   $category=DB::table('menu_category')->select('category_id','category_name')->get();
		   return view('showallcategory',compact('category'));
	}

	public function update(Request $request)
	{
		$category=DB::table('menu_category')->select('category_id','category_name')->where('category_id',$request->input('id'))->get();
		return view('updatecategory',compact('category'));
	}

	public function update2(Request $request)
	{
		$category_name= $request -> input('item_name');       
		$data=array('category_name'=>$category_name);
		DB::table('menu_category')->where('category_id',$request->input('id'))->update($data);
        $category=DB::table('menu_category')->select('category_id','category_name')->get();
		return view('showallcategory',compact('category'))->withSuccessMessage("Profile updated successfully ");
	}



}