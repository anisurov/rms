@extends('layouts.app')
@section('content')	
<div class="container" id="container">
	<div class="row">
		<div class="info-container-main">
            <div class="panel panel-default inside-body-panel-shadow">
			<div class="panel-heading  text-center">
					<strong>Restaurent Payment</strong>
				</div>
					<div class="panel-body">
					<form id="form" action="{{ url('/restaurentpaymentsave') }}" class="form-group" method="get" enctype="multipart/form-data">
					<table class="table table stripped" id="table">
					<thead>
					<tr>
					<th> Item Name</th>
					<th>Item Quantity</th>
					<th>Item Price</th>
					</tr>
					</thead>
					<tbody>
					<tr>
					<td><input name="cat" type="text"></td>
					<td><input name="item" type="text"></td>
					<td><input name="price" type="text"></td>
					</tr>

					<tr>
					<td></td>
					<td>Total Price</td>
					<td><input type="text"></td>
					</tr>
					</tbody>
					</table>
							<div class="col-md-8 col-md-offset-4">
								<button  type="submit" class="btn btn-primary" onclick="printPage()">
									Done
								</button>
							</div>
					</form>
					<button  onclick="addRow()" class="btn btn-primary">
									Add more ?
								</button>	
		</div>
		</form>
			</div>
				</div>
					</div>
					</div>
					<script>
					function addRow()
					{
						var tbody = document.getElementById("table");
						var x = document.getElementById("table").rows.length;
						var row = tbody.insertRow(x-1);
						var td1 = row.insertCell(0);
						var td2 = row.insertCell(1);
						var td3 = row.insertCell(2);
						var input1= document.createElement('input');
						var input2= document.createElement('input');
						var input3= document.createElement('input');
						input1.setAttribute('type','text');
						input2.setAttribute('type','text');
						input3.setAttribute('type','text');
						td1.appendChild(input1);
						td2.appendChild(input2);
						td3.appendChild(input3);
						console.log('row created');
					}
					function printPage()
					{
						console.log('print');
						window.print();

					}
					function printData()
							{
							var divToPrint=document.getElementById("form");
							newWin= window.open();
							newWin.document.write(divToPrint.innerHTML);
							newWin.print();
							newWin.close();
							}
					</script>
@endsection
