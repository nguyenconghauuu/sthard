<!DOCTYPE html>
<html lang="en">
@include('layouts.header')
<style>
html,
body {
    margin: 0;
    padding: 0;
    font-family: 'Montserrat', sans-serif;
    background-color: #f2f2f2;
}

.header {
    width: 100%;
    height: 58px;
    display: flex;
    justify-content: space-between;
    position: fixed;
    top: 0;
    left: 0;
    background-color: #fff;
    border-bottom: 2px solid rgba(0, 0, 0, .21);
    z-index: 10;
}

.header-logo {
    width: 10%;
    height: 58px;
    text-align: center;
}

.header-logo span {
    font-family: 'Lobster', cursive;
    font-size: 28px;
    line-height: 58px;
    color: #461a42;
    cursor: pointer;
}

.header-nav-bar {
    width: 40%;
    height: 58px;
    cursor: pointer;
}

.header-nav-bar ul {
    margin: 0px;
    padding: 0px;
}

.header-nav-bar li {
    width: 120px;
    height: 56px;
    list-style-type: none;
    display: inline-block;
    text-align: center;
    line-height: 58px;
}

.header-nav-bar :nth-child(2){
    width:180px;
}

.header-nav-bar span:hover {
    color: #8854c0;
}

.header-nav-bar span {
    font-size: 15px;
    color: rgba(41, 42, 58, .66);
    font-weight: 600;
    padding: 0px 5px 20px 0px;
}

.header-nav-bar i {
    font-size: 15px;
    padding-right: 5px;
}

.header-form-search {
    width: 30%;
    height: 58px;
}

.form-search-header {
    width: 100%;
    height: 32px;
    border-radius: 18px;
    margin: 13px 0 0 0;
    background-color: hsla(0, 0%, 100%, .2);
    color: #292a3a;
    border: 1px solid rgba(41, 42, 58, .1);
}

.form-search-header form {
    display: flex;
    justify-content: space-between;
}

.input-form-search-header {
    width: 95%;
    height: 32px;
    margin: 0px 0px 0px 1px;
}

.input-form-search-header input {
    width: 100%;
    height: 30px;
    border: none;
    outline: none;
    border-radius: 18px;
    padding-left: 20px;
    font-size: 14px;
}

.btn-form-search-header {
    width: 5%;
    height: 26px;
    margin: 2px 10px 0px 0px;
}

.btn-form-search-header button {
    outline: none;
    border: none;
    background-color: #fff;
}

.btn-form-search-header i {
    color: #72737d;
}

.search-ajax-result{
    width: 30%;
    height: auto;
    background-color: #fff;
    position: absolute;
    right: 20px;
    margin: 50px 17.25% 0px 0px;
    border-radius:8px;
    z-index: 10;
}

.search-ajax-result-course{
    width: 100%;
    height: auto;
}

.search-ajax-result-course a{
    text-decoration:none;
}

.search-ajax-result-quiz{
    width: 100%;
    height: auto;
 }

.search-ajax-result-quiz a{
    text-decoration:none;
}

.container-result {
    width: 95%;
    height: 70px;
    margin: 10px auto 10px auto;
    display: flex;
    justify-content: space-between;
    cursor: pointer;
    border-bottom: 1px solid rgba(0,0,0,.03);
}

.result-image {
    width: 20%;
    height: 60px;
}

.result-image img {
    width: 100%;
    height: 60px;
}

.result-image a {
    text-decoration: none;
}

.result-text {
    width: 77.5%;
    height: 60px;
}

.result-button {
    width: 70px;
    height: 25px;
    background-color: #f2f2f2;
    border-radius: 10px;
    line-height: 22px;
}

.result-button span {
    font-size: 10px;
    font-weight: 600;
    margin-left: 6px;
    color: #8854c0;
}

.result-headding {
    width: 100%;
    height: 30px;
    margin: 5px auto 0px auto;
}

.result-headding span {
    font-size: 12px;
    color: #8854c0;
    margin-left: 2px;
}

.header-button {
    width: 18%;
    height: 58px;
    display: flex;
    justify-content: flex-end;
}

.btn-image-header {
    width: 42px;
    height: 42px;
    border-radius: 50%;
    cursor: pointer;
    margin: 8px 20px 0px 0px;
}

.btn-image-header:hover {
    background-color: #69707a;
    transition: all 1s linear;
}

.btn-image-header img {
    width: 38px;
    height: 38px;
    border-radius: 50%;
    margin: 2px;
}

