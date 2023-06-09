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
	                        <td>{{$userData->user_email}}</td>
                        <td>{{$userData->user_mobile}}</td>
                        <td>{{$userData->user_dob}}</td>
                        <td>{{$userData->user_address}}</td>
                        <td>
                        <form action="{{  url('/userdelete') }}" method="GET">
{{ csrf_field() }}
<input type="hidden" name="id" value="{{$userData->user_id}}" />
<button type="submit" class="btn btn-default btn-sm">
          <span class="glyphicon glyphicon-remove"></span> DELETE 
        </button>
</form>
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
