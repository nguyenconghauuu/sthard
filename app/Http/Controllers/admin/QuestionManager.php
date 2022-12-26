<?php

namespace App\Http\Controllers\admin;

use App\Models\Exam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Question;

class QuestionManager extends Controller
{
    public function create()
    {
        $exams = Exam::get();
        return view('admin.QuestionManager.add-question' , ['title' => 'Thêm một câu hỏi mới cho trang web của bạn ?'] , compact('exams'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'exam_name' => 'bail|required',
            'question_content' => 'bail|required|unique:questions,question_content|min:10',
            'answer_a' => 'bail|required',
            'answer_b' => 'bail|required',
            'answer_c' => 'bail|required',
            'answer_d' => 'bail|required'
        ] , [
            'exam_name.required' => 'Đề thi không được bỏ trống',
            'question_content.required' => 'Nội dung câu hỏi không được bỏ trống',
            'question_content.unique' => 'Nội dung câu hỏi đã tồn tại',
            'question_content.min' => 'Nội dung câu hỏi tối thiểu là 10 kí tự',
            'answer_a.required' => 'Nội dung đáp án A không được bỏ trống',
            'answer_b.required' => 'Nội dung đáp án B không được bỏ trống',
            'answer_c.required' => 'Nội dung đáp án C không được bỏ trống',
            'answer_d.required' => 'Nội dung đáp án D không được bỏ trống',
        ]);

        $exam_id = DB::table('exams')->where('exam_name' , $request->get('exam_name'))->value('id');
        $question_content = $request->get('question_content');
        $answer_a = $request->get('answer_a');
        $answer_b = $request->get('answer_b');
        $answer_c = $request->get('answer_c');
        $answer_d = $request->get('answer_d');
        $result = $request->get('result');
        $question_level = $request->get('question_level');
        
        if($answer_a == $answer_b || $answer_a == $answer_c || $answer_a == $answer_d){
            return back()->withErrors([
                'exam_name' => '',
                'question_content' => '',
                'question_level' => '',
                'answer_a' => 'Nội dung đáp án A đã trùng lặp với một đáp án khác. Vui lòng nhập một nội dung đáp án khác',
                'answer_b' => '',
                'answer_c' => '',
                'answer_d' => ''
            ])->onlyInput('exam_name' , 'question_content' , 'question_level' , 'answer_a' , 'answer_b' , 'answer_c' , 'answer_d');
        }

        if($answer_b == $answer_a || $answer_b == $answer_c || $answer_b == $answer_d){
            return back()->withErrors([
                'exam_name' => '',
                'question_content' => '',
                'question_level' => '',
                'answer_a' => '',
                'answer_b' => 'Nội dung đáp án B đã trùng lặp với một đáp án khác. Vui lòng nhập một nội dung đáp án khác',
                'answer_c' => '',
                'answer_d' => ''
            ])->onlyInput('exam_name' , 'question_content' , 'question_level' , 'answer_a' , 'answer_b' , 'answer_c' , 'answer_d');
        }

        if($answer_c == $answer_a || $answer_c == $answer_b || $answer_c == $answer_d){
            return back()->withErrors([
                'exam_name' => '',
                'question_content' => '',
                'question_level' => '',
                'answer_a' => '',
                'answer_b' => '',
                'answer_c' => 'Nội dung đáp án C đã trùng lặp với một đáp án khác. Vui lòng nhập một nội dung đáp án khác',
                'answer_d' => ''
            ])->onlyInput('exam_name' , 'question_content' , 'question_level' , 'answer_a' , 'answer_b' , 'answer_c' , 'answer_d');
        }

        if($answer_d == $answer_a || $answer_d == $answer_b || $answer_d == $answer_c){
            return back()->withErrors([
                'exam_name' => '',
                'question_content' => '',
                'question_level' => '',
                'answer_a' => '',
                'answer_b' => '',
                'answer_c' => '',
                'answer_d' => 'Nội dung đáp án D đã trùng lặp với một đáp án khác. Vui lòng nhập một nội dung đáp án khác'
            ])->onlyInput('exam_name' , 'question_content' , 'question_level' , 'answer_a' , 'answer_b' , 'answer_c' , 'answer_d');
        }

        Question::create([
            'exam_id' => $exam_id,
            'question_content' => $question_content,
            'answer_a' => $answer_a,
            'answer_b' => $answer_b,
            'answer_c' => $answer_c,
            'answer_d' => $answer_d,
            'question_level' => $question_level,
            'result' => $result
        ]);

        return redirect()->route('admin.create-question')->with('success' , 'Tạo câu hỏi thành công');
    }

