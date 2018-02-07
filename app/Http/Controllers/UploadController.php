<?php namespace App\Http\Controllers;
use Illuminate\Http\Request;
//use \Input as Input;
use Illuminate\Support\Facades\Input;
use DB;
class UploadController extends Controller {

 public function index()
   {
	   return view('addmenu');
   }
	public function upload(Request $request){	
		global $image;
		if(Input::hasFile('file')){
			echo 'Uploaded';
			$file = Input::file('file');
			$file->move('uploa', $file->getClientOriginalName());
			$image=$file->getClientOriginalName();
			
			
		}
			$item_name = $request -> input('item_name');
		$item_category = $request -> input('item_category');
		$item_description = $request -> input('item_description');
		$item_stock = $request -> input('item_stock');
		$item_rating = $request -> input('item_rating');
		$item_price = $request -> input('item_price');
			$category = DB::select('select category_id from menu_category where category_name = "' . $item_category . '"');

		foreach ($category as $key => $value) {
			$categoryID = $value -> category_id;
		}
		$data= array('item_image'=>$image, 'item_name'=>$item_name , 'category_id'=>$categoryID , 'item_description'=> $item_description, 
		'item_stock'=>$item_stock, 'item_rating'=>$item_rating, 'item_availability'=>$item_stock, 'item_ordered'=>'0','item_price'=>$item_price);
		DB::table('menu_item')->insert($data);
		if ($request -> input('addm') == 'true') {
			//alert('success', 'Your Product Entry was Successful!!');
			return view('addmenu');
		} else {

			//alert('success', 'Your Product Entry was Successful!!');

			return redirect('/')->withSuccessMessage('Item added Successfully'); 
		}

	}
}
