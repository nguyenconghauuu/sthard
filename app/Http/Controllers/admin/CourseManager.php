<?php

namespace App\Http\Controllers\admin;
use App\Models\Grade;
use App\Models\Topic;
use App\Models\Course;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class CourseManager extends Controller
{
    public function create(Request $request)
    {
        $topics = Topic::get();
        return view('admin.CourseManager.add-course' , ['title' => 'Thêm một khóa học mới cho trang web của bạn ?'] , compact('topics'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'topic_names' => 'bail|required',
            'course_code' => 'bail|required|unique:courses,course_code',
            'course_name' => 'bail|required|unique:courses,course_name|min:10|max:30',
            'course_title' => 'bail|required|min:10|max:80',
            'filepath' => 'bail|required',
        ] , [
            'topic_names.required' => 'Vui lòng chọn chủ đề',
            'course_code.required' => 'Mã khóa học không được bỏ trống',
            'course_code.unique' => 'Mã khóa học đã tồn tại',
            'course_name.required' => 'Tên khóa học không được bỏ trống',
            'course_name.unique' => 'Tên khóa học đã tồn tại',
            'course_name.min' => 'Tên khóa học tối thiểu là 10 kí tự',
            'course_name.max' => 'Tên khóa học tối đa là 30 kí tự',
            'course_title.required' => 'Tiêu đề khóa học không được bỏ trống',
            'course_title.min' => 'Tiêu đề khóa học tối thiểu là 10 kí tự',
            'course_title.max' => 'Tiêu đề khóa học tối đa là 80 kí tự',
            'filepath.required' => 'Ảnh khóa học không được bỏ trống',
        ]);

        $check_class = DB::table('class')->where('class' , $request->get('course_class'))->count();
        if($check_class == 0){
            Grade::create([
                'class' => $request->get('course_class'),
            ]);
        }

        $filepath = $request->get('filepath');
        $check_file = Str::of($filepath)->afterLast('.');
        if($check_file == 'jpg' || $check_file == 'jpge' || $check_file == 'png' || $check_file == 'jfif'){
            $topic_id = DB::table('topics')->where('topic_name' , $request->get('topic_names'))->value('id');
            Course::create([
                'topic_id' => $topic_id,
                'course_code' => $request->get('course_code'),
                'course_name' => $request->get('course_name'),
                'course_share' => $request->get('course_share'),
                'course_title' => $request->get('course_title'),
                'course_class' => $request->get('course_class'),
                'course_image' => $request->get('filepath')
            ]);
            return redirect()->route('admin.create-course')->with('success' , 'Tạo khóa học thành công');
        }else{
            return back()->withErrors([
                'topic_names' => '',
                'course_code' => '',
                'course_name' => '',
                'course_title' => '',
                'course_class' => '',
                'course_share' => '',
                'filepath' => 'Ảnh khóa học chỉ chấp nhận các file có đuôi (jpg, jpge, png, jfif - kích thước tệp tối đa là 1MB)'
            ])->onlyInput('topic_names' , 'course_code' , 'course_name' , 'course_title' , 'course_class' , 'course_share' , 'filepath');
        }

    }

    public function index(Request $request)
    {
        $stt = 1;
        if($key = request()->keys){
            $courses = Course::orderBy('created_at' , 'DESC')->where('course_share' , $key)->search()->paginate(10);
            return view('admin.CourseManager.list-course' , ['title' => 'Chỉnh sửa thông tin khóa học cho trang web của bạn ?'] , compact('courses' , 'stt'));
        }else{
            $courses = Course::orderBy('created_at' , 'DESC')->search()->paginate(10);
            return view('admin.CourseManager.list-course' , ['title' => 'Chỉnh sửa thông tin khóa học cho trang web của bạn ?'] , compact('courses' , 'stt'));
        }
    }

    public function show(Request $request)
    {
        $courses = Course::find($request->id);
        return view('admin.CourseManager.edit-course' , ['title' => 'Cập nhật thông tin khoá học'] , compact('courses'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'course_title' => 'bail|required|min:10|max:80',
            'filepath' => 'bail|required'
        ] , [
            'course_title.required' => 'Tiêu đề khóa học không được bỏ trống',
            'course_title.min' => 'Tiêu đề khóa học tối thiểu là 10 kí tự',
            'course_title.max' => 'Tiêu đề khóa học tối đa là 80 kí tự',
            'filepath.required' => 'Ảnh khóa học không được bỏ trống'
        ]);

        $filepath = $request->get('filepath');
        $check_file = Str::of($filepath)->afterLast('.');
        if($check_file == 'jpg' || $check_file == 'jpge' || $check_file == 'png' || $check_file == 'jfif'){
            Course::find($request->id)->update([
                'course_share' => $request->get('course_share'),
                'course_title' => $request->get('course_title'),
                'course_image' => $request->get('filepath')
            ]);
            return redirect()->route('admin.list-course')->with('success' , 'Cập nhật thông tin khóa học thành công');
        }else{
            return back()->withErrors([
                'filepath' => 'Ảnh khóa học chỉ chấp nhận các file có đuôi (jpg, jpge, png, jfif - kích thước tệp tối đa là 1MB)'
            ])->onlyInput('filepath');
        }
    }

    public function delete(Request $request)
    {
        Course::find($request->id)->delete();
        return redirect()->route('admin.list-course')->with('success' , 'Xoá khóa học thành công');
    }
}
