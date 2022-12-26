<!DOCTYPE html>
<html lang="en">
@include('layouts.header')
<style>
html,
body {
    margin: 0px;
    padding: 0px;
    font-family: 'Montserrat', sans-serif;
    background-color: #f2f2f2;
    max-width: 100%;
    overflow-y: hidden;
}

.video-header {
    width: 100%;
    height: 50px;
    background-color: #21262f;
    position: fixed;
    top: 0;
    z-index: 10;
}

.header_wrapper {
    width: 98%;
    height: 40px;
    margin: 5px auto;
    display: flex;
    justify-content: space-between;
}

.actions_wrapper {
    width: 20%;
    height: 40px;
    display: flex;
}

.actions_wrapper_button {
    width: 40px;
    height: 40px;
    background-color: #333333;
    border-radius: 8px;
    flex-shrink: 0;
    border: 0;
    color: #fff;
    transition: background-color .2s ease-out;
    text-align: center;
}

.actions_wrapper_button a {
    text-decoration: none;
    color: #fff;
}

.actions_wrapper_button:hover {
    background-color: #545454;
}

.actions_wrapper_button i {
    font-size: 18px;
    margin-top: 11px;
}

.actions_wrapper_text {
    width: auto;
    height: 40px;
    background-color: #333333;
    margin-left: 10px;
    line-height: 40px;
    border-radius: 8px;
    flex-shrink: 0;
    border: 0;
    color: #fff;
    transition: background-color .2s ease-out;
    padding: 0px 10px 0px 10px;
}

.actions_wrapper_text span {
    font-size: 15px;
    font-weight: 500;
    color: #fff;
}

.header_wrapper_navigation {
    width: auto;
    height: 40px;
    display: flex;
}

.wrapper_navigation_text {
    width: auto;
    height: 40px;
    background-color: #333333;
    line-height: 40px;
    border-radius: 8px;
    flex-shrink: 0;
    border: 0;
    color: #fff;
    transition: background-color .2s ease-out;
    padding: 0px 10px 0px 10px;
    margin-left:10px;
}

.wrapper_navigation_text span {
    font-size: 14px;
    color: #fff;
}

.wrapper_navigation_button {
    width: 40px;
    height: 40px;
    background-color: #333333;
    border-radius: 8px;
    flex-shrink: 0;
    border: 0;
    transition: background-color .2s ease-out;
    text-align: center;
    margin-left: 10px;
}

.wrapper_navigation_button a {
    text-decoration: none;
    color: #fff;
}

.wrapper_navigation_button:hover {
    background-color: #545454;
}

.wrapper_navigation_button i {
    font-size: 16px;
    margin-top: 11px;
}

.video-container {
    width: 100%;
    height: 1000px;
    display: flex;
    justify-content: space-between;
}

.video-main {
    width: 77.5%;
    height: 1000px;
    background-color: #000000;
    overflow-y: scroll;
}

.video-main::-webkit-scrollbar {
    width: 10px;
}

.video-main::-webkit-scrollbar-track {
    background-color: #fff;
    margin-bottom: 20px;
}

.video-main::-webkit-scrollbar-button {
    height: 10px;
}

.video-main::-webkit-scrollbar-thumb {
    border-radius: 4px;
    background-color: #d9d9d9;
}

.video-main-play {
    width: 80%;
    height: 585px;
    margin: 0px auto;
}

.video-main-text {
    width: 100%;
    height: 700px;
    background-color: #fff;
    padding-top: 1px;
}

.video-main-name {
    width: 80%;
    height: 40px;
    margin: 20px auto 0px auto;
}

.video-main-name span {
    line-height: 40px;
    font-size: 25px;
    color: #363d47;
    font-weight: 600;
}

.video-main-note {
    width: 80%;
    height: auto;
    margin: 0px auto 0px auto;
}

.video-main-note span {
    font-size: 15px;
    color: #292a3aa8;
}

.video-nav-bar {
    width: 22.5%;
    height: 721px;
    background-color: #fff;
    position: fixed;
    top: 50px;
    right: 0;
}

