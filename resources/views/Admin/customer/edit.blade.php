@extends('admin.layout.index')
@section('content')

<div class="container">

	<h1 class="text-uppercase text-success" style="text-align: center;margin-top: 2%">
		Chỉnh sửa Thông Tin Khách Hàng
	</h1>
	<br><hr><br>
	<div class="container">
		{{ Form::model($customer,['route'=> ['customer.update',$customer->id],'method'=>'put'], ['class' => 'col-md-12 row']) }}

		<div class="form-group {{ $errors->has('first_name') ? 'has-error' : ''}}">
			{{ Form::label('Tên :','',['class' => 'font-weight-bold']) }}
			{{ Form::text('first_name',$customer->first_name,['class'=>'form-control']) }}
			<span class="text-danger">{{ $errors->first('first_name') }}</span>		
		</div>

		<div class="form-group {{ $errors->has('last_name') ? 'has-error' : ''}}">
			{{ Form::label('Họ :','',['class' => 'font-weight-bold'])}}
			{{ Form::text('last_name',$customer->last_name,['class'=>'form-control']) }}
			<span class="text-danger">{{ $errors->first('last_name') }}</span>			
		</div>

		<div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
			{{ Form::label('email :','',['class' => 'font-weight-bold'])}}
			{{ Form::text('email',$customer->email,['class'=>'form-control']) }}
			<span class="text-danger">{{ $errors->first('email') }}</span>			
		</div>

		<div class="form-group {{ $errors->has('postal_address') ? 'has-error' : ''}}">
			{{ Form::label('Địa chỉ bưu điện :','',['class' => 'font-weight-bold'])}}
			{{ Form::text('postal_address',$customer->postal_address,['class'=>'form-control']) }}
			<span class="text-danger">{{ $errors->first('postal_address') }}</span>			
		</div>

		<div class="form-group {{ $errors->has('physical_address') ? 'has-error' : ''}}">
			{{ Form::label('Địa chỉ nhà :','',['class' => 'font-weight-bold'])}}
			{{ Form::text('physical_address',$customer->physical_address,['class'=>'form-control']) }}
			<span class="text-danger">{{ $errors->first('physical_address') }}</span>			
		</div>


		<div class="text-right col-md-12 mt-3">
			{{form::submit('Cập Nhập',['class'=>'font-weight-bold text-white btn btn-primary mt-3']) }}
			<a href="{{ route('customer.index')}}" class="font-weight-bold text-white btn btn-success mt-3" >Danh Sách Khách Hàng
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
