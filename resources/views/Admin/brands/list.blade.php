@extends('admin.layout.index')
@section('content')

<div class="container" style="margin-top: 3%">
	
	<h1 class="text-uppercase text-success" style="text-align: center;margin-top: 1%;">Quản Lý Thông Tin Các Nhà Sản Xuất </h1>
	<br><hr>

	<div class="col-md-12 mt-3 ">
			<a href="{{ route('brand.create')}}" class="font-weight-bold text-white btn btn-success mt-3" >Tạo Nhà Sản Xuất
			</a>
	</div>
	<br>
	<div style="margin-right: 3%;">
	{{ Form::open(['route' => ['brand.index' ],'method' => 'get']) }}
		<form class="form-inline text-right">
		  <div class="form-group mb-2 col-8" style="float: left;">
		    <input type="text" name="seachname" class="form-control" id="inputPassword2" placeholder="Search...">
		  </div>
		  <button type="submit" name="Seach" style="float: left;" class="btn btn-primary mb-2">Tìm Kiếm</button>
		</form>
	{{ Form::close() }}
	</div>



	<div class="row container" style="text-align: center;">
				<table class="table table-hover ">
					<thead style="text-align: center;">
						<tr class="table table-bordered table-danger">
							<th>STT</th>
							<th>Tên Nhà Sản Xuất</th>
							<th>Mô Tả</th>
							<th colspan="3">Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($brands_info as $key => $brands)
							<tr class="table table-bordered ">
								<td class="">{{ ++$key }}</td>
								<td class="">{{ $brands->name }}</td>
								<td class="">{{ $brands->description }}</td>
								<td class="">
									<a href="{{ route('brand.edit',$brands->id)}}" >
										<i class="fas fa-edit btn btn-primary"></i>
									</a>
									
									<a href="{{ route('brand.show',$brands->id)}}"> 
										<i class="fab fa-app-store-ios btn btn-success"></i>
									</a> 
									<button class="btn btn-danger delete" title="{{ "Xóa ".$brands->name }}" data-toggle="modal" data-target="#delete" type="button" data-id="{{ $brands->id }}"><i class="fas fa-trash-alt"></i></button>					
								</td>
							</tr>
						@endforeach()
					</tbody>	
				</table>
		</div>
		
	</div>
</div>
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
                    <button type="button" class="btn btn-success del">Có</button>
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Không</button>
                <div>
            </div>
        </div>
    </div>

@endsection
@section('script')
	@include('shared.script1')
@endsection


								