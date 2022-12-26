<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class CourseAdvancedController extends Controller
{
    public function indexCourseAdvancedGuest()
    {
        $topics = DB::table('topics')->orderBy('created_at' , 'ASC')->get();
        $courses = DB::table('courses')->orderBy('created_at' , 'ASC')->get();
        return view('guest.course-advanced' , ['title' => 'Khóa học nâng cao'] , compact('topics' , 'courses'));
    }

    public function index()
    {
        if(!(session()->has('id'))){
            return abort(404);
        }
        $topics = DB::table('topics')->orderBy('created_at' , 'ASC')->get();
        $courses = DB::table('courses')->orderBy('created_at' , 'ASC')->get();
        return view('user.course-advanced' , ['title' => 'Khóa học nâng cao'] , compact('topics' , 'courses'));
    }
}
