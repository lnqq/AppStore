<div class="header-bot">
		<div class="container">
			<div class="row header-bot_inner_wthreeinfo_header_mid">
				<!-- logo -->
				<div class="col-md-3 logo_agile">
					<h1 class="text-center">
						<a href="{{asset('home')}}" class="font-weight-bold font-italic">
							<img src="{{asset('assets/client/images/122.png')}}" alt=" " style="width: 70px; height: 70px" class="img-fluid"> &nbsp;{{ __('file.key7') }}
						</a>
					</h1>
				</div>
				<!-- //logo -->
				<!-- header-bot -->
				<div class="col-md-9 header mt-4 mb-md-0 mb-4">
					<div class="row">
						<!-- search -->
						<div class="col-10 agileits_search">
							<form class="form-inline" action="#" method="post">
								<input class="form-control mr-sm-2" type="search" placeholder="{{ __('file.key8') }}...." aria-label="Search" required>
								<button class="btn my-2 my-sm-0" type="submit">{{ __('file.key8') }}</button>
							</form>
						</div>
						<!-- //search -->
						<!-- cart cai mà chô chữ quang quang ấydetails -->
						<div class="col-2 top_nav_right text-center mt-sm-0 mt-2">
							<div class="wthreecartaits wthreecartaits2 cart cart box_1">
									<a @if(Auth::check()) href="{{ route('cart.index') }}" @else data-toggle="modal" data-target="#login" href="#" @endif title="Giỏ hàng bạn có {{ Cart::count() }} mặt hàng" class="btn w3view-cart">
										<i class="fas fa-cart-arrow-down"></i>
										<!-- <button class="btn btn-info"><i class="fas fa-cart-arrow-down"></i></button> -->
										
									</a>
								
							</div>
						</div>
						<!-- //cart details -->
					</div>
				</div>
			</div>
		</div>
	</div>