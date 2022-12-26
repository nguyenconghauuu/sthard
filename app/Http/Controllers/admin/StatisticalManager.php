<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Exam;
use App\Models\ExamActivity;
use App\Models\ExamPoint;
use App\Models\User;
use Illuminate\Http\Request;

class StatisticalManager extends Controller
{
    public function index()
    {
        $stt = 1;
        $exams = Exam::orderBy('created_at' , 'ASC')->get();
        $exam_activitys = ExamActivity::orderBy('created_at' , 'DESC')->get();
        $exam_points = ExamPoint::orderBy('created_at' , 'ASC')->get();
        $users = User::orderBy('created_at' , 'DESC')->search()->paginate(10);
        return view('admin.StatisticalManager.list-point' , ['title' => 'Danh sách điểm số đề thi cho trang web của bạn ?'] , compact('stt' , 'users' , 'exams' , 'exam_activitys' , 'exam_points'));
    }
}
