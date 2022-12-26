<?php

namespace App\Http\Controllers\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\User;

class HomepageController extends Controller
{
    public function index()
    {
        $slide_shows = DB::table('slide_show')->orderBy('created_at' , 'ASC')->paginate(3);
        $topics = DB::table('topics')->orderBy('created_at' , 'ASC')->get();
        $courses = DB::table('courses')->orderBy('created_at' , 'ASC')->get();
        if(session()->has('id')){
            session()->forget('id');
        }
        return view('guest.index' , ['title' => 'Trang Chủ Hệ Thống'] , compact('slide_shows' , 'topics' , 'courses'));
    }

    public function homepage(Request $request)
    {
        $id = '';
        if(session()->has('id')){
            $id = $request->session()->get('id');
        }else{
            return abort(404);
        }
        $fullname = User::where('id' , $id)->value('fullname');
        $email = User::where('id' , $id)->value('email');
        session()->put([
            'fullname' => $fullname,
            'email' => $email
        ]);
        $slide_shows = DB::table('slide_show')->orderBy('created_at' , 'ASC')->paginate(3);
        $topics = DB::table('topics')->orderBy('created_at' , 'ASC')->get();
        $courses = DB::table('courses')->orderBy('created_at' , 'ASC')->get();
        return view('user.homepage' , ['title' => 'Trang Chủ Hệ Thống'] , compact('slide_shows' , 'topics' , 'courses'));
    }
}
