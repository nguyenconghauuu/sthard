<div class="header">
    <div class="header-logo">
        <span onclick="Index()">SHard</span>
    </div>

    <div class="header-nav-bar">
        <ul>
            <li onclick="Index()"><span><i class="fa-solid fa-house-chimney"></i>Trang chủ</span></li>
            <li onclick="CourseAdvanced()"><span><i class="fa-solid fa-bolt-lightning"></i>Khóa học nâng cao</span></li>
            <li onclick="Quiz()"><span><i class="fa-solid fa-circle-question"></i>Làm đề thi</span></li>
            <li onclick="myFormLogin()"><span><i class="fa-solid fa-clock-rotate-left"></i>Hoạt động</span></li>
        </ul>
    </div>

    <div class="header-form-search">
        <div class="form-search-header">
            <form action="{{route('guest.search-ajax-result')}}" method="get">
                @csrf
                <div class="input-form-search-header">
                    <input type="text" placeholder="Tìm kiếm..." class="input-search-ajax" name="search">
                </div>
                <div class="btn-form-search-header">
                    <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                </div>
                <div class="search-ajax-result">
                    <div class="search-ajax-result-course"></div>
                    <div class="search-ajax-result-quiz"></div>
                </div>
            </form>
        </div>
    </div>

    <div class="header-button">
        <div class="btn-login-header" onclick="myFormLogin()" id="btn-login-header">
            <span>Đăng nhập</span>
        </div>
        <div class="btn-register-header" onclick="myFormRegister()" id="btn-register-header">
            <span>Đăng ký</span>
        </div>
    </div>
</div>

<div class="form-login" id="form-login">
    <div class="container-form">
        <div class="form-image">
            <img src="{{asset('../template/image/login-image.png')}}" alt="">
        </div>
        <div class="form-content">
            <div onclick="myFormLoginClose()" class="form-close"><i class="fa-solid fa-xmark"></i></div>
            <form action="{{route('guest.login')}}" method="post">
                @csrf
                <div class="form-group" style="margin-top:20px">
                    <div class="mb-3">
                        <label class="form-label">Tên đăng nhập</label>
                        <input type="text" class="form-control" name="username" value="{{old('username')}}">
                        <div class="error-message">
                            @error('username')
                                <span>{!!$message!!}</span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="mb-3">
                        <label class="form-label">Mật khẩu</label>
                        <input type="password" class="form-control" name="passcode" value="{{old('passcode')}}">
                        <div class="error-message">
                            @error('passcode')
                                <span>{!!$message!!}</span>
                            @enderror
                            <p onclick="myFormForgotPassword()" class="forgot-password">Quên mật khẩu ?</p>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="d-grid gap-2">
                        <button class="btn" type="submit">Đăng nhập</button>
                    </div>
                </div>
            </form>

            <hr style="width:80%;margin:0px auto 10px auto">
            <div class="form-group" style="text-align:center">
                <span onclick="" class="form-link">Không có tài khoản? <span onclick="myFormLoginToRegister()" style="color:#8854c0;cursor:pointer">Đăng ký</span></span>
            </div>
        </div>
    </div>
</div>

<div class="form-register" id="form-register">
    <div class="container-form" style="margin:70px auto;">
        <div class="form-content">
            <div onclick="myFormRegisterClose()" class="form-close"><i class="fa-solid fa-xmark"></i></div>
            <form action="{{route('guest.register')}}" method="post">
                @csrf
                <div class="form-group" style="margin-top:20px">
                    <div class="mb-3">
                        <label class="form-label">Họ và tên</label>
                        <input type="text" class="form-control" name="fullname" value="{{old('fullname')}}">
                        <div class="error-message">
                            @error('fullname')
                                <span>{!!$message!!}</span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" value="{{old('email')}}">
                        <div class="error-message">
                            @error('email')
                                <span>{!!$message!!}</span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="mb-3">
                        <label class="form-label">Tên đăng nhập</label>
                        <input type="text" class="form-control" name="user_name" value="{{old('user_name')}}">
                        <div class="error-message">
                            @error('user_name')
                                <span>{!!$message!!}</span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="mb-3">
                        <label class="form-label">Mật khẩu</label>
                        <input type="password" class="form-control" name="pass_code" value="{{old('pass_code')}}">
                        <div class="error-message">
                            @error('pass_code')
                                <span>{!!$message!!}</span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="mb-3">
                        <label class="form-label">Nhập lại mật khẩu</label>
                        <input type="password" class="form-control" name="passcode_comfirm" value="{{old('passcode_comfirm')}}">
                        <div class="error-message">
                            @error('passcode_comfirm')
                                <span>{!!$message!!}</span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="d-grid gap-2">
                        <button class="btn" type="submit">Đăng ký</button>
                    </div>
                </div>
            </form>

            <hr style="width:80%;margin:0px auto 10px auto">
            <div class="form-group" style="text-align:center">
                <span class="form-link">Bạn đã có tài khoản? <span onclick="myFormRegisterToLogin()" style="color:#8854c0;cursor:pointer">Đăng nhập</span></span>
            </div>
        </div>
    </div>
</div>

<div class="notification" id="notification">
    <div class="actived">
        <div class="actived-text">
            @if(Session::has('register_success'))
                <span>{!!Session::get('register_success')!!}</span>
            @endif
            @if(Session::has('actived_success'))
                <span>{!!Session::get('actived_success')!!}</span>
            @endif
            @if(Session::has('actived_error'))
                <span>{!!Session::get('actived_error')!!}</span>
            @endif
            @if(Session::has('forgot_password'))
                <span>{!!Session::get('forgot_password')!!}</span>
            @endif
            @if(Session::has('reset_password'))
                <span>{!!Session::get('reset_password')!!}</span>
            @endif
        </div>
        <div class="actived-button">
            <button onclick="Agree()" type="submit">OK</button>
        </div>
    </div>
</div>

<div class="form-forgot-password" id="form-forgot-password">
    <div class="container-form">
        <div class="form-image">
            <img src="{{asset('../template/image/login-image.png')}}" alt="">
        </div>
        <div class="form-content">
            <div onclick="myFormForgotPasswordClose()" class="form-close"><i style="margin:5px 0px 0px 1px;" class="fa-solid fa-xmark"></i></div>
            <form action="{{route('user.forgot-password')}}" method="post">
                @csrf
                <div class="form-group" style="margin-top:20px">
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" name="email_address" value="{{old('email_address')}}">
                        <div class="error-message">
                            @error('email_address')
                                <span>{!!$message!!}</span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="d-grid gap-2">
                        <button class="btn" type="submit">Tiếp theo</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>