    public function index()
    {
        $stt = 1;
        $exams = Exam::orderBy('created_at' , 'DESC')->get();
        $exam_id = Exam::where('exam_name' , request()->keys)->value('id');

        if($exam_id){
            $questions = Question::orderBy('created_at' , 'DESC')->where('exam_id' , $exam_id)->search()->paginate(10);
            return view('admin.QuestionManager.list-question' , ['title' => 'Chỉnh sửa thông tin câu hỏi cho trang web của bạn ?'] , compact('stt' , 'questions' , 'exams'));
        }else{
            $questions = Question::orderBy('created_at' , 'DESC')->search()->paginate(10);
            return view('admin.QuestionManager.list-question' , ['title' => 'Chỉnh sửa thông tin câu hỏi cho trang web của bạn ?'] , compact('stt' , 'questions' , 'exams'));
        }
    }

    public function show(Request $request)
    {
        $questions = Question::find($request->id);
        return view('admin.QuestionManager.edit-question' , ['title' => 'Cập nhật thông tin câu hỏi'] , compact('questions'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'question_content' => 'bail|required|min:10',
            'answer_a' => 'bail|required|unique:questions,answer_b,answer_c,answer_d',
            'answer_b' => 'bail|required',
            'answer_c' => 'bail|required',
            'answer_d' => 'bail|required'
        ] , [
            'question_content.required' => 'Nội dung câu hỏi không được bỏ trống',
            'question_content.min' => 'Nội dung câu hỏi tối thiểu là 10 kí tự',
            'answer_a.required' => 'Nội dung đáp án A không được bỏ trống',
            'answer_a.unique' => 'Nội dung đáp án đã tồn tại. Vui lòng chọn một đáp án khác',
            'answer_b.required' => 'Nội dung đáp án B không được bỏ trống',
            'answer_c.required' => 'Nội dung đáp án C không được bỏ trống',
            'answer_d.required' => 'Nội dung đáp án D không được bỏ trống',
        ]);

        $exam_id = DB::table('questions')->where('id' , $request->id)->value('exam_id');
        $question_content_db = DB::table('questions')->where('id' , $request->id)->value('question_content');
        $question_content = $request->get('question_content');
        if($question_content_db == $question_content){
            Question::find($request->id)->update([
                'answer_a' => $request->get('answer_a'),
                'answer_b' => $request->get('answer_b'),
                'answer_c' => $request->get('answer_c'),
                'answer_d' => $request->get('answer_d'),
                'result' => $request->get('result')
            ]);
            return redirect()->route('admin.list-question')->with('success' , 'Cập nhật thông tin câu hỏi thành công');
        }else{
            $check_question_content = DB::table('questions')->where('exam_id' , $exam_id)->where('question_content' , $question_content)->count();
            if($check_question_content == 0){
                Question::find($request->id)->update([
                    'question_content' => $question_content,
                    'answer_a' => $request->get('answer_a'),
                    'answer_b' => $request->get('answer_b'),
                    'answer_c' => $request->get('answer_c'),
                    'answer_d' => $request->get('answer_d'),
                    'result' => $request->get('result')
                ]);
                return redirect()->route('admin.list-question')->with('success' , 'Cập nhật thông tin câu hỏi thành công');
            }else{
                return redirect()->route('admin.show-question' , ['id' => $request->id])->with('error' , 'Nội dung câu hỏi đã tồn tại. Vui lòng nhập một nội dung câu hỏi khác');
            }
        }
    }
}
