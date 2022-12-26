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

/* content */
.content {
    width: 83.8%;
    height: auto;
    margin: 58px 0px 0px 16.5%;
    padding-bottom: 100px;
}

/* homepage */
.content-homepage {
    width: 100%;
    height: 255px;
    background-image: linear-gradient(135deg, #0061f2 0%, rgba(105, 0, 199, 0.8) 100%) !important;
    background-color: #0061f2 !important;
    padding-top: 1px;
    display: flex;
    justify-content: space-between;
}

.homepage-heading {
    width: 50%;
    height: 100px;
    margin-top: 50px;
    color: #fff;
}

.homepage-heading i {
    font-size: 25px;
    margin-left: 20px;
}

.homepage-heading span {
    font-size: 25px;
    margin-left: 5px;
}

.homepage-today {
    width: 50%;
    height: 80px;
    margin-top: 50px;
    display: flex;
    justify-content: flex-end;
}

.homepage-today-date {
    width: 264px;
    height: 44px;
    background-color: #fff;
    margin: 18px 20px 0px 0px;
    border-radius: 6px;
    line-height: 44px;
}

.homepage-today-date i {
    font-size: 16px;
    color: #a7aeb8;
    margin-left: 20px;
}

.homepage-today-date span {
    font-size: 16px;
    margin-left: 10px;
    color: #363d47;
}

.homepage-container {
    width: 98%;
    height: auto;
    background-color: #fff;
    margin: -50px 0px 0px 1%;
    padding-bottom: 100px;
    box-shadow: 0 0.15rem 1.75rem 0 rgb(33 40 50 / 15%) !important;
}

/* Nội dung tiêu đề */
.container-title-content {
    width: 100%;
    height: auto;
}

.title-content {
    width: 100%;
    height: 58px;
    border: 4px solid rgba(0, 0, 0, .21);
    background-color: #f8f8f9;
}

.title-content span {
    font-size: 20px;
    color: #292a3aa8;
    font-weight: bold;
    margin-left: 2.5%;
    line-height: 50px;
}

.content-title {
    width: 80%;
    height: auto;
}

.add-content-title {
    width: 96.6%;
    height: 40px;
    background-color: #eef2f8;
    margin: 0px 0px 0px 3.4%;
    border-radius: 6px;
    cursor: pointer;
}

.add-content-title span {
    margin-left: 2%;
    color: #292a3aa8;
    line-height: 40px;
    font-size: 16px;
}

.add-content-title span:hover {
    color: #4e73df;
}

.add-content-title i {
    float: right;
    font-size: 15px;
    line-height: 40px;
    padding-right: 2.5%;
    color: #4e73df;
}

.content-title-text {
    width: 96.6%;
    margin: 10px 0px 0px 3.4%;
    height: 365px;
    background-color: #eef2f8;
    border-radius: 6px;
    display: none;
    padding: 0px 1% 0px 2%;
}

.content-title-text.active {
    display: block;
}

.content-title-text button {
    float: right;
    margin: 10px 1% 0px 0px;
}

.title-form {
    width: 100%;
    height: 50px;
}

.title-form span {
    line-height: 50px;
    color: #4e73df;
    font-size: 16px;
}

.content-title-main {
    width: 100%;
    height: auto;
    padding: 2% 0px 0px 3.25%;
    text-align: justify;
}

.content-title-main span {
    font-size: 16px;
    color: #292a3aa8;
}

/* Bạn sẽ học được gì */
.container-learning-results {
    width: 100%;
    height: auto;
    margin-top: 50px;
}

.title-learning-results {
    width: 100%;
    height: 58px;
    border: 4px solid rgba(0, 0, 0, .21);
    background-color: #f8f8f9;
}

.title-learning-results span {
    font-size: 20px;
    color: #292a3aa8;
    font-weight: bold;
    margin-left: 2.5%;
    line-height: 50px;
}

.content-learning-results {
    width: 80%;
    height: auto;
}

.add-content-learning-results {
    width: 96.6%;
    height: 40px;
    background-color: #eef2f8;
    margin: 0px 0px 0px 3.4%;
    border-radius: 6px;
    cursor: pointer;
}

.add-content-learning-results span {
    margin-left: 2%;
    color: #292a3aa8;
    line-height: 40px;
    font-size: 16px;
}

.add-content-learning-results span:hover {
    color: #4e73df;
}

.add-content-learning-results i {
    float: right;
    font-size: 15px;
    line-height: 40px;
    padding-right: 2.5%;
    color: #4e73df;
}

.content-learning-results-text {
    width: 96.6%;
    margin: 10px 0px 0px 3.4%;
    height: 100px;
    background-color: #eef2f8;
    border-radius: 6px;
    display: none;
    padding: 0px 1% 0px 2%;
}

.content-learning-results-text.active {
    display: block;
}

.content-learning-results-form form {
    width: 100%;
    height: 40px;
    display: flex;
    justify-content: space-between;
}

.input-learning-results {
    width: 75%;
    height: 40px;
}

.input-learning-results input {
    height: 38px;
    color: #292a3aa8;
    font-size: 16px;
}

.ul-li-learning-results {
    width: 100%;
    height: auto;
    padding: 2% 0px 0px 3.25%;
    text-align: justify;
}

.ul-li-learning-results ul {
    margin: 0px;
    padding: 0px;
    margin-left: 0.65%;
}

.ul-li-learning-results li {
    list-style-type: none;
    margin: 0px auto 20px auto;
}

.ul-li-learning-results i {
    position: absolute;
    margin-top: 5px;
    color: #4e73df;
}

.ul-li-learning-results span {
    margin-left: 25px;
    color: #292a3aa8;
}

/* Nội dung khóa học*/
.container-content-course {
    width: 100%;
    height: auto;
    margin-top: 50px;
}

.title-content-course {
    width: 100%;
    height: 58px;
    border: 4px solid rgba(0, 0, 0, .21);
    background-color: #f8f8f9;
}

.title-content-course span {
    font-size: 20px;
    color: #292a3aa8;
    font-weight: bold;
    margin-left: 2.5%;
    line-height: 50px;
}

.content-course {
    width: 80%;
    height: auto;
}

.add-content-course {
    width: 96.6%;
    height: 40px;
    background-color: #eef2f8;
    margin: 20px 0px 0px 3.4%;
    border-radius: 6px;
    cursor: pointer;
}

.add-content-course span {
    margin-left: 2%;
    color: #292a3aa8;
    line-height: 40px;
    font-size: 16px;
}

.add-content-course span:hover {
    color: #4e73df;
}

.add-content-course i {
    float: right;
    font-size: 15px;
    line-height: 40px;
    padding-right: 2.5%;
    color: #4e73df;
}

.content-course-results {
    width: 80%;
    height: auto;
}

.add-content-course-results {
    width: 96.6%;
    height: 40px;
    background-color: #eef2f8;
    margin: 0px 0px 0px 3.4%;
    border-radius: 6px;
    cursor: pointer;
}

.add-content-course-results span {
    margin-left: 2%;
    color: #292a3aa8;
    line-height: 40px;
    font-size: 16px;
}

.add-content-course-results span:hover {
    color: #4e73df;
}

.add-content-course-results i {
    float: right;
    font-size: 15px;
    line-height: 40px;
    padding-right: 2.5%;
    color: #4e73df;
}

.content-course-results-text {
    width: 96.6%;
    margin: 10px 0px 0px 3.4%;
    height: 100px;
    background-color: #eef2f8;
    border-radius: 6px;
    display: none;
    padding: 0px 1% 0px 2%;
}

.content-course-results-text.active {
    display: block;
}

.content-course-results-form form {
    width: 100%;
    height: 40px;
    display: flex;
    justify-content: space-between;
}

.input-course-results {
    width: 75%;
    height: 40px;
}

.input-course-results input {
    height: 38px;
    color: #292a3aa8;
    font-size: 16px;
}

.content-course-main {
    width: 100%;
    height: auto;
}

.add-title-content-course-main {
    width: 96.6%;
    height: 40px;
    background-color: #eef2f8;
    margin: 2% 0px 0px 3.4%;
    border-radius: 6px;
    cursor: pointer;
}

.add-title-content-course-main span {
    margin-left: 2%;
    color: #292a3aa8;
    line-height: 40px;
    font-size: 16px;
}

.add-title-content-course-main span:hover {
    color: #4e73df;
}

.add-title-content-course-main i {
    float: right;
    font-size: 15px;
    line-height: 40px;
    padding-right: 2.5%;
    color: #4e73df;
}

/* File */
.content-course-main-results-text {
    width: 96.6%;
    margin: 10px 0px 10px 3.4%;
    height: 100px;
    background-color: #eef2f8;
    border-radius: 6px;
    display: none;
    padding: 0px 1% 0px 2%;
}

.content-course-main-results-text.active {
    display: block;
}

.content-course-main-results-form form {
    width: 100%;
    height: 32px;
    display: flex;
    justify-content: space-between;
}

.input-content-course-main-results {
    width: 42.5%;
    height: 32px;
}

.input-content-course-main-results input {
    height: 32px;
    margin-left: 1%;
    color: #292a3aa8;
    font-size: 16px;
}

.input-file-content-course-main-results {
    width: 42.5%;
}

.file-content-course-main {
    width: 96.6%;
    height: 40px;
    background-color: #fff;
    margin: 1px 0px 1px 3.4%;
    border-bottom: 1px solid #ebebeb;
    cursor: pointer;
}

.file-content-course-main a {
    text-decoration: none;
}

.file-content-course-main span {
    margin-left: 2.5%;
    color: #333;
    line-height: 40px;
}

.file-content-course-main span:hover {
    color: #4e73df;
}

.file-content-course-main i {
    float: right;
    font-size: 15px;
    line-height: 40px;
    padding-right: 2.5%;
    color: #4e73df;
}
</style>

<body>
    @include('layouts.header-wrapper')
    <div class="container">
        @include('layouts.nav-bar')
        <div class="content">
            <div class="content-homepage">
                <div class="homepage-heading">
                    <i class="fa-solid fa-chalkboard-user"></i>
                    <span>{!!$course_name!!}</span><br>
                    <span style="font-size:20px;margin-left:20px">Thêm một nội dung mới cho khóa học của bạn ?</span><br>
                    <span style="font-size:20px;margin-left:20px">Xem nội dung trên trang web của bạn. <a href="{{route('user.course-content' , $course_id)}}" style="color:#4e18d2;text-decoration:none">Tại đây</a></span>
                </div>
                @include('layouts.today')
            </div>
            <div class="homepage-container">
                <!-- Nội dung  tổng quan -->
                <div class="container-title-content">
                    <div class="title-content">
                        <span>Tổng quan</span>
                        @if(Session::has('success_1'))
                            <span style="color:#00ac69;font-size:16px">{!!Session::get('success_1')!!}</span>
                        @endif
                        @if(Session::has('error_1'))
                            <span style="color:#e81500;font-size:16px">{!!Session::get('error_1')!!}</span>
                        @endif
                        @error('overview_content')
                            <span style="color:#e81500;font-size:16px">{!!$message!!}</span>
                        @enderror
                    </div>
                    <div class="content-title">
                        <div class="content-title-main">
                            <span>{!! $course_overview_contents !!}</span>
                        </div>
                        <div class="add-content-title" onclick="myCourseOverviewContent()">
                            <span>Thêm một nội dung</span>
                            <i id="add-content-title-icons" class="fa-solid fa-plus"></i>
                        </div>
                        <div class="content-title-text" id="content-title-text">
                            <div class="title-form">
                                <span>Nội dung</span>
                            </div>
                            <form action="{{route('admin.create-overview-content-course')}}" method="post">
                                @csrf
                                <input name="course_id" type="number" hidden="hidden" value="{{$course_id}}">
                                <textarea name="overview_content" style="width:99%" class="form-control my-editor"></textarea>
                                <button type="submit" class="btn btn-primary">Thêm nội dung</button>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Bạn sẽ học được gì -->
                <div class="container-learning-results">
                    <div class="title-learning-results">
                        <span>Bạn sẽ học được gì ?</span>
                        @if(Session::has('success_2'))
                            <span style="color:#00ac69;font-size:16px">{!!Session::get('success_2')!!}</span>
                        @endif
                        @if(Session::has('error_2'))
                            <span style="color:#e81500;font-size:16px">{!!Session::get('error_2')!!}</span>
                        @endif
                        @error('index_content')
                            <span style="color:#e81500;font-size:16px">{!!$message!!}</span>
                        @enderror
                    </div>
                    <div class="content-learning-results">
                        <div class="ul-li-learning-results">
                            <ul>
                                @if($course_index_contents->first())
                                    @foreach($course_index_contents as $course_index_content)
                                        <li><i class="fa-solid fa-check"></i><span>{!! $course_index_content->index_content!!}</span></li>
                                    @endforeach
                                @endif
                            </ul>
                        </div>
                        <div class="add-content-learning-results" onclick="myCourseIndexContent()">
                            <span>Thêm một nội dung</span>
                            <i id="add-content-learning-results-icons" class="fa-solid fa-plus"></i>
                        </div>
                        <div class="content-learning-results-text" id="content-learning-results-text">
                            <div class="title-form">
                                <span>Nội dung</span>
                            </div>
                            <div class="content-learning-results-form">
                                <form action="{{route('admin.create-index-content-course')}}" method="post">
                                    @csrf
                                    <div class="input-learning-results">
                                        <input type="number" hidden="hidden" value="{{$course_id}}" name="course_id">
                                        <input type="text" hidden="hidden" value="{{$course_name}}" name="course_name">
                                        <input type="text" class="form-control" placeholder="Ghi nội dung tại đây..."
                                            name="index_content">
                                    </div>
                                    <div class="btn-learning-results">
                                        <button type="submit" class="btn btn-primary">Thêm nội dung</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Nội dung khóa học -->
                <div class="container-content-course">
                    <div class="title-content-course">
                        <span>Nội dung khóa học</span>
                        @if(Session::has('success_3'))
                            <span style="color:#00ac69;font-size:16px">{!!Session::get('success_3')!!}</span>
                        @endif
                        @if(Session::has('error_3'))
                            <span style="color:#e81500;font-size:16px">{!!Session::get('error_3')!!}</span>
                        @endif
                        @error('chapter_content')
                            <span style="color:#e81500;font-size:16px">{!!$message!!}</span>
                        @enderror
                        @if(Session::has('success_4'))
                            <span style="color:#00ac69;font-size:16px">{!!Session::get('success_4')!!}</span>
                        @endif
                        @if(Session::has('error_4'))
                            <span style="color:#e81500;font-size:16px">{!!Session::get('error_4')!!}</span>
                        @endif
                        @if(Session::has('error_5'))
                            <span style="color:#e81500;font-size:16px">{!!Session::get('error_5')!!}</span>
                        @endif
                        @error('file_content')
                            <span style="color:#e81500;font-size:16px">{!!$message!!}</span>
                        @enderror
                        @error('filepath')
                            <span style="color:#e81500;font-size:16px">{!!$message!!}</span>
                        @enderror
                    </div>

                    <div class="content-course">
                        <div class="content-course-main">
                        @if($course_main_contents->first())
                            @foreach($course_main_contents as $course_main_content)
                                <div class="add-title-content-course-main"
                                    onclick="myCourseFileContent('{{$course_main_content->id}}')">
                                    <span>{!! $course_main_content->chapter_content !!}</span>
                                    <i id="add-title-content-course-main-icons-{{$course_main_content->id}}" class="fa-solid fa-plus"></i>
                                </div>
                                
                                @if($course_file_contents->first())
                                    @foreach($course_file_contents as $course_file_content)
                                        @if($course_file_content->course_id == $course_main_content->course_id && $course_file_content->chapter == $course_main_content->chapter_content)
                                            @if($course_file_content->taifs_file == 'pdf')
                                                <div class="file-content-course-main">
                                                    <a href="{{$course_file_content->link}}">
                                                        <span>{!! $course_file_content->file_content !!}</span>
                                                        <i style="margin-right:2.2px" class="fa-solid fa-file-lines"></i>
                                                    </a>
                                                </div>
                                            @else
                                                <div class="file-content-course-main">
                                                    <a href="{{route('user.video-content' , $course_file_content->id)}}">
                                                        <span>{!! $course_file_content->file_content !!}</span>
                                                        <i style="margin-right:0.3px" class="fa-solid fa-circle-play"></i>
                                                    </a>
                                                </div>
                                            @endif
                                        @endif
                                    @endforeach
                                @endif
                                <!-- Form thêm file -->
                                <div class="content-course-main-results-text"
                                    id="content-course-main-results-text-{{$course_main_content->id}}">
                                    <div class="title-form">
                                        <span>{!! $course_main_content->chapter_content !!}</span>
                                    </div>
                                    <div class="content-course-main-results-form">
                                        <form action="{{route('admin.create-file-content-course')}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="input-content-course-main-results">
                                                <input type="number" hidden="hidden" value="{{$course_id}}" name="course_id">
                                                <input type="text" hidden="hidden" value="{{$course_main_content->chapter_content}}" name="chapter_content">
                                                <input type="text" class="form-control" placeholder="Ghi nội dung bài học tại đây..." name="file_content">
                                            </div>
                                            <div class="input-file-content-course-main-results">
                                                <div class="input-group">
                                                    <input style="height:32px" id="thumbnail-{{$course_main_content->id}}" class="form-control" type="text" name="filepath" placeholder="File...">
                                                    <span class="input-group-btn">
                                                        <a id="lfm-{{$course_main_content->id}}" data-input="thumbnail-{{$course_main_content->id}}" data-preview="holder" class="btn btn-primary btn-sm">
                                                            <i class="fa fa-picture-o"></i> Choose File
                                                        </a>
                                                    </span>
                                                </div>
                                                <img id="holder" style="margin-top:15px;max-height:100px">
                                            </div>
                                            <div class="btn-content-course-main-results">
                                                <button type="submit" class="btn btn-primary btn-sm">Thêm</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!---->
                            @endforeach
                        @endif
                        </div>
                        
                        <!-- Form thêm chương học -->
                        <div class="add-content-course" onclick="myCourseMainContent()">
                            <span>Thêm một nội dung</span>
                            <i id="add-content-course-results-icons" class="fa-solid fa-plus"></i>
                        </div>

                        <div class="content-course-results-text" id="content-course-results-text">
                            <div class="title-form">
                                <span>Nội dung</span>
                            </div>

                            <div class="content-course-results-form">
                                <form action="{{route('admin.create-chapter-content-course')}}" method="post">
                                    @csrf
                                    <div class="input-course-results">
                                        <input type="number" hidden="hidden" value="{{$course_id}}" name="course_id">
                                        <input type="text" hidden="hidden" value="{{$course_name}}" name="course_name">
                                        <input type="text" class="form-control" placeholder="Ghi nội dung chương học tại đây..." name="chapter_content">
                                    </div>
                                    <div class="btn-course-results">
                                        <button type="submit" class="btn btn-primary">Thêm nội dung</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!---->
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>
</html>
@if($course_main_contents->first())
<script type="text/javascript">
for (let i = 1; i <= '{{$course_main_content->id}}'; i++) {
    let id = '#lfm-'.concat(i);
    $(id).filemanager('video', 'application');
}
</script>
@endif
<script>
function myCourseOverviewContent() {
    let icons = document.getElementById('add-content-title-icons');
    let element = document.getElementById('content-title-text').classList.toggle('active');
    if (element == true) {
        icons.className = 'fa-solid fa-minus';
    } else {
        icons.className = 'fa-solid fa-plus';
    }
}

function myCourseIndexContent() {
    let icons = document.getElementById('add-content-learning-results-icons');
    let element = document.getElementById('content-learning-results-text').classList.toggle('active');
    if (element == true) {
        icons.className = 'fa-solid fa-minus';
    } else {
        icons.className = 'fa-solid fa-plus';
    }
}

function myCourseMainContent() {
    console.log(1);
    let icons = document.getElementById('add-content-course-results-icons');
    let element = document.getElementById('content-course-results-text').classList.toggle('active');
    if (element == true) {
        icons.className = 'fa-solid fa-minus';
    } else {
        icons.className = 'fa-solid fa-plus';
    }
}

function myCourseFileContent(value) {
    let id_icons = 'add-title-content-course-main-icons-'.concat(value);
    let icons = document.getElementById(id_icons);
    let id_file = 'content-course-main-results-text-'.concat(value);
    let element = document.getElementById(id_file).classList.toggle('active');
    if (element == true) {
        icons.className = 'fa-solid fa-minus';
    } else {
        icons.className = 'fa-solid fa-plus';
    }
}
</script>
@include('layouts.footer')