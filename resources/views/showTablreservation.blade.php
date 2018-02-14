@extends('layouts.app')
@section('title','Add Menu Here')
@section('content')	
<div class="container">
	<div class="row">
		<div class="info-container-main">
			<div class="panel panel-default inside-body-panel-shadow">
			<div class="panel-heading  text-lest">
					<strong><h2>Table Reservation<h2></strong>
				</div>
					<div class="panel-body">
					<table class="table">
                <thead>
                    <tr>
                        <th>Contact</th>
                        <th>Table Name</th>                      
                        <th>Date/Time of Reservation</th>                                        
                        <th>No of Person</th>						
                        <th>Message</th>						
                        <th>Status</th>
                    </tr>
                </thead>

                <tbody>                
                    @foreach ($table as $reservationData)                    
                    <tr>
                            <td>
                            @foreach(App\User::where('user_id',$reservationData->user_id)->get() as $user)
                          {{$user->user_email}}<br>
                          {{$user->user_mobile}}
                          @endforeach
                        </td>
						   <td>{{$reservationData->table_name}} </td>
	                        <td>{{$reservationData->date}}<br>{{$reservationData->time}}</td>
	                        <td>{{$reservationData->noofperson}}</td><td>{{$reservationData->message}}</td>
                       
                        <td>
                            <form action="{{url('/table_reservation')}}" method="POST" class="side-by-side">
                                {!! csrf_field() !!}
                                <input type="hidden" name="status" value="{{$reservationData->status}}">
                                <input type="hidden" name="eventID" value="{{$reservationData->id}}">
                                <input type="submit" class="btn {{$reservationData->status==0 ? 'btn-danger':'btn-success'}} btn-sm" value="{{$reservationData->status==0 ? 'Approve':'Approved'}}">
                            </form>
                        </td>
                    </tr>

                    @endforeach

                </tbody>
            </table>

		</div>
			</div>
			{{$table->links()}}
				</div>
					</div>
					</div>


@endsection
