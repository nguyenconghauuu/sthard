<!DOCTYPE html>
<html lang="en">
@include('layouts.header')
<style>
html,
body {
    margin: 0px;
    padding: 0px;
    font-family: 'Montserrat', sans-serif;
    max-width: 100%;
}

.header {
    width: 100%;
    height: 58px;
    top: 0;
    position: fixed;
    z-index: 10;
    background-color: #fff;
    border-bottom: 2px solid rgba(0, 0, 0, .21);
    display: flex;
}

.header-logo {
    width: 15.4%;
    height: 58px;
    text-align: center;
}

.header-logo span {
    color: #363d47;
    font-weight: bold;
    font-size: 16px;
    line-height: 58px;
}

.header-search {
    width: 16.6%;
    height: 42px;
    margin: 8px 16px;
    border-radius: 6px;
    background-color: #eef2f8;
}

.header-search form {
    display: flex;
    justify-content: space-between;
}

.input-form-search {
    width: 200px;
    height: 42px;
}

.input-form-search input {
    width: 200px;
    height: 40px;
    border: none;
    outline: none;
    margin: 1px 0px 1px 0px;
    background-color: #eef2f8;
    border-top-left-radius: 6px;
    border-bottom-left-radius: 6px;
    font-size: 15px;
    padding-left: 10px;
}

.btn-form-search {
    width: 50px;
    height: 42px;
    border-top-right-radius: 6px;
    border-bottom-right-radius: 6px;
    text-align: center;
}

.btn-form-search button {
    width: 40px;
    height: 35px;
    outline: none;
    border: none;
    margin-top: 4px;
}

.btn-form-search i {
    color: #72737d;
}

.header-options {
    width: 64.6%;
    height: 42px;
    margin: 8px 0px;
    display: flex;
    justify-content: flex-end;
}

.header-image {
    width: 42px;
    height: 42px;
    border-radius: 50%;
    cursor: pointer;
}

.header-image:hover {
    background-color: #69707a;
    transition: all 1s linear;
}

.image {
    width: 38px;
    height: 38px;
    border-radius: 50%;
    margin: 2px;
}

.header-alert {
    width: 38px;
    height: 38px;
    margin: 2px;
    border-radius: 50%;
    cursor: pointer;
    margin-right: 15px;
    text-align: center;
}

.header-alert:hover {
    background-color: #f2f2f2;
}

.header-alert i {
    color: #a7aeb8;
    font-size: 15px;
    margin-top: 12px;
}

.header-message {
    width: 38px;
    height: 38px;
    margin: 2px;
    border-radius: 50%;
    cursor: pointer;
    margin-right: 15px;
    text-align: center;
}

.header-message:hover {
    background-color: #f2f2f2;
}

