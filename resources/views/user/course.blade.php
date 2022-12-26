<!DOCTYPE html>
<html lang="en">
@include('layouts.header')
<style>
html,
body {
    margin: 0px;
    padding: 0px;
    font-family: 'Montserrat', sans-serif;
}

.container {
    margin: 0px;
    padding: 0px;
    max-width: 100%;
    height: auto;
    display: flex;
    justify-content: space-between;
}

.nav-bar-left {
    width: 13.2%;
    height: 721px;
    top: 0;
    left: 0;
    position: fixed;
    background-color: #fff;
    filter: drop-shadow(0 0 1px rgba(0, 0, 0, .05)) drop-shadow(0 2px 4px rgba(0, 0, 0, .08));
    border-right: 1px solid rgba(0, 0, 0, .05);
}

.nav-bar-logo {
    width: 100%;
    height: 58px;
    text-align: center;
}

.nav-bar-logo span {
    font-family: 'Lobster', cursive;
    font-size: 28px;
    line-height: 58px;
    color: #461a42;
    cursor: pointer;
}

.nav-bar-btn {
    width: 168px;
    height: 44px;
    background-color: #8854c0;
    border-radius: 5px;
    box-shadow: 0 4px 0 0 #6c4298;
    margin: 0px auto;
    line-height: 48px;
}

.nav-bar-btn i {
    color: #fff;
    font-size: 15px;
    margin: 0px 0px 0px 10px;
}

.nav-bar-btn span {
    font-size: 15px;
    color: #fff;
}

.nav-bar-ul-li {
    width: 100%;
    height: 150px;
    margin: 25px auto 0px auto;
    cursor: pointer;
}

.nav-bar-ul-li ul {
    list-style-type: none;
    margin: 0px;
    padding: 0px;
}

.nav-bar-ul-li li {
    width: 100%;
    height: 44px;
    display: inline-block;
    line-height: 44px;
}

.nav-bar-ul-li li:hover {
    background-color: #f2f2f2;
    border-right:4px solid #8854c0;
}

.nav-bar-ul-li span {
    font-size: 14px;
    color: #424242;
}

.nav-bar-ul-li i {
    padding-left: 9.75%;
    color: #72737d;
}

.container-header-content {
    width: 86.8%;
    height: auto;
    margin-left: 13.2%;
}

.header {
    width: 100%;
    height: 58px;
    background-color: #fff;
    top: 0;
    position: fixed;
    border-bottom: 1px solid rgba(0, 0, 0, .05);
    z-index: 10;
    display: flex;
}

.header-search {
    width: 82%;
    height: 42px;
    margin: 8px 0.5%;
    background-color: #f2f2f2;
    border-radius: 6px;
}

.header-search form {
    display: flex;
    justify-content: space-between;
}

.header-search-icons {
    width: 4%;
    height: 42px;
    line-height: 42px;
}

.header-search-icons button {
    width: 100%;
    height: 42px;
    outline: none;
    border: none;
    background-color: #f2f2f2;
    border-top-left-radius: 6px;
    border-bottom-left-radius: 6px;
}

.header-search-icons i {
    font-size: 14px;
    color: #72737d;
}

.header-search-input {
    width: 96%;
    height: 42px;
}

.header-search-input input {
    width: 99%;
    height: 40px;
    border: none;
    outline: none;
    margin: 1px 0px 1px 0px;
    background-color: #f2f2f2;
}

.header-profile {
    width: 4%;
    height: 58px;
}

.logo-profile{
    width: 42px;
    height: 42px;
    border-radius: 50%;
    cursor: pointer;
    margin: 8px 20px 0px 5px;
}

.logo-profile:hover {
    background-color: #69707a;
    transition: all 1s linear;
}

.logo-profile img {
    width: 38px;
    height: 38px;
    border-radius: 50%;
    cursor: pointer;
    margin: 2px;
}

.container-options {
    width: 240px;
    height: 143px;
    background-color: #fff;
    position: absolute;
    right: 20px;
    margin:70px 195px 0px 0px;
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
    height: auto;
    margin-top: 58px;
    background-color: #f2f2f2;
    display: flex;
    justify-content: center;
    padding-top: 1px;
    padding-bottom: 100px;
}

.container-content {
    width: 62.5%;
    height: auto;
    margin-top: 25px;
}

.container-content-class {
    width: 100%;
    height: 145px;
    background-color: #fff;
    padding-top: 1px;
    display: flex;
    border-width: 1px;
    border-radius: 2.5px;
}

