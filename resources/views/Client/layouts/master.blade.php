<!DOCTYPE html>
<html lang="vi">

<head>
	<title>LNQ - @yield('title')</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Electro Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"
	/>
	<script>
		
	</script>
	<!-- //Meta tag Keywords -->
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<!-- Custom-Files -->
	<link href="{{asset('assets/client/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
	<!-- Bootstrap css -->
	<link href="{{asset('assets/client/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
	<!-- Main css -->
	<link rel="stylesheet" href="{{asset('assets/client/css/fontawesome-all.css')}}">
	<!-- Font-Awesome-Icons-CSS -->
	<link href="{{asset('assets/client/css/popuo-box.css')}}" rel="stylesheet" type="text/css" media="all" />
	<!-- pop-up-box -->
	<link href="{{asset('assets/client/css/menu.css')}}" rel="stylesheet" type="text/css" media="all" />
	<!-- menu style -->
	<!-- //Custom-Files -->

	<!-- web fonts -->
	<link href="{{asset('assets/client/css/lato.css')}}" rel="stylesheet">
	<link href="{{asset('assets/client/css/opensan.css')}}" rel="stylesheet">
	<!-- //web fonts -->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css/toastr.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/client/css/easy-responsive-tabs.css')}}">

</head>

<body>
	<!-- top-header -->
	@include('Client.layouts.header-top')

	<!-- Button trigger modal(select-location) -->
	
	<!-- //shop locator (popup) -->

	<!-- modals -->
	<!-- log in -->
	<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title text-center">{{ __('file.key12') }}</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="{{ route('admin.login') }}" method="post">
						@csrf
						<div class="form-group">
							<label class="col-form-label">{{ __('file.key13') }}</label>
							<input type="text" class="form-control" placeholder=" " name="name">
						</div>
						<div class="form-group">
							<label class="col-form-label">{{ __('file.key14') }}</label>
							<input type="password" class="form-control" placeholder=" " name="password">
						</div>
						<div class="right-w3l">
							<input type="submit" class="form-control" value="{{ __('file.key174') }}">
						</div>
						<div class="right-w3l">
							<a href="" class="btn btn-primary">{{ __('file.key15') }}</a>
						</div>
						<div class="sub-w3l">
							<div class="custom-control custom-checkbox mr-sm-2">
								<input type="checkbox" class="custom-control-input" name='remember' id="customControlAutosizing">
								<label class="custom-control-label" for="customControlAutosizing" >{{ __('file.key16') }}</label>
							</div>
						</div>
						<p class="text-center dont-do mt-3">{{ __('file.key17') }}
							<a href="#" data-toggle="modal" data-target="#register">
								{{ __('file.key18') }}
							</a>
						</p>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- register -->
	<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">{{ __('file.key19') }}</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="{{ route('register') }}" method="post">
						@csrf
						<div class="form-group">
							<label class="col-form-label">{{ __('file.key20') }}</label>
							<input type="name" class="form-control" placeholder="{{ __('file.key20') }}" name="name">
							@if($errors->has('name'))
								<div class="alert alert-danger">
									{{ $errors->first('name') }}
								</div>
		                    @endif
						</div>
						
						<div class="form-group">
							<label class="col-form-label">{{ __('file.key22') }}</label>
							<input type="password" class="form-control" placeholder="{{ __('file.key22') }}" name="password" id="password1">
							@if($errors->has('password'))
								<div class="alert alert-danger">
									{{ $errors->first('password') }}
								</div>
		                    @endif
						</div>

						<div class="form-group">
							<label class="col-form-label">{{ __('file.key175') }}</label>
							<input type="text" class="form-control" placeholder="{{ __('file.key175') }}" name="first_name" >
							@if($errors->has('first_name'))
								<div class="alert alert-danger">
									{{ $errors->first('first_name') }}
								</div>
		                    @endif
						</div>
						<div class="form-group">
							<label class="col-form-label"> {{ __('file.key176') }}</label>
							<input type="text" class="form-control" placeholder="{{ __('file.key176') }}" name="last_name" >
							@if($errors->has('last_name'))
								<div class="alert alert-danger">
									{{ $errors->first('last_name') }}
								</div>
		                    @endif
						</div>
						<div class="form-group">
							<label class="col-form-label">{{ __('file.key177') }}</label>
							<input type="text" class="form-control" placeholder="{{ __('file.key177') }}" name="email" >
							@if($errors->has('email'))
								<div class="alert alert-danger">
									{{ $errors->first('email') }}
								</div>
		                    @endif
						</div>
						<div class="form-group">
							<label class="col-form-label">{{ __('file.key178') }}</label>
							<input type="text" class="form-control" placeholder="{{ __('file.key178') }}" name="postal_address" >
							@if($errors->has('postal_address'))
								<div class="alert alert-danger">
									{{ $errors->first('postal_address') }}
								</div>
		                    @endif
						</div>
						<div class="form-group">
							<label class="col-form-label">{{ __('file.key179') }}</label>
							<input type="text" class="form-control" placeholder="{{ __('file.key179') }}" name="physical_address" >
							@if($errors->has('physical_address'))
								<div class="alert alert-danger">
									{{ $errors->first('physical_address') }}
								</div>
		                    @endif
						</div>

						<div class="right-w3l">
							<input type="submit" class="form-control register" value="Đăng Ký">
						</div>
						<div class="sub-w3l">
							<div class="custom-control custom-checkbox mr-sm-2">
								<input type="checkbox" class="custom-control-input dieukhoan" id="customControlAutosizing2">
								<label class="custom-control-label" for="customControlAutosizing2">{{ __('file.key24') }} <a href="#">{{ __('file.key25') }}</a> {{ __('file.key26') }}</label>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- //modal -->
	<!-- //top-header -->

	<!-- header-bottom-->
	@include('Client.layouts.header-bottom')
	<!-- shop locator (popup) -->
	<!-- //header-bottom -->
	<!-- navigation -->
	@include('Client.layouts.menu')
	<!-- //navigation -->

	<!-- banner -->
	@yield('slide')
	<!-- //banner -->

	<!-- top Products -->
	<div class="ads-grid py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			@yield('content')
		</div>
	</div>
	<!-- //top products -->
	<!-- middle section -->
			<div class="join-w3l1 py-sm-5 py-4">
				<div class="container py-xl-4 py-lg-2">
					<div class="row">
						<div class="col-lg-6">
							<div class="join-agile text-left p-4">
								<div class="row">
									<div class="col-sm-7 offer-name">
										<h6>{{ __('file.key27') }}</h6>
										<h4 class="mt-2 mb-3">{{ __('file.key28') }}</h4>
										<p>{{ __('file.key29') }}</p>
									</div>
									<div class="col-sm-5 offerimg-w3l">
										<img src="{{ asset('assets/client/images/off1.png') }}" alt="" class="img-fluid">
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 mt-lg-0 mt-5">
							<div class="join-agile text-left p-4">
								<div class="row ">
									<div class="col-sm-7 offer-name">
										<h6>{{ __('file.key30') }}</h6>
										<h4 class="mt-2 mb-3">{{ __('file.key31') }}</h4>
										<p>{{ __('file.key32') }}</p>
									</div>
									<div class="col-sm-5 offerimg-w3l">
										<img src="{{ asset('assets/client/images/m3.jpg') }}" alt="" class="img-fluid">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- middle section -->
	

	<!-- footer -->
	@include('Client.layouts.footer')
</body>

</html>