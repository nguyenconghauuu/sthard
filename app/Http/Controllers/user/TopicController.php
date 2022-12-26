<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class TopicController extends Controller
{
    public function showTopicGuest(Request $request)
    {
        $topic_id = $request->id;
        $topic_name = DB::table('topics')->where('id' , $topic_id)->value('topic_name');
        $courses = DB::table('courses')->where('topic_id' , $topic_id)->orderBy('created_at' , 'ASC')->get();
        return view('guest.topic' , ['title' => 'Khóa học theo chủ đề'] , compact('topic_name' , 'courses'));
    }

    public function show(Request $request)
    {
        if(!(session()->has('id'))){
            return abort(404);
        }
        $topic_id = $request->id;
        $topic_name = DB::table('topics')->where('id' , $topic_id)->value('topic_name');
        $courses = DB::table('courses')->where('topic_id' , $topic_id)->orderBy('created_at' , 'ASC')->get();
        return view('user.topic' , ['title' => 'Khóa học theo chủ đề'] , compact('topic_name' , 'courses'));
    }

}