.header-message i {
    color: #a7aeb8;
    font-size: 15px;
    margin-top: 12px;
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

.container {
    margin: 0px;
    padding: 0px;
    max-width: 100%;
    height: auto;
    display: flex;
    justify-content: space-between;
    padding-bottom: 100px;
    background-color: #f2f6fc;
}

.nav-bar {
    width: 16.5%;
    height: 721px;
    background-color: #fff;
    left: 0;
    top: 58px;
    position: fixed;
    cursor: pointer;
    padding-bottom: 80px;
}

.my-custom-scrollbar {
    overflow-y: scroll;
}

.my-custom-scrollbar::-webkit-scrollbar {
    width: 5px;
}

.my-custom-scrollbar::-webkit-scrollbar-track {
    margin-bottom: 200px;
}

.my-custom-scrollbar::-webkit-scrollbar-button {
    height: 10px;
}

.my-custom-scrollbar::-webkit-scrollbar-thumb {
    border-radius: 10px;
    background-color: #c5ccd6;
}

.nav-top-bar {
    width: 100%;
    height: 58px;
}

.nav-top-bar span {
    font-size: 11px;
    font-weight: 700;
    color: #a7aeb8;
    line-height: 58px;
    margin-left: 8.25%;
}

.nav-bar-main {
    width: 100%;
    height: auto;
}

.nav-bar-main a {
    text-decoration: none;
}

.nav-bar-main ul {
    width: 100%;
    height: auto;
    margin: 0px;
    padding: 0px;
    padding-top: 1px;
    display: inline-block;
}

.nav-bar-main li {
    width: 100%;
    height: 45px;
    list-style-type: none;
    margin: 0px 0px 0px 0px;
    line-height: 45px;
    padding-left: 20px;
}

.nav-bar-main li:hover {
    background-color: #f2f2f2;
    border-right: 3px solid #d4dae3;
}

.nav-bar-main span {
    font-size: 15px;
    color: #292a3aa8;
    font-weight: 400;
}

.nav-bar-main i {
    color: #a7aeb8;
    font-size: 14px;
    padding-right: 10px;
}

.nav-bar-group {
    width: 88%;
    height: auto;
    display: none;
    margin-left: 12%;
    border-left: 1px solid #d4dae3;
}

.nav-bar-group.active {
    display: block;
}

.nav-bar-group span {
    font-size: 14px;
    font-weight: 400;
    margin-left: 0px;
}

.content {
    width: 83.8%;
    height: auto;
    margin: 58px 0px 0px 16.5%;
}

.container-settings {
    width: 100%;
    height: auto;
}

.settings-top-bar {
    width: 100%;
    height: 48px;
    background-color: #fbfbfb;
    color: #292a3aa8;
    line-height: 48px;
    border-bottom: 1px solid #cfd4db;
}

.settings-top-bar span {
    font-weight: 600;
}

.settings-top-bar i {
    margin-left: 2%;
}

.settings-nav-bar {
    width: 96%;
    height: 42px;
    margin: 2% auto 0px auto;
    line-height: 42px;
    color: #292a3aa8;
    font-size: 15px;
}

.settings-nav-bar span {
    color: #292a3aa8;
}

.settings-nav-bar a {
    text-decoration: none;
}

.settings-nav-bar ul {
    margin: 0;
    padding: 0;
}

.settings-nav-bar li {
    height: 40px;
    list-style-type: none;
    display: inline-block;
    margin-right: 20px;
}

.settings-nav-bar li:first-child {
    border-bottom: 2px solid #0061f2;
}

.settings-content {
    width: 96%;
    height: auto;
    margin: 2% auto 0px auto;
    display: flex;
    justify-content: space-between;
}

.settings-changes-image {
    width: 32.5%;
    height: 365px;
    background-color: #ffffff;
    border-radius: 6px;
    box-shadow: 0 0.15rem 1.75rem 0 rgb(33 40 50 / 15%);
}

.settings-image-top-bar {
    width: 100%;
    height: 58px;
    background-color: #f8f8f9;
    border-top-left-radius: 6px;
    border-top-right-radius: 6px;
    border-bottom: 1px solid #c9c9c9;
    line-height: 58px;
}

.settings-image-top-bar span {
    color: #0061f2;
    font-weight: 500;
    margin-left: 5%;
}

.settings-image {
    width: 160px;
    height: 160px;
    margin: 5% auto 0px auto;
    border-radius: 50%;
}

.settings-image img {
    width: 160px;
    height: 160px;
    border-radius: 50%;
}

.settings-alert {
    width: 100%;
    height: 40px;
    line-height: 40px;
    text-align: center;
}

.settings-alert span {
    color: #292a3aa8;
    font-size: 14px;
}

.settings-btn {
    width: 165px;
    height: 44px;
    margin: 2.5% auto;
}

.settings-btn button {
    width: 165px;
    height: 44px;
    font-size: 14px;
}

.settings-form-account {
    width: 65%;
    height: 480px;
    background-color: #ffffff;
    border-radius: 6px;
    box-shadow: 0 0.15rem 1.75rem 0 rgb(33 40 50 / 15%);
}

.settings-account-top-bar {
    width: 100%;
    height: 58px;
    background-color: #f8f8f9;
    border-top-left-radius: 6px;
    border-top-right-radius: 6px;
    border-bottom: 1px solid #c9c9c9;
    line-height: 58px;
}

.settings-account-top-bar span {
    color: #0061f2;
    font-weight: 500;
    margin-left: 2.5%;
}

.settings-form-group {
    width: 94.5%;
    height: 70px;
    margin: 2% auto 0 auto;
}

.settings-form-group span {
    font-size: 11px;
    color: #e81500;
}

.settings-form-group input {
    color: #292a3aa8;
    font-size: 15px;
    text-align: left;
}

.settings-form-group label {
    font-size: 15px;
    color: #292a3aa8;
}

.settings-form-group button {
    width: 165px;
    height: 44px;
    font-size: 14px;
    float: right;
}
</style>

<body>
    @include('layouts.header-wrapper')
    <div class="container">
        @include('layouts.nav-bar')
        <div class="content">
            <div class="container-settings">
                <div class="settings-top-bar">
                    <i class="fa-solid fa-gear"></i>
                    <span>{!!$title!!}</span>
                </div>

                <div class="settings-nav-bar">
                    <ul>
                        <li><a href="{{route('admin.show-profile')}}"><span style="color:#0061f2">Hồ sơ</span></a></li>
                        <li><a href="{{route('admin.show-password')}}"><span>Mật khẩu</span></a></li>
                    </ul>
                </div>

                <div class="settings-content">
                    <div class="settings-changes-image">
                        <div class="settings-image-top-bar">
                            <span>Ảnh hồ sơ</span>
                        </div>
                        <div class="settings-image">
                            <img src="{{asset('../template/image/Profile.png')}}" alt="">
                        </div>
                        <div class="settings-alert">
                            <span>JPG or PNG không lớn hơn quá 5MB</span>
                        </div>
                        <div class="settings-btn">
                            <button type="button" class="btn btn-primary">Upload new image</button>
                        </div>
                    </div>

                    <div class="settings-form-account">
                        <div class="settings-account-top-bar">
                            @if(Session::has('success'))
                                <span style="color:#00ac69">{{Session::get('success')}}</span>
                            @else
                                <span>Chi tiết tài khoản</span>
                            @endif
                        </div>
                        <form action="{{route('admin.update-profile' , $user->id)}}" method="post">
                            @csrf
                            <div class="settings-form-group">
                                <div class="mb-3">
                                    <label class="form-label">Tên đăng nhập</label>
                                    <input style="background-color:#e8f0fe" type="button" class="form-control" name="username" value="{!!$user->username!!}">
                                </div>
                            </div>
                            <div class="settings-form-group">
                                <div class="row gx-3 mb-3">
                                    <div class="col-md-6">
                                        <label class="small mb-1">Họ và tên</label>
                                        <input class="form-control" type="text" name="fullname" value="{!!$user->fullname!!}">
                                        @error('fullname')
                                            <span>{!!$message!!}</span>
                                        @enderror
                                    </div>

                                    <div class="col-md-6">
                                        <label class="small mb-1">Email</label>
                                        <input style="background-color:#e8f0fe" class="form-control" type="button" name="email" value="{!!$user->email!!}">
                                    </div>
                                </div>
                            </div>
                            <div class="settings-form-group">
                                <div class="row gx-3 mb-3">
                                    <div class="col-md-6">
                                        <label class="small mb-1">Ngày tạo tài khoản</label>
                                        <input style="background-color:#e8f0fe" class="form-control" type="button" name="created_at" value="{!!$user->created_at->format('d-m-Y')!!}">
                                    </div>

                                    <div class="col-md-6">
                                        <label class="small mb-1">Cập nhật thông tin gần đây</label>
                                        <input style="background-color:#e8f0fe" class="form-control" type="button" name="updated_at" value="{!!$user->updated_at->format('d-m-Y')!!}">
                                    </div>
                                </div>
                            </div>
                            <div class="settings-form-group">
                                <div class="mb-3">
                                    <label class="form-label">Cấp độ</label>
                                    <input style="background-color:#e8f0fe" type="button" class="form-control" name="level" value="{!! ($user->level == 1) ? 'Quản trị viên' : '' !!}">
                                </div>
                            </div>
                            <div class="settings-form-group">
                                <button class="btn btn-primary" type="submit">Lưu thông tin</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
@include('layouts.footer')