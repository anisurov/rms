@extends('layouts.app')
@section('title','Add Menu Here')
@section('content')	
<div class="container">
	<div class="row">
		<div class="info-container-main">
			<div class="panel panel-default inside-body-panel-shadow">
			<div class="panel-heading  text-lest">
					<strong><h2>User Info<h2></strong>
				</div>
					<div class="panel-body">
					<table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th> Email</th>
                        <th>Mobile Number</th>
                        <th>Birth date</th>                      
                        <th>Address</th>
                    </tr>
                </thead>

                <tbody>                
                    @foreach ($user as $userData)                    
                    <tr>
                        <td>{{$userData->user_name}}}}</td>
	                        <td>{{$userData->user_email}}<br>{{$userData->user_mobile}}</td>
                        <td>
                        <td>{{$userData->user_dob}}</td>
                        <td>{{$userData->user_address}}</td>
                        </td>
                    </tr>

                    @endforeach

                </tbody>
            </table>

		</div>
			</div>
			{{$user->links()}}
				</div>
					</div>
					</div>


@endsection
