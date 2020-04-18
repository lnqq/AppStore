@extends('admin.layout.index')
@section('content')

<div class="container">
	<h1 class="text-uppercase text-success" style="text-align: center;">
		Tạo sản phẩm
	</h1>
	<br><hr><br>

	<div class="container">
		{{ Form::open(['route' => 'product.store', 'method' => 'post','enctype'=>'multipart/form-data']) }}

		<div class="form-group {{ $errors->has('product_code') ? 'has-error' : '' }}">
			{{ Form::label('product_code','Code:',['class' => 'font-weight-bold']) }}
			{{ Form::text('product_code','',['class'=>'form-control']) }}
			<span class="text-danger">{{ $errors->first('product_code') }}</span>
		</div>

		<div class="form-group {{ $errors->has('product_name') ? 'has-error' : '' }}">
			{{ Form::label('Tên Sản Phẩm:','',['class' => 'font-weight-bold'])}}
			{{ Form::text('product_name','',['class'=>'form-control']) }}
			<span class="text-danger">{{ $errors->first('product_name') }}</span>
		</div>
		
		<div class="form-group {{ $errors->has('images') ? 'has-error' : '' }}">
			<label class="font-weight-bold">Chọn Ảnh:</label>
			<br>
			<input type="file" name="filesTest">
			<br>
			<span class="text-danger">{{ $errors->first('images') }}</span>
		</div>

		<div class="form-group {{ $errors->has('price') ? 'has-error' : '' }}">
			{{ Form::label('Giá :','',['class' => 'font-weight-bold'])}}
			{{ Form::text('price','',['class'=>'form-control']) }}
			<span class="text-danger">{{ $errors->first('price') }}</span>
		</div>

		<div class="form-group {{ $errors->has('promotional') ? 'has-error' : '' }}">
			{{ Form::label('Giá Khuyến Mãi:','',['class' => 'font-weight-bold'])}}
			{{ Form::text('promotional','',['class'=>'form-control']) }}
			<span class="text-danger">{{ $errors->first('promotional') }}</span>
		</div>
		
		 <div class="form-group {{ $errors->has('brand_id') ? 'has-error' : '' }}">
            {{ Form::label('Nhà Sản Xuất:','',['class' => 'font-weight-bold']) }}
            {{ Form::select('brand_id',$brands, null,['class' => 'form-control', 'placeholder' => 'chọn nhà sản xuất'],)}}
			<span class="text-danger">{{ $errors->first('brand_id') }}</span>
        </div>
        
        <div class="form-group {{ $errors->has('categorie_id') ? 'has-error' : '' }}">
            {{ Form::label('Danh Mục Sản Phẩm:','',['class' => 'font-weight-bold']) }}
            {{ Form::select('categorie_id',$categories, null,['class' => 'form-control', 'placeholder' => 'chọn danh mục sản phẩm'],)}}
			<span class="text-danger">{{ $errors->first('categorie_id') }}</span>
        </div>

        <div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
			{{ Form::label('Mô Tả :','',['class' => 'font-weight-bold'])}}
			<textarea name="description" id="demo" cols="5" rows="5" class="form-control"></textarea>
			<span class="text-danger">{{ $errors->first('description') }}</span>
		</div>
        
		<div class="text-right col-md-12 mt-3">
			{{form::submit('Tạo Mới',['class'=>'font-weight-bold text-white btn btn-primary mt-3']) }}
			<a href="{{ route('product.index')}}" class="font-weight-bold text-white btn btn-success mt-3" >Danh Sách Sản Phẩm</a>
		</div>
			
		{{ Form::close() }}
	</div>

</div>
<br>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.min.css" rel="stylesheet" />
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/js/select2.min.js"></script>

<script type="text/javascript">
   $('select').select2();
</script>

@endsection
@section('script')
	@include('shared.script1')
@endsection

