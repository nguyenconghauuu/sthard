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

.content {
    width: 83.8%;
    height: auto;
    margin: 58px 0px 0px 16.5%;
}

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
    height: 80px;
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
    width: 100%;
    height: auto;
    margin: -90px 0px 0px 0px;
    display: flex;
    flex-wrap: wrap;
}

.card-group {
    width: 392.39px;
    height: 200px;
    margin: 0 0 2% 1.8%;
    background-color: #fff;
    border: 1px solid rgba(33, 40, 50, 0.125);
    box-shadow: 0 0.15rem 1.75rem 0 rgb(33 40 50 / 15%);
    border-radius: 6px;
    display: flex;
    justify-content: space-between;
}

.card-group:hover {
    transform: translateY(-0.3333333333rem);
    box-shadow: 0 0.5rem 2rem 0 rgb(33 40 50 / 25%);
    transition: transform 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

.item-card {
    width: 60%;
    height: 170px;
    padding-top: 1px;
    display: flex;
    flex-wrap: wrap;
}

.card-icon {
    width: 40px;
    height: 40px;
    margin: 20px 0px 0px 20px;
    text-align: center;
}

.card-icon i {
    font-size: 30px;
    color: #a7aeb8;
    line-height: 40px;
}

.card-note {
    width: auto;
    height: 40px;
    margin: 20px 0px 0px 10px;
}

.card-note span {
    color: #a7aeb8;
    font-size: 20px;
    font-weight: 700;
    line-height: 55px;
}

.card-text {
    width: 100%;
    height: 25px;
    margin-top: 10px;
}

.card-text span {
    font-size: 15px;
    font-weight: 600;
    margin: 0 0 0 26.5px;
}

.card-option {
    width: 80%;
    height: 60px;
    margin-left: 25px;
}

.card-option a {
    text-decoration: none;
}

.card-option span {
    font-size: 13px;
    color: #292a3aa8;
}

.card-option ul {
    margin: 0px;
    padding: 0px;
}

.card-option li {
    width: 85%;
    height: 25px;
    margin-left: 25px;
    padding-left: 5px;
    font-size: 18px;
    line-height: 25px;
}

.card-option li:hover {
    background-color: #f2f2f2;
    border-right: 3px solid #d4dae3;
}

.image-card {
    width: 40%;
    height: 170px;
}

.image-card img {
    width: 128px;
    height: 133.39px;
    margin: 20px 0px 0px 15px;
}

.stats-container {
    width: 100%;
    height: auto;
}

.stats-header {
    width: 96%;
    height: 325px;
    margin: 0px auto;
    border-radius: 6px;
    display: flex;
    justify-content: space-between;
    background-color: #fff;
    box-shadow: 0 0.15rem 1.75rem 0 rgb(33 40 50 / 15%);
    background-image: url('../template/image/bg-waves.svg');
    background-repeat: no-repeat;
    background-position: center bottom;
}

.stats-header-text {
    width: 50%;
    height: 325px;
}

.stats-sp1 {
    width: 100%;
    height: 30px;
    margin-top: 75px;
}

.stats-sp1 span {
    font-size: 22px;
    color: #0061f2;
    margin-left: 25px;
}

.stats-sp2 {
    width: 95%;
    height: auto;
    margin-top: 10px;
    text-align: justify;
    margin-left: 25px;
}

.stats-sp2 span {
    width: 100%;
    font-size: 16px;
    color: #292a3aa8;
}

.stats-header-image {
    width: 50%;
    height: 325px;
}

.stats-header-image img {
    margin: -25px 0 0px 25px;
    width: 562px;
    height: 309px;
}

.card-stats-container {
    width: 100%;
    height: auto;
    margin-top: 2%;
    display: flex;
    justify-content: space-between;
}

.card-stats-group {
    width: 392.39px;
    height: 600px;
    margin: 0 0 2% 1.8%;
    background-color: #fff;
    border: 1px solid rgba(33, 40, 50, 0.125);
    box-shadow: 0 0.15rem 1.75rem 0 rgb(33 40 50 / 15%);
    border-radius: 6px;
}

.card-stats-header {
    width: 100%;
    height: 58px;
    background-color: #f8f8f9;
    border-bottom: 1px solid rgba(33, 40, 50, 0.125);
    border-radius: 6px;
    line-height: 58px;
}

.card-stats-header span {
    color: #0061f2;
    font-size: 16px;
    margin-left: 25px;
    font-weight: 500;
}

.card-stats-main {
    width: 100%;
    height: auto;
    display: flex;
}

.card-stats-month {
    width: 20%;
    height: auto;
    margin-left: 7.5%;
}

.card-stats-month ul {
    margin: 0px;
    padding: 0px;
    padding-top: 20px;
}

.card-stats-month li {
    margin: 0px 0px 14.2px 0px;
    height: 25px;
    list-style-type: none;
    font-size: 13px;
    line-height: 25px;
    color: #292a3aa8;
}

.card-stast-conn {
    margin: 20px 7.5% 0px 2.5%;
    width: 1%;
    height: 500px;
    background-color: #f2f6fc;
}

.card-stast-conn ul {
    margin: 0px;
    padding: 0px;
}

.card-stast-conn li {
    margin: 0px 0px 14px 0px;
    height: 25px;
    list-style-type: none;
    line-height: 25px;
    color: #292a3aa8;
}

.card-stast-conn i {
    font-size: 10px;
    margin-left: -3.5px;
}

.card-stast-note {
    width: 60%;
    height: auto;
}

.card-stast-note ul {
    margin: 0px;
    padding: 0px;
    padding-top: 20px;
}

.card-stast-note li {
    margin: 0px 0px 14.2px 0px;
    height: 25px;
    list-style-type: none;
    font-size: 13px;
    line-height: 25px;
    color: #292a3aa8;
}
</style>

<body>
    @include('layouts.header-wrapper')
    <div class="container">
        @include('layouts.nav-bar')
        <div class="content">
            <div class="content-homepage">
                <div class="homepage-heading">
                    <i class="fa-solid fa-chart-line"></i>
                    <span>Bảng điều khiển</span><br>
                    <span style="font-size:20px;margin-left:20px">Chào mừng bạn đến với trang quản trị viên</span>
                </div>
                @include('layouts.today')
            </div>

            <div class="homepage-container">
                <div class="card-group">
                    <div class="item-card">
                        <div class="card-icon">
                            <i class="fa-solid fa-display"></i>
                        </div>
                        <div class="card-note">
                            <span>{!!$sum_slide_show!!}</span>
                        </div>
                        <div class="card-text">
                            <span style="color:#fcca68">QUẢN LÝ TRÌNH CHIẾU</span>
                        </div>
                        <div class="card-option">
                            <ul>
                                <li style="color:#fcca68"><a href="{{route('admin.create-slideshow')}}"><span>Thêm ảnh trình chiếu</span></a></li>
                                <li style="color:#fcca68"><a href="{{route('admin.list-slideshow')}}"><span>Danh sách trình chiếu</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="image-card">
                        <img src="{{asset('../template/image/slideshow.svg')}}" alt="">
                    </div>
                </div>

                <div class="card-group">
                    <div class="item-card">
                        <div class="card-icon">
                            <i class="fa-solid fa-layer-group"></i>
                        </div>
                        <div class="card-note">
                            <span>{!!$sum_topics!!}</span>
                        </div>
                        <div class="card-text">
                            <span style="color:#6900c7">QUẢN LÝ CHỦ ĐỀ</span>
                        </div>
                        <div class="card-option">
                            <ul>
                                <li style="color:#6900c7"><a href="{{route('admin.create-topic')}}"><span>Thêm chủ đề</span></a></li>
                                <li style="color:#6900c7"><a href="{{route('admin.list-topic')}}"><span>Danh sách chủ đề</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="image-card">
                        <img src="{{asset('../template/image/topic.svg')}}" alt="">
                    </div>
                </div>

                <div class="card-group">
                    <div class="item-card">
                        <div class="card-icon">
                            <i class="fa-solid fa-chalkboard-user"></i>
                        </div>
                        <div class="card-note">
                            <span>{!!$sum_courses!!}</span>
                        </div>
                        <div class="card-text">
                            <span style="color:#00ac69">QUẢN LÝ KHÓA HỌC</span>
                        </div>
                        <div class="card-option">
                            <ul>
                                <li style="color:#00ac69"><a href="{{route('admin.create-course')}}"><span>Thêm khóa học</span></a></li>
                                <li style="color:#00ac69"><a href="{{route('admin.list-course')}}"><span>Danh sách khóa học</span></a></li>
                                <li style="color:#00ac69"><a href="{{route('admin.list-content-course')}}"><span>Thêm nội dung</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="image-card">
                        <img src="{{asset('../template/image/course.svg')}}" alt="">
                    </div>
                </div>

                <div class="card-group">
                    <div class="item-card">
                        <div class="card-icon">
                            <i class="fa-solid fa-book-open-reader"></i>
                        </div>
                        <div class="card-note">
                            <span>{{$sum_content}}</span>
                        </div>
                        <div class="card-text">
                            <span style="color:#7268fc">QUẢN LÝ NỘI DUNG</span>
                        </div>
                        <div class="card-option">
                            <ul>
                                <li style="color:#7268fc"><a href="{{route('admin.list-overview-content-course')}}"><span>Tổng quan</span></a></li>
                                <li style="color:#7268fc"><a href="{{route('admin.list-index-course')}}"><span>Bạn học được gì</span></a></li>
                                <li style="color:#7268fc"><a href="{{route('admin.list-file-content-course')}}"><span>Nội dung khóa học</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="image-card">
                        <img src="{{asset('../template/image/content.svg')}}" alt="">
                    </div>
                </div>

                <div class="card-group">
                    <div class="item-card">
                        <div class="card-icon">
                            <i class="fa-solid fa-circle-plus"></i>
                        </div>
                        <div class="card-note">
                            <span>{!!$sum_exams!!}</span>
                        </div>
                        <div class="card-text">
                            <span style="color:#68e1fd">QUẢN LÝ ĐỀ THI</span>
                        </div>
                        <div class="card-option">
                            <ul>
                                <li style="color:#68e1fd"><a href="{{route('admin.create-exam')}}"><span>Thêm đề thi</span></a></li>
                                <li style="color:#68e1fd"><a href="{{route('admin.list-exam')}}"><span>Danh sách đề thi</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="image-card">
                        <img src="{{asset('../template/image/lesson.svg')}}" alt="">
                    </div>
                </div>

                <div class="card-group">
                    <div class="item-card">
                        <div class="card-icon">
                            <i class="fa-solid fa-circle-question"></i>
                        </div>
                        <div class="card-note">
                            <span>{!!$sum_questions!!}</span>
                        </div>
                        <div class="card-text">
                            <span style="color:#689afc">QUẢN LÝ CÂU HỎI</span>
                        </div>
                        <div class="card-option">
                            <ul>
                                <li style="color:#689afc"><a href="{{route('admin.create-question')}}"><span>Thêm câu hỏi</span></a></li>
                                <li style="color:#689afc"><a href="{{route('admin.list-question')}}"><span>Danh sách câu hỏi</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="image-card">
                        <img src="{{asset('../template/image/question.svg')}}" alt="">
                    </div>
                </div>

                <div class="card-group">
                    <div class="item-card">
                        <div class="card-icon">
                            <i class="fa-solid fa-calendar"></i>
                        </div>
                        <div class="card-note">
                            <span>$1000</span>
                        </div>
                        <div class="card-text">
                            <span style="color:#9001f6">QUẢN LÝ THỐNG KÊ</span>
                        </div>
                        <div class="card-option">
                            <ul>
                                <li style="color:#9001f6"><a href="{{route('admin.list-point')}}"><span>Điểm số</span></a></li>
                                <li style="color:#9001f6"><a href=""><span>Doanh thu</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="image-card">
                        <img src="{{asset('../template/image/chart.svg')}}" alt="">
                    </div>
                </div>

                <div class="card-group">
                    <div class="item-card">
                        <div class="card-icon">
                            <i class="fa-solid fa-user"></i>
                        </div>
                        <div class="card-note">
                            <span>{!!$sum_users!!}</span>
                        </div>
                        <div class="card-text">
                            <span style="color:#0061f2">QUẢN LÝ THÀNH VIÊN</span>
                        </div>
                        <div class="card-option">
                            <ul>
                                <li style="color:#0061f2"><a href="{{route('admin.create-account')}}"><span>Thêm thành viên</span></a></li>
                                <li style="color:#0061f2"><a href="{{route('admin.list-account')}}"><span>Danh sách thành viên</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="image-card">
                        <img src="{{asset('../template/image/account.svg')}}" alt="">
                    </div>
                </div>
            </div>

            <div class="stats-container">
                <div class="stats-header">
                    <div class="stats-header-text">
                        <div class="stats-sp1">
                            <span>Thống kê dữ liệu trang web</span>
                        </div>
                        <div class="stats-sp2">
                            <span>Dưới đây là những bảng thống kê, báo cáo dữ liệu cho trang web của bạn.
                                Mọi dữ liệu cho trang web của bạn sẽ được cập nhật theo ngày và tháng.
                            </span>
                        </div>
                    </div>
                    <div class="stats-header-image">
                        <img src="{{asset('../template/image/statistics.svg')}}" alt="">
                    </div>
                </div>

                <div class="card-stats-container">
                    <div class="card-stats-group">
                        <div class="card-stats-header">
                            <span>Thành viên</span>
                        </div>
                        <div class="card-stats-main">
                            <div class="card-stats-month">
                                <ul>
                                    <li>tháng 12</li>
                                    <li>tháng 11</li>
                                    <li>tháng 10</li>
                                    <li>tháng 09</li>
                                    <li>tháng 08</li>
                                    <li>tháng 07</li>
                                    <li>tháng 06</li>
                                    <li>tháng 05</li>
                                    <li>tháng 04</li>
                                    <li>tháng 03</li>
                                    <li>tháng 02</li>
                                    <li>tháng 01</li>
                                    <li style="color:#0061f2">Hôm nay</li>
                                </ul>
                            </div>
                            <div class="card-stast-conn">
                                <ul>
                                    <li><i style="color:#a8124a" class="fa-solid fa-circle"></i></li>
                                    <li><i style="color:#fe220a" class="fa-solid fa-circle"></i></li>
                                    <li><i style="color:#fd5202" class="fa-solid fa-circle"></i></li>
                                    <li><i style="color:#fb9a00" class="fa-solid fa-circle"></i></li>
                                    <li><i style="color:#fabd00" class="fa-solid fa-circle"></i></li>
                                    <li><i style="color:#a3a307" class="fa-solid fa-circle"></i></li>
                                    <li><i style="color:#d1eb27" class="fa-solid fa-circle"></i></li>
                                    <li><i style="color:#66b12e" class="fa-solid fa-circle"></i></li>
                                    <li><i style="color:#0093cf" class="fa-solid fa-circle"></i></li>
                                    <li><i style="color:#0045fe" class="fa-solid fa-circle"></i></li>
                                    <li><i style="color:#3a00a5" class="fa-solid fa-circle"></i></li>
                                    <li><i style="color:#8700b0" class="fa-solid fa-circle"></i></li>
                                    <li><i style="color:#0061f2;font-size:10px;margin-left:-3px;margin-top:12px"
                                            class="fa-solid fa-square"></i></li>
                                </ul>
                            </div>
                            <div class="card-stast-note">
                                <ul>
                                    <li>Đang được cập nhật...</li>
                                    <li>Đang được cập nhật...</li>
                                    <li>Đang được cập nhật...</li>
                                    <li>Đang được cập nhật...</li>
                                    <li>Đang được cập nhật...</li>
                                    <li>Đang được cập nhật...</li>
                                    <li>Đang được cập nhật...</li>
                                    <li>Đang được cập nhật...</li>
                                    <li>Đang được cập nhật...</li>
                                    <li>Đang được cập nhật...</li>
                                    <li>100 - thành viên: 50 - học viên: 50</li>
                                    <li>100 - thành viên: 50 - học viên: 50</li>
                                    <li style="color:#0061f2">100 - thành viên: 50 - học viên: 50</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>
</html>
@include('layouts.footer')