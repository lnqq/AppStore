<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;
use App\Models\categories;
use App\Models\brands;
use App\Models\User;
use App\Models\customers;
use App\Models\orders;
use App\Models\orders_details;
use Carbon\Carbon;
use Cart;
use Auth;

//khai bao formRequest
use App\Http\Requests\CartRequest;


class CartController extends Controller
{
     public function __construct()
    {
        $products = products::all();
        $category = categories::where('id',1)->get();
        view()->share(['category' => $category]);
        view()->share('products',$products);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cart = Cart::content();
         $customer = customers::where('user_id','like',Auth::user()->id)->pluck('first_name','id');
        return view('Client.pages.cart', compact('cart','customer'));
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
        //
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
        if($request->ajax()){
            if($request->qty == 0){
                return response()->json(['error' => 'Số lượng tối thiểu là 1 sản phẩm'],200);
            }else{
                Cart::update($id,$request->qty);
                return response()->json(['result' => 'Đã cập số lượng sản phẩm thành công']);
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cart::remove($id);
        return response()->json(['result' => 'Đã xóa sản phẩm thành công']);
    }

    public function addCart($id, Request $request)
    {
        $product = products::find($id);
        if($request->qty){
            $qty = $request->qty;
        }else{
            $qty = 1;
        }
        if($product->promotional>0){
            $price = $product->promotional;
        }else{
            $price = $product->price;
        }
        $cart = ['id' => $id, 'name' => $product->product_name, 'qty' => $qty, 'price' => $product->price, 'options' => ['img' => $product->images]];
        Cart::add($cart);
        // dd(Cart::content());
        return back()->with('thongbao','Đã mua hàng '.$product->product_name.' thành công');
        
    }

    public function checkout()
    {
        $user = Auth::user();
        $price = str_replace(',', '', Cart::total());
        return view('Client.pages.checkout',compact('user','price'));  
    }

    public function thanhtoan(CartRequest $request)
    {
        //dd($request);
        $request->validated();
        $cartInfor = Cart::content();
        $order_id = orders::insertGetId([
            'order_number' => Carbon::now()->toDateString(),
            'transaction_date' => Carbon::now()->toDateTimeString(),
            'status' => Carbon::now()->toDateTimeString(),
            'total_amount' => str_replace(',', '', Cart::total()),
            'customer_id' => $request->customer_id,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString()
        ]); 
        $orders_data = orders::findOrFail($order_id);
        //dd($request);  
        if (count($cartInfor) > 0) {
            foreach ($cartInfor as $key => $item) {
                $orders_detail_id = orders_details::insertGetId([
                    'quantity' => $item->qty,
                    'price' => $item->price,
                    'sub_toal' => $item->qty *$item->price ,
                    'order_id' => $order_id,
                    'product_id' =>$item->id,
                    'created_at' => Carbon::now()->toDateTimeString(),
                    'updated_at' => Carbon::now()->toDateTimeString()
                ]);
                $orders_detail_data = orders_details::findOrFail($orders_detail_id);
            }
        }
        Cart::destroy();
        return back()->with('thongbao','Đã mua hàng thành công');
    }
}
