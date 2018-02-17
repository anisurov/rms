<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Review;

class RatingController extends Controller
{
    public function update(){
    			$items =Item::all();
    			$lenght= $items->count();
    			echo $lenght;
    			$index=0;
			foreach($items as $item){
				$review = Review::where('menu_item_id',$item->item_id)->avg('review_rating');
				
				//echo 'id:'.$item->item_id.'re:'.$review.'<br>';}
				
			if(!is_null($review)&&$review!=$item->item_rating) {
				if(Item::where('item_id',$item->item_id)->update(['item_rating'=>round($review,1)])) {
					$index = $index + 1;
			   }		    
         }
        }
        
        if($index<=$lenght) {
				return redirect('/')->withSuccessMessage('Rating of '.$index.' items have been updated');        
        }else
        return redirect('/')->withSuccessMessage('Nothing to update');
        
     }
}
