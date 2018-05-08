<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Item;

class MenuItemController extends Controller
{
    public function index($id){
		$items  = Item::where('category_id',$id)->paginate(5);
		return view('menus',compact('items'));
	}
 
  public function allMenu(){
		$menu =	new Item;
		$items  = $menu->paginate(5);
		return view('menus',compact('items'));
	}
	public function allMenu2(){
		$menu =	new Item;
		$items  = $menu->paginate(5);
		return view('menus2',compact('items'));
	}

	public function update(Request $request)
	{
		$menu =	new Item;
		$items  = Item::where('item_id',$request->input('id'))->paginate(5);
		return view('updatemenu',compact('items'));
	}

	public function update2(Request $request)
	{
		$item_name= $request -> input('item_name');  
		$item_price= $request -> input('item_price');  
        $description= $request -> input('item_description');    
        $rating= $request -> input('item_rating');     
        $data=array('item_name'=>$item_name,'item_price'=>$item_price,'item_description'=>$description,'item_rating'=>$rating);
        DB::table('menu_item')->where('item_id',$request->input('id'))->update($data);
		$menu =	new Item;
		$items  = $menu->paginate(5);
		return view('menus2',compact('items'))->withSuccessMessage("Profile updated successfully ");
	}

	public function delete(Request $request)
	{
		$id=$request->input('id');
       echo $id;
       DB::table('menu_item')->where('item_id',$id)->delete();
		$menu =	new Item;
		$items  = $menu->paginate(5);
		return view('menus2',compact('items'));
	}

	public function search(Request $request)
	{

		$item_name=$request->input('fname');
		$items  = Item::where('item_name',$item_name)->paginate(5);
		return view('searchmenu',compact('items'));

	}

}
