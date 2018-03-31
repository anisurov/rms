@extends('layouts.app')
@section('title','Add Menu Here')
@section('content')	
<div class="container">
	<div class="row">
		<div class="info-container-main">
			<div class="panel panel-default inside-body-panel-shadow">
			<div class="panel-heading  text-lest">
					<strong><h2>Menu Item<h2></strong>
				</div>
                @foreach($category as $item)
					<form class="panel-body" action="{{  url('/categoryupdate2') }}" method="GET">
					<table class="table">
                <thead>
                    <tr>
                        <th>Category Name</th>
                    </tr>
                </thead>

                <tbody>                                   
                    <tr>
                        <td><input type="text" name="item_name" value="{{$item->category_name}}"></td>
                    </tr>
                </tbody>
            </table>
            <input type="hidden" name="id" value="{{$item->category_id}}">
            <button type="submit" class="btn" >Update</button>
		</form>
        @endforeach
			</div>
				</div>
					</div>
					</div>


@endsection
