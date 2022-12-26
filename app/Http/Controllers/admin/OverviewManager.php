<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CourseOverviewContent;

class OverviewManager extends Controller
{
    public function index(Request $request)
    {
        $stt = 1;
        $course_overview_contents = CourseOverviewContent::orderBy('created_at' , 'DESC')->search()->paginate(10);
        return view('admin.OverviewManager.list-overview' , ['title' => 'Chỉnh sửa nội dung tổng quan khóa học cho trang web của bạn ?'] , compact('course_overview_contents' , 'stt'));
    }

    public function show(Request $request)
    {
        $course_overview_contents = CourseOverviewContent::find($request->id);
        return view('admin.OverviewManager.edit-overview' , ['title' => 'Cập nhật nội dung tổng quan'] , compact('course_overview_contents'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'overview_content' => 'bail|required|min:10'
        ] , [
            'overview_content.required' => 'Nội dung không được bỏ trống',
            'overview_content.min' => 'Nội dung tối thiểu là 10 kí tự',
        ]);
        CourseOverviewContent::find($request->id)->update([
            'overview_content' => $request->get('overview_content')
        ]);
        return redirect()->route('admin.list-overview-content-course')->with('success' , 'Cập nhật nội dung tổng quan thành công');
    }

    public function delete(Request $request)
    {
        CourseOverviewContent::find($request->id)->delete();
        return redirect()->route('admin.list-overview-content-course')->with('success' , 'Xóa nội dung tổng quan thành công');
    }
}
