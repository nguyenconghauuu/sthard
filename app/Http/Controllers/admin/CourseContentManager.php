<?php

namespace App\Http\Controllers\admin;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\CourseFileContent;
use App\Models\CourseMainContent;
use App\Models\CourseIndexContent;
use App\Models\CourseOverviewContent;
use App\Models\CourseIndex;

class CourseContentManager extends Controller
{
    public function index(Request $request)
    {
        $stt = 1;
        if($key = request()->keys){
            $courses = Course::orderBy('created_at' , 'DESC')->where('course_share' , $key)->search()->paginate(10);
            return view('admin.CourseManager.list-content-course' , ['title' => 'Thêm một nội dung mới cho khóa học của bạn ?'] , compact('courses' , 'stt'));
        }else{
            $courses = Course::orderBy('created_at' , 'DESC')->search()->paginate(10);
            return view('admin.CourseManager.list-content-course' , ['title' => 'Thêm một nội dung mới cho khóa học của bạn ?'] , compact('courses' , 'stt'));
        }
    }

    public function show(Request $request)
    {
        $course_id = request()->id;
        $course_name = Course::where('id' , $course_id)->value('course_name');
        $course_overview_contents = CourseOverviewContent::where('course_id' , $course_id)->value('overview_content');
        $course_index_contents = CourseIndexContent::where('course_id' , $course_id)->orderBy('created_at' , 'ASC')->get();
        $course_main_contents = CourseMainContent::where('course_id' , $course_id)->get();
        $course_file_contents = CourseFileContent::get();
        return view('admin.CourseManager.content-course' , ['title' => 'Nội dung khóa học'] , compact('course_id' , 'course_name' , 'course_overview_contents' , 'course_index_contents' , 'course_main_contents' , 'course_file_contents'));
    }

    public function addOverview(Request $request)
    {
        $request->validate([
            'overview_content' => 'bail|required|min:17'
        ] , [
            'overview_content.required' => 'Nội dung tổng quan không được bỏ trống',
            'overview_content.min' => 'Nội dung tối thiểu là 10 kí tự'
        ]);
        $course_id = $request->get('course_id');
        $course_name = DB::table('courses')->where('id' , $course_id)->value('course_name');
        $overview_content = $request->get('overview_content');
        $check_overview_content = DB::table('course_overview_content')->where('course_id' , $course_id)->count();
        if($check_overview_content == 0){
            CourseOverviewContent::create([
                'course_id' => $course_id,
                'course_name' => $course_name,
                'overview_content' => $overview_content
            ]);
            return redirect()->route('admin.content-course' , ['id' => $course_id])->with('success_1' , 'Thêm nội dung tổng quan thành công');
        }else{
            return redirect()->route('admin.content-course' , ['id' => $course_id])->with('error_1' , 'Bạn không được thêm nội dung tổng quan nữa. Muốn chỉnh sửa hãy vào chức năng Nội dung mục Tổng quan');
        }
    }
    
    public function addIndex(Request $request)
    {
        $course_id = $request->get('course_id');
        $course_name = $request->get('course_name');
        $check_course_name = DB::table('course_index')->where('course_id' , $course_id)->where('course_name' , $course_name)->count();
        if($check_course_name == 0){
            CourseIndex::create([
                'course_id' => $course_id,
                'course_name' => $course_name
            ]);
        }

        $index_content = $request->get('index_content');
        $request->validate([
            'index_content' => 'bail|required|min:10'
        ],[
            'index_content.required' => 'Nội dung mục lục không được bỏ trống',
            'index_content.min' => 'Nội dung tối thiểu là 10 kí tự'
        ]);
        $check_index_content = DB::table('course_index_content')->where('course_id' , $course_id)->where('index_content' , $index_content)->count();
        if($check_index_content == 0){
            CourseIndexContent::create([
                'course_id' => $course_id,
                'index_content' => $index_content
            ]);
            return redirect()->route('admin.content-course' , ['id' => $course_id])->with('success_2' , 'Thêm nội dung mục lục thành công');
        }else{
            return redirect()->route('admin.content-course' , ['id' => $course_id])->with('error_2' , 'Nội dung mục lục đã tồn tại. Vui lòng nhập một nội dung mục lục khác');
        }
        
    }

    public function addChapter(Request $request)
    {
        $request->validate([
            'chapter_content' => 'bail|required|min:10'
        ],[
            'chapter_content.required' => 'Nội dung chương học không được bỏ trống',
            'chapter_content.min' => 'Nội dung tối thiểu là 10 kí tự'
        ]);
        $course_id = $request->get('course_id');
        $chapter_content = $request->get('chapter_content');
        $check_chapter_content = DB::table('course_main_content')->where('course_id' , $course_id)->where('chapter_content' , $chapter_content)->count();
        if($check_chapter_content == 0){
            CourseMainContent::create([
                'course_id' => $course_id,
                'chapter_content' => $chapter_content
            ]);
            return redirect()->route('admin.content-course' , ['id' => $course_id])->with('success_3' , 'Thêm nội dung chương học thành công');
        }else{
            return redirect()->route('admin.content-course' , ['id' => $course_id])->with('error_3' , 'Nội dung chương học đã tồn tại. Vui lòng nhập một nội dung chương học khác');
        }
        
    }

    public function addFile(Request $request)
    {
        $request->validate([
            'file_content' => 'bail|required|min:10',
            'filepath' => 'bail|required'
        ] , [
            'file_content.required' => 'Nội dung không được bỏ trống',
            'file_content.min' => 'Nội dung tối thiểu là 10 kí tự',
            'filepath.required' => 'Vui lòng chọn file'
        ]);

        $course_id = $request->get('course_id');
        $chapter_content = $request->get('chapter_content');
        $link = $request->get('filepath');
        $file_content = $request->get('file_content');
        $taifs_file = Str::of($link)->afterLast('.');
        $check_file_content = DB::table('course_file_content')->where('chapter' , $chapter_content)->where('file_content' , $file_content)->where('course_id' , $course_id)->count();
        if($taifs_file == 'pdf' || $taifs_file == 'mp4'){
            if($check_file_content == 0){
                CourseFileContent::create([
                    'course_id' => $course_id,
                    'chapter' => $chapter_content,
                    'link' => $link,
                    'file_content' => $file_content,
                    'taifs_file' => $taifs_file
                    ]);
                return redirect()->route('admin.content-course' , ['id' => $course_id])->with('success_4' , 'Thêm nội dung file thành công');
            }else{
                return redirect()->route('admin.content-course' , ['id' => $course_id])->with('error_4' , 'Nội dung file đã tồn tại. Vui lòng nhập một nội dung file khác');
            }
        }else{
            return redirect()->route('admin.content-course' , ['id' => $course_id])->with('error_5' , 'Định dạng file không hợp lệ');
        }
 
    }
}
