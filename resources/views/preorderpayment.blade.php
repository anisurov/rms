@extends('layouts.app')
@section('title','Add Menu Here')
@section('content')	


<div class="container">
	<div class="row">
		<div class="info-container-main">
            <div class="panel panel-default inside-body-panel-shadow">
			<div class="panel-heading  text-center">
					<strong>Restaurent Payment</strong>
				</div>
					<div class="panel-body">
					<form action="{{ url('/preorderpayment1') }}" class="form-group" method="get" enctype="multipart/form-data">
					<table class="table table stripped">
					<thead>
					<tr>
					<th>Item Name</th>
					<th> Item Quantity</th>
					<th>Item Price</th>
					</tr>
					</thead>
					<tbody>
					<?php
					$i=0;
					?>
					@foreach (array_combine($itemName,$itemPrice) as $user=> $price)
					<tr>
					<td><input value="{{$user}}"></td>
					<td><input value="{{$menuItemquantity[$i]}}"></td>
					<td><input value="{{$price}}"></td>
					<?php
					$i++;
					?>
					</tr>
					@endforeach
					<tr>
					<td></td>
					<td>Total Price</td>
					<td>{{$totalPrice}}</td>
					</tr>
					</tbody>
					</table>
					<
							<div class="col-md-8 col-md-offset-4">
								<button type="submit" class="dt-sc-button small theme-btn" onclick="printPage()">
									Done
								</button>
							</div>
					
						</form>
		</div>
			</div>
				</div>
					</div>
					</div>
					<script>
										function printPage()
					{
						console.log('print');
						window.print();

					}
					</script>
@endsection
