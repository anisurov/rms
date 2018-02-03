@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
	@foreach($items as $item)
        <div class="info-container-main">
            <div class="panel panel-default inside-body-panel-shadow">
              <div class="panel-heading"><div class="float-left">{{$item->item_name}}</div><div class="float-right">{{$item->item_rating}}</div></div>

                <div class="panel-body">
                        {{$item->item_description}}
                </div>
            </div>
        </div>
	@endforeach
	{{$items->links()}}
    </div>
</div>
@endsection

