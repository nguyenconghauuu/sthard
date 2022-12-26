<?php

namespace App\Http\Controllers\admin;

use App\Models\Exam;
use App\Models\Grade;
use App\Models\Topic;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ExamManager extends Controller
{
    public function create()
    {
        $topics = Topic::get();
        return view('admin.ExamManager.add-exam' , ['title' => 'Thêm một đề thi mới cho trang web của bạn ?'] , compact('topics'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'topic_names' => 'bail|required',
            'exam_name' => 'bail|required|unique:exams,exam_name|min:10|max:30',
            'exam_title' => 'bail|required|min:10|max:80',
            'number_question' => 'bail|required|digits_between:2,2',
            'exam_time' => 'bail|required',
            'filepath' => 'bail|required'
        ] , [
            'topic_names.required' => 'Chủ đề không được bỏ trống',
            'exam_name.required' => 'Tên đề thi không được bỏ trống',
            'exam_name.unique' => 'Tên đề thi đã tồn tại',
            'exam_name.min' => 'Tên đề thi tối thiểu là 10 kí tự',
            'exam_name.max' => 'Tên đề thi tối đa là 30 kí tự',
            'exam_class.required' => 'Lớp không được bỏ trống',
            'exam_title.required' => 'Tiêu đề không được bỏ trống',
            'exam_title.min' => 'Tiêu đề tối thiểu là 10 kí tự',
            'exam_title.max' => 'Tiêu đề tối đa là 80 kí tự',
            'number_question.required' => 'Số lượng câu hỏi không được bỏ trống',
            'number_question.digits_between' => 'Số lượng câu hỏi tối thiểu là 10 và tối đa là 99 câu',
            'exam_time.required' => 'Thời gian làm đề không được bỏ trống',
            'filepath.required' => 'Ảnh đề thi không được bỏ trống'
        ]);

        $check_class = DB::table('class')->where('class' , $request->get('exam_class'))->count();
        if($check_class == 0){
            Grade::create([
                'class' => $request->get('exam_class'),
            ]);
        }

        $filepath = $request->get('filepath');
        $check_file = Str::of($filepath)->afterLast('.');
        if($check_file == 'jpg' || $check_file == 'jpge' || $check_file == 'png' || $check_file == 'jfif'){
            $topic_id = DB::table('topics')->where('topic_name' , $request->get('topic_names'))->value('id');
            Exam::create([
                'topic_id' => $topic_id,
                'exam_name' => $request->get('exam_name'),
                'exam_class' => $request->get('exam_class'),
                'exam_title' => $request->get('exam_title'),
                'exam_image' => $request->get('filepath'),
                'exam_level' => $request->get('exam_level'),
                'number_question' => $request->get('number_question'),
                'exam_time' => $request->get('exam_time')
            ]);
            return redirect()->route('admin.create-exam')->with('success' , 'Tạo đề thi thành công');
        }else{
            return back()->withErrors([
                'topic_names' => '',
                'exam_name' => '',
                'exam_title' => '',
                'number_question' => '',
                'exam_time' => '',
                'exam_level' => '',
                'exam_class' => '',
                'filepath' => 'Ảnh đề thi chỉ chấp nhận các file có đuôi (jpg, jpge, png, jfif - kích thước tệp tối đa là 1MB)'
            ])->onlyInput('topic_names' , 'exam_name' , 'exam_title' , 'number_question' , 'exam_time' , 'exam_level' , 'exam_class' , 'filepath');
        }
    }

    public function index()
    {
        $stt = 1;
        $exams = Exam::orderBy('created_at' , 'DESC')->search()->paginate(10);
        return view('admin.ExamManager.list-exam' , ['title' => 'Chỉnh sửa thông tin đề thi cho trang web của bạn ?'] , compact('exams' , 'stt'));
    }

    public function show(Request $request)
    {
        $exams = Exam::find($request->id);
        return view('admin.ExamManager.edit-exam' , ['title' => 'Cập nhật thông tin đề thi'] , compact('exams'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'exam_title' => 'bail|required|min:10|max:80',
            'number_question' => 'bail|required|digits_between:2,2',
            'exam_time' => 'bail|required',
            'filepath' => 'bail|required'
        ] , [
            'exam_title.required' => 'Tiêu đề không được bỏ trống',
            'exam_title.min' => 'Tiêu đề tối thiểu là 10 kí tự',
            'exam_title.max' => 'Tiêu đề tối đa là 80 kí tự',
            'number_question.required' => 'Số lượng câu hỏi không được bỏ trống',
            'number_question.digits_between' => 'Số lượng câu hỏi tối thiểu là 10 và tối đa là 99 câu',
            'exam_time.required' => 'Thời gian làm đề không được bỏ trống',
            'filepath.required' => 'Ảnh đề thi không được bỏ trống'
        ]);

        $filepath = $request->get('filepath');
        $check_file = Str::of($filepath)->afterLast('.');
        if($check_file == 'jpg' || $check_file == 'jpge' || $check_file == 'png' || $check_file == 'jfif'){
            Exam::find($request->id)->update([
                'exam_title' => $request->get('exam_title'),
                'exam_image' => $request->get('filepath'),
                'number_question' => $request->get('number_question'),
                'exam_time' => $request->get('exam_time')
            ]);
            return redirect()->route('admin.list-exam')->with('success' , 'Cập nhật đề thi thành công');
        }else{
            return back()->withErrors([
                'filepath' => 'Ảnh đề thi chỉ chấp nhận các file có đuôi (jpg, jpge, png, jfif - kích thước tệp tối đa là 1MB)'
            ])->onlyInput('filepath');
        }
    }

    public function delete(Request $request)
    {
        Exam::find($request->id)->delete();
        return redirect()->route('admin.list-exam')->with('success' , 'Xoá đề thi thành công');
    }
}
