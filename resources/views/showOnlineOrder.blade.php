@extends('layouts.app')
@section('title','Online Order')
@section('content')
<div class="container">
	<div class="row">
		<div class="info-container-main">
			<div class="panel panel-default inside-body-panel-shadow">
			<div class="panel-heading  text-lest">
					<strong><h2>Online Order<h2></strong>
				</div>
					<div class="panel-body">
					<table class="table">
                <thead>
                    <tr>
                        <th>Contact</th>
                        <th>Items</th>
                        <th>Date/Time</th>
                        <th>Status</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($order as $reservationData)
                    <tr>
                        <td>
                            @foreach(App\User::where('user_id',$reservationData->user_id)->get() as $user)
		                          {{$user->user_email}}<br>
		                          {{$user->user_mobile}}
                          	@endforeach
                        </td>
						   					<td>
								 						@foreach(App\OrderDetail::where('food_order_id',$reservationData->order_id)->select('menu_item_id')->get() as $items)
						   									[ {{App\Item::where('item_id',$items->menu_item_id)->pluck('item_name')->first()}} ] &nbsp;

														@endforeach
						   					</td>
	             					<td>{{$reservationData->datetime}}</td>
												<td>
                            <form action="{{url('/onlineorder')}}" method="POST" class="side-by-side">
                                {!! csrf_field() !!}
                                <input type="hidden" name="status" value="{{$reservationData->status}}">
                                <input type="hidden" name="orderID" value="{{$reservationData->order_id}}">
                                <input type="submit" class="btn {{$reservationData->status=='p' ? 'btn-danger':'btn-success'}} btn-sm" value="{{$reservationData->status=='p' ? 'Approve':'Approved'}}">
                            </form>
                        </td>
            				</tr>

                    @endforeach

                </tbody>
            </table>

		</div>
			</div>
			{{$order->links()}}
				</div>
					</div>
					</div>


@endsection