.video-top-bar {
    width: 100%;
    height: 50px;
}

.video-top-bar span {
    margin: 10px 0px 0px 20px;
    font-size: 16px;
    color: #363d47;
    line-height: 50px;
    font-weight: 600;
}

.video-list-content {
    width: 100%;
    height: 620px;
    overflow-y: scroll;
    cursor: pointer;
}

.video-list-content::-webkit-scrollbar {
    width: 10px;
}

.video-list-content::-webkit-scrollbar-track {
    margin-bottom: 20px;
}

.video-list-content::-webkit-scrollbar-button {
    height: 10px;
}

.video-list-content::-webkit-scrollbar-thumb {
    border-radius: 4px;
    background-color: #d2d3d5;
}

.video-chapter {
    width: 100%;
    height: 55px;
    background-color: #f7f8fa;
}

.video-chapter-sp1 {
    width: 100%;
    height: 25px;
    padding-left:10px;
}

.video-chapter-sp1 span {
    font-size: 15px;
    color: #363d47;
    font-weight: 600;
}

.video-chapter-sp1 i {
    font-size: 15px;
    float: right;
    line-height: 35px;
    margin-right: 10px;
    color: #8854c0;
}

.video-chapter-sp2 {
    width: 100%;
    height: 20px;
    padding-left:10px;
}

.video-chapter-sp2 span {
    font-size: 12px;
    color: #292a3aa8;
}

.chapter {
    display: none;
}

.chapter.active {
    display: block;
}

.video-content {
    width: 100%;
    height: 55px;
    background-color: #f7f8fa;
}

.video-content a {
    text-decoration: none;
}

.video-content:hover {
    background-color: #ede6f6;
}

.video-content-sp1 {
    width: 100%;
    height: 25px;
    padding-left:30px;
}

.video-content-sp1 span {
    font-size: 14px;
    color: #363d47;
}

.video-content-sp2 {
    width: 100%;
    height: 20px;
    padding-left:30px;
}

.video-content-sp2 span{
    font-size: 12px;
    color: #363d47;
}

.video-content-sp2 i {
    font-size: 13px;
    float: right;
    line-height: 25px;
    margin-right: 9.5px;
    color: #8854c0;
}
</style>

