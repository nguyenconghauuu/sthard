<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;
use App\Http\Controllers\Controller;
use App\Models\Question;
use App\Models\AnswerResult;
use App\Models\ExamPoint;
use App\Models\ExamActivity;

class QuizController extends Controller
{
    public function indexQuizGuest()
    {
        $topics = DB::table('topics')->orderBy('created_at' , 'ASC')->get();
        $exams = DB::table('exams')->orderBy('created_at' , 'ASC')->get();
        return view('guest.quiz' , ['title' => 'Làm đề thi'] , compact('topics' , 'exams'));
    }

    public function showQuizGuest(Request $request)
    {
        $topic_id = $request->id;
        $topic_name = DB::table('topics')->where('id' , $topic_id)->value('topic_name');
        $exams = DB::table('exams')->where('topic_id' , $topic_id)->orderBy('created_at' , 'ASC')->get();
        
        return view('guest.quiz-show' , ['title' => 'Đề thi theo chủ đề'] , compact('topic_name' , 'exams'));
    }

    public function index()
    {
        if(!(session()->has('id'))){
            return abort(404);
        }
        $topics = DB::table('topics')->orderBy('created_at' , 'ASC')->get();
        $exams = DB::table('exams')->orderBy('created_at' , 'ASC')->get();
        return view('user.quiz' , ['title' => 'Làm đề thi'] , compact('topics' , 'exams'));
    }

    public function show(Request $request)
    {
        if(!(session()->has('id'))){
            return abort(404);
        }
        $topic_id = $request->id;
        $topic_name = DB::table('topics')->where('id' , $topic_id)->value('topic_name');
        $exams = DB::table('exams')->where('topic_id' , $topic_id)->orderBy('created_at' , 'ASC')->get();
        return view('user.quiz-show' , ['title' => 'Đề thi theo chủ đề'] , compact('topic_name' , 'exams'));
    }

    public function showQuiz(Request $request)
    {
        if(!(session()->has('id'))){
            return abort(404);
        }
        $user_id = '';
        if(session()->has('id')){
            $user_id = $request->session()->get('id');
        }
        $exam_id = $request->id;
        $check_user_id = DB::table('exam_activity')->where('user_id' , $user_id)->where('exam_id' , $exam_id)->count();
        if($check_user_id == 0){
            ExamActivity::create([
                'user_id' => $user_id,
                'exam_id' => $exam_id
            ]);
        }
        $exam_name = DB::table('exams')->where('id' , $exam_id)->value('exam_name');
        $exam_level = DB::table('exams')->where('id' , $exam_id)->value('exam_level');
        $number_question = DB::table('exams')->where('id' , $exam_id)->value('number_question');
        $exam_time = DB::table('exams')->where('id' , $exam_id)->value('exam_time');
        $questions_db = Question::where('exam_id' , $exam_id)->where('question_level' , $exam_level)->get()->toArray();
        $array = [];
        foreach($questions_db as $question_db)
        {
            $array[] = $question_db['id'];
        }

        $first = Arr::first($array);
        if($first == null){
            return abort(404);
        }
        $random = Arr::random($array , $number_question);
        $index = 0;
        $stt = 1;
        $questions = DB::table('questions')->where('exam_id' , $exam_id)->get();
        return view('user.quiz-content' , ['title' => 'Nội dung đề thi'] , compact('exam_id' , 'exam_name' , 'exam_level' , 'number_question' , 'exam_time' , 'stt' , 'questions' , 'index' , 'random'));

    }

    public function resultQuiz(Request $request)
    {
        $user_id = '';
        if(session()->has('id')){
            $user_id = $request->session()->get('id');
        }else{
            return abort(404);
        }
        $exam_id = $request->id;
        $sum_question = $request->get('sum_question');
        $sum = $sum_question - 1;
        $point = 0;
        for($i = 2 ; $i <= $sum_question ; $i++){
            $answer = $request->get('question'.$i);
            $question_id = intval($answer / 10);
            $result = $answer % 10;
            AnswerResult::create([
                'user_id' => $user_id,
                'exam_id' => $exam_id,
                'question_id' => $question_id,
                'result' => $result
            ]);
            $count = DB::table('questions')->where('exam_id' , $exam_id)->where('id' , $question_id)->where('result' , $result)->count();
            $point += $count;
        }
        ExamPoint::create([
            'user_id' => $user_id,
            'exam_id' => $exam_id,
            'point' => $point
        ]);
        return view('user.point' , ['title' => 'Kết quả bài thi'] , compact('exam_id' , 'point' , 'sum'));
    }

    public function reviewQuiz(Request $request)
    {
        $stt = 1;
        $user_id = '';
        if(session()->has('id')){
            $user_id = $request->session()->get('id');
        }else{
            return abort(404);
        }
        $exam_id = $request->id;
        $exam_name = DB::table('exams')->where('id' , $exam_id)->value('exam_name');
        $exam_level = DB::table('exams')->where('id' , $exam_id)->value('exam_level');
        $number_question = DB::table('exams')->where('id' , $exam_id)->value('number_question');
        $questions = DB::table('questions')->get();
        $answer_results = DB::table('answer_result')->where('user_id' , $user_id)->where('exam_id' , $exam_id)->orderBy('created_at' , 'DESC')->paginate($number_question);
        return view('user.quiz-review' , ['title' => 'Xem lại đề thi'] , compact('stt' , 'exam_name' , 'exam_level' , 'number_question' , 'questions' , 'answer_results'));
    }
}
