@extends('admin.layout.index')
@section('content')


<div class="container" style="margin-top: 3%">
 <h1 class="text-uppercase text-success" style="text-align: center;margin-top: 2%">
		quản lý đơn hàng
	</h1>
	<br><hr><br>

    {{ Form::open(['route' => ['orders.index' ],'method' => 'get']) }}
       <form class="form-inline text-right">
          <div class="form-group mb-2 col-8" style="float: left;">
            <input type="text" name="seachname" class="form-control" id="inputPassword2" placeholder="Search...">
          </div>
          <button type="submit" name="Seach" style="float: left;" class="btn btn-primary mb-2">Tìm Kiếm</button>
        </form>
    {{ Form::close() }}
    
    <div class="container" style="margin-top: 5%; margin-right: 2%">
        
    <!-- Main content -->
    <div class="row container" style="text-align: center;">          
        <table id="myTable" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
            <thead>
            <tr class="table table-bordered table-danger" style="text-align: center;">
                <th>STT</th>
                <th>Tên người Order</th>
                <th >Địa chỉ Bưu Điện</th>
                <th>Địa Chỉ Nhà</th>
                <th >Ngày đặt hàng</th>
                <th>Email</th>
                <th>Trạng thái</th>
                <th>Action</th>
            </thead>
            <tbody style="text-align: center;">
              	@foreach($orders_info as $key=>$order)
                    <tr>
                        <td>{{++$key}}</td>
                        <td>{{ $order->customers->first_name}} {{ $order->customers->last_name}}</td>
                        <td>{{ $order->customers->postal_address}}</td>
                        <td>{{ $order->customers->physical_address}}</td>
                        <td>{{ $order->transaction_date}}</td>
                        <td>{{ $order->customers->email}}</td>
                        <td>{{ $order->status }}</td>
                        <td>
                            <a href="{{ route('orders.show', $order->id)}}" ><i class="fab fa-app-store-ios btn btn-success"></i></a>
                            
                             <button class="btn btn-danger delete" title="{{ "Xóa ".$order->name }}" data-toggle="modal" data-target="#delete" type="button" data-id="{{ $order->id }}"><i class="fas fa-trash-alt"></i></button>   
                        </td>
                        
                    </tr>
               	  @endforeach
            </tbody>
        </table>    
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
                    <button type="button" class="btn btn-success del4">Có</button>
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Không</button>
                <div>
            </div>
        </div>
    </div>
@endsection
@section('script')
	@include('shared.script1')
@endsection