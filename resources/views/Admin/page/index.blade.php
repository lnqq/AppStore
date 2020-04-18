@extends('admin.layout.index')
@section('content')

    <div class="container" style="margin-top: 6%;">
        <div class="col-12">
        	<div class="">
        		<div class="col-md-3">
                <img src="{{asset('assets/client/images/1.jpg')}}" />
                <div class="middle">
                    <a class="text" href="{{route('brand.index')}}">Quản Lý Nhà Sản Xuất</a>
                </div>
            </div> 
            <div class="col-md-3">
                <img src="{{asset('assets/client/images/2.png')}}" />
                <div class="middle">
                    <a class="text" href="{{route('category.index')}}">Quản Lý Danh Mục Sản Phẩm</a>
                </div>
            </div>
            <div class="col-md-3">
                <img src="{{asset('assets/client/images/3.jpg')}}" />
                <div class="middle">
                    <a class="text" href="{{route('product.index')}}">Quản Lý Sản Phẩm</a>
                </div>
            </div>
        	</div>
        	<div class="container" style="margin-left: 16%">
	        	<div class="col-md-3">
	                <img src="{{asset('assets/client/images/4.jpg')}}" />
	                <div class="middle">
	                    <a class="text" href="{{route('customer.index')}}">Quản Lý Khách Hàng</a>
	                </div>
	            </div>
	            <div class="col-md-3">
	                <img src="{{asset('assets/client/images/5.png')}}" />
	                <div class="middle">
	                    <a class="text" href="{{route('orders.index')}}">Quản Lý Đơn Đặt Hàng</a>
	                </div>
	            </div>
        	</div>
            
           
            
        </div>

        <!-- main-panel ends -->
    </div>

      <style>
        .col-md-3 {
            height: 35%;
            float: left;
            margin: 2% 0% 2% 0;
            margin-left: 0%;
            position: relative;
        }

        .col-md-3:nth-child(2) {
            margin: 2% 9% 0 9%;
        }

        .col-md-3:nth-child(5) {
            margin: 2% 9% 0 9%;
        }

        .col-md-3:nth-child(8) {
            margin: 2% 9% 0 9%;
        }

        .col-md-3 img {
            height: 200px;
            width: 140%;
            opacity: 1;
            display: block;
            transition: .5s ease;
            backface-visibility: hidden;
            box-shadow: 0 20px 50px rgba(0,0,0,.8);
        }

        .middle {
        	margin-left: 18%;
            transition: .5s ease;
            opacity: 0;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            text-align: center;
        }

        .col-md-3:hover img {
            opacity: 0.8;
        }

        .col-md-3:hover .middle {
            opacity: 1;
        }

        .text {
            background: rgba(143, 0, 179, 0.9);
            display: block;
            width: 100%;
            color: white;
            font-size: 16px;
            padding: 10px 32px;
            text-decoration: none;
        }

        .text:hover {
            text-decoration: none;
            color: #000;
        }
        .col h3 {
            text-align: center;
            color: white;
            padding: 1%;
        }
    </style>




@endsection