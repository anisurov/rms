@extends('layouts.app')
@section('title','Add Menu Here')
@section('content')	
<div class="container">
	<div class="row">
		<div class="info-container-main">
			<div class="panel panel-default inside-body-panel-shadow">
			<div class="panel-heading  text-lest">
					<strong><h2>Menu Item<h2></strong>
				</div>
                @foreach($items as $item)
					<form class="panel-body" action="{{  url('/itemupdate2') }}" method="GET">
					<table class="table">
                <thead>
                    <tr>
                        <th>Item Name</th>
                        <th>Item Price</th>
                        <th> Item Description</th>
                        <th> Available Item</th>
                        <th>Item item_rating</th>
                    </tr>
                </thead>

                <tbody>                                   
                    <tr>
                        <td><input type="text" name="item_name" value="{{$item->item_name}}"></td>
                        <td><input type="text" name="item_price" value="{{$item->item_price}}"></td>
	                    <td><input type="text" name="item_description" value="{{$item->item_description}}"></td>
                        <td><input type="text" name="item_available" value="{{$item->item_availability}}"></td>
                        <td><input type="text" name="item_rating" value="{{$item->item_rating}}"></td>
                    </tr>
                   

                </tbody>
            </table>
            <input type="hidden" name="id" value="{{$item->item_id}}">
            <button type="submit" class="btn" >Update</button>
		</form>
        @endforeach
			</div>
				</div>
					</div>
					</div>


@endsection
