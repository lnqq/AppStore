@extends('admin.layout.index')
@section('content')

<div class="container">
	

	<h1 class="text-uppercase text-success" style="text-align: center;margin-top: 2%">
		Chỉnh sửa nhà sản xuất
	</h1>
	<br><hr><br>
	<div class="container">

		{{ Form::model($brand,['route'=> ['brand.update',$brand->id],'method'=>'put'], ['class' => 'col-md-12 row']) }}

		<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
			{{ Form::label('name','Tên Nhà Sản Xuất:',['class' => 'font-weight-bold']) }}
			{{ Form::text('name',$brand->name,['class'=>'form-control']) }}
			<span class="text-danger">{{ $errors->first('name') }}</span>
		</div>
			<div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
			{{ Form::label('Mô Tả :','',['class' => 'font-weight-bold'])}}
			{{ Form::textarea('description',$brand->description,['class'=>'form-control', 'cols' => '5', 'rows' => '5', 'id' => 'demo']) }}
			<span class="text-danger">{{ $errors->first('description') }}</span>
		</div>
			
		<div class="text-right col-md-12 mt-3">
				{{form::submit('Cập Nhập',['class'=>'font-weight-bold text-white btn btn-primary mt-3']) }}
    			<a href="{{ route('brand.index')}}" class="font-weight-bold text-white btn btn-success mt-3" >Danh Sách Các Nhà Sản Xuất
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