<body>
    <div class="video-header">
        <div class="header_wrapper">
            <div class="actions_wrapper">
                <div class="actions_wrapper_button">
                    <a href="{{route('user.course-content' , $course_id)}}">
                        <i class="fa-solid fa-chevron-left"></i>
                    </a>
                </div>
                <div class="actions_wrapper_text">
                    <span>{!!$course_name!!}</span>
                </div>
            </div>

            <div class="header_wrapper_navigation">
                <div class="wrapper_navigation_text">
                    <span>Tổng số bài học: {!!$sum!!}</span>
                </div>
                <div class="wrapper_navigation_button">
                    <a href="{{route('user.homepage')}}">
                        <i class="fa-solid fa-house-chimney"></i>
                    </a>
                </div>
                <div class="wrapper_navigation_button">
                    <a href="{{route('user.course-advanced')}}">
                        <i class="fa-solid fa-bolt-lightning"></i>
                    </a>
                </div>
                <div class="wrapper_navigation_button">
                    <a href="{{route('user.quiz')}}">
                        <i class="fa-solid fa-circle-question"></i>
                    </a>
                </div>
                <div class="wrapper_navigation_button">
                    <a href="{{route('user.activity')}}">
                        <i class="fa-solid fa-clock-rotate-left"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="video-container">
        <div class="video-main">
            <div class="video-main-play">
                <div class="ratio ratio-16x9">
                    <iframe style="margin-top:51px" src="{!!$link!!}" title="YouTube video" allowfullscreen></iframe>
                    <!-- <video style="margin-top:51px" controls>
                        <source src="{!!$link!!}" type="video/mp4">
                    </video> -->
                </div>
            </div>
            <div class="video-main-text">
                <div class="video-main-name">
                    <span>{!!$file_content!!}</span>
                </div>
                <div class="video-main-note">
                    <span>Cập nhật vào ngày {!! $created_at->format('d-m-Y') !!}</span>
                </div>
                <div class="video-main-name">
                    <span>Trải nghiệm ngay Khóa Học Nâng Cao</span>
                </div>
                <div class="video-main-note">
                    <span>Sự khác biệt trong Khóa Học Nâng Cao: trang học giao diện mới, bài học siêu chi tiết cùng với
                        đó là các
                        kiến thức mới lạ độc đáo nâng cao trình độ của các bạn học sinh. Đặc biệt còn có những video
                        hướng dẫn chi
                        tiết các bài tập, đáp án, v.v.
                    </span><br>
                    <span>
                        Tham gia vào Khóa Học Nâng Cao ngay <a href="">Tại đây</a>
                    </span>
                </div>
            </div>
        </div>

        <div class="video-nav-bar">
            <div class="video-top-bar">
                <span>Nội dung khóa học</span>
            </div>

            <div class="video-list-content">
                @foreach($course_main_contents as $course_main_content)
                    <div class="video-chapter" onclick="myChapter('{{$course_main_content->id}}')">
                        <div class="video-chapter-sp1">
                            <span>{!!$stt_chapter++!!}. {{$course_main_content->chapter_content}}</span>
                            <i id="icons-{{$course_main_content->id}}" class="fa-solid fa-angle-right"></i>
                        </div>
                        <div class="video-chapter-sp2">
                            <span>nội dung</span>
                        </div>
                    </div>
                    <div class="chapter" id="chapter-{{$course_main_content->id}}">
                        @foreach($course_file_contents as $course_file_content)
                            @if($course_file_content->course_id == $course_main_content->course_id && $course_file_content->chapter == $course_main_content->chapter_content)
                                @if($course_file_content->taifs_file == 'pdf' || $course_file_content->taifs_file == 'docx')
                                    <div class="video-content" id="file-{{$course_file_content->id}}">
                                        <div class="video-content-sp1">
                                            <a href="{!!$course_file_content->link!!}">
                                                <span>{!!$stt_file++!!}. {!!$course_file_content->file_content!!}</span>
                                            </a>
                                        </div>
                                        <div class="video-content-sp2">
                                            <span>file</span>
                                            <i style="margin-right:10.8px" class="fa-solid fa-file-lines"></i>
                                        </div>
                                    </div>
                                @else
                                    <div class="video-content" id="file-{{$course_file_content->id}}">
                                        <div class="video-content-sp1">
                                            <a href="{{route('user.video-content' , $course_file_content->id)}}">
                                                <span>{!!$stt_file++!!}. {!!$course_file_content->file_content!!}</span>
                                            </a>
                                        </div>
                                        <div class="video-content-sp2">
                                            <span>bài học</span>
                                            <i class="fa-solid fa-circle-play"></i>
                                        </div>
                                    </div>
                                @endif
                            @endif
                        @endforeach
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</body>
</html>

<script type="text/javascript">
    let id_file = 'file-'.concat('{{$id}}');
    document.getElementById(id_file).style.background = '#ede6f6';
    let id_chapter = 'chapter-'.concat('{{$id_chapter}}');
    document.getElementById(id_chapter).classList.toggle('active');
    let id_icons = 'icons-'.concat('{{$id_chapter}}');
    document.getElementById(id_icons).className = 'fa-solid fa-angle-down';

    function myChapter(value) {
        let id = 'chapter-'.concat(value);
        let id_icons = 'icons-'.concat(value);
        let element = document.getElementById(id).classList.toggle('active');
        if (element == true) {
            document.getElementById(id_icons).className = 'fa-solid fa-angle-down';
        } else {
            document.getElementById(id_icons).className = 'fa-solid fa-angle-right';
        }
    }

    function myHomepage() {
        window.open("{{route('admin.homepage')}}", "_self");
    }
</script>