.btn-icon-header {
    width: 38px;
    height: 38px;
    border-radius: 50%;
    cursor: pointer;
    margin: 8px 20px 0px 0px;
}

.btn-icon-header:hover {
    background-color: #f2f2f2;
}

.btn-icon-header i {
    color: #a7aeb8;
    font-size: 15px;
    margin: 12px 0px 0px 12px;
}

.container-options {
    width: 240px;
    height: 143px;
    background-color: #fff;
    position: absolute;
    right: 20px;
    margin-top: 70px;
    border-radius: 8px;
    z-index: 10;
    padding-top: 5px;
    display: none;
}

.container-options.active {
    display: block;
}

.show-account {
    width: 240px;
    height: 56px;
    text-align: center;
    border-bottom: 1px solid #d4dae3;
}

.sp1 {
    color: #363d47;
    font-size: 12px;
    font-weight: 600;
}

.sp2 {
    color: #69707a;
    font-size: 11px;
}

.show-options {
    width: 240px;
    height: 80px;
    cursor: pointer;
}

.show-options a {
    text-decoration: none;
}

.show-options ul {
    margin: 0px;
    padding: 10px 0px 0px 0px;
}

.show-options li {
    width: 240px;
    height: 30px;
    list-style-type: none;
    padding-left: 15px;
    line-height: 30px;
}

.show-options li:hover {
    background-color: #f2f2f2;
}

.show-options span {
    font-size: 14px;
    color: #363d47;
}

.show-options i {
    font-size: 14px;
    color: #a7aeb8;
    padding-right: 10px;
}

.content {
    width: 100%;
    height: 700px;
    margin-top: 58px;
    padding-top: 25px;
    background-color: #f9f9f9;
}

.settings-page-topbar {
    width: 80%;
    height: 30px;
    margin: 0px auto;
    text-align: center;
}

.settings-page-topbar span {
    color: #292a3a;
    font-size: 24px;
    line-height: 30px;
}

.settings-group-container {
    width: 80%;
    height: auto;
    margin: 0px auto;
    text-align: center;
    padding-top: 1px;
}

.settings-group-profile {
    width: 480px;
    height: 300px;
    background-color: #fff;
    margin: 20px auto;
    border-radius: 8px;
    box-shadow: 0 4px 0 0 #e5e5e5;
    padding-top: 1px;
}

.settings-group-profile a {
    text-decoration: none;
}

.group-profile-topbar {
    width: 460px;
    height: 20px;
    margin: 10px auto 10px auto;
    text-align: left;
    line-height: 20px;
}

.group-profile-topbar i {
    font-size: 12px;
    color: #efa929;
}

.group-profile-topbar span {
    font-size: 14px;
    color: #9d9da4;
    margin-left: 5px;
}

.group-profile-text {
    width: 460px;
    height: 50px;
    margin: 0px auto 0px auto;
    text-align: left;
    cursor: pointer;
}

.profile-text-topbar {
    width: 460px;
    height: 20px;
}

.profile-text-topbar i {
    font-size: 14px;
    color: #9d9da4;
    float: right;
    margin-top: 14px;
}

.profile-text-topbar span {
    font-weight: 600;
    font-size: 15px;
    color: #292a3a;
}

.profile-text {
    width: 460px;
    height: 20px;
}

.profile-text span {
    font-size: 13px;
    color: #9d9da4;
}

.settings-group-repassword {
    width: 480px;
    height: 200px;
    background-color: #fff;
    margin: 20px auto;
    border-radius: 8px;
    box-shadow: 0 4px 0 0 #e5e5e5;
    padding-top: 1px;
}

.settings-group-repassword a {
    text-decoration: none;
}

.settings-form-repassword {
    width: 100%;
    height: 100%;
    background-color: rgba(9, 9, 9, .8);
    -webkit-transition: background-color .3s ease;
    transition: background-color .3s ease;
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    z-index: 100;
    display: none;
}

.settings-form-repassword.active {
    display: block;
}

.form-repassword {
    width: 420px;
    height: 320px;
    margin: 200px auto;
    background-color: #fff;
    border-radius: 8px;
    padding-top: 1px;
}

.repassword-text-topbar {
    width: 372px;
    height: 18px;
    margin: 20px auto 15px auto;
    line-height: 18px;
}

.repassword-text-topbar label {
    color: #9d9da4;
    font-size: 14px;
}

