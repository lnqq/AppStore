

<style type="text/css">
	.carousel-item.item1 {
    background: url("{{ asset('assets/client/images/b11.jpg') }}") no-repeat center;
    background-size: cover;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    -ms-background-size: cover;
	}

	.carousel-item.item2 {
	    background: url("{{ asset('assets/client/images/b22.jpg') }}") no-repeat center;
	    background-size: cover;
	    -webkit-background-size: cover;
	    -moz-background-size: cover;
	    -o-background-size: cover;
	    -ms-background-size: cover;
	}

	.carousel-item.item3 {
	    background: url("{{ asset('assets/client/images/b33.jpg') }}") no-repeat center;
	    background-size: cover;
	    -webkit-background-size: cover;
	    -moz-background-size: cover;
	    -o-background-size: cover;
	    -ms-background-size: cover;
	}

	.carousel-item.item4 {
	    background: url("{{ asset('assets/client/images/b44.jpg') }}") no-repeat center;
	    background-size: cover;
	    -webkit-background-size: cover;
	    -moz-background-size: cover;
	    -o-background-size: cover;
	    -ms-background-size: cover;
	}

	.carousel-item.item4,
	.carousel-item.item3,
	.carousel-item.item2,
	.carousel-item.item1 {
	    min-height: 640px;
	}
</style>


<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<!-- Indicators-->
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item item1 active">
				<div class="container">
					<div class="w3l-space-banner">
						<div class="carousel-caption p-lg-5 p-sm-4 p-3">
							<p>{{ __('file.key70') }}
								<span>{{ __('file.key71') }}</span> {{ __('file.key72') }}</p>
							<h3 class="font-weight-bold pt-2 pb-lg-5 pb-4">{{ __('file.key73') }}
								<span>{{ __('file.key74') }}</span>
								{{ __('file.key75') }}
							</h3>
							<a class="button2" href="{{ route('cart.index') }}">{{ __('file.key76') }} </a>
						</div>
					</div>
				</div>
			</div>
			<div class="carousel-item item2">
				<div class="container">
					<div class="w3l-space-banner">
						<div class="carousel-caption p-lg-5 p-sm-4 p-3">
							<p>{{ __('file.key77') }}
								<span>{{ __('file.key79a') }}</span> {{ __('file.key78') }}</p>
							<h3 class="font-weight-bold pt-2 pb-lg-5 pb-4">{{ __('file.key79') }}
								<span>{{ __('file.key80') }}</span>
							</h3>
							<a class="button2" href="{{ route('cart.index') }}">{{ __('file.key81') }} </a>
						</div>
					</div>
				</div>
			</div>
			<div class="carousel-item item3">
				<div class="container">
					<div class="w3l-space-banner">
						<div class="carousel-caption p-lg-5 p-sm-4 p-3">
							<p>{{ __('file.key82') }}
								<span>{{ __('file.key83') }}</span> {{ __('file.key84') }}</p>
							<h3 class="font-weight-bold pt-2 pb-lg-5 pb-4">{{ __('file.key85') }}
								<span>{{ __('file.key86') }}</span>
							</h3>
							<a class="button2" href="{{ route('cart.index') }}">{{ __('file.key87') }} </a>
						</div>
					</div>
				</div>
			</div>
			<div class="carousel-item item4">
				<div class="container">
					<div class="w3l-space-banner">
						<div class="carousel-caption p-lg-5 p-sm-4 p-3">
							<p>{{ __('file.key88') }}
								<span>{{ __('file.key89') }}</span> {{ __('file.key90') }}</p>
							<h3 class="font-weight-bold pt-2 pb-lg-5 pb-4">{{ __('file.key91') }}
								<span>{{ __('file.key92') }}</span>
							</h3>
							<a class="button2" href="{{ route('cart.index') }}">{{ __('file.key93') }}</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">{{ __('file.key94') }}</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">{{ __('file.key95') }}</span>
		</a>
	</div>