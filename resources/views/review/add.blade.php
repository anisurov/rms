@extends('layouts.app')
@section('title','Add Review of previously perchased Item')
@section('content')	
<div class="container">
	<div class="row">
		<div class="info-container-main">
			<div class="panel panel-default inside-body-panel-shadow">
			<div class="panel-heading  text-lest">
					<strong><h2>User Rating <h2></strong>
				</div>
					<div class="panel-body">
					<form  method="POST" action="{{ route('savereview')}}">
                        {{ csrf_field() }}
                                
                        <input type="hidden" name="id" value="{{ $id }}">
                        <div class="form-group col-md-12 ">         					
                            <div class="input-group {{ $errors->has('Rating') ? ' has-error' : '' }}">
                            	  <div class="input-group-addon">
											<i class="fa  fa-sort-numeric-asc"></i> Rating* 
					  					  </div>
                                <input id="Rating " type="text" class="form-control"  name="Rating" value="" placeholder="Rate Out Of 10" required autofocus>
                            </div>                            
                                @if ($errors->has('Rating'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Rating') }}</strong>
                                    </span>
                                @endif
                        </div>
                        
                       
                       
                       <div class="form-group col-md-12 ">         					
                            <div class="input-group {{ $errors->has('comment') ? ' has-error' : '' }}">
                            	  <div class="input-group-addon">
											<i class="fa fa-pencil"></i> Comment 
					  					  </div>
                                <textarea id="comment" type="text" class="form-control" rows="5" name="comment" value="{{ old('comment') }}"  autofocus></textarea>

                                @if ($errors->has('comment'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('comment') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>                    
                                                
                                                                  
                       															
                        <div class="form-group">
                            <div class="col-md-12 ">
                                <button type="submit" class="dt-sc-button small theme-btn pull-left">
                                    Update
                                </button>

										<button type="reset" class="dt-sc-button small theme-btn pull-right">
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
