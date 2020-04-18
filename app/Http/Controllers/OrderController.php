<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\orders;
use App\Models\orders_details;
use App\Models\brands;
use App\Models\products;
use App\Models\categories;
use Carbon\Carbon;
use App\Models\customers;
use Session;
use Cart;
use Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->seachname != null) {
            $orders_info = orders::where('id','like','%'.$request->seachname.'%')->get();
            return view('Admin.QLDH.index',compact('orders_info'));
        }
        $orders_info = orders::with('customers')->get();
        //$customers = customers::all();
        return view('Admin.QLDH.index', compact('orders_info'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $order_show = orders::findOrFail($id);
        $iDCustomer = $order_show->customer_id;
        $orders_details = DB::table('orders')
                    ->join('orders_details', 'orders.id', '=', 'orders_details.order_id')
                    ->leftjoin('products', 'orders_details.product_id', '=', 'products.id')
                    ->where('orders.customer_id', '=', $iDCustomer)
                    ->where('orders_details.order_id','=',$id)
                    ->select('orders.*', 'orders_details.*', 'products.product_name as product_name')
                    ->get();
        // dd($orders_details);
        return view('Admin.QLDH.list', compact('order_show','orders_details'));

        // $order_show = orders::findOrFail($id);
        // if ($order_show) {
        //     $iDCustomer = customers::where('id','like',$order_show->customer_id,)->get();
        //     $orders_details = orders_details::where('order_id','like',$order_show->id)->get();  
        //     return view('Admin.QLDH.list', compact('order_show','orders_details','iDCustomer'));
        // }

        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $order_show = orders::findOrFail($id);
        if ($order_show) {
           $order_show->status = $request->status;
           $order_show->update();  
        }
        return back()->with('thongbao','Cập nhập thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $orders = orders::find($id);
        $orders->delete();
        return response()->json(['success' => 'Xóa thành công']);
    }
}
