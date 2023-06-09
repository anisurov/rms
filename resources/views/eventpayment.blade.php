@extends('layouts.app')
@section('title','Enter Your Payment details')
@section('content')
<div class="container">
	<div class="row">
		<div class="info-container-main">
			<div class="panel panel-default inside-body-panel-shadow">
					<div class="panel-heading  text-lest">
						<strong><h2>Payment details<h2></strong>
					</div>
					<div class="panel-body">
						<form  method="get" action="{{url ('eventpay')}}">
                        {{ csrf_field() }}
                        <div class="form-group col-md-12 ">
                            <div class="input-group {{ $errors->has('pay_id') ? ' has-error' : '' }}">
                            	  <div class="input-group-addon">
											Transaction ID:*
					  					  </div>
                              <input id="pay_id" type="text" class="form-control"  name="pay_id" value="" placeholder="bKash Transaction ID" required autofocus>
                              <input type="text" name="event_type" value="{{$event_type}}">
                              <input type="hidden" name="event_id" value="{{$id}}">
                            </div>
                                @if ($errors->has('pay_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('pay_id') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 ">
                                <button type="submit" class="btn btn-primary btn-sm pull-left">
                                    Save
                                </button>
										<button type="reset" class="btn btn-primary btn-sm pull-right">
                                    Reset
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
