<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'username' => 'bail|required',
            'passcode' => 'bail|required',

        ] , [
            'username.required' => 'Tên đăng nhập không được bỏ trống',
            'passcode.required' => 'Mật khẩu không được bỏ trống',
        ]);

        $username = $request->get('username');
        $passcode = $request->get('passcode');
        $id = DB::table('users')->where('username' , $username)->value('id');
        $level = DB::table('users')->where('username' , $username)->value('level');
        $status = DB::table('users')->where('username' , $username)->value('status');

        if (Auth::attempt(['username' => $username , 'password' => $passcode , 'level' => $level , 'status' => $status])) {
            if($status == 0){
                return redirect()->route('guest.index')->with('actived_error' , 'Tài khoản của bạn chưa đc kích hoạt. Vui lòng vào email để kích hoạt tài khoản.');
            }
            session()->put('id' , $id);
            if($level == 1){
                return redirect()->route('admin.homepage');
            }else{
                return redirect()->route('user.homepage');
            }
        }

        $check_username = DB::table('users')->where('username' , $username)->count();
        if($check_username == 0){
            return back()->withErrors([
                'username' => 'Tên đăng nhập không trùng khớp với hệ thống',
                'passcode' => '',
            ])->onlyInput('username' , 'passcode');
        }else{
            return back()->withErrors([
                'username' => '',
                'passcode' => 'Mật khẩu đăng nhập không trùng khớp với hệ thống',
            ])->onlyInput('username' , 'passcode');
        }
        
    }
}
