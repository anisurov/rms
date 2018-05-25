
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
					<th>Per Item Price</th>
					<th>Item Quantity</th>
					<th>Item Price</th>
					</tr>
					</thead>
					<tbody>
					<tr>
					<td><input name="cat" type="text"></td>
					<td><input name="itemprice" type="text"  id="1"></td>
					<td><input name="item" type="text" onchange="itemPrice1(this.value,this.id)" id="5000"></td>
					
					<td><input name="price" type="text" id="1000" onchange="totalPrice1(this.value)"></td>
					</tr>

					<tr>
					<td></td>
					<td>Total Price</td>
					<td><input type="text" id="totalPrice"></td>
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
					
					var i=1000;
					var j=1;
					var k=5000;
					//document.getElementById(i-1).onchange=totalPrice1(document.getElementById(i-1).value);
					function addRow()
					{
						var tbody = document.getElementById("table");
						var x = document.getElementById("table").rows.length;
						var row = tbody.insertRow(x-1);
						var td1 = row.insertCell(0);
						var td2 = row.insertCell(1);
						var td3 = row.insertCell(2);
						var td4 = row.insertCell(3);
						var input1= document.createElement('input');
						var input3= document.createElement('input');
						var input2= document.createElement('input');
						var input4= document.createElement('input');
						input1.setAttribute('type','text');
						input2.setAttribute('type','text');
						input3.setAttribute('type','text');
						input4.setAttribute('type','text');
						input3.setAttribute('id',j);
						input2.setAttribute('id',k);
						input4.setAttribute('id',i);
						input2.setAttribute("onchange","itemPrice1(this.value,this.id)")
						input4.setAttribute("onchange","totalPrice1(this.value)")
						//input3.onchange="totalPrice1(document.getElementById(2).value)";
						td1.appendChild(input1);
						td2.appendChild(input3);
						td3.appendChild(input2);
						td4.appendChild(input4);
						
						
						//console.log('row created',document.getElementById(i-1).value);
						
					}
					function itemPrice1(value,id)
					{
						if(id==k)
						{
						console.log('id',id);
						console.log(Number(value)*Number( document.getElementById(j).value));
						var itemValue= Number(value)*Number( document.getElementById(j).value);
						//document.getElementById('totalPrice').value='';
						document.getElementById(i).value=itemValue;
						var totalValue=Number(document.getElementById('totalPrice').value)+itemValue;
						
						document.getElementById('totalPrice').value=totalValue;
						 i++;
						 j++;
						 k++;
						}
						else{
							console.log('id',id);
						console.log(Number(value)*Number( document.getElementById(id-4999).value));
						var itemValue= Number(value)*Number( document.getElementById(id-4999).value);
						//document.getElementById('totalPrice').value='';
						document.getElementById(id-4000).value=itemValue;
						var total=0;
						for(var l=1000;l<i;l++)
						{
							total=total + Number(document.getElementById(l).value);
						}
						document.getElementById('totalPrice').value=total;

						}

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
