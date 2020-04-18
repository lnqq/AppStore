@extends('admin.layout.index')
@section('content')

<div class="container" style="margin-top: 3%">
	<div class="container">
	<h1 class="text-uppercase text-success" style="text-align: center;margin-top: 1%;">Quản Lý Thông Tin Các Sản Phẩm </h1>
	<br><hr>
	</div>

	<div class="col-md-12 mt-3">
		<a href="{{ route('product.create')}}" class="font-weight-bold text-white btn btn-success mt-3" >Tạo Sản Phẩm
		</a>
	</div>
	<br>
	
	{{ Form::open(['route' => ['product.index' ],'method' => 'get']) }}
			<div class="form-group col-12" style="float: left;">
				<div class="form-group col-6 float-left mt-0">
					{{ Form::label('Brand :')}}
					<select class="form-control" name="seachbrand">
		    			<option value="null">Brands List</option>
					  	@foreach ($brands as $key => $brands)
						    <option value="{{$brands->id}}" > 
						        {{ $brands->name }} 
						    </option>
					  	@endforeach    
					</select>
				</div>
				<div class="form-group col-6 float-left mt-0">
					{{ Form::label('Category :')}}
					<select class="form-control" name="seachcate">
						<option value="null">Categories List</option>
					  	@foreach ($categories as $key => $categories)
						    <option value="{{$categories->id}}" > 
						        {{ $categories->name }} 
						    </option>
					  	@endforeach
					</select>
				</div>
				<div class="form-group col-6 float-left mt-1">
					{{ Form::label('Name :')}}
					{{ Form::text('seachname','',['class'=>'form-control ','style'=>'float: left']) }}
					{{form::submit('Seach',['class'=>'btn btn-primary','style'=>'float: left']) }}
				</div>

			</div>
			
	{{ Form::close() }}

	<br>
	<div class="row container" style="text-align: center;margin-top: 10px">
				<table class="table table-hover">
					<thead  style="text-align: center;">
						<tr class="table table-bordered table-danger">
							<th>STT</th>
							<th>Code</th>
							<th>Tên Sản Phẩm</th>
							<th>Mô Tả</th>
							<th>Ảnh</th>
							<th>Giá</th>
							<th>Nhà Sản Xuất</th>
							<th>Danh Mục Sản Phẩm</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($product as $key => $product)
							<tr class="table table-bordered ">
								<td>{{++$key}}</td>
								<td>{{$product->product_code}}</td>
								<td>{{$product->product_name}} </td>
								<td>{{Str::limit($product->description,100,'...')}}</td>
								<td>
									<img style="width: 40px; height: 50px" src="{{ asset("images/$product->images") }} "class="card-img-top" alt="...">
									
								</td>
								<td>{{$product->price}} đ</td>
								<td>{{$product->brand->name}}</td>
								<td>{{$product->categorie->name}}</td>
								<td>
									<a href="{{ route('product.edit',$product->id)}}" ><i class="fas fa-edit btn btn-primary"></i></a>

									<a href="{{ route('product.show',$product->id)}}"><i class="fab fa-app-store-ios btn btn-success"></i></a>

									<button class="btn btn-danger delete" title="{{ "Xóa ".$product->name }}" data-toggle="modal" data-target="#delete" type="button" data-id="{{ $product->id }}"><i class="fas fa-trash-alt"></i></button>	
								</td>
							</tr>
						@endforeach
					</tbody>	

				</table>
		</div>
	</div>
<br>

<!-- delete Modal-->
    <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Bạn có muốn xóa ?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body" style="margin-left: 183px;">
                    <button type="button" class="btn btn-success del2">Có</button>
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Không</button>
                <div>
            </div>
        </div>
    </div>
@endsection
@section('script')
	@include('shared.script1')
@endsection
