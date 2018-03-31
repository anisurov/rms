@extends('layouts.app')
@section('title','Sell Product Here')
@section('content')
<script src="{{ asset('js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('js/validator.js') }}"></script>
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-info">
				
				<div class="panel-heading text-center">
					<strong> Sell Product </strong>
				</div>
				
				<div class="panel-body">
					<form action="/sell" id="register" method="POST" class="form-horizontal">
						{{ csrf_field() }}

						<div class="form-group">
							<label for="cmobileNum" class="col-sm-4 control-label">Customer Mobile No. :</label>
							<div class="col-sm-6">
								<input type="text" name="cmobileNum" class="form-control">
								<span class="help-block" id="error"></span>
							</div>
						</div>

						<div class="form-group">
							<label for="cname" class="col-sm-4 control-label"> Customer Name :</label>
							<div class="col-sm-6">
								<input type="text" name="cname"  class="form-control">
								<span class="help-block" id="error"></span>
							</div>
						</div>

						<div id="products">
							<div class="add" id="product">

								<div class="form-group col-lg-3" style="margin-right:2px">
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-plus"></i> Brand
										</div>
										<select name="brandname[]" id="1" class="form-control brand">
											<option value="">Select brand</option>
									
										</select>
									</div>
									<span class="help-block" id="error"></span>
								</div>

								<div class="form-group col-lg-3" style="margin-right: 2px">
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-plus"></i> Model
										</div>
										<select name="modelno[]" class="form-control model" id="1">

											<option value="">Select Model</option>

										</select>
									</div>
									<span class="help-block" id="error"></span>
								</div>

								<div class="form-group col-lg-3" style="margin-right: 2px">
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-plus"></i> Amount
										</div>
										<input type="text" name="amount[]" id="1" class="form-control amount">
									</div>
									<span class="help-block" id="error"></span>
								</div>

								<div class="form-group col-lg-3" style="margin-right: 3px">
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-plus"></i> Unit Price
										</div>
										<input type="text" name="price[]" id="1" class="form-control price">
									</div>
									<span class="help-block" id="error"></span>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="SellProduct" class="col-sm-4 control-label">Total price :</label>
							<div class="col-sm-4">
								<input type="text" name="total" id="task-name" class="form-control">
							</div>
						</div>

						<div class="form-group">
							<div class="col-sm-offset-3 col-sm-1">
								<input type="button" value="+" name="add" id="task-name" class="btn addmore">
							</div>
						</div>

						<div class="form-group">
							<div class="col-sm-offset-3 col-sm-6">
								<button type="submit" class="btn btn-primary">
									<i class="fa fa-plus"></i> Done
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
