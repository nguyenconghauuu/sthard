<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileManager extends Controller
{
    public function show(Request $request)
    {
        $id = '';
        if(session()->has('id')){
            $id = $request->session()->get('id');
        }
        $user = User::find($id);
        return view('admin.profile' , ['title' => 'Cài đặt tài khoản - Hồ sơ'] , compact('user'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'fullname' => 'bail|required|min:6|max:30'
        ] , [
            'fullname.required' => 'Họ và tên không được bỏ trống',
            'fullname.min' => 'Họ và tên tối thiếu là 6 kí tự',
            'fullname.max' => 'Họ và tên tối đa là 30 kí tự'
        ]);
        User::find($request->id)->update([
            'fullname' => $request->get('fullname'),
        ]);
        session()->put('username' , $request->get('username'));
        return redirect()->route('admin.show-profile')->with('success' , 'Cập nhật tài khoản thành công');
    }
}
