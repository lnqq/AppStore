<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;
use App\Models\User;
use App\Models\customers;
use Auth;
use Hash;
use Carbon\Carbon;
//khai bao formRequest
use App\Http\Requests\UserRequest;



class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function logout(){
        if(Auth::check()){
            Auth::logout();
            return back()->with('thongbao','Đăng xuất thành công');
        }
    }

    public function loginClient(Request $request){
        $data = $request->only('email','password');

        if(Auth::attempt($data,$request->has('remember'))){
            return back()->with('thongbao','Đăng nhập thành công');
        }else{
            return back()->with('error','Đăng nhập thất bại. Xin vui lòng kiểm tra lại tài khoản');
        }
    }

    public function registerClient(Request $request){
        $this->validate($request,
            [
                'name' => 'required|min:2|max:255|unique:users',
                'password' => 'required|min:6|max:255',
                'first_name' => 'required',
                'last_name' => 'required',
                'email' => 'required',
                'postal_address' => 'required',
                'physical_address' => 'required',
            ],
            [
                'name.required' => 'Tên tài khoản không được bỏ trống',
                'name.min' => 'Họ và tên phải có tối thiểu 2 ký tự',
                'name.max' => 'Họ và tên tối đa có 255 ký tự',
                'password.required' => 'Mật khẩu không được bỏ trống',
                'password.min' => 'Mật khẩu phải có tối thiểu 6 ký tự',
                'password.max' => 'Mật khẩu tối đa có 255 ký tự',
                'first_name.required' => 'Họ không được để trống',
                'last_name.required' => 'Tên không được để trống',
                'email.required' => 'email không được để trống',
                'postal_address.required' => 'địa chỉ bưu điện không được để trống',
                'physical_address.required' => 'địa chỉ nhà không được để trống',

            ]
        );
        $data = $request->all();

       
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
        

        //Auth::login($user);
        return back()->with('thongbao','Đăng ký tài khoản thành công');
    }

    public function loginAdmin(UserRequest $request) 
    {
        $request->validated();
        $data = $request->only('name','password');
        if(Auth::attempt($data,$request->has('remember'))){
            if(Auth::user()->role == 1)
                return redirect('admin/')
                        ->with('thongbao','Đăng nhập thành công');
            else if(Auth::user()->role == 0){
                return redirect('home');
            }
            else
                return redirect('home')->with('error','Đăng nhập thất bại. Xin vui lòng kiểm tra lại tài khoản');
        }else{
            return redirect()
                    ->route('login.admin')
                    ->with('error','Đăng nhập thất bại. Xin vui lòng kiểm tra lại tài khoản');
        }
    }

}
