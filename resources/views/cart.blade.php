@extends('layouts.app')

@section('content')

 <div class="container">
    <div class="row">
     <div class="info-container-main">
            <div class="panel panel-default inside-body-panel-shadow">

			
        @if (sizeof(Cart::content()) > 0)
			<div class="panel-body">

            <table class="table">
                <thead>
                    <tr>
                        <th class="table-image"></th>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th class="column-spacer"></th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach (Cart::content() as $item)
                    {{Cart::setTax($item->rowId, 0)}}
                    <tr>
                        <td class="table-image"><a href="#"><img src="{{asset('uploa')}}/{{ App\Item::where('item_id',$item->name)->pluck('item_image')->first() }}" alt="product" class="img-responsive img-item"></a></td>
                        <td><a href="{{url('/menu')}}/{{$item->name}}">{{ App\Item::where('item_id',$item->name)->pluck('item_name')->first() }}</a></td>
                        <td>
                            <select class="quantity" data-id="{{ $item->rowId }}">
                                <option {{ $item->qty == 1 ? 'selected' : '' }}>1</option>
                                <option {{ $item->qty == 2 ? 'selected' : '' }}>2</option>
                                <option {{ $item->qty == 3 ? 'selected' : '' }}>3</option>
                                <option {{ $item->qty == 4 ? 'selected' : '' }}>4</option>
                                <option {{ $item->qty == 5 ? 'selected' : '' }}>5</option>
                                <option {{ $item->qty == 6 ? 'selected' : '' }}>6</option>
                                <option {{ $item->qty == 7 ? 'selected' : '' }}>7</option>
                                <option {{ $item->qty == 8 ? 'selected' : '' }}>8</option>
                            </select>
                        </td>
                        <td>{{ $item->subtotal }} BDT.</td>
                        <td class=""></td>
                        <td>
                            <form action="{{ url('cart', [$item->rowId]) }}" method="POST" class="side-by-side">
                                {!! csrf_field() !!}
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="submit" class="btn btn-danger btn-sm" value="Remove">
                            </form>
                        </td>
                    </tr>

                    @endforeach
                    <tr>
                        <td class="table-image"></td>
                        <td></td>
                        <td class="small-caps table-bg" style="text-align: right">Subtotal</td>
                        <td>{{ Cart::instance('default')->subtotal() }} BDT.</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td class="table-image"></td>
                        <td></td>
                        <td class="small-caps table-bg" style="text-align: right">Tax</td>
                        <td>{{ Cart::instance('default')->tax() }}</td>
                        <td></td>
                        <td></td>
                    </tr>

                    <tr class="border-bottom">
                        <td class="table-image"></td>
                        <td style="padding: 40px;"></td>
                        <td class="small-caps table-bg" style="text-align: right">Your Total</td>
                        <td class="table-bg">{{ Cart::total() }} BDT.</td>
                        <td class="column-spacer"></td>
                        <td></td>
                    </tr>

                </tbody>
            </table>
				</div><!--end panel body-->
				<div class="panel-footer">
            <a href="{{ url('/menu') }}" class="btn btn-primary btn-lg">Continue Shopping</a> &nbsp;
            <a href="{{ url('/checkout') }}" class="btn btn-success btn-lg">Proceed to Checkout</a>

            <div style="float:right">
                <form action="{{ url('/emptyCart') }}" method="POST">
                    {!! csrf_field() !!}
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="submit" class="btn btn-danger btn-lg" value="Empty Cart">
                </form>
            </div>
            </div><!--end panel footer-->

        @else
			<div class="panel-footer">
            <h3>You have no items in your shopping cart</h3>
            <a href="{{ url('/menu') }}" class="btn btn-primary btn-lg">Continue Shopping</a>
			</div>
        @endif

        <div class="spacer"></div>

    </div> <!-- end panel -->
    </div> <!-- end inf0-container -->
    </div> <!-- end row -->
    </div> <!-- end container -->

@endsection

@section('extra-js')
    <script>
        (function(){

            jQuery.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                }
            });

            jQuery('.quantity').on('change', function() {
                var id = jQuery(this).attr('data-id')
                jQuery.ajax({
                  type: "PATCH",
                  url: '{{ url("/cart") }}' + '/' + id,
                  data: {
                    'quantity': this.value,
                  },
                  success: function(data) {
                    window.location.href = '{{ url('/cart') }}';
                  }
                });

            });

        })();

    </script>
@endsection