.content-class-img {
    width: 120px;
    height: 120px;
    margin: 10px 0px 0px 15px;
}

.content-class-note {
    width: 562px;
    height: 120px;
    margin: 10px 0px 0px 15px;
}

.sp3 {
    color: #6d6d6d;
    font-size: 11px;
}

.sp4 {
    color: #292a3a;
    font-size: 16px;
    font-weight: 600;
}

.content-class-note ul {
    width: 350px;
    height: 50px;
    margin: 0px;
    padding: 0px;
    display: flex;
    flex-wrap: wrap;
    margin-top: 5px;
}

.content-class-note li {
    list-style-type: none;
    font-size: 12px;
    color: #424242;
    margin: 0px 0px 0px 0px;
    margin-right: 20px;
}

.content-class-note i {
    padding-right: 5px;
    color: #72737d;
}

.container-content-title {
    width: 100%;
    height: auto;
    background-color: #fff;
    padding-top: 1px;
    border-width: 1px;
    border-radius: 2.5px;
    margin-top: 20px;
    padding-bottom: 25px;
}

.content-title-text {
    width: 100%;
    height: 50px;
    border-bottom: 3px solid rgba(0, 0, 0, .05);
}

.content-title-text span {
    font-size: 16px;
    font-weight: 600;
    color: #292a3a;
    line-height: 50px;
    margin-left: 15px;
}

.content-text {
    width: 96.5%;
    height: auto;
    margin: 10px 0px 0px 2%;
}

.content-text span {
    max-width: 95%;
    font-size: 15px;
    color: #292a3a;
    line-height: 20px;
}

.container-content-index {
    width: 100%;
    height: auto;
    background-color: #fff;
    padding-top: 1px;
    border-width: 1px;
    border-radius: 2.5px;
    margin-top: 20px;
    padding-bottom: 25px;
}

.content-title-index {
    width: 100%;
    height: 50px;
    border-bottom: 3px solid rgba(0, 0, 0, .05);
}

.content-title-index span {
    font-size: 16px;
    font-weight: 600;
    color: #292a3a;
    line-height: 50px;
    margin-left: 15px;
}

.content-index {
    width: 96.5%;
    height: auto;
    margin: 10px 0px 0px 2%;
}

.content-index ul {
    margin: 0px;
    padding: 0px;
    list-style-type: none;
}

.content-index li {
    display: inline-block;
    width: 100%;
    height: 32px;
    list-style-type: none;
    font-size: 15px;
    color: #424242;
    margin: 10px 0px 0px 0px;
    line-height: 32px;
}

.content-index i {
    padding-right: 10px;
    color: #72737d;
}

.container-content-file {
    width: 100%;
    height: auto;
    background-color: #fff;
    padding-top: 1px;
    border-width: 1px;
    border-radius: 2.5px;
    margin-top: 20px;
    padding-bottom: 25px;
}

.container-content-file a {
    text-decoration: none;
}

.content-title-file {
    width: 100%;
    height: 50px;
    border-bottom: 3px solid rgba(0, 0, 0, .05);
}

.content-title-file span {
    font-size: 16px;
    font-weight: 600;
    color: #292a3a;
    line-height: 50px;
    margin-left: 15px;
}

.content-file {
    width: 96.5%;
    height: auto;
    margin: 25px 0px 0px 2%;
}

.content-file-title {
    width: 80%;
    height: 40px;
    background-color: #ede6f6;
    border-radius: 6px;
    margin: 10px 0px 0px 0px;
    line-height: 40px;
    cursor: pointer;
    color: #8864c2;
}

.content-file-title span {
    font-size: 15px;
    margin-left: 20px;
}

.content-file-title i {
    font-size: 15px;
    float: right;
    margin: 12.5px 10px 0px 0px;
}

.chapter{
    width:80%;
    height:auto;
    display:none;
}

.chapter.active{
    display:block;
}

.content-file-main {
    width: 80%;
    height: 40px;
    background-color: #fff;
    margin: 0px 0px 0px 0px;
    line-height: 40px;
    cursor: pointer;
    border-bottom: 1px solid rgba(0, 0, 0, .03);
    line-height: 40px;
    display:block;
}

.content-file-main.active {
    display: block;
}

.content-file-main i {
    font-size: 14px;
    margin-left: 20px;
    color: #8864c2;
}

.content-file-main span {
    font-size: 14px;
    margin-left: 5px;
    color: #424242;
}

.container-advertisement {
    width: 24.3%;
    height: 326px;
    margin-top: 25px;
    margin-left: 2.5%;
    position: sticky;
    top: 85px;
    cursor: pointer;
}

