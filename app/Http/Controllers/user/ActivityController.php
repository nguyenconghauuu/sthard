<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ActivityController extends Controller
{
    public function index(Request $request)
    {
        $user_id = '';
        if(session()->has('id')){
            $user_id = $request->session()->get('id');
        }else{
            return abort(404);
        }
        $courses = DB::table('courses')->orderBy('created_at' , 'ASC')->get();
        $course_activitys = DB::table('course_activity')->where('user_id' , $user_id)->get();
        $exams = DB::table('exams')->orderBy('created_at' , 'ASC')->get();
        $exam_activitys = DB::table('exam_activity')->where('user_id' , $user_id)->get();
        return view('user.activity' , ['title' => 'Hoạt động'] , compact('courses' , 'course_activitys' , 'exams' , 'exam_activitys'));
    }
}
