<div style="font-family:Roboto-Regular,Helvetica,Arial,sans-serif;width:500px;height:467px;border-color: #dadce0;border-radius:8px;border-style:solid;border-width:thin;margin:50px auto">
    <div style="width:100%;height:auto;margin-top:25px;text-align:center;font-size:18px;font-weight:600">
        <span>StudyHard</span>
    </div>
    <div style="width:90%;height:auto;margin:25px auto 0px auto;text-align: center;padding-bottom:20px;border-bottom: thin solid #dadce0;color:rgba(0,0,0,0.87);font-size:22px">
        <span>Đăng ký tài khoản tại hệ thống</span><br>
        <span>Xác nhận tài khoản</span><br>
        <span style="font-size:14px">{!!$email_address!!}</span>
    </div>
    <div style="width:90%;height:auto;margin:25px auto 0px auto;text-align:justify;color:rgba(0,0,0,0.87);font-size:16px">
        <span style="font-weight:600">Xin chào {!!$fullname!!}!!!</span><br>
        <span>Để có thể tiếp tục sử dụng các dịch vụ bạn vui lòng nhấn vào nút kích hoạt bên dưới để kích hoạt tài khoản.</span>
    </div>
    <div style="width:90%;height:auto;margin:25px auto 0px auto;text-align:center">
        <a style="line-height:16px;color:#ffffff;font-weight: 400;text-decoration:none;font-size:14px;display:inline-block;padding:10px 24px;background-color:#4184f3;border-radius:5px;min-width:90px;"
        href="{{route('guest.actived' , [$username , $token])}}">Kích hoạt tài khoản</a>
    </div>
    <div style="width:90%;height:auto;margin:25px auto 0px auto;text-align:center;font-size:14px;color:rgba(0,0,0,0.87)">
        <span>Trân trọng. Cảm ơn!!!</span><br>
        <a style="font-size:12px;text-decoration:none" href="">studyhard.com.vn</a>
    </div>
</div>