.container-advertisement a {
    text-decoration: none;
}

.advertisement-banner {
    width: 100%;
    height: 266.66px;
}

.advertisement-btn {
    width: 100%;
    height: 40px;
    margin-top: 20px;
    background-color: #ffa402;
    border-radius: 5px;
    opacity: 1;
    text-align: center;
    color: #fff;
    line-height: 40px;
}

.advertisement-btn i {
    font-size: 18px;
}

.advertisement-btn span {
    margin-left: 5px;
    font-size: 16px;
    font-weight: 700;
}

.footer {
    width: 100%;
    height: auto;
    background-color: #fff;
}

.container-footer {
    width: 85%;
    height: auto;
    display: flex;
    margin: 50px auto 0px auto;
    justify-content: space-between;
    flex-wrap: wrap;
}

.footer-links {
    width: 190px;
    height: 244px;
}

.footer-links ul {
    margin: 0px;
    padding: 0px;
}

.footer-links li {
    list-style-type: none;
    color: #6d6d6d;
    margin-top: 10px;
    font-size: 14px;
}

.footer-links li:nth-child(1) {
    margin-bottom: 15px;
    color: #424242;
    font-size: 15px;
}

.footer-note {
    width: 100%;
    height: 50px;
    text-align: center;
}

.footer-note span {
    color: #424242;
    font-size: 15px;
}

.search-ajax-result{
    width: 82%;
    height: auto;
    background-color: #fff;
    position: absolute;
    margin: 55px 0px 0px 0px;
    border-radius:8px;
    left:0.5%;
    z-index: 5;
}

.search-ajax-result-course{
    width:100%;
    height:auto;
    display:flex;
    flex-wrap: wrap;
    justify-content: space-between;
}

.search-ajax-result-course a{
    width:50%;
    height:auto;
    text-decoration: none;
}

.container-result {
    width: 95%;
    height: 80px;
    margin: 10px auto 10px auto;
    display: flex;
    justify-content: space-between;
    cursor: pointer;
    border-bottom: 1px solid rgba(0,0,0,.03);
}

.result-image {
    width: 20%;
    height: 70px;
}

.result-image img {
    width: 100%;
    height: 70px;
}

.result-image a {
    text-decoration: none;
}

