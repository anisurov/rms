<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Review;

class ReviewController extends Controller
{
   public function showAddForm(Request $request){
   $id=$request->id;
   return view('review.add',compact('id'));
   }
   
   public function showUpdateForm(Request $request){
   $id=$request->id;
   $rid=$request->reviewId;
   return view('review.update',compact('id','rid'));
   }
   
   public function store(Request $request){
   	$this->validator($request->all());
   	$review = new Review();
   	$review->user_id= Auth::user()->user_id;
   	$review->menu_item_id = $request->id;
   	$review->review_rating = $request->Rating;
   	$review->review_comment = $request->comment;
   	
   	if($review->save()) {
			return redirect('/')->withSuccessMessage('Thank you for your review');   	
   	}else {
   		return redirect('/')->withErrorMessage('Sorry!! An error occoured');
   	}
   	
   	
   }
   
   public function update(Request $request){
   	$this->validator($request->all());
   	$item_id = $request->id;
   	$rating = $request->Rating;
   	$comment = $request->comment;
   	$review_id = Review::where(['user_id'=>Auth::user()->user_id,'menu_item_id'=>$item_id])->pluck('review_id')->first();
   	$review = Review::where(['review_id'=>$review_id,'user_id'=>Auth::user()->user_id,'menu_item_id'=>$item_id])->
   	update(['review_rating'=>$rating,'review_comment'=>$comment]);
   	if($review) {
			return redirect('/')->withSuccessMessage('Thank you for your review');   	
   	}else {
   		return redirect('/')->withErrorMessage('Sorry!! An error occoured');
   	}
   }
   
   protected function validator(array $data){
   
   	return Validator::make($data, [
	        'comment' => 'nullable|string|max:800',
	        'Rating' => 'required|numeric|between:1,10',
	    ])->validate();
   
   }
}
