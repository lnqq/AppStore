<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\brands;
use App\Models\products;
use Carbon\Carbon;
use Session;

//khai bao formRequest
use App\Http\Requests\BrandsRequest;

class BrandsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->seachname != null) {
            $brands_info = brands::where('name','like','%'.$request->seachname.'%')->get();
            return view('Admin.brands.list',compact('brands_info'));
        }
        
        $brands_info = brands::latest()->get();
        return view('Admin.brands.list', compact('brands_info'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.brands.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BrandsRequest $request)
    {
        // $data = $request->all();
        // dd($data);
        // $brands = new brands();
        // $brands->name = $request->name;
        // $brands->description = $request->description;
        // $brands->created_at = Carbon::now()->toDateTimeString() ;
        // $brands->save();
        // return back()->with('thanhcong','luu thanh cong');

        $request->validated();
        $brand_id = brands::insertGetId([
            'name' => $request->name,
            'description' => $request->description,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString()
        ]);

        //lay du lieu brands va luu lai
        $brands_data = brands::findOrFail($brand_id);

        // $brands->save();
        return back()->with('thongbao','Lưu Thông Tin Thành Công');
        
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
        $brand = brands::findOrFail($id);
        //2. do du lieu ra view
        return view('Admin.brands.index', compact('brand'));
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
        $brand = brands::findOrFail($id);
        return view('Admin.brands.edit', compact('brand'));
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

        $brands_data = brands::findOrFail($id);
        $request->validate([
           'name' => 'required|max:255',
           'description' => 'required|max:255',
        ],
        [
            'name.required' => 'Không được bỏ trông',
            'description.required' => 'Không được bỏ trống',
            'name.max:255' => 'Không được quá 255 ký tự',
            'description.max:255' => 'Không được quá 255 ký tự',
        ]);
        if ($brands_data) {
            $brands_data->name = $request->name;
            $brands_data->description = $request->description;
            $brands_data->created_at = Carbon::now()->toDateTimeString();
            $brands_data->updated_at = Carbon::now()->toDateTimeString();

        $brands_data->update();

        return back()->with('thongbao','Cập Nhập Thành Công');
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
        $brands = brands::find($id);
        $brands->delete();
        return response()->json(['success' => 'Xóa thành công']);
    }
}
