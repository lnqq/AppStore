@extends('admin.layout.index')
@section('content')



<div class="container" style="margin-top: 2%">
	<h1 class="text-uppercase text-success" style="text-align: center;margin-top: 1%;">Thông Tin Các Nhà Sản Xuất </h1>
	<br><hr>
	<div class="col-md-12 mt-3">
			<a href="{{ route('brand.index')}}" class="font-weight-bold text-white btn btn-success mt-3" >Danh Sách Nhà Sản Xuất
			</a>
	</div>
	<br>
	<div class="row container" style="text-align: center;">
		<table class="table table-hover">
			<thead class="table table-bordered table-danger" style="text-align: center;">
				<tr>
					
					<th>Tên Nhà Sản Xuất</th>
					<th>Mô Tả</th>
				</tr>
			</thead>
			<tbody class="table table-bordered ">
				<td class="">{{ $brand->name }}</td>
				<td class="">{{ $brand->description }}</td>
			</tbody>
		</table>
	</div>
</div>

<br>
@endsection
@section('script')
	@include('shared.script1')
@endsection