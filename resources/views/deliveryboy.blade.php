@extends('layouts.app')
@section('title','Add Menu Here')
@section('content')	
<div class="container">
	<div class="row">
		<div class="info-container-main">
            <div class="panel panel-default inside-body-panel-shadow">
			<div class="panel-heading  text-center">
					<strong>Entry New delivery boy details here</strong>
				</div>
					<div class="panel-body">
					<form action="{{ URL::to('delivery2') }}" method="post" enctype="multipart/form-data">
					<input type="hidden" value="{{ csrf_token() }}" name="_token">
					   <div class="form-group">
							<label for="category_name" style="padding-bottom:5px"class="col-md-12 control-label">Name</label>
							<div class="col-md-12">
								<input type="text" class="form-control" name="delivery_boy_name">
                                <span class="help-block" id="error"></span>
							</div>
						</div>
                        <div class="form-group">
							<label for="category_name" style="padding-bottom:5px"class="col-md-12 control-label"> Mobile Number</label>
							<div class="col-md-12">
								<input type="text" class="form-control" name="delivery_boy_number">
                                <span class="help-block" id="error"></span>
							</div>
						</div>
						<div class="form-group">
							<label for="category_name" style="padding-bottom:5px"class="col-md-12 control-label">Email</label>
							<div class="col-md-12">
								<input type="text" class="form-control" name="delivery_boy_email">
                                <span class="help-block" id="error"></span>
							</div>
						</div>
                        <div class="form-group">
							<label for="category_name" style="padding-bottom:5px"class="col-md-12 control-label">Address</label>
							<div class="col-md-12">
								<input type="text" class="form-control" name="delivery_boy_address">
                                <span class="help-block" id="error"></span>
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-8 col-md-offset-4">
								<button type="submit" class="dt-sc-button small theme-btn">
									Done
								</button>
								<button type="submit" name="addm" value="true" class="btn btn-primary">
									Add more ?
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

