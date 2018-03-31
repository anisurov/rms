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
                  @php($image=explode(",",$item->item_image))
                       <div class="pull-left"> <img src="{{asset('uploa/')}}/{{$image[0]}}" class="img-responsive img-item" alt="{{ $item->item_name }}"> </div>
                       <div class="pull-right item-description"> {{$item->item_description}}</div>
                </div>
                <div class="panel-footer">
                <div class="col-md-6 pull-right">

                    <form action="{{  url('/itemupdate') }}" method="GET" class="side-by-side">
{{ csrf_field() }}
<input type="hidden" name="id" value="{{ $item->item_id }}">
<button type="submit" class="btn btn-default btn-sm">
          <span class="glyphicon glyphicon-remove"></span> Update 
        </button>
</form>
<form action="{{  url('/itemdelete') }}" method="GET">
{{ csrf_field() }}
<input type="hidden" name="id" value="{{$item->item_id}}" />
<button type="submit" class="btn btn-default btn-sm">
          <span class="glyphicon glyphicon-remove"></span> DELETE 
        </button>
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
