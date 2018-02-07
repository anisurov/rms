@extends('layouts.app')
@section('title','Add Menu Here')
@section('content')	
<div class="container">
	<div class="row">
		<div class="col-md-12 ">
			<div class="panel panel-info">
			<div class="panel-heading  text-lest">
					<strong><h2>Reserve Table<h2></strong>
				</div>
					<div class="panel-body">
					<form action="{{ URL::to('tableReserve2') }}" method="post" enctype="multipart/form-data">
					<input type="hidden" value="{{ csrf_token() }}" name="_token">
					   <div class="form-group">
							<label for="name" class="col-md-12 control-label">Name*</label>
							<div class="col-md-12">
								<input type="text" class="form-control" name="name">
                                <span class="help-block" id="error"></span>
							</div>
						</div>
						  <div class="form-group">
							<label for="email" class="col-md-12 control-label">Email Address*</label>
							<div class="col-md-12">
								<input type="text" class="form-control" name="email">
                                <span class="help-block" id="error"></span>
							</div>
						</div>
						 <div class="form-group">
							<label for="table" class="col-md-12 control-label">Table Name*</label>
							<div class="col-md-12">
								<input type="text" class="form-control" name="table">
                                <span class="help-block" id="error"></span>
							</div>
						</div>
				<div class="form-group">
							<label for="dat" class="col-md-12 control-label">Date of Reservation</label>
							<div class="col-md-12">
								<input type="date" class="form-control" name="dat">
                                <span class="help-block" id="error"></span>
							</div>
						</div>
						<div class="form-group">
							<label for="time" class="col-md-12 control-label">Set Time</label>
							<div class="col-md-12">
								<input type="time" class="form-control" name="time">
                                <span class="help-block" id="error"></span>
							</div>
						</div>
						<div class="form-group">
							<label for="person" class="col-md-12 control-label">No. of Persons</label>
							<div class="col-md-12">
								<input type="text" class="form-control" name="person">
                                <span class="help-block" id="error"></span>
							</div>
						</div>
						<div class="form-group">
							<label for="message" class="col-md-12 control-label">Optional Message</label>
							<div class="col-md-12">
								<input type="text" class="form-control" name="message">
                                <span class="help-block" id="error"></span>
							</div>
						</div>
						
						<div class="form-group">
							<div class="col-md-8 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
									Done
								</button>
							</div>
						</div>
						</form>

		</div>
			</div>
				</div>
					</div>
					</div>


@endsection

