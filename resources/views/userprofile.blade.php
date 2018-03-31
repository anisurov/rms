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
                    <tr>
                        <td>{{$user->user_name}}</td>
	                        <td>{{$user->user_email}}</td>
                        <td>{{$user->user_mobile}}</td>
                        <td>{{$user->user_dob}}</td>
                        <td>{{$user->user_address}}</td>
                        <td>
                        <form action="{{  url('/updateprofile') }}" method="GET">
{{ csrf_field() }}
<input type="hidden" name="_method" value="UPDATE" />
<button type="submit" class="btn btn-default btn-sm">
          <span class="glyphicon glyphicon-remove"></span> Update 
        </button>
</form>
                        </td>
                    </tr>
 

                </tbody>
            </table>

		</div>
			</div>
				</div>
					</div>
					</div>


@endsection
