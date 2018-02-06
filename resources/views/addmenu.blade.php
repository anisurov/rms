@extends('layouts.app')
@section('title','Add Menu Here')
@section('content')	
<div class="container">
	<div class="row">
		<div class="col-md-12 ">
			<div class="panel panel-info">
			<div class="panel-heading  text-center">
					<strong>Entry Menu Here</strong>
				</div>
					<div class="panel-body">
					<form action="{{ URL::to('upload') }}" method="post" enctype="multipart/form-data">
					   <div class="form-group">
							<label for="item_name" class="col-md-12 control-label">Item Name</label>
							<div class="col-md-12">
								<input type="text" class="form-control" name="item_name">
                                <span class="help-block" id="error"></span>
							</div>
						</div>
						  <div class="form-group">
							<label for="item_category" class="col-md-12 control-label">Item Category</label>
							<div class="col-md-12">
								<input type="text" class="form-control" name="item_category">
                                <span class="help-block" id="error"></span>
							</div>
						</div>
				<div class="form-group">
							<label for="description" class="col-md-12 control-label">Item Description</label>
							<div class="col-md-12">
								<input type="text" class="form-control" name="item_description">
                                <span class="help-block" id="error"></span>
							</div>
						</div>
						<div class="form-group">
							<label for="available" class="col-md-12 control-label">Available Item</label>
							<div class="col-md-12">
								<input type="text" class="form-control" name="item_stock">
                                <span class="help-block" id="error"></span>
							</div>
						</div>
						<div class="form-group">
							<label for="item_rating" class="col-md-12 control-label">Item Rating</label>
							<div class="col-md-12">
								<input type="text" class="form-control" name="item_rating">
                                <span class="help-block" id="error"></span>
							</div>
						</div>
						<div class="form-group">
							<label for="item_price" class="col-md-12 control-label">Item Price</label>
							<div class="col-md-12">
								<input type="text" class="form-control" name="item_price">
                                <span class="help-block" id="error"></span>
							</div>
						</div>
							<div class="form-group">
							<label for="item_price" class="col-md-12 control-label">Select image to upload:</label>
							<div class="col-md-12">
							    <input type="file" name="file" id="file">
					       <input type="hidden" value="{{ csrf_token() }}" name="_token">
                                <span class="help-block" id="error"></span>
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-8 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
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

