<?php

namespace App\Http\Controllers\user;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function show(Request $request)
    {
        $id = '';
        if(session()->has('id')){
            $id = $request->session()->get('id');
        }else{
            return abort(404);
        }

        $user = User::find($id);
        return view('user.profile' , ['title' => 'Thông tin cá nhân'] , compact('user'));
    }

    public function store(Request $request)
    {
        $id = $request->id;
        $request->validate([
            'passcode' => 'bail|required|min:6|max:30',
            'passcode_comfirm' => 'bail|required|same:passcode'
        ] , [
            'passcode.required' => 'Mật khẩu không được bỏ trống',
            'passcode.min' => 'Mật khẩu mới tối thiếu là 6 kí tự',
            'passcode.max' => 'Mật khẩu mới tối đa là 30 kí tự',
            'passcode_comfirm.required' => 'Mật khẩu nhập lại không được bỏ trống',
            'passcode_comfirm.same' => 'Mật khẩu nhập lại không chính xác',
        ]);

        User::find($id)->update([
            'password' => Hash::make($request->get('passcode')),
        ]);
        return redirect()->route('user.show-profile');
    }

    public function delete(Request $request)
    {
       User::find($request->id)->delete();
       return redirect()->route('guest.index');
    }
}
