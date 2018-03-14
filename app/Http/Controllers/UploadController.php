<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
// use \Input as Input;
use Illuminate\Support\Facades\Input;
use DB;

class UploadController extends Controller
{

    public function index()
    {
        return view('addmenu');
    }

    public function upload(Request $request)
   {
        $this->validator($request->all());
        global $image1,$image2,$image3;
		 if (Input::hasFile('file2')) {
            echo 'Uploaded';
            $file2 = Input::file('file2');
            $file2->move('uploa', $file2->getClientOriginalName());
            $image2 = $file2->getClientOriginalName();
        }
        if (Input::hasFile('file1')) {
            echo 'Uploaded';
            $file1 = Input::file('file1');
            $file1->move('uploa', $file1->getClientOriginalName());
            $image1 = $file1->getClientOriginalName();
        }
		
		 if (Input::hasFile('file3')) {
            echo 'Uploaded';
            $file3 = Input::file('file3');
            $file3->move('uploa', $file3->getClientOriginalName());
            $image3 = $file3->getClientOriginalName();
        }
        $item_name = $request->input('item_name');
        $item_category = $request->input('item_category');
        $item_description = $request->input('item_description');
        $item_stock = $request->input('item_stock');
        $item_rating = $request->input('item_rating');
        $item_price = $request->input('item_price');
        $category = DB::select('select category_id from menu_category where category_name = "' . $item_category . '"');
        $CategoryID=11;
        foreach ($category as $key => $value) {
            $CategoryID = $value->category_id;
        }
   $image4 = "{$image2}{$image1}{$image3}";
   echo $image4;
        $data = array(
            'item_image' => $image4,
            'item_name' => $item_name,
            'category_id' => $CategoryID,
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
	    ])->validate();
	}
	
}
