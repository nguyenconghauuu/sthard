<?php

namespace App\Http\Controllers\admin;

use App\Models\Topic;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class TopicManager extends Controller
{
    public function create()
    {
        return view('admin.TopicManager.add-topic' , ['title' => 'Thêm một chủ đề mới cho trang web của bạn ?']);
    }

    public function store(Request $request)
    {
        $request->validate([
            'topic_name' => 'bail|required|max:30|unique:topics,topic_name',
        ] , [
            'topic_name.required' => 'Tên chủ đề không được bỏ trống',
            'topic_name.max' => 'Tên chủ đề tối đa là 30 kí tự',
            'topic_name.unique' => 'Tên chủ đề đã tồn tại',
        ]);

        Topic::create([
            'topic_name' => $request->get('topic_name'),
        ]);
        return redirect()->route('admin.create-topic')->with('success' , 'Thêm chủ đề thành công');
    }

    public function index(Request $request)
    {
        $stt = 1;
        $topics = Topic::orderBy('created_at' , 'DESC')->search()->paginate(10);
        return view('admin.TopicManager.list-topic' , ['title' => 'Chỉnh sửa thông tin chủ đề cho trang web của bạn ?'] , compact('stt' , 'topics'));
    }

    public function show(Request $request)
    {
        $topic = Topic::find($request->id);
        return view('admin.TopicManager.edit-topic' , ['title' => 'Cập nhật thông tin chủ đề'] ,  compact('topic'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'topic_name' => 'bail|required|max:30',
        ] , [
            'topic_name.required' => 'Tên chủ đề không được bỏ trống',
            'topic_name.max' => 'Tên chủ đề tối đa là 30 kí tự',
        ]);

        $topic_name_db = DB::table('topics')->where('id' , $request->id)->value('topic_name');
        $topic_name = $request->get('topic_name');
        if($topic_name_db == $topic_name){
            return redirect()->route('admin.list-topic')->with('success' , 'Cập nhật thông tin chủ đề thành công');
        }else{
            $check_topic_name = DB::table('topics')->where('topic_name' , $topic_name)->count();
            if($check_topic_name == 0){
                Topic::find($request->id)->update([
                    'topic_name' => $topic_name
                ]);
                return redirect()->route('admin.list-topic')->with('success' , 'Cập nhật thông tin chủ đề thành công');
            }else{
                return redirect()->route('admin.edit-topic' , ['id' => $request->id])->with('error' , 'Chủ đề đã tồn tại. Vui lòng nhập một chủ đề khác');
            }
        }
    }

    public function delete(Request $request)
    {
        Topic::find($request->id)->delete();
        return redirect()->route('admin.list-topic')->with('success' , 'Xóa chủ đề thành công');
    }
}
