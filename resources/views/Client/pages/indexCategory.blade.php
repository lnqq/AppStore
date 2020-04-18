@extends('Client.layouts.master')



@section('title')
	Trang Chủ
@endsection


@section('slide')
	@include('Client.layouts.slide')
@endsection


@section('content')
	<!-- tittle heading -->
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
				<span>{{ __('file.key148') }}</span>{{ __('file.key149') }}
                <span>{{ __('file.key150') }}</span>{{ __('file.key151') }}
				<span>{{ __('file.key160') }}</span>{{ __('file.key161') }}
				<span>{{ __('file.key162') }}</span>{{ __('file.key163') }}
				<span>{{ __('file.key164') }}</span>{{ __('file.key165') }}
				<span>{{ __('file.key166') }}</span>{{ __('file.key167') }}
			</h3>
			<!-- //tittle heading -->
			<div class="row">
				<!-- product left -->
				<div class="agileinfo-ads-display col-lg-9">
					<div class="wrapper">
						<!-- first section -->
						<div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
							<h3 class="heading-tittle text-center font-italic">{{ __('file.key173') }}</h3>
							<div class="row">
								@foreach($producta->reverse() as $pro)
								<div class="col-md-4 product-men mt-5">
									<div class="men-pro-item simpleCart_shelfItem">
										<div class="men-thumb-item text-center">
											<img class="card-img-top" alt="..." src="{{ asset("images/$pro->images") }}" >
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="{{route('product.detail',$pro->id)}}" class="link-product-add-cart">{{ __('file.key169') }}</a>
												</div>
											</div>
										</div>
										
										<div class="item-info-product text-center border-top mt-4">
											<h4 class="pt-1">
												<a href="single.html">{{ $pro->product_name }}</a>
											</h4>
											<div class="info-product-price my-2">
												@if($pro->promotional>0)
													<span class="item_price"> {{ number_format($pro->price) }} VNĐ</span>
													<del>${{ number_format($pro->promotional ) }}  VNĐ</del>
												@else
													<span class="item_price">{{ number_format($pro->price) }}</span>
												@endif
											</div>
											<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
												<a href="{{ route('addCart',['id'=> $pro->id]) }}">{{ __('file.key170') }}
													<!-- <button class="btn btn-success">Thêm vào giỏ hàng</button> -->
												</a>
											</div>
										</div>
									</div>
								</div>
								@endforeach
							</div>
						</div>
						<!-- //first section -->
						<!-- second section -->
						
						<!-- //fourth section -->
					</div>
				</div>
				<!-- //product left -->

				<!-- product right -->
				@include('Client.layouts.sidebar')
				
			</div>

@endsection