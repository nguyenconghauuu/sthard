<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class PasswordUpdateManager extends Controller
{
    public function show(Request $request)
    {
        $id = '';
        if(session()->has('id')){
            $id = $request->session()->get('id');
        }
        $user = User::find($id);
        return view('admin.security' , ['title' => 'Cài đặt tài khoản - Mật khẩu'] , compact('user'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'password_old' => 'bail|required',
            'password_new' => 'bail|required|min:6|max:30',
            'password_comfirm' => 'bail|required|same:password_new'
        ] , [
            'password_old.required' => 'Mật khẩu hiện tại không được bỏ trống',
            'password_new.required' => 'Mật khẩu mới không được bỏ trống',
            'password_new.min' => 'Mật khẩu mới tối thiếu là 6 kí tự',
            'password_new.max' => 'Mật khẩu mới tối đa là 30 kí tự',
            'password_comfirm.required' => 'Mật khẩu nhập lại không được bỏ trống',
            'password_comfirm.same' => 'Mật khẩu nhập lại không chính xác',
        ]);

        $password_old = $request->get('password_old');
        $password_db = User::find($request->id)->value('password');
        if(Hash::check($password_old , $password_db)){
            User::find($request->id)->update([
                'password' => Hash::make($request->get('password_new'))
            ]);
            return redirect()->route('admin.show-password' , $request->id)->with('success' , 'Cập nhật mật khẩu thành công');
        }else{
            return back()->withErrors([
                'password_old' => 'Mật khẩu hiện tại không chính xác',
                'password_new' => '',
                'password_comfirm' => ''
            ])->onlyInput('password_old' , 'password_new' , 'password_comfirm');
        }

    }
}
