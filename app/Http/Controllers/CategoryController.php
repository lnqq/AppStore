<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categories;
use Carbon\Carbon;
use App\Models\products;
use Session;
//khai bao formRequest
use App\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->seachname != null) {
            $category_info = categories::where('name','like','%'.$request->seachname.'%')->get();
            return view('Admin.category.list',compact('category_info'));
        }
        $category_info = categories::latest()->get();
        return view('Admin.category.list', compact('category_info'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        $category_id = categories::insertGetId([
            'name' => $request->name,
            'description' => $request->description,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString()
        ]);

        //lay du lieu category va luu lai
        $category_data = categories::findOrFail($category_id);

        // $category->save();
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
        $category = categories::findOrFail($id);
        //2. do du lieu ra view
        return view('Admin.category.index', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = categories::findOrFail($id);
        return view('Admin.category.edit', compact('category'));
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
        $category_data = categories::findOrFail($id);
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
        if ($category_data) {
            $category_data->name = $request->name;
            $category_data->description = $request->description;
            $category_data->created_at = Carbon::now()->toDateTimeString();
            $category_data->updated_at = Carbon::now()->toDateTimeString();

        $category_data->update();

        return back()->with('thongbao','Lưu Thông Tin Thành Công');
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
        $category = categories::find($id);
        $category->delete();
        return response()->json(['success' => 'Xóa thành công']);
    }
}
