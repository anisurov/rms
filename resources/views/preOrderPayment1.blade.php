@extends('layouts.app')
@section('title','Add Menu Here')
@section('content')	
<div class="container">
	<div class="row">
		<div class="info-container-main">
			<div class="panel panel-default inside-body-panel-shadow">
			<div class="panel-heading  text-lest">
					<strong><h2>Pre Order Payment<h2></strong>
				</div>
					<div class="panel-body">
					<form 	action="{{ url('/preorderpayment') }}" method="get" enctype="multipart/form-data">
					<input type="hidden" value="{{ csrf_token() }}" name="_token">
					
						  <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
							<label for="email" class="col-md-12 control-label" style="padding-bottom:5px">Email Address*</label>
							<div class="col-md-12" style="padding-bottom:20px">
								<input  type="text" class="form-control" name="email" value="">
							</div>
						</div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
							<label for="email" class="col-md-12 control-label" style="padding-bottom:5px">Transaction ID*</label>
							<div class="col-md-12" style="padding-bottom:20px">
								<input  type="text" class="form-control" name="transaction" value="">
							</div>
						</div>
						
						<div class="form-group">
							<div class="col-md-8 col-md-offset-4">
								<button type="submit" class="dt-sc-button small theme-btn">
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
