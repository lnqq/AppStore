@extends('admin.layout.index')
@section('content')


<div class="container" style="margin-top: 2%">
	<h1 class="text-uppercase text-success" style="text-align: center;margin-top: 1%;">Thông Tin Khách Hàng </h1>
	<br><hr>
	<div class="col-md-12 mt-3">
			<a href="{{ route('customer.index')}}" class="font-weight-bold text-white btn btn-success mt-3" >Danh Sách Khách Hàng
			</a>
	</div>
	<br>
	<div class="row container" style="text-align: center;">
		<table class="table table-hover">
			<thead class="table table-bordered table-danger" style="text-align: center;">
				<tr>
					
					<th>Tên </th>
					<th>Họ</th>
					<th>Email</th>
					<th>Địa Chỉ Bưu Điện</th>
					<th>Địa Chỉ Nhà</th>
				</tr>
			</thead>
			<tbody class="table table-bordered ">
				<td class="">{{$customers->first_name }}</td>
				<td class="">{{$customers->last_name }}</td>
				<td class="">{{$customers->email }}</td>
				<td class="">{{$customers->postal_address}}</td>
				<td class="">{{$customers->physical_address }}</td>
			</tbody>
		</table>
	</div>
</div>

<br>

@endsection
@section('script')
	@include('shared.script1')
@endsection