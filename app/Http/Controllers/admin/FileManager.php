<?php

namespace App\Http\Controllers\admin;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\CourseFileContent;
use App\Models\CourseMainContent;
use App\Http\Controllers\Controller;

class FileManager extends Controller
{
    public function index(Request $request)
    {
        $stt = 1;
        $courses = Course::orderBy('created_at' , 'ASC')->search()->paginate(5);
        $course_main_contents = CourseMainContent::orderBy('created_at' , 'ASC')->get();
        $course_file_contents = CourseFileContent::orderBy('created_at' , 'ASC')->get();
        return view('admin.FileManager.list-file' , ['title' => 'Chỉnh sửa nội dung file khóa học cho trang web của bạn ?'] , compact('stt' , 'courses' , 'course_main_contents' , 'course_file_contents'));
    }

    public function show(Request $request)
    {
        $course_file_contents = CourseFileContent::find($request->id);
        return view('admin.FileManager.edit-file' , ['title' => 'Cập nhật nội dung file khóa học'] , compact('course_file_contents'));
    }

    public function update(Request $request)
    {
        $request->validate(['filepath' => 'bail|required'] , ['filepath.required' => 'Vui lòng chọn file']);
        $filepath = $request->get('filepath');
        $check_file = Str::of($filepath)->afterLast('.');
        if($check_file == 'pdf' || $check_file == 'mp4'){
            CourseFileContent::find($request->id)->update([
                'link' => $filepath,
                'taifs_file' => $check_file
            ]);
            return redirect()->route('admin.list-file-content-course')->with('success' , 'Cập nhật nội dung file thành công');
        }else{
            return redirect()->route('admin.show-file-content-course' , ['id' => $request->id])->with('error' , 'Định dạng file không hợp lệ');
        }
        
    }

    public function delete(Request $request)
    {
        CourseFileContent::find($request->id)->delete();
        return redirect()->route('admin.list-file-content-course')->with('success' , 'Xóa nội dung file thành công');
    }
}