.form-group-repassword {
    width: 372px;
    height: 61px;
    margin: 0px auto 20px auto;
}

.form-group-repassword {
    font-weight: 400;
    font-size: 14px;
    color: #292a3a;
}

.form-group-repassword input {
    width: 372px;
    height: 40px;
    padding: 0 8px;
    font-size: 16px;
    border: 1px solid #9d9da4;
    border-radius: 8px;
    outline: none;
}

.form-group-repassword button {
    width: 70px;
    height: 42px;
    margin-top: 20px;
    background-color: #fceed5;
    color: #efa929;
    font-weight: 700;
    font-size: 14px;
    border: none;
    border-radius: 4px;
    float: right;
}

.btn-repassword-close {
    width: 70px;
    height: 42px;
    margin-top: 20px;
    background-color: #fff;
    color: #9d9da4;
    font-weight: 700;
    font-size: 14px;
    border: none;
    border-radius: 4px;
    float: right;
    line-height: 42px;
    text-align: center;
    cursor: pointer;
}

.settings-form-destroy-account {
    width: 100%;
    height: 100%;
    background-color: rgba(9, 9, 9, .8);
    -webkit-transition: background-color .3s ease;
    transition: background-color .3s ease;
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    z-index: 100;
    display: none;
}

.settings-form-destroy-account.active {
    display: block;
}

.form-destroy {
    width: 420px;
    height: 160px;
    margin: 250px auto;
    background-color: #fff;
    border-radius: 8px;
    padding-top: 1px;
}

.destroy-text-topbar {
    width: 372px;
    height: 40px;
    margin: 20px auto 15px auto;
    line-height: 18px;
}

.destroy-text-topbar span {
    color: #9d9da4;
    font-size: 14px;
}

.form-group-destroy {
    width: 372px;
    height: 61px;
    margin: 0px auto 30px auto;
}

.form-group-destroy button {
    width: 142px;
    height: 42px;
    margin-top: 20px;
    background-color: #fceed5;
    color: #efa929;
    font-weight: 700;
    font-size: 14px;
    border: none;
    border-radius: 4px;
    float: right;
}

.btn-destroy-close {
    width: 70px;
    height: 42px;
    margin-top: 20px;
    background-color: #fff;
    color: #9d9da4;
    font-weight: 700;
    font-size: 14px;
    border: none;
    border-radius: 4px;
    float: right;
    line-height: 42px;
    text-align: center;
    cursor: pointer;
}
</style>

