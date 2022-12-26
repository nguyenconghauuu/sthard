<?php

namespace App\Http\Controllers\user;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class ForgotPassWordController extends Controller
{
    public function store(Request $request)
    {
        $request->validate(['email_address' => 'bail|required'] , ['email_address.required' => 'Email không được bỏ trống']);
        $email_address = $request->get('email_address');
        $email_db = DB::table('users')->where('email' , $email_address)->value('email');
        if($email_address == $email_db){
            $token = Str::random(10);
            User::where('email' , $email_address)->update(['token' => $token]);
            $fullname = User::where('email' , $email_address)->value('fullname');
            Mail::send('user.sendmailforgotpassword' , compact('fullname' , 'email_address' , 'token') , function($email) use($email_address , $fullname){
                $email->subject('StudyHard - Lấy lại mật khẩu');
                $email->to($email_address , $fullname);
            });
            return redirect()->route('guest.index')->with('forgot_password' , 'Bạn vui lòng kiểm tra email để thực hiện việc thay đổi mật khẩu.');
        }else{
            return back()->withErrors([
                'email_address' => 'Email chưa được đăng ký tài khoản trong hệ thống'
            ])->onlyInput('email_address');
        }
    }

    public function show(Request $request)
    {
        $email_address = request()->email;
        $token = request()->token;
        $token_db = DB::table('users')->where('email' , $email_address)->value('token');
        $id = DB::table('users')->where('email' , $email_address)->value('id');
        if($token_db === $token){
            return view('user.resetpassword' , ['title' => 'Cập nhật mật khẩu'] , compact('email_address'));
        }
        return abort(404);
    }

    public function update(Request $request)
    {
        $request->validate([
            'passcode_new' => 'bail|required|min:6|max:30',
            'passcode_new_comfirm' => 'bail|required|same:passcode_new'
        ] , [
            'passcode_new.required' => 'Mật khẩu không được bỏ trống',
            'passcode_new.min' => 'Mật khẩu mới tối thiếu là 6 kí tự',
            'passcode_new.max' => 'Mật khẩu mới tối đa là 30 kí tự',
            'passcode_new_comfirm.required' => 'Mật khẩu nhập lại không được bỏ trống',
            'passcode_new_comfirm.same' => 'Mật khẩu nhập lại không chính xác',
        ]);

        $email_address = request()->email;
        User::where('email' , $email_address)->update([
            'password' => Hash::make($request->get('passcode_new')),
            'token' => null,
        ]);
        return redirect()->route('guest.index')->with('reset_password' , 'Đổi mật khẩu thành công. Vui lòng đăng nhập để tiếp tục sử dụng dịch vụ.');
    }
}
