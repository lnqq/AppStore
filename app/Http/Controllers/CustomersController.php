<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customers;
use App\Models\User;
use Carbon\Carbon;
use Session;
//khai bao formRequest
use App\Http\Requests\CustomersRequest;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->seachname != null) {
            $customers_info = customers::where('first_name','like','%'.$request->seachname.'%')->get();
            return view('Admin.customer.list',compact('customers_info'));
        }
        $customers_info = customers::latest()->get();
        return view('Admin.customer.list', compact('customers_info'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.customer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CustomersRequest $request)
    {
        $request->validated();
        $users_id = User::insertGetId([
            'name'=>$request->name,
            'role'=>false,
            'password'=>bcrypt($request->password),
            'created_at'=>Carbon::now()->toDateTimeString()        
        ]);
        $users_data = User::findOrfail($users_id);
        $customers_data = new customers([
            'first_name'=>$request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'postal_address' => $request->postal_address,
            'physical_address' => $request->physical_address,
            'created_at' => Carbon::now()->toDateTimeString(),
               
        ]);
        $users_data->customers()->save($customers_data);

        return back()->with('thongbao','Lưu Dữ Liệu Thành Công');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // return "ID muon sau chi";
        //1. kiem tra du lieu trong db thong qua model
        $customers = customers::findOrFail($id);
        //2. do du lieu ra view
        return view('Admin.customer.index', compact('customers'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //kiem tra lay du lieu id yeu cau
        $customer = customers::findOrFail($id);
        return view('Admin.customer.edit', compact('customer'));
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
        $customers_data = customers::findOrFail($id);
        if ($customers_data) {
            $customers_data->first_name = $request->first_name;
            $customers_data->last_name = $request->last_name;
            $customers_data->email = $request->email;
            $customers_data->postal_address = $request->postal_address;
            $customers_data->physical_address = $request->physical_address;
            $customers_data->created_at = Carbon::now()->toDateTimeString();
            $customers_data->updated_at = Carbon::now()->toDateTimeString();     
         //dd($customers_data);
        $customers_data->update();
        }
        
        return back()->with('thongbao','Cập Nhập Thành Công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customers = customers::find($id);
        $customers->delete();
        return response()->json(['success' => 'Xóa thành công']);
    }
}