<body>
    @include('layouts.header-wrapper-user')
    <div class="content">
        <div class="settings-page-topbar">
            <span>Cài đặt</span>
        </div>

        <div class="settings-group-container">
            <div class="settings-group-profile">
                <div class="group-profile-topbar">
                    <i class="fa-solid fa-user-pen"></i>
                    <span>Hồ sơ</span>
                </div>

                <div class="group-profile-text">
                    <div class="profile-text-topbar">
                        <span>Mã học viên</span>
                    </div>
                    <div class="profile-text">
                        @if($user->user_code != NULL)
                        <span>{!!$user->user_code!!}</span>
                        @else
                        <span>Chưa đăng ký</span>
                        @endif
                    </div>
                </div>

                <div class="group-profile-text">
                    <div class="profile-text-topbar">
                        <span>Tên tài khoản</span>
                    </div>
                    <div class="profile-text">
                        <span>{!!$user->username!!}</span>
                    </div>
                </div>

                <div class="group-profile-text">
                    <div class="profile-text-topbar">
                        <span>Họ và tên</span>
                    </div>
                    <div class="profile-text">
                        <span>{!!$user->fullname!!}</span>
                    </div>
                </div>

                <div class="group-profile-text">
                    <div class="profile-text-topbar">
                        <span>Email</span>
                    </div>
                    <div class="profile-text">
                        <span>{!!$user->email!!}</span>
                    </div>
                </div>

                <div class="group-profile-text">
                    <div class="profile-text-topbar">
                        <span>Ngày tạo</span>
                    </div>
                    <div class="profile-text">
                        <span>{!!$user->created_at->format('d-m-Y')!!}</span>
                    </div>
                </div>
            </div>

            <div class="settings-group-repassword">
                <div class="group-profile-topbar">
                    <i style="font-size:16px;color:#d5546d" class="fa-solid fa-circle-user"></i>
                    <span>Tài khoản</span>
                </div>

                <div class="group-profile-text" onclick="myChangePassword()">
                    <div class="profile-text-topbar">
                        <span>Cập nhật mật khẩu</span>
                        <i class="fa-solid fa-angle-right"></i>
                    </div>
                    <div class="profile-text">
                        <span>Mật khẩu của bạn được cập nhật vào ngày {{$user->updated_at->format('d-m-Y')}}</span>
                    </div>
                </div>

                <div class="group-profile-text" onclick="myDestroyAccount()">
                    <div class="profile-text-topbar">
                        <span>Xóa tài khoản</span>
                        <i class="fa-solid fa-angle-right"></i>
                    </div>
                    <div class="profile-text">
                        <span>Tài khoản của bạn sẽ bị xóa khỏi hệ thống</span>
                    </div>
                </div>

                <a href="{{route('guest.index')}}">
                    <div class="group-profile-text">
                        <div class="profile-text-topbar">
                            <span>Đăng xuất</span>
                            <i class="fa-solid fa-angle-right"></i>
                        </div>
                        <div class="profile-text">
                            <span>Bạn sẽ đăng nhập lại vào những lần tiếp theo</span>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div class="settings-form-repassword" id="settings-form-repassword">
            <div class="form-repassword">
                <form action="{{route('user.store-password' , $user->id)}}" method="post">
                    @csrf
                    <div class="repassword-text-topbar">
                        <label for="form-label">Cập nhật mật khẩu</label>
                    </div>
                    <div class="form-group-repassword">
                        <label for="form-label">Nhập mật khẩu mới</label>
                        <input class="form-control" type="password" name="passcode" value="{{old('passcode')}}">
                        @error('passcode')
                            <span style="font-size:10px;color:#e74a3b">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group-repassword">
                        <label for="form-label">Nhập lại mật khẩu mới</label>
                        <input class="form-control" type="password" name="passcode_comfirm" value="{{old('passcode_comfirm')}}">
                        @error('passcode_comfirm')
                            <span style="font-size:10px;color:#e74a3b">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group-repassword">
                        <button type="submit">Lưu</button>
                        <span class="btn-repassword-close" onclick="myChangePassword()">Hủy</span>
                    </div>
                </form>
            </div>
        </div>

        <div class="settings-form-destroy-account" id="settings-form-destroy-account">
            <div class="form-destroy">
                <form action="{{route('user.destroy-account', $user->id)}}" method="get">
                    @csrf
                    <div class="destroy-text-topbar">
                        <span>Bạn có chắc rằng bạn muốn xóa tài khoản của bạn?</span><br>
                        <span>Tất cả dữ liệu của bạn sẽ bị xóa.</span>
                    </div>
                    <div class="form-group-destroy">
                        <button type="submit">Xóa tài khoản</button>
                        <span class="btn-destroy-close" onclick="myDestroyAccount()">Hủy</span>
                    </div>
                </form>
            </div>
        </div>
</body>

</html>

<script type="text/javascript">
    function myProfile() {
        document.getElementById('container-options').classList.toggle('active');
    }

    function HomePage() {
        window.open("{{route('user.homepage')}}", "_self");
    }

    function Quiz() {
        window.open("{{route('user.quiz')}}", "_self");
    }

    function Activity() {
        window.open("{{route('user.activity')}}", "_self");
    }

    function myChangePassword() {
        document.getElementById('settings-form-repassword').classList.toggle('active');
    }

    function myDestroyAccount() {
        document.getElementById('settings-form-destroy-account').classList.toggle('active');
    }

    if ('{{$errors->has("passcode")}}' || '{{$errors->has("passcode_comfirm")}}') {
        myChangePassword();
    }

    $('.input-search-ajax').keyup(function () {
        var _text = $(this).val();
        if(_text != ''){
            $.ajax({
                url: "{{route('user.search-ajax-course')}}?search=" + _text,
                type: 'GET',
                success:function(course){
                    $('.search-ajax-result-course').show(500);
                    $('.search-ajax-result-course').html(course);
                }
            });
        }else{
            $('.search-ajax-result-course').hide();
        }
    });

    $('.input-search-ajax').keyup(function () {
        var _text = $(this).val();
        if(_text != ''){
            $.ajax({
                url: "{{route('user.search-ajax-exam')}}?search=" + _text,
                type: 'GET',
                success:function(exam){
                    $('.search-ajax-result-quiz').show(500);
                    $('.search-ajax-result-quiz').html(exam);
                }
            });
        }else{
            $('.search-ajax-result-quiz').hide();
        }
    });
</script>