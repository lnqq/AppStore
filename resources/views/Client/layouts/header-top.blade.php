<div class="agile-main-top">
		<div class="container-fluid">
			<div class="row main-top-w3l py-2"  style="background: #FF9999;">
				<div class="col-lg-4 header-most-top">
					<p class="text-white text-lg-left text-center">{{ __('file.key1') }}

						<i class="fas fa-shopping-cart ml-1"></i>
					</p>
				</div>
				<div class="col-lg-8 header-right mt-lg-0 mt-2">
					<!-- header lists -->
					<ul>

						<li class="text-center  border-right text-white">
							<nav>
								<a class="text-white" href="{{ route('set.language', 'vi') }}"><i class="fas fa-star"></i> VI</a> |	
							    <a class="text-white" href="{{ route('set.language', 'en') }}"><i class="fas fa-flag-checkered"></i> EN</a> |
							    <a class="text-white" href="{{ route('set.language', 'jp') }}"><i class="fas fa-circle"></i> JP</a>
							</nav>
						</li>
						<li class="text-center border-right text-white">
							<a href="#" data-toggle="modal" data-target="#exampleModal" class="text-white">
								<i class="fas fa-truck mr-2"></i>{{ __('file.key3') }}</a>
						</li>
						<li class="text-center border-right text-white">
							<i class="fas fa-phone mr-2"></i> {{ __('file.key4') }}
						</li>
					@if(Auth::check() && Auth::user()->role == 0)
						<li class="text-center border-right ">
							<a href="logout" title="Đăng Xuất" class="text-white"><i class="fas fa-sign-in-alt mr-2"></i>{{ Auth::user()->name }}</a>
						</li>
					@else
						<li class="text-center border-right text-white">
							<a href="#" data-toggle="modal" data-target="#login" class="text-white">
								<i class="fas fa-sign-in-alt mr-2"></i> {{ __('file.key5') }}
							</a>
						</li>
						<li class="text-center text-white">
							<a href="#" data-toggle="modal" data-target="#register" class="text-white">
								<i class="fas fa-sign-out-alt mr-2"></i>{{ __('file.key6') }}
							</a>
						</li>
					@endif
						
					</ul>
					<!-- //header lists -->
				</div>
			</div>
		</div>
	</div>