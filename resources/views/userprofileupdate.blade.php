@extends('layouts.app')
@section('title','Add Menu Here')
@section('content')	
<div class="container">
	<div class="row">
		<div class="info-container-main">
			<div class="panel panel-default inside-body-panel-shadow">
			<div class="panel-heading  text-lest">
					<strong><h2>User Profile<h2></strong>
				</div>
					<form class="panel-body" action="{{  url('/updateprofile2') }}" method="GET">
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
                    <tr>
                        <td><input type="text" name="user_name" value="{{$user->user_name}}"></td>
	                        <td><input type="text" name="user_email" value="{{$user->user_email}}"></td>
                        <td><input type="text" name="user_mobile" value="{{$user->user_mobile}}"></td>
                        <td><input type="date" name="user_dob" value="{{$user->user_dob}}"></td>
                        <td><input type="text" name="user_address" value="{{$user->user_address}}"></td>
                    </tr>
                   

                </tbody>
            </table>
            <button type="submit" class="btn">Update</button>
		</form>
			</div>
				</div>
					</div>
					</div>


@endsection
