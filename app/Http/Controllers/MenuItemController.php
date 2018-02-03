<?php

namespace App\Http\Controllers;

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

}
