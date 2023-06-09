@extends('layouts.app')
@section('title','Add Menu Here')
@section('content')	
<div class="container">
	<div class="row">
		<div class="info-container-main">
			<div class="panel panel-default inside-body-panel-shadow">
			<div class="panel-heading  text-lest">
					<strong><h2>Reserve Table<h2></strong>
				</div>
					<div class="panel-body">
					<form action="{{ URL::to('tableReserve2') }}" method="post" enctype="multipart/form-data">
					<input type="hidden" value="{{ csrf_token() }}" name="_token">
					   <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
							<label for="name" class="col-md-12 control-label" style="padding-bottom:5px">Name*</label>
							<div class="col-md-12" style="padding-bottom:20px">
								<input type="text" class="form-control" name="name" value="{{Auth::user()->user_name}}">
                                				@if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
							</div>
						</div>
						  <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
							<label for="email" class="col-md-12 control-label" style="padding-bottom:5px">Email Address*</label>
							<div class="col-md-12" style="padding-bottom:20px">
								<input type="text" class="form-control" name="email" value="{{Auth::user()->user_email}}">
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
							</div>
						</div>
						 <div class="form-group{{ $errors->has('table') ? ' has-error' : '' }}">
							<label for="table" class="col-md-12 control-label" style="padding-bottom:5px">Table Name*</label>
							<div class="col-md-12" style="padding-bottom:20px">
								<input type="text" class="form-control" name="table">
                                  @if ($errors->has('table'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('table') }}</strong>
                                    </span>
                                @endif
							</div>
						</div>
				<div class="form-group{{ $errors->has('dat') ? ' has-error' : '' }}">
							<label for="dat" class="col-md-12 control-label" style="padding-bottom:5px">Date of Reservation</label>
							<div class="col-md-12" style="padding-bottom:20px">
								<input type="date" class="form-control" name="dat">
                                  @if ($errors->has('dat'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('dat') }}</strong>
                                    </span>
                                @endif
							</div>
						</div>
						<div class="form-group{{ $errors->has('time') ? ' has-error' : '' }}">
							<label for="time" class="col-md-12 control-label" style="padding-bottom:5px">Set Time</label>
							<div class="col-md-12" style="padding-bottom:20px">
								<input type="time" class="form-control" name="time">
                                  @if ($errors->has('time'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('time') }}</strong>
                                    </span>
                                @endif
							</div>
						</div>
						<div class="form-group{{ $errors->has('person') ? ' has-error' : '' }}">
							<label for="person" class="col-md-12 control-label" style="padding-bottom:5px">No. of Persons</label>
							<div class="col-md-12" style="padding-bottom:20px">
								<input type="text" class="form-control" name="person">
                                  @if ($errors->has('person'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('person') }}</strong>
                                    </span>
                                @endif
							</div>
						</div>
						<div class="form-group{{ $errors->has('message') ? ' has-error' : '' }}">
							<label for="message" class="col-md-12 control-label" style="padding-bottom:5px">Optional Message</label>
							<div class="col-md-12" style="padding-bottom:20px">
								<input type="text" class="form-control" name="message">
                                  @if ($errors->has('message'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('message') }}</strong>
                                    </span>
                                @endif
							</div>
						</div>
						
						<div class="form-group">
							<div class="col-md-8 col-md-offset-4">
								<button type="submit" class="dt-sc-button small theme-btn">
									Done
								</button>
							</div>
						</div>
						<div class="form-group" style="">
							<div class="col-md-8 col-md-offset-4">
								<button type="submit" name="addm" value="true" class="dt-sc-button small theme-btn">
									Preorder
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

