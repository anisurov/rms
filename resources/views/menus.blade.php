@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
	@foreach($items as $item)
        <div class="info-container-main">
            <div class="panel panel-default inside-body-panel-shadow">
              <div class="panel-heading" style="padding:25px;"><div class="float-left">{{$item->item_name}}</div><div class="float-right">Rating:{{$item->item_rating}}</div></div>

                <div class="panel-body">
                       <div class="pull-left"> <img src="{{asset('uploa/')}}/{{$item->item_image}}" class="img-responsive img-item" alt="{{ $item->item_name }}"> </div>
                       <div class="pull-right item-description"> {{$item->item_description}}</div>
                </div>
                <div class="panel-footer">
					<form action="{{ url('/cart') }}" method="POST" class="side-by-side">
                    {!! csrf_field() !!}
                    <input type="hidden" name="id" value="{{ $item->item_id }}">
                    <input type="hidden" name="name" value="{{ $item->item_id }}">
                    <input type="hidden" name="price" value="{{ $item->item_price }}">
                    <input type="submit" class="btn btn-cart"  value="Add to Cart">
                    <div class="clearfix"></div>
                </form>         
                </div>
            </div>
        </div>
	@endforeach
	{{$items->links()}}
    </div>
</div>
@endsection

