@extends('Client.layouts.master')

@section('title')
    Chi tiết sản phẩm - {{ $product->product_name }}
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
    <!-- banner-2 -->
    <div class="page-head_agile_info_w3l"></div>
    <!-- //banner-2 -->
    <!-- page -->
    <div class="services-breadcrumb">
        <div class="agile_inner_breadcrumb">
            <div class="container">
                <ul class="w3_short">
                    <li>
                        <a href="{{asset('home')}}">{{ __('file.key147') }}</a>
                        <i>|</i>
                    </li>
                    <li>{{ $product->product_name }}</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- //page -->

    <!-- Single Page -->
    <div class="banner-bootom-w3-agileits py-5">
        <div class="container py-xl-4 py-lg-2">
            <!-- tittle heading -->
            <h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
                <span>{{ __('file.key148') }}</span>{{ __('file.key149') }}
                <span>{{ __('file.key150') }}</span>{{ __('file.key151') }}</h3>

            <!-- //tittle heading -->
            <div class="row">
                <div class="col-lg-5 col-md-8 single-right-left ">
                    <div class="grid images_3_of_2">
                        <div class="flexslider">
                            <ul class="slides">
                                <li data-thumb="{{asset('images')}}/{{ $product->images }}">
                                    <div class="thumb-image">
                                        <img src="{{asset('images')}}/{{ $product->images }}" data-imagezoom="true" class="img-fluid" alt="">
                                    </div>
                                </li>
                                <li data-thumb="{{asset('images')}}/{{ $product->images }}">
                                    <div class="thumb-image">
                                        <img src="{{asset('images')}}/{{ $product->images }}" data-imagezoom="true" class="img-fluid" alt="">
                                    </div>
                                </li>
                                <li data-thumb="{{asset('images')}}/{{ $product->images }}">
                                    <div class="thumb-image">
                                        <img src="{{asset('images')}}/{{ $product->images }}" data-imagezoom="true" class="img-fluid" alt="">
                                    </div>
                                </li>
                               
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7 single-right-left simpleCart_shelfItem">
                    <h3 class="mb-3">{{ $product->product_name }}</h3>
                    <p class="mb-3">
                        @if($product->promotional > 0)
                            <span class="item_price">
                                {{ number_format($product->price) }} {{ __('file.key139') }}
                            </span>
                            <del class="mx-2 font-weight-light">
                                $ {{ number_format($product->promotional) }} {{ __('file.key139') }}
                            </del>
                        @else
                            <span class="item_price">
                                {{ number_format($product->price) }} {{ __('file.key139') }}
                            </span>
                        @endif
                        <label>{{ __('file.key152') }}</label>
                    </p>
                    <div class="single-infoagile">
                        <ul>
                            <li class="mb-3">
                                {{ __('file.key153') }}
                            </li>
                            <li class="mb-3">
                                {{ __('file.key154') }}
                            </li>
                            <li class="mb-3">
                                {{ __('file.key155') }}
                            </li>
                            <li class="mb-3">
                                {{ __('file.key156') }}
                            </li>
                        </ul>
                    </div>
                    <div class="product-single-w3l">
                        <p class="my-3">
                            <i class="far fa-hand-point-right mr-2"></i>
                            
                        </p>
                        {{ $product->description}}
                        <p class="my-sm-4 my-3">
                            <i class="fas fa-retweet mr-3"></i>{{ __('file.key157') }}
                        </p>
                    </div>
                    <div class="occasion-cart">
                        <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                            <a href="{{ route('addCart',['id' => $product->id]) }}">{{ __('file.key158') }}
                           <!--  <button class="btn btn-primary">Thêm vào giỏ hàng</button> -->
                            </a>
                        </div>
                        &nbsp;
                        <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out" >
                            <a href="{{asset('home')}}">{{ __('file.key159') }}
                            <!-- <button class="btn btn-warning">Xem Tiếp Sản Phẩm</button> -->
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection