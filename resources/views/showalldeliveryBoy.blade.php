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
                        <th>Name</th>
                        <th>Mobile Number</th>
                        <th>Address</th>
                        <th>Email</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($data as $reservationData)
                    <tr>
                        <td>{{$reservationData->delivery_boy_name}}</td>
                        <td>
                        {{$reservationData->delivery_boy_number}}
                        </td>
                        <td>
                        {{$reservationData->delivery_boy_address}}
                        </td>
                        <td>
                        {{$reservationData->delivery_boy_email}}
                        </td>
                    </tr>

                    @endforeach

                </tbody>
            </table>

		</div>
			</div>
				</div>
					</div>
					</div>


@endsection
