<?php

namespace App\Http\Controllers\user;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class RegisterController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'fullname' => 'bail|required|min:6|max:30',
            'user_name' => 'bail|required|alpha|regex:/(^[a-z]+[a-z\\-]*$)/u|min:6|max:30|unique:users,username',
            'pass_code' => 'bail|required|min:6|max:30',
            'passcode_comfirm' => 'bail|required|same:pass_code',
            'email' => 'bail|required|unique:users,email',
        ] , [
            'fullname.required' => 'Họ và tên không được bỏ trống',
            'fullname.min' => 'Họ tên tối thiểu là 6 kí tự',
            'fullname.max' => 'Họ tên tối đa là 30 kí tự',
            'user_name.required' => 'Tên đăng nhập không được bỏ trống',
            'user_name.alpha' => 'Tên đăng nhập không được chứa kí tự đặc biệt và số',
            'user_name.regex' => 'Tên đăng nhập chỉ chấp nhận các chữ cái thường a-z và không có dấu',
            'user_name.min' => 'Tên đăng nhập tối thiểu là 6 kí tự',
            'user_name.max' => 'Tên đăng nhập tối đa là 30 kí tự',
            'user_name.unique' => 'Tên đăng nhập đã tồn tại',
            'pass_code.required' => 'Mật khẩu không được bỏ trống',
            'pass_code.min' => 'Mật khẩu tối thiểu là 6 kí tự',
            'pass_code.max' => 'Mật khẩu tối đa là 30 kí tự',
            'passcode_comfirm.required' => 'Mật khẩu nhập lại không được bỏ trống',
            'passcode_comfirm.same' => 'Mật khẩu nhập lại không chính xác',
            'email.required' => 'Email không được bỏ trống',
            'email.unique' => 'Email đã tồn tại',
        ]);

        $fullname = $request->get('fullname');
        $email_address = $request->get('email');
        $username = $request->get('user_name');
        $password = Hash::make($request->get('pass_code'));
        $token = Str::random(10);

        Mail::send('guest.sendmail' , compact('fullname' , 'username' , 'email_address' , 'token') , function($email) use($email_address , $fullname){
            $email->subject('StudyHard - Xác nhận tài khoản');
            $email->to($email_address , $fullname);
        });

        User::create([
            'fullname' => $fullname,
            'email' => $email_address,
            'username' => $username,
            'password' => $password,
            'level' => 2,
            'token' => $token,
            'status' => 0
        ]);

        return redirect()->route('guest.index')->with('register_success' , 'Đăng ký thành công. Vui lòng xác nhận email để kích hoạt tài khoản của bạn.');
    }

    public function actived(Request $request)
    {
        $username = request()->username;
        $token = request()->token;
        $token_db = DB::table('users')->where('username' , $username)->value('token');
        if($token_db === $token){
            User::where('username' , $username)->update([
                'token' => null,
                'status' => 1
            ]);
            return redirect()->route('guest.index')->with('actived_success' , 'Xác thực email thành công. Vui lòng đăng nhập để tiếp tục sử dụng dịch vụ.');
        }
        return abort(404);
    }
}
