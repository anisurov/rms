@extends('layouts.app')
@section('title','All Menu Items')
@section('content')
<div class="container">
    <div class="row">
    <form action={{url('searchmenu')}} method="GET">
    <div class="form-group" >
  <label for="usr"  style="padding-top:50px;padding-bottom:5px">Search Menu:</label>
  <input type="text" style="width:100%" class="form-control" id="usr" name="fname">
  <button type="submit" class="btn">Search</button>
</div>
</form>
	@foreach($items as $item)
        <div class="info-container-main">
            <div class="panel panel-default inside-body-panel-shadow">
           
              <div class="panel-heading" style="padding:25px;">
              <div class="float-left" style="width:100px">{{$item->item_name}}</div>
              <div class="float-left" style="padding-left:40%">Price: {{$item->item_price}}</div>
              
              <div class="float-right">&nbsp;Rating:{{$item->item_rating}}</div>
              </div>
            
                <div class="panel-body">
                  @php($image=explode(",",$item->item_image))
                       <div class="pull-left"> <img src="{{asset('uploa/')}}/{{$image[0]}}" class="img-responsive img-item" alt="{{ $item->item_name }}"> </div>
                       <div class="pull-right item-description"> {{$item->item_description}}</div>
                </div>
                <div class="panel-footer">
                @auth
                <?php
                  $orders=App\Order::where(['user_id'=>Auth::user()->user_id])->get();
                  $count=0;
                  foreach ($orders as $key => $value) {
                    $count=$count+App\OrderDetail::where(['food_order_id'=>$value['order_id'],'menu_item_id'=>$item->item_id])->get()->count();
                  }
                ?>
                @if($count>0)
                @php($review=App\Review::where(['user_id'=>Auth::user()->user_id,'menu_item_id'=>$item->item_id])->get()->count())
						<div class="col-md-6 pull-left">
                	<form action="{{ $review>0?route('reviewupdatewform'):route('reviewform') }}" method="get" class="side-by-side">
                    {!! csrf_field() !!}
                    <input type="hidden" name="id" value="{{ $item->item_id }}">
                    <div class="input-group">
                    		@if(isset($review)&&$review>0)
                    			<div class="input-group-addon">Your Rating:{{App\Review::where(['user_id'=>Auth::user()->user_id,'menu_item_id'=>$item->item_id])->pluck('review_rating')->first()}}</div>
                    			<input type="hidden" name="reviewId" value="{{App\Review::where(['user_id'=>Auth::user()->user_id,'menu_item_id'=>$item->item_id])->pluck('review_id')->first()}}">
                    			<input type="submit" class="btn btn-cart"  value="Update Rating">
                    		 @else
                    		 <input type="submit" class="btn btn-cart"  value="Rate this!!">
                    	   @endif
                    </div>
                	</form>
                	</div>
                @endif
                @endauth
                <div class="col-md-6 pull-right">
						<form action="{{ url('/cart') }}" method="POST" class="side-by-side">
	                    {!! csrf_field() !!}
	                    <input type="hidden" name="id" value="{{ $item->item_id }}">
	                    <input type="hidden" name="name" value="{{ $item->item_id }}">
	                    <input type="hidden" name="price" value="{{ $item->item_price }}">
	                    <input type="submit" class="btn btn-cart"  value="Add to Cart">
	                    <div class="clearfix"></div>
	                </form>
	                </div>
	                <div class="clearfix"></div>
	             </div>
            </div>
        </div>
	@endforeach
	{{$items->links()}}
    </div>
</div>
@endsection
