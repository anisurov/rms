@extends('layouts.app') @section('title','Add Menu Here')
@section('content')
<div class="container">
	<div class="row">
		<div class="info-container-main">
            <div class="panel panel-default inside-body-panel-shadow">
				<div class="panel-heading  text-center">
					<strong>Entry Menu Here</strong>
				</div>
				<div class="panel-body">
					<form action="{{ URL::to('upload') }}" method="post"
						enctype="multipart/form-data">
						<div class="form-group {{ $errors->has('item_name') ? ' has-error' : '' }}">
							<label for="item_name" class="col-md-12 control-label">Item Name</label>
							<div class="col-md-12">
								<input type="text" class="form-control" name="item_name"> 
								@if ($errors->has('item_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('item_name') }}</strong>
                                    </span>
                                @endif
							</div>
						</div>
						<div class="form-group">
							<label for="item_category" class="col-md-12 control-label">Item
								Category</label>
							<div class="col-md-12">
								<input type="text" class="form-control" name="item_category"> <span
									class="help-block" id="error"></span>
							</div>
						</div>
						<div class="form-group {{ $errors->has('item_description') ? ' has-error' : '' }}">
							<label for="description" class="col-md-12 control-label">Item
								Description</label>
							<div class="col-md-12">
								<input type="text" class="form-control" name="item_description">
								@if ($errors->has('item_description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('item_description') }}</strong>
                                    </span>
                                @endif
							</div>
						</div>
						<div class="form-group {{ $errors->has('item_stock') ? ' has-error' : '' }}">
							<label for="available" class="col-md-12 control-label">Available
								Item</label>
							<div class="col-md-12">
								<input type="text" class="form-control" name="item_stock"> 
								@if ($errors->has('item_stock'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('item_stock') }}</strong>
                                    </span>
                                @endif
							</div>
						</div>
						<div class="form-group {{ $errors->has('item_rating') ? ' has-error' : '' }}">
							<label for="item_rating" class="col-md-12 control-label">Item
								Rating</label>
							<div class="col-md-12">
								<input type="text" class="form-control" name="item_rating"> 
								@if($errors->has('item_rating'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('item_rating') }}</strong>
                                    </span>
                                @endif
							</div>
						</div>
						<div class="form-group {{ $errors->has('item_price') ? ' has-error' : '' }}">
							<label for="item_price" class="col-md-12 control-label">Item
								Price</label>
							<div class="col-md-12">
								<input type="text" class="form-control" name="item_price"> 
								@if($errors->has('item_price'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('item_price') }}</strong>
                                    </span>
                                @endif
							</div>
						</div>
						<div class="form-group {{ $errors->has('file') ? ' has-error' : '' }}">
							<label for="item_price" class="col-md-12 control-label">Select
								image to upload:</label>
							<div class="col-md-12">
								<input type="file" name="file" id="file"> <input type="hidden"
									value="{{ csrf_token() }}" name="_token"> 
									@if($errors->has('file'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('file') }}</strong>
                                    </span>
                                @endif
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-8 col-md-offset-4">
								<button type="submit" class="btn btn-primary">Done</button>
								<button type="submit" name="addm" value="true"
									class="btn btn-primary">Add more ?</button>
							</div>
						</div>
					</form>

				</div>
			</div>
		</div>
	</div>
</div>


@endsection

