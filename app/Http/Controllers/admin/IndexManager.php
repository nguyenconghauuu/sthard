<?php

namespace App\Http\Controllers\admin;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Models\CourseIndexContent;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class IndexManager extends Controller
{
    public function index(Request $request)
    {
        $stt = 1;
        $courses = Course::orderBy('created_at' , 'DESC')->search()->paginate(10);
        return view('admin.IndexManager.list-index' , ['title' => 'Chỉnh sửa nội dung mục lục khóa học cho trang web của bạn ?'] , compact('courses' , 'stt'));
    }

    public function show(Request $request)
    {
        $course_index_contents = CourseIndexContent::find($request->id);
        return view('admin.IndexManager.edit-index' , ['title' => 'Cập nhật nội dung mục lục'] , compact('course_index_contents'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'index_content' => 'bail|required|min:10'
        ],[
            'index_content.required' => 'Nội dung không được bỏ trống',
            'index_content.min' => 'Nội dung tối thiểu là 10 kí tự'
        ]);
        
        $course_id = DB::table('course_index_content')->where('id' , $request->id)->value('course_id');
        $index_content_db = DB::table('course_index_content')->where('id' , $request->id)->value('index_content');
        $index_content = $request->get('index_content');
        
        if($index_content_db == $index_content){
            return redirect()->route('admin.list-index-course')->with('success' , 'Cập nhật nội dung mục lục thành công');
        }else{
            $check_index_content = DB::table('course_index_content')->where('course_id' , $course_id)->where('index_content' , $index_content)->count();
            if($check_index_content == 0){
                CourseIndexContent::find($request->id)->update([
                    'index_content' => $request->get('index_content')
                ]);
                return redirect()->route('admin.list-index-course')->with('success' , 'Cập nhật nội dung mục lục thành công');
            }else{
                return redirect()->route('admin.show-index-course' , ['id' => $request->id])->with('error' , 'Nội dung mục lục đã tồn tại. Vui lòng nhập một nội dung mục lục khác');
            }
        }
    }

    public function destroy(Request $request)
    {
        CourseIndexContent::find($request->id)->delete();
        return redirect()->route('admin.list-index-course')->with('success' , 'Xóa nội dung thành công'); 
    }
}
