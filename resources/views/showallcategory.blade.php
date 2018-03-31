@extends('layouts.app')
@section('title','Add Menu Here')
@section('content')	
<div class="container">
	<div class="row">
		<div class="info-container-main">
			<div class="panel panel-default inside-body-panel-shadow">
			<div class="panel-heading  text-lest">
					<strong><h2>Category List<h2></strong>
				</div>
					<div class="panel-body">
					<table class="table">
                <thead>
                    <tr>
                        <th>Category Name</th>
                    </tr>
                </thead>

                <tbody>                
                    @foreach ($category as $userData)                    
                    <tr>
                        <td>{{$userData->category_name}}</td>
                        <td>
                        <form action="{{  url('/categorydelete') }}" method="GET">
{{ csrf_field() }}
<input type="hidden" name="id" value="{{$userData->category_id}}" />
<button type="submit" class="btn btn-default btn-sm">
          <span class="glyphicon glyphicon-remove"></span> DELETE 
        </button>
</form>
<form action="{{  url('/categoryupdate') }}" method="GET">
{{ csrf_field() }}
<input type="hidden" name="id" value="{{$userData->category_id}}" />
<button type="submit" class="btn btn-default btn-sm">
          <span class="glyphicon glyphicon-remove"></span> UPDATE 
        </button>
</form>
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
