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
                        <th>Table Name</th>                      
                        <th>Date/Time of Reservation</th>                                        
                        <th>No of Person</th>						
                        
                    </tr>
                </thead>

                <tbody>                
                    @foreach ($table as $reservationData)                    
                    <tr>

						   <td>{{$reservationData->table_name}} </td>
	                        <td>{{$reservationData->date}}<br>{{$reservationData->time}}</td>
	                        <td>{{$reservationData->noofperson}}</td>
                       
                  
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
