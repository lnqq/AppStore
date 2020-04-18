@extends('admin.layout.index')
@section('content')


<div class="container">

	<h1 class="text-uppercase text-success" style="text-align: center;margin-top: 2%">
		Tạo Nhà Sản Xuất
	</h1>
	<br><hr><br>
	<div class="container">
		{{ Form::open(['route' => 'brand.store', 'method' => 'post']) }}
		<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
			{{ Form::label('name','Tên Nhà Sản Xuất:',['class' => 'font-weight-bold']) }}
			{{ Form::text('name','',['class'=>'form-control']) }}
			<span class="text-danger">{{ $errors->first('name') }}</span>
		</div>
			<div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
			{{ Form::label('Mô Tả :','',['class' => 'font-weight-bold'])}}
			<textarea name="description" id="demo" cols="5" rows="5" class="form-control"></textarea>
			<span class="text-danger">{{ $errors->first('description') }}</span>
		</div>

		<div class="text-right col-md-12 mt-3">
			{{form::submit('Tạo Mới',['class'=>'font-weight-bold text-white btn btn-primary mt-3']) }}
			<a href="{{ route('brand.index')}}" class="font-weight-bold text-white btn btn-success mt-3" >Danh Sách Nhà Sản Xuất
			</a>
		</div>
			
		{{ Form::close() }}
	</div>

</div>
<br>

@endsection
@section('script')
	@include('shared.script1')
@endsection

