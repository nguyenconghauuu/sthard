<div class="header">
    <div class="header-logo">
        <span onclick="HomePage()">SHard</span>
    </div>

    <div class="header-nav-bar">
        <ul>
            <li onclick="HomePage()"><span><i class="fa-solid fa-house-chimney"></i>Trang chủ</span></li>
            <li onclick="CourseAdvanced()"><span><i class="fa-solid fa-bolt-lightning"></i>Khóa học nâng cao</span></li>
            <li onclick="Quiz()"><span><i class="fa-solid fa-circle-question"></i>Làm đề thi</span></li>
            <li onclick="Activity()"><span><i class="fa-solid fa-clock-rotate-left"></i>Hoạt động</span></li>
        </ul>
    </div>

    <div class="header-form-search">
        <div class="form-search-header">
            <form action="{{route('user.search-ajax-result')}}" method="get">
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
        <div class="btn-icon-header">
            <i class="fa-solid fa-envelope"></i>
        </div>
        <div class="btn-icon-header">
            <i class="fa-solid fa-bell"></i>
        </div>
        <div onclick="myProfile()" class="btn-image-header">
            <img src="{{asset('./template/image/profile.png')}}" alt="">
        </div>
    </div>

    <div class="container-options" id="container-options">
        <div class="show-account">
            <span class="sp1">
                @if(Session::has('fullname'))
                    {!!Session::get('fullname')!!}
                @endif
            </span><br>
            <span class="sp2">
                @if(Session::has('email'))
                    {!!Session::get('email')!!}
                @endif
            </span>
        </div>
        <div class="show-options">
            <ul>
                <li><a href="{{route('user.show-profile')}}"><i class="fa-solid fa-gear"></i><span>Thông tin</span></a></li>
                <li><a href="{{route('guest.index')}}"><i style="margin-left:2px" class="fa-solid fa-right-from-bracket"></i><span>Đăng xuất</span></a></li>
            </ul>
        </div>
    </div>
</div>