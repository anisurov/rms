@extends('layouts.app')
@section('title','Event Reservation List')
@section('content')
<div class="container">
	<div class="row">
		<div class="info-container-main">
			<div class="panel panel-default inside-body-panel-shadow">
			<div class="panel-heading  text-lest">
					<strong><h2>Event Reserved<h2></strong>
				</div>
					<div class="panel-body">
					<table class="table">
                <thead>
                    <tr>
                        <th>Event Type</th>
                        <th>Date/Time</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($reserve as $reservationData)
                    <tr>
                        <td>{{$reservationData->event_type}}</td>
	                        <td>{{$reservationData->event_date}}<br>{{$reservationData->event_time}}</td>
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
