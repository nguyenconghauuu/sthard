<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class AccountManager extends Controller
{
    public function create()
    {
        return view('admin.AccountManager.add-account' , ['title' => 'Thêm một thành viên mới cho trang web của bạn ?']);
    }

    public function store(Request $request)
    {
        $request->validate([
            'username' => 'bail|required|alpha|regex:/(^[a-z]+[a-z\\-]*$)/u|min:6|max:30|unique:users,username',
            'passcode' => 'bail|required|min:6|max:30',
            'user_code' => '',
            'email' => 'bail|required|unique:users,email',
            'fullname' => 'bail|required|min:6|max:30',
        ] , [
            'username.required' => 'Tên đăng nhập không được bỏ trống',
            'username.alpha' => 'Tên đăng nhập không được chứa kí tự đặc biệt và số',
            'username.regex' => 'Tên đăng nhập chỉ chấp nhận các chữ cái thường a đến z và không có dấu',
            'username.min' => 'Tên đăng nhập tối thiểu là 6 kí tự',
            'username.max' => 'Tên đăng nhập tối đa là 30 kí tự',
            'username.unique' => 'Tên đăng nhập đã tồn tại',
            'passcode.required' => 'Mật khẩu không được bỏ trống',
            'passcode.min' => 'Mật khẩu tối thiểu là 6 kí tự',
            'passcode.max' => 'Mật khẩu tối đa là 30 kí tự',
            'email.required' => 'Email không được bỏ trống',
            'email.unique' => 'Email đã tồn tại',
            'fullname.required' => 'Họ và tên không được bỏ trống',
            'fullname.min' => 'Họ tên tối thiểu là 6 kí tự',
            'fullname.max' => 'Họ tên tối đa là 30 kí tự'
        ]);

        User::create([
            'user_code' => $request->get('user_code'),
            'username' => $request->get('username'),
            'password' => Hash::make($request->get('passcode')),
            'email' => $request->get('email'),
            'fullname' => $request->get('fullname'),
            'level' => $request->get('level'),
            'status' => 1
         ]);
        return redirect()->route('admin.create-account')->with('success','Tạo tài khoản thành công');

    }

    public function index(Request $request)
    {
        $stt = 1;
        if($key = request()->keys){
            $users = User::orderBy('created_at' , 'DESC')->where('level' , $key)->search()->paginate(10);
            return view('admin.AccountManager.list-account' , ['title' => 'Chỉnh sửa thông tin thành viên cho trang web của bạn ?'] , compact('stt' , 'users'));
        }else{
            $users = User::orderBy('created_at' , 'DESC')->search()->paginate(10);
            return view('admin.AccountManager.list-account' , ['title' => 'Chỉnh sửa thông tin thành viên cho trang web của bạn ?'] , compact('stt' , 'users'));
        }
    }

    public function show(Request $request)
    {
        $user = User::find($request->id);
        return view('admin.AccountManager.edit-account' , ['title' => 'Cập nhật thông tin thành viên'] , compact('user'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'passcode' => 'bail|required|min:6',
            'fullname' => 'bail|required|min:6',
        ] , [
            'passcode.required' => 'Mật khẩu không được bỏ trống',
            'passcode.min' => 'Mật khẩu tối thiểu là 6 kí tự',
            'fullname.required' => 'Họ và tên không được bỏ trống',
            'fullname.min' => 'Họ tên tối thiểu là 6 kí tự',
        ]);
        
        $password_db = DB::table('users')->where('id' , $request->id)->value('password');
        $passcode = $request->get('passcode');
        if($password_db == $passcode){
            User::find($request->id)->update([
                'fullname' => $request->get('fullname'),
                'level' => $request->get('level'),
            ]);
            return redirect()->route('admin.list-account')->with('success' , 'Cập nhật thông tin thành công');
        }else{
            User::find($request->id)->update([
                'password' => Hash::make($passcode),
                'fullname' => $request->get('fullname'),
                'level' => $request->get('level'),
            ]);
            return redirect()->route('admin.list-account')->with('success' , 'Cập nhật thông tin thành công');
        }

    }

    public function delete(Request $request)
    {
        User::find($request->id)->delete();
        return redirect()->route('admin.list-account')->with('success' , 'Xóa tài khoản thành công');
    }

}
