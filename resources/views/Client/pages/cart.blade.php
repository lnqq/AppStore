@extends('Client.layouts.master')

@section('title')
	Giỏ hàng
@endsection

@section('content')

<style type="text/css">
    .page-head_agile_info_w3l {
    background: url("{{ asset('assets/client/images/b11.jpg') }}") no-repeat center;
    background-size: cover;
    -webkit-background-size: cover;
    -o-background-size: cover;
    -ms-background-size: cover;
    -moz-background-size: cover;
    min-height: 300px;
	}
</style>

	<div class="page-head_agile_info_w3l">

	</div>
	<!-- //banner-2 -->
	<!-- page -->
	<div class="services-breadcrumb">
		<div class="agile_inner_breadcrumb">
			<div class="container">
				<ul class="w3_short">
					<li>
						<a href="home">{{ __('file.key125') }}</a>
						<i>|</i>
					</li>
					<li>{{ __('file.key126') }}</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- checkout page -->
	<div class="privacy py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
				<span>{{ __('file.key127') }}</span>{{ __('file.key128') }}
				<span>{{ __('file.key129') }}</span>{{ __('file.key130') }}
			</h3>
			<!-- //tittle heading -->
			
			{{ Form::open(['url' => '/thanhtoan', 'method' => 'post']) }}

			@if(Auth::check())
				<div class="form-group " style="display: none;">
					<label class="font-weight-bold">{{ __('file.key131') }}:</label>  
		            {{ Form::select('customer_id',$customer, null,['class' => 'form-control'])}}
	        	</div>
        	@endif
        		
			<br>

			<div class="checkout-right">
				<h4 class="mb-sm-4 mb-3">{{ __('file.key133') }}
					<span>{{ Cart::count() }} {{ __('file.key134') }}</span>
				</h4>
				<div class="table-responsive">
					<table class="timetable_sub">
						<thead>
							<tr>
								<th>STT</th>
								<th>{{ __('file.key135') }}</th>
								<th>{{ __('file.key136') }}</th>
								<th>{{ __('file.key145') }}</th>
								<th>{{ __('file.key137') }}</th>
								<th>{{ __('file.key138') }}</th>
							</tr>
						</thead>
						<tbody>
							<?php $i = 1;?>
							@foreach($cart as $value)
								<tr class="rem1">
									<td class="invert">{{ $i }}</td>
									<td class="invert-image">
										<a href="#">
											<img style="height: 60px;width: 60px" class="img-responsive" src="images/{{ $value->options->img }}"  alt="{{ $value->name }}">
										</a>
									</td>
									<td class="invert">
										<div class="quantity">
											<div class="form-group">
												<input type="number" name="qty" class="form-control qty" value="{{ $value->qty }}" min='1' data-id="{{ $value->rowId }}">
											</div>
										</div>
									</td>
									<td class="invert">{{ $value->name }}  </td>
									
									<td class="invert">{{number_format($value->price*$value->qty,0,',','.')}} {{ __('file.key139') }}</td>
									<td s class="invert">
										<div class="rem" style="margin-right: 36px">
											<div class="close1" data-id="{{ $value->rowId }}"></div>
										</div>
									</td>
								</tr>
								<?php $i++; ?>
							@endforeach	
						</tbody>
					</table>
					<h4 class="mb-sm-4 mb-3" style="margin-top: 20px;" align="right">{{ __('file.key140') }}
						<span>{{ Cart::total() }} {{ __('file.key139') }}</span>
					</h4>
					<div class="text-right col-md-12 mt-3">
						<button type="submit" class="font-weight-bold text-white btn btn-primary mt-3">{{ __('file.key141') }}</button>
						
				    	<a href="home" class="font-weight-bold text-white btn btn-danger mt-3" >{{ __('file.key142') }}</a>
					</div>
				</div>
			</div>
			
			{{-- Delete --}}
			<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		        <div class="modal-dialog" role="document">
		            <div class="modal-content">
		                <div class="modal-header">
		                    <h5 class="modal-title" id="exampleModalLabel">{{ __('file.key143') }}</h5>
		                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
		                        <span aria-hidden="true">×</span>
		                    </button>
		                </div>
		                <div class="modal-body" style="margin-left: 183px;">
		                    <button type="button" class="btn btn-success delProduct">{{ __('file.key146') }}</button>
		                    <button class="btn btn-secondary" type="button" data-dismiss="modal">{{ __('file.key144') }}</button>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
	</div>
	{{ Form::close() }}
	<br>
	<!-- //checkout page -->
	
	
@endsection



