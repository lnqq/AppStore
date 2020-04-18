@extends('admin.layout.index')
@section('content')

<div class="container" style="margin-top: 3%">
	<h1 class="text-uppercase text-success" style="text-align: center;margin-top: 2%">
		show đơn hàng
	</h1>
	<br><hr>
    <div class="col-md-12 mt-3">
            <a href="{{ route('orders.index')}}" class="font-weight-bold text-white btn btn-success mt-3" >Quản Lý Đơn Hàng
            </a>
    </div>
    <br>

    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <div class="row">
                    <div class="col-md-12">
                        <div class="container123  col-md-6">
                            <h4></h4>
                            <table class="table table-bordered">
                                <thead>
                                <tr class="table table-bordered table-danger" style="text-align: center;">
                                     <th class="col-md-4">Thông tin khách hàng</th>
                                    <th class="col-md-6"></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr >
                                    <td>Thông tin người đặt hàng</td>
                                    <td>{{ $order_show->customers->first_name }} {{ $order_show->customers->last_name}}</td>
                                </tr>
                                <tr>
                                    <td>Ngày đặt hàng</td>
                                    <td>{{ $order_show->transaction_date }}</td>
                                </tr>

                                <tr>
                                    <td>Địa chỉ bưu điện</td>
                                    <td>{{ $order_show->customers->postal_address}}</td>
                                    
                                </tr>
                                <tr>
                                    <td>Địa chỉ nhà</td>
                                    <td>{{ $order_show->customers->physical_address}}</td>
                                    
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>{{ $order_show->customers->email}}</td>
                                </tr>
                                <tr>
                                    <td>Ghi chú</td>
                                    <td >{{ $order_show->status }}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <table id="myTable" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                            <thead>
                            <tr class="table table-bordered table-danger" style="text-align: center;">
                                <th class="" >STT</th>
                                <th class="">Tên sản phẩm</th>
                                <th class="">Số lượng</th>
                                <th class="">Thành Tiền</th>
                            </thead>
                            <tbody >
                                @foreach($orders_details as $key => $orders)
                                <tr>
                                    <td style="text-align: center;">{{ $key+1 }}</td>
                                    <td style="text-align: center;">{{ $orders->product_name }}</td>
                                    <td style="text-align: center;">{{ $orders->quantity }}</td>
                                    <td style="text-align: center;">{{ number_format($orders->sub_toal) }} VNĐ</td>
                                </tr>
                            	@endforeach  
                            <tr>
                                <td colspan="3"><b>Tổng tiền</b></td>
                                <td colspan="1"><b class="text-red">{{number_format($order_show->total_amount)}} VNĐ</b></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<div class="container" style="margin-left: 63%">        
     {{ Form::model($order_show,['route' => ['orders.update',$order_show->id ],'method' => 'put']) }}
        {{ csrf_field() }}
        <div class="col-md-8"></div>
        <div class="col-md-4">
            <div class="form-inline">
                <label>Trạng thái giao hàng: </label>
                <select name="status" class="form-control input-inline" style="width: 200px">
                    <option value="Chưa giao">Chưa giao</option>
                    <option value="Đang giao">Đang giao</option>
                    <option value="Đã giao">Đã giao</option>
                </select>
                <input type="submit" value="Xử lý" class="btn btn-primary">
            </div>
        </div>
    {{ Form::close() }}
</div>
<br>
@endsection


