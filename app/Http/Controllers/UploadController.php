<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
// use \Input as Input;
use Illuminate\Support\Facades\Input;
use DB;

class UploadController extends Controller
{

    public function __construct(){
    $this->middleware(['auth','execuser']);/*
    if(Auth::user()->is_admin!=1){
		return abort('404');
	}*/
  }
    public function index()
    {
        return view('addmenu');
    }

    public function upload(Request $request)
   {
        $this->validator($request->all());
        global $image;
        if (Input::hasFile('file')&&Input::hasFile('file2')&&Input::hasFile('file3')) {
            $file = Input::file('file');
            $name1="rms_img_".rand(1,20)."1".$file->getClientOriginalName();
            $file->move('uploa',$name1);

            $file2 = Input::file('file2');
            $name2="rms_img_".rand(1,20)."2".$file2->getClientOriginalName();
            $file2->move('uploa', $name2);

            $file3 = Input::file('file3');
            $name3="rms_img_".rand(1,20)."3".$file3->getClientOriginalName();
            $file3->move('uploa',$name3);

            $image = $name1.",".$name2.",".$name3;
        }
        $item_name = $request->input('item_name');
        $item_category = $request->input('item_category');
        $item_description = $request->input('item_description');
        $item_stock = $request->input('item_stock');
        $item_rating = $request->input('item_rating');
        $item_price = $request->input('item_price');
        $category = DB::select('select category_id from menu_category where category_name = "' . $item_category . '"');

        foreach ($category as $key => $value) {
            $categoryID = $value->category_id;
        }
        $data = array(
            'item_image' => $image,
            'item_name' => $item_name,
            'category_id' => $categoryID,
            'item_description' => $item_description,
            'item_stock' => $item_stock,
            'item_rating' => $item_rating,
            'item_availability' => $item_stock,
            'item_ordered' => '0',
            'item_price' => $item_price
        );
        DB::table('menu_item')->insert($data);
        if ($request->input('addm') == 'true') {
            // alert('success', 'Your Product Entry was Successful!!');
            return view('addmenu');
        } else {

            // alert('success', 'Your Product Entry was Successful!!');

            return redirect('/')->withSuccessMessage('Item added Successfully');
		}

	}

	protected function validator(array $data)
	{
	    return Validator::make($data, [
	        'item_name' => 'required|string|max:255',
	        'item_description' => 'required|string|max:800',
	        'item_stock' => 'required|numeric',
	        'item_rating' => 'required|numeric|between:1,10',
	        'item_price' => 'required|numeric',
	        'file'=>'nullable|mimes:jpeg,bmp,png',
	        'file2'=>'nullable|mimes:jpeg,bmp,png',
	        'file3'=>'nullable|mimes:jpeg,bmp,png',
	    ])->validate();
	}

}
