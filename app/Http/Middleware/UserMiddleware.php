<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class UserMiddleware
{
    /** 
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Auth::check()) {
            if(Auth::user()->role == 0) {
                return $next($request);
            }else {
                return redirect('home')
                    ->with('error','Bạn Cần Phải Đăng Nhập trước khi thanh toán');
            }
        }else {
            return redirect('home')
                    ->with('error','Bạn Cần Phải Đăng Nhập trước khi thanh toán');
        }
    }
}
