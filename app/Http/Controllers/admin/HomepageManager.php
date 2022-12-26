<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class HomepageManager extends Controller
{
    public function index(Request $request)
    {
        $id = '';
        if(session()->has('id')){
            $id = $request->session()->get('id');
        }
        $fullname = User::where('id' , $id)->value('fullname');
        $email = User::where('id' , $id)->value('email');
        $today = Carbon::now('Asia/Ho_Chi_Minh')->format('d-m-Y');
        $value_day = Str::before(Carbon::now()->toDayDateTimeString() , ',');
        $day = '';
        $arr = ['Mon' => 'Thứ 2' , 'Tue' => 'Thứ 3' , 'Wed' => 'Thứ 4' , 'Thu' => 'Thứ 5' , 'Fri' => 'Thứ 6' , 'Sat' => 'Thứ 7' , 'Sun' => 'Chủ nhật'];
        $day = $arr[$value_day];
        session()->put([
            'id' => $id,
            'fullname' => $fullname,
            'email' => $email,
            'day' => $day,
            'today' => $today
        ]);
        $sum_slide_show = DB::table('slide_show')->count();
        $sum_users = DB::table('users')->count();
        $sum_topics = DB::table('topics')->count();
        $sum_courses = DB::table('courses')->count();
        $sum_overview = DB::table('course_overview_content')->count();
        $sum_index = DB::table('course_index_content')->count();
        $sum_file = DB::table('course_file_content')->count();
        $sum_content = $sum_overview + $sum_index + $sum_file;
        $sum_exams = DB::table('exams')->count();
        $sum_questions = DB::table('questions')->count();
        return view('admin.homepage' , ['title' => 'Trang chủ'] , compact('sum_slide_show' , 'sum_users' , 'sum_topics' ,
        'sum_courses' , 'sum_content' , 'sum_exams' , 'sum_questions'));
    }
}
