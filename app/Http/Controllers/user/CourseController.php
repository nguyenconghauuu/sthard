<?php

namespace App\Http\Controllers\user;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CourseFileContent;
use App\Models\CourseIndexContent;
use App\Models\CourseMainContent;
use App\Models\CourseOverviewContent;
use App\Models\CourseActivity;

class CourseController extends Controller
{
    public function index(Request $request)
    {
        if(!(session()->has('id'))){
            return abort(404);
        }
        $course_id = $request->id;
        $course_image = Course::where('id' , $course_id)->value('course_image');
        $course_name = Course::where('id' , $course_id)->value('course_name');
        $sum_file = CourseFileContent::where('course_id' , $course_id)->count();
        $sum_chapter = CourseMainContent::where('course_id' , $course_id)->count();
        $sum_user = CourseActivity::where('course_id' , $course_id)->count();
        $created_at = Course::where('id' , $course_id)->value('created_at');
        $course_overview_contents = CourseOverviewContent::where('course_id' , $course_id)->value('overview_content');
        $course_index_contents = CourseIndexContent::where('course_id' , $course_id)->orderBy('created_at' , 'ASC')->get();
        $course_main_contents = CourseMainContent::where('course_id' , $course_id)->get();
        $course_file_contents = CourseFileContent::get();
        return view('user.course' , ['title' => 'Nội dung'] , compact('course_image' , 'course_name' , 'sum_file' , 'sum_chapter' , 'sum_user' , 'created_at' , 'course_overview_contents' , 'course_index_contents' , 'course_main_contents' , 'course_file_contents'));
    }
}
