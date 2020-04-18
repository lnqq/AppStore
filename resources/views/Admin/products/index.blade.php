@extends('admin.layout.index')
@section('content')


<div class="container" style="margin-top: 10px">
	<div class="card" style="width: 18rem;">
	  <img src="{!! asset("images/$product->images") !!}" class="card-img-top" alt="...">
	  <div class="card-body">
	    <h4 class="card-title">Tên Sản Phẩm: {{$product->product_name}}</h4>
	    <h5 class="card-title">Code: {{$product->product_code}} </h5>
	    <h5 class="card-title">Giá: {{number_format($product->price)}} VNĐ</h5>
	    <p class="card-text">Trạng Thái:  {{$product->description}}</p>
	    <p>Nhà Sản Xuất: {{$product->brand->name}}</p>
	    <p>Danh Mục: {{$product->categorie->name}}</p>
	    <a href="{{ route('product.index',$product->id)}}" class="btn btn-primary">Danh Sách Sản Phẩm</a>
	  </div>
	</div>
</div>



@endsection
@section('script')
	@include('shared.script1')
@endsection