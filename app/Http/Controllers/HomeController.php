<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;
use App\Models\categories;
use App\Models\brands;
use App\Models\User;
use App\Models\orders;
use App\Models\orders_details;
use Cart;
use Auth;
use Hash;
use Session;

class HomeController extends Controller
{
    
    public function index()
    {
        return view('Client.pages.index');
    }

    public function __construct()
    {
    	$products = products::paginate(5);
    	$category = categories::all();
        $brands = brands::all();
        $product1 = products::where('brand_id','like',1)->get();
        $product2 = products::where('categorie_id','like',2)->get();
        view()->share(['product1' => $product1,'product2' => $product2,'category' => $category,'brands' => $brands,'products' => $products]);
    }

    public function detail($id, Request $request)
    {
        $product = products::findOrFail($id);
        // $brands = brands::pluck('name','id')->toArray();
        $brands = brands::all();
        $categories = categories::all();
        // $product = products::with('categories','brands')->get();
        return view('Client.pages.detail',compact('product','brands','categories'));
    }
    
    public function indexcategories($id)
    {
        $producta = products::where('categorie_id','like',$id)->get();
        $category = categories::all();
        return view('Client.pages.indexCategory',compact('producta','category'));
    }

    public function indexbrand($id)
    {
        $productb = products::where('brand_id','like',$id)->get();
        $brands = brands::all();
        return view('Client.pages.indexBrand',compact('productb','brands'));
    }


}


