@extends('admin.layout.index')
@section('content')

<div class="container">

	<h1 class="text-uppercase text-success" style="text-align: center;margin-top: 2%">
		Chỉnh Sửa sản phẩm
	</h1>
	<br><hr><br>

	<div class="container">
		{{ Form::model($product,['route'=> ['product.update',$product->id],'method'=>'put','enctype '=>'multipart/form-data'], ['class' => 'col-md-12 row']) }}

		<div class="form-group {{ $errors->has('product_code') ? 'has-error' : '' }}">
			{{ Form::label('product_code','Code:',['class' => 'font-weight-bold']) }}
			{{ Form::text('product_code',$product->product_code,['class'=>'form-control']) }}
			<span class="text-danger">{{ $errors->first('product_code') }}</span>
		</div>

		<div class="form-group {{ $errors->has('product_name') ? 'has-error' : '' }}">
			{{ Form::label('Tên Sản Phẩm:','',['class' => 'font-weight-bold'])}}
			{{ Form::text('product_name',$product->product_name,['class'=>'form-control']) }}
			<span class="text-danger">{{ $errors->first('product_name') }}</span>
		</div>		

		<div class="form-group">
			<label class="font-weight-bold">Chọn Ảnh:</label>
			<br>
			<input type="file" name="filesTest" required="true">
		</div>

		<div class="form-group {{ $errors->has('price') ? 'has-error' : '' }}">
			{{ Form::label('Giá :','',['class' => 'font-weight-bold'])}}
			{{ Form::text('price',$product->price,['class'=>'form-control']) }}
			<span class="text-danger">{{ $errors->first('price') }}</span>
		</div>

		<div class="form-group {{ $errors->has('promotional') ? 'has-error' : '' }}">
			{{ Form::label('Giá Khuyến Mãi:','',['class' => 'font-weight-bold'])}}
			{{ Form::text('promotional',$product->promotional,['class'=>'form-control']) }}
			<span class="text-danger">{{ $errors->first('promotional') }}</span>
		</div>
		
		 <div class="form-group">
            {{ Form::label('Nhà Sản Xuất:','',['class' => 'font-weight-bold']) }}
            {{ Form::select('brand_id',$brands,$product->brands,['class' => 'form-control', 'placeholder' => 'chọn nhà sản xuất'],)}}
        </div>
        
        <div class="form-group">
            {{ Form::label('Danh Mục Sản Phẩm:','',['class' => 'font-weight-bold']) }}
            {{ Form::select('categorie_id',$categories,$product->categories,['class' => 'form-control', 'placeholder' => 'chọn danh mục sản phẩm'],)}}
        </div>
        
        <div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
			{{ Form::label('Mô Tả :','',['class' => 'font-weight-bold'])}}
			{{ Form::textarea('description',$product->description,['class'=>'form-control', 'cols' => '5', 'rows' => '5', 'id' => 'demo']) }}
			<span class="text-danger">{{ $errors->first('description') }}</span>
		</div>

		<div class="text-right col-md-12 mt-3">
			{{form::submit('Cập Nhập',['class'=>'font-weight-bold text-white btn btn-primary mt-3']) }}
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

