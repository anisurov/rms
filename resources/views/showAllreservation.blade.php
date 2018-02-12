@extends('layouts.app')
@section('title','Add Menu Here')
@section('content')	
<div class="container">
	<div class="row">
		<div class="info-container-main">
			<div class="panel panel-default inside-body-panel-shadow">
			<div class="panel-heading  text-lest">
					<strong><h2>Event Reservation<h2></strong>
				</div>
					<div class="panel-body">
					<table class="table">
                <thead>
                    <tr>
                        <th>Event Type</th>
                        <th>Date/Time</th>
                        <th>Contact</th>                      
                        <th>Status</th>
                    </tr>
                </thead>

                <tbody>                
                    @foreach ($reserve as $reservationData)                    
                    <tr>
                        <td>{{$reservationData->event_type}}</td>
	                        <td>{{$reservationData->event_date}}<br>{{$reservationData->event_time}}</td>
                        <td>
                          @foreach(App\User::where('user_id',$reservationData->user_id)->get() as $user)
                          {{$user->user_email}}<br>
                          {{$user->user_mobile}}
                          @endforeach
                        </td>
                        <td>
                            <form action="{{url('/reservation')}}" method="POST" class="side-by-side">
                                {!! csrf_field() !!}
                                <input type="hidden" name="status" value="{{$reservationData->status}}">
                                <input type="hidden" name="eventID" value="{{$reservationData->event_id}}">
                                <input type="submit" class="btn {{$reservationData->status==0 ? 'btn-danger':'btn-success'}} btn-sm" value="{{$reservationData->status==0 ? 'Approve':'Approved'}}">
                            </form>
                        </td>
                    </tr>

                    @endforeach

                </tbody>
            </table>

		</div>
			</div>
			{{$reserve->links()}}
				</div>
					</div>
					</div>


@endsection
