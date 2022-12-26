<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Models\CourseFileContent;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\CourseActivity;

class VideoController extends Controller
{
    public function showVideo(Request $request)
    {
        $user_id = '';
        if(session()->has('id')){
            $user_id = $request->session()->get('id');
        }else{
            return abort(404);
        }
        $id = request()->id;
        $course_id = DB::table('course_file_content')->where('id' , $id)->value('course_id');
        $chapter_content = DB::table('course_file_content')->where('id' , $id)->value('chapter');
        $link = DB::table('course_file_content')->where('id' , $id)->value('link');
        $file_content = DB::table('course_file_content')->where('id' , $id)->value('file_content');
        $sum = DB::table('course_file_content')->where('course_id' , $course_id)->count();
        $created_at = CourseFileContent::where('id' , $id)->value('created_at');
        $check_user_id = DB::table('course_activity')->where('user_id' , $user_id)->where('course_id' , $course_id)->count();
        if($check_user_id == 0){
            CourseActivity::create([
                'user_id' => $user_id,
                'course_id' => $course_id
            ]);
        }
        $course_file_contents = DB::table('course_file_content')->get();
        $id_chapter = DB::table('course_main_content')->where('course_id' , $course_id)->where('chapter_content' , $chapter_content)->value('id');
        $course_main_contents = DB::table('course_main_content')->where('course_id' , $course_id)->get();
        $course_name = DB::table('courses')->where('id' , $course_id)->value('course_name');
        $stt_chapter = 1;
        $stt_file = 1;
        return view('user.video' , ['title' => 'Video'] , compact('stt_chapter' , 'stt_file' , 'id' , 'course_id' , 'chapter_content' ,  'link' , 'file_content' , 'sum' , 'created_at' , 'id_chapter' , 'course_name' , 'course_main_contents' , 'course_file_contents'));
    }
}
