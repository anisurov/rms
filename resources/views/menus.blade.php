@extends('layouts.app')
@section('title','All Menu Items')
@section('content')
<div class="container">
    <div class="row">
	@foreach($items as $item)
        <div class="info-container-main">
            <div class="panel panel-default inside-body-panel-shadow">
              <div class="panel-heading" style="padding:25px;"><div class="float-left">{{$item->item_name}}</div><div class="float-right">&nbsp;Rating:{{$item->item_rating}}</div></div>

                <div class="panel-body">
                       <div class="pull-left"> <img src="{{asset('uploa/')}}/{{$item->item_image}}" class="img-responsive img-item" alt="{{ $item->item_name }}"> </div>
                       <div class="pull-right item-description"> {{$item->item_description}}</div>
                </div>
                <div class="panel-footer">
                @auth
                @if(App\Order::where(['user_id'=>Auth::user()->user_id,'item_id'=>$item->item_id])->get()->count()>0)
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

