<?php

namespace App\Http\Controllers\admin;

use App\Models\SlideShow;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class SlideShowManager extends Controller
{
    public function create()
    {
        return view('admin.SlideShowManager.add-slide-show' , ['title' => 'Thêm một ảnh trình chiếu mới cho trang web của bạn ?']);
    }

    public function store(Request $request)
    {
        $request->validate([
            'filepath' => 'bail|required|unique:slide_show,slide_show_image'
        ] , [
            'filepath.required' => 'Ảnh trình chiếu không được bỏ trống',
            'filepath.unique' => 'Ảnh trình chiếu đã tồn tại. Vui lòng chọn một ảnh khác'
        ]);

        $filepath = $request->get('filepath');
        $check_file = Str::of($filepath)->afterLast('.');
        $count = DB::table('slide_show')->count();
        if($count == 3){
            return redirect()->route('admin.create-slideshow')->with('error' , 'Ảnh trình chiếu đã đạt tối đa');
        }else{
            if($check_file == 'jpg' || $check_file == 'jpge' || $check_file == 'png' || $check_file == 'jfif' || $check_file == 'gif'){
                SlideShow::create(['slide_show_image' => $filepath]);
                return redirect()->route('admin.create-slideshow')->with('success' , 'Tạo ảnh trình chiếu thành công');
            }else{
                return back()->withErrors([
                    'filepath' => 'Ảnh trình chiếu chỉ chấp nhận các file có đuôi (jpg, jpge, png, jfif - kích thước tệp tối đa là 1MB)'
                ])->onlyInput('filepath');
            }
        }
    }

    public function index()
    {
        $stt = 1;
        $slide_shows = SlideShow::orderBy('created_at' , 'DESC')->paginate(5);
        return view('admin.SlideShowManager.list-slide-show' , ['title' => 'Chỉnh sửa ảnh trình chiếu cho trang web của bạn ?'] , compact('stt' , 'slide_shows'));
    }

    public function show(Request $request)
    {
        $slide_show = SlideShow::find($request->id);
        return view('admin.SlideShowManager.edit-slide-show' , ['title' => 'Cập nhật thông tin ảnh trình chiếu'] ,  compact('slide_show'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'filepath' => 'bail|required'
        ] , [
            'filepath.required' => 'Ảnh trình chiếu không được bỏ trống',
        ]);

        $slide_show_image_db = DB::table('slide_show')->where('id' , $request->id)->value('slide_show_image');
        $filepath = $request->get('filepath');
        if($slide_show_image_db == $filepath){
            return redirect()->route('admin.list-slideshow')->with('success' , 'Cập nhật thông tin ảnh trình chiếu thành công');
        }else{
            $check_slide_show_image = DB::table('slide_show')->where('slide_show_image' , $filepath)->count();
            if($check_slide_show_image == 0){
                $check_file = Str::of($filepath)->afterLast('.');
                if($check_file == 'jpg' || $check_file == 'jpge' || $check_file == 'png' || $check_file == 'jfif' || $check_file == 'gif'){
                    SlideShow::find($request->id)->update(['slide_show_image' => $filepath]);
                    return redirect()->route('admin.list-slideshow')->with('success' , 'Cập nhật thông tin ảnh trình chiếu thành công');
                }else{
                    return back()->withErrors([
                        'filepath' => 'Ảnh trình chiếu chỉ chấp nhận các file có đuôi (jpg, jpge, png, jfif - kích thước tệp tối đa là 1MB)'
                    ])->onlyInput('filepath');
                }
            }else{
                return redirect()->route('admin.edit-slideshow' , ['id' => $request->id])->with('error' , 'Ảnh trình chiếu đã tồn tại. Vui lòng chọn một ảnh khác');
            }
        }
    }

    public function delete(Request $request)
    {
        SlideShow::find($request->id)->delete();
        return redirect()->route('admin.list-slideshow')->with('success' , 'Xóa ảnh trình chiếu thành công');
    }
}
