<div class="navbar-inner" style="background: #FFFFFF">
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light bg-light" style="background: #FFFFFF !important; " >
				<div class="agileits-navi_search">
					<form action="#" method="post">
						<select id="agileinfo-nav_search" name="agileinfo_search" class="border" required="">
							<option value="">{{ __('file.key9') }}</option>
							@foreach($category as $cate)
								<option value="{{ $cate -> id }}">
									{{ $cate->name}}
								</option>
							@endforeach
						</select>
					</form>
				</div>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
				    aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto text-center mr-xl-5">
						<li class="nav-item active mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link" href="{{asset('home')}}">{{ __('file.key10') }}
								<span class="sr-only">(current)</span>
							</a>
						</li>

						@foreach( $category as $category )
						<li class="nav-item dropdown mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link dropdown-toggle" href="{{route('indexcategories',[$category->id])}}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								{{$category->name}}
							</a>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="{{route('indexcategories',[$category->id])}}">{{$category->name}}</a>
								<div class="dropdown-divider"></div>
							</div>
						</li>
						@endforeach
						
						<li class="nav-item">
							<a class="nav-link" href="home">{{ __('file.key11') }}</a>
						</li>
					</ul>
				</div>
		</nav>
	</div>
</div>