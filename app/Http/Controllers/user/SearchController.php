<?php

namespace App\Http\Controllers\user;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Exam;

class SearchController extends Controller
{
    public function searchGuest(Request $request)
    {
        $courses = Course::search()->get();
        $exams = Exam::search()->get();
        return view('guest.search-guest' , compact('courses' , 'exams'));
    }

    public function search(Request $request)
    {
        $courses = Course::search()->get();
        $exams = Exam::search()->get();
        return view('user.search' , compact('courses' , 'exams'));
    }

    public function searchCourse(Request $request)
    {
        $courses = Course::search()->get();
        return view('user.search-course' , compact('courses'));
    }

    public function searchExam(Request $request)
    {
        $exams = Exam::search()->get();
        return view('user.search-exam' , compact('exams'));
    }
}
