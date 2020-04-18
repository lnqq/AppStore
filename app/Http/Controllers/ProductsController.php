<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\brands;
use App\Models\products;
use App\Models\categories;
use Carbon\Carbon;
use Session;
use Str;
//khai bao formRequest
use App\Http\Requests\ProductRequest;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $brands = brands::all();
        $categories = categories::all();
        if ($request->seachname != null) {
            $product = products::where('product_name','like','%'.$request->seachname.'%')->get();
            return view('Admin.products.list',compact('product','categories','brands'));
        }
        if ($request->seachbrand != null) {
            $product = products::where('brand_id','like',$request->seachbrand)->get();
           return view('Admin.products.list',compact('product','categories','brands'));
        }
        if ($request->seachcategory != null) {
            $product = products::where('categorie_id','like',$request->seachcategory)->get();
           return view('Admin.products.list',compact('product','categories','brands'));
        }
        $product = products::latest()->get();
        //dd($product_info);
        return view('Admin.products.list', compact('product','categories','brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        $brands = brands::pluck('name','id')->ToArray();
        $categories = categories::pluck('name','id')->ToArray();
        return view('Admin.products.create', compact('brands','categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        $request->validated();
        $products_id = products::insertGetId([
            'product_code' => $request->product_code,
            'product_name' => $request->product_name,
            'description' => $request->description,
            'images' => $request->filesTest->getClientOriginalName(),
            'price' => $request->price,
            'promotional' => $request->promotional,
            'brand_id' => $request->brand_id,
            'categorie_id' => $request->categorie_id,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString()
        ]);
        if($request->hasFile('filesTest')){
            $file = $request->filesTest;
            $file->move('images', $file->getClientOriginalName());
        }
        //lay list danh sach duoc chon

        //lay du lieu products va luu lai
        $products_data = products::findOrFail($products_id);

        return back()->with('thongbao','Lưu Thành Công');

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
     
        $categories = categories::findOrFail($id);
        //2. do du lieu ra view
        return view('Admin.products.index', compact('product'));    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = products::findOrFail($id);
        $brands = brands::pluck('name','id')->ToArray();
        $categories = categories::pluck('name','id')->ToArray();
        return view('Admin.products.edit',compact('product','brands','categories'));

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
         $products =products::findOrFail($id);
          $request->validate([
            'product_code' => 'required|numeric',
            'product_name' => 'required|max:255',
            'description' => 'required|max:255',
            'price' => 'required|numeric',
            'images' => 'required',
            'brand_id' => 'required',
            'categorie_id' => 'required',
       
            
        ],
        [
            'numeric' => ':attribute phải là một số ',
            'product_code.required' => 'không được bỏ trống',
            'product_name.required' => 'Không được bỏ trông',
            'description.required' => 'Không được bỏ trống',
            'price.required' => 'Không được bỏ trông',
            'images.required' => 'Không được bỏ trông',
            'brand_id.required' => 'Không được bỏ trông',
            'categorie_id.required' => 'Không được bỏ trông',
            'product_name.max:255' => 'Không được quá 255 ký tự',
            'description.max:255' => 'Không được quá 255 ký tự',
        ]);
         if ($products) {
         if($request->hasFile('filesTest'))
            {
                $file = $request->filesTest;
                $file->move('images', $file->getClientOriginalName());
                //echo $data;
                $products->product_code = $request->product_code;
                $products->product_name = $request->product_name;
                $products->description = $request->description;
                $products->price = $request->price;
                $products->promotional = $request->promotional;
                $products->brand_id = $request->brand_id;
                $products->categorie_id = $request->categorie_id;
                $products->images = $request->filesTest->getClientOriginalName();
                $products->created_at = Carbon::now()->toDateTimeString();
                $products->updated_at = Carbon::now()->toDateTimeString();
                
                $products->update();
                return back()->with('thongbao','Cập Nhập Dữ Liệu Thành Công');
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
        $product = products::find($id);
        $product->delete();
        return response()->json(['success' => 'Xóa thành công']);
    }
   
}
