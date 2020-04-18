@extends('admin.layout.index')
@section('content')

<div class="container">

	<h1 class="text-uppercase text-success" style="text-align: center;margin-top: 2%">
		Tạo Khách Hàng
	</h1>
	<br><hr><br>
	
	<div class="container">
		{{ Form::open(['route' =>'customer.store', 'method' => 'post']) }}
		<div class="form-group {{ $errors->has('name') ?'has-error':'' }} col-md-6" style="float: left;">
			{{ Form::label('name','Tên đăng nhập:',['class' => 'font-weight-bold']) }}
			{{ Form::text('name','',['class'=>'form-control']) }}
			<span class="text-danger">{{$errors->first('name')}}</span>
		</div>
		<div class="form-group {{ $errors->has('password') ?'has-error':'' }} col-md-6" style="float: left;">
			{{ Form::label('name','Mật khẩu:',['class' => 'font-weight-bold']) }}
			{{ Form::password('password',['class'=>'form-control']) }}

			<span class="text-danger">{{$errors->first('password')}}</span>
		</div>
		<div class="form-group {{ $errors->has('first_name') ? 'has-error' : ''}}">
			{{ Form::label('first_name','Tên :',['class' => 'font-weight-bold']) }}
			{{ Form::text('first_name','',['class'=>'form-control']) }}
			<span class="text-danger">{{ $errors->first('first_name') }}</span>		
		</div>

		<div class="form-group {{ $errors->has('last_name') ? 'has-error' : ''}}">
			{{ Form::label('Họ :','',['class' => 'font-weight-bold'])}}
			{{ Form::text('last_name','',['class'=>'form-control']) }}
			<span class="text-danger">{{ $errors->first('last_name') }}</span>			
		</div>

		<div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
			{{ Form::label('email :','',['class' => 'font-weight-bold'])}}
			{{ Form::text('email','',['class'=>'form-control']) }}
			<span class="text-danger">{{ $errors->first('email') }}</span>			
		</div>

		<div class="form-group {{ $errors->has('postal_address') ? 'has-error' : ''}}">
			{{ Form::label('Địa chỉ bưu điện :','',['class' => 'font-weight-bold'])}}
			{{ Form::text('postal_address','',['class'=>'form-control']) }}
			<span class="text-danger">{{ $errors->first('postal_address') }}</span>			
		</div>

		<div class="form-group {{ $errors->has('physical_address') ? 'has-error' : ''}}">
			{{ Form::label('Địa chỉ nhà :','',['class' => 'font-weight-bold'])}}
			{{ Form::text('physical_address','',['class'=>'form-control']) }}
			<span class="text-danger">{{ $errors->first('physical_address') }}</span>			
		</div>


		<div class="text-right col-md-12 mt-3">
			{{form::submit('Tạo Mới',['class'=>'font-weight-bold text-white btn btn-primary mt-3']) }}
			<a href="{{ route('customer.index')}}" class="font-weight-bold text-white btn btn-success mt-3" >Danh Khách Hàng
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