.result-text {
    width: 77.5%;
    height: 70px;
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
</style>

<body>
    <div class="container">
        <div class="nav-bar-left">
            <div class="nav-bar-logo">
                <span onclick="HomePage()">Shard</span>
            </div>
            
            <div class="nav-bar-btn">
                <i class="fa-solid fa-compass"></i>
                <span>Bảng điều khiển</span>
            </div>
            <div class="nav-bar-ul-li">
                <ul>
                    <li onclick="HomePage()"><span><i style="padding-right: 7px" class="fa-solid fa-house-chimney"></i>Trang chủ</span></li>
                    <li onclick="CourseAdvanced()"><span><i style="padding-right: 13px" class="fa-solid fa-bolt-lightning"></i>Khóa học nâng cao</span></li>
                    <li onclick="Quiz()"><span><i style="padding-right:11px" class="fa-solid fa-circle-question"></i>Làm đề thi</span></li>
                    <li onclick="Activity()"><span><i style="padding-right:12px" class="fa-solid fa-clock-rotate-left"></i>Hoạt động</span></li>
                    <li><span><i style="padding-right:10.5px;margin-left:2px" class="fa-solid fa-envelope"></i>Tin nhắn</span></li>
                    <li><span><i style="padding-right:13px;margin-left:2px" class="fa-solid fa-bell"></i>Thông báo</span></li>
                </ul>
            </div>
        </div>

        <div class="container-header-content">
            <div class="header">
                <div class="header-search">
                    <form action="" method="get">
                        <div class="header-search-icons">
                            <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </div>
                        <div class="header-search-input">
                            <input type="text" placeholder="Tìm kiếm" class="input-search-ajax" name="search">
                        </div>
                        <div class="search-ajax-result">
                            <div class="search-ajax-result-course"></div>
                        </div>
                    </form>
                </div>

                <div class="header-profile">
                    <div onclick="myProfile()" class="logo-profile">
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

            <div class="content">
                <div class="container-content">
                    <div class="container-content-class">
                        <div class="content-class-img">
                            <img style="width:120px;height:120px" src="{!!$course_image!!}">
                        </div>
                        <div class="content-class-note">
                            <span class="sp3">BÀI HỌC</span><br>
                            <span class="sp4">{!!$course_name!!}</span>
                            <ul>
                                <li><i class="fa-solid fa-person-chalkboard"></i>{!!$sum_file!!} bài học</li>
                                <li style="margin-left:48px"><i class="fa-solid fa-chalkboard-user"></i>{!!$sum_chapter!!} chương</li>
                                <li><i class="fa-solid fa-users"></i>{!!$sum_user!!} người đã học</li>
                                <li style="margin-left:13px"><i class="fa-solid fa-calendar-days"></i>Cập nhật ngày {!!$created_at->format('d-m-Y')!!}</li>
                            </ul>
                        </div>
                    </div>

                     <div class="container-content-title">
                        <div class="content-title-text">
                            <span>Tổng quan</span>
                        </div>
                        @if($course_overview_contents != '')
                            <div class="content-text">
                                <span>{!! $course_overview_contents !!}</span>
                            </div>
                        @else
                            <div class="content-text">
                                <span style="color:#ea4335">Nội dung đang được cập nhật...</span>
                            </div>
                        @endif
                    </div>

                    <div class="container-content-index">
                        <div class="content-title-index">
                            <span>Bạn sẽ học được gì ?</span>
                        </div>
                        <div class="content-index">
                            <ul>
                                @if($course_index_contents->first())
                                    @foreach($course_index_contents as $course_index_content)
                                        <li><i class="fa-solid fa-check"></i>{!!$course_index_content->index_content!!}</li>
                                    @endforeach
                                @else
                                    <li style="color:#ea4335">Nội dung đang được cập nhật...</li>
                                @endif
                            </ul>
                        </div>
                    </div>

                    <div class="container-content-file">
                        <div class="content-title-file">
                            <span>Nội dung khóa học</span>
                        </div>

                        <div class="content-file">
                            @if($course_main_contents->first())
                                @foreach($course_main_contents as $course_main_content)
                                    <div class="content-file-title" onclick="myCourseFileContent('{{$course_main_content->id}}')">
                                        <span>{!! $course_main_content->chapter_content !!}</span>
                                        <i id="icons-{{$course_main_content->id}}" class="fa-solid fa-plus"></i>
                                    </div>

                                    <div class="chapter" id="chapter-{{$course_main_content->id}}">
                                    @if($course_file_contents->first())
                                        @foreach($course_file_contents as $course_file_content)
                                            @if($course_file_content->course_id == $course_main_content->course_id && $course_file_content->chapter == $course_main_content->chapter_content)
                                                @if($course_file_content->taifs_file == 'pdf' || $course_file_content->taifs_file == 'docx')
                                                    <div class="content-file-main" id="">
                                                            <a href="{{$course_file_content->link}}">
                                                                <i style="padding-left:2px" class="fa-solid fa-file-lines"></i>
                                                                <span>{!! $course_file_content->file_content !!}</span>
                                                            </a>
                                                        </a>
                                                    </div>
                                                @else
                                                    <div class="content-file-main" id="">
                                                        <a href="{{route('user.video-content' , $course_file_content->id)}}">
                                                            <i class="fa-solid fa-circle-play"></i>
                                                            <span>{!! $course_file_content->file_content !!}</span>
                                                        </a>
                                                    </div>
                                                @endif
                                            @endif
                                        @endforeach
                                    @endif
                                    </div>
                                @endforeach
                            @else
                                <span style="color:#ea4335;font-size:15px">Nội dung đang được cập nhật...</span>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="container-advertisement">
                    <a onclick="CourseAdvanced()">
                        <div class="advertisement-banner">
                            <img style="width:320.43px;height:266.66px" src="{{asset('../template/image/ads_banner.png')}}">
                        </div>
                        <div class="advertisement-btn">
                            <i class="fa-solid fa-bolt-lightning"></i>
                            <span>Khóa học nâng cao</span>
                        </div>
                    </a>
                </div>
            </div>

            @include('layouts.footer-user')
        </div>
    </div>
</body>
</html>

<script>
    function myProfile() {
        document.getElementById('container-options').classList.toggle('active');
    }

    function myCourseFileContent(value){
        let id_icons = 'icons-'.concat(value);
        let id_chapter = 'chapter-'.concat(value);
        let element = document.getElementById(id_chapter).classList.toggle('active');
        if (element == true) {
            document.getElementById(id_icons).className = 'fa-solid fa-minus';
        } else {
            document.getElementById(id_icons).className = 'fa-solid fa-plus';
        }
    }
</script>