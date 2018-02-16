@extends('layouts.app')
@section('title','Add Menu Here')
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
						   <td>@foreach(App\Order::where('user_id',$reservationData->user_id)->where('date',$reservationData->date)->
						   where('time',$reservationData->time)->select('item_id')->get() as $items)
						   [ {{App\Item::where('item_id',$items->item_id)->pluck('item_name')->first()}} ] &nbsp;
						   
								@endforeach						   
						   </td>
	                       <td>{{$reservationData->date}}<br>{{$reservationData->time}}</td>
	                       <!--   <td>{{$reservationData->noofperson}}</td><td>{{$reservationData->message}}</td>
                       
                       <td>
                            <form action="{{url('/table_reservation')}}" method="POST" class="side-by-side">
                                {!! csrf_field() !!}
                                <input type="hidden" name="status" value="{{$reservationData->status}}">
                                <input type="hidden" name="eventID" value="{{$reservationData->id}}">
                                <input type="submit" class="btn {{$reservationData->status==0 ? 'btn-danger':'btn-success'}} btn-sm" value="{{$reservationData->status==0 ? 'Approve':'Approved'}}">
                            </form>
                        </td>-->
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
