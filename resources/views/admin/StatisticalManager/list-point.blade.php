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
    padding-bottom: 100px;
}

.nav-bar {
    width: 16.5%;
    height: 721px;
    background-color: #fff;
    left: 0;
    top: 58px;
    position: fixed;
    overflow-y: scroll;
    scrollbar-width: thin;
    cursor: pointer;
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
    width: 98%;
    height: auto;
    background-color: #fff;
    margin: -50px 0px 0px 1%;
    border-radius: 6px;
    padding-bottom: 50px;
}

.table-top-bar {
    width: 100%;
    height: 58px;
    background-color: #f8f8f9;
    border-top-left-radius: 6px;
    border-top-right-radius: 6px;
    border-bottom: 1px solid #c9c9c9;
}

.table-top-bar span {
    color: #a7afbd;
    font-weight: 500;
    font-size: 18px;
    line-height: 58px;
    margin-left: 20px;
}

.table-form-search {
    width: 96%;
    height: 80px;
    margin: auto 2%;
    padding-top: 1px;
    display: flex;
    justify-content: space-between;
}

.table-select-show {
    width: auto;
    height: 44px;
    margin-top: 18px;
}

.table-select-show select {
    height: 44px;
    background-color: #fff;
    color: #292a3aa8;
    border: 1px solid #c5ccd6;
    outline: none;
    border-radius: 6px;
    font-size: 15px;
}

.table-select-show button {
    background-color: #fff;
    border: none;
    outline: none;
    color: #62a1fe;
    font-size: 15px;
}

.table-select-show button:hover {
    color: #0d6efd;
}

.table-search-show {
    width: 20%;
    height: 44px;
    margin-top: 18px;
    border: 1px solid #c5ccd6;
    border-radius: 6px;
}

.input-table-form-search {
    width: 80%;
    height: 44px;
}

.table-search-show form {
    display: flex;
    justify-content: space-around;
}

.input-table-form-search input {
    height: 42px;
    outline: none;
    border: none;
    border-top-left-radius: 6px;
    border-bottom-left-radius: 6px;
    font-size: 15px;
    color: #292a3aa8;
    padding-left: 10px;
}

.icon-table-form-search {
    width: 20%;
    height: 44px;
    text-align: center;
}

.icon-table-form-search button {
    width: 100%;
    height: 42px;
    outline: none;
    border: none;
    background-color: #fff;
    border-top-right-radius: 6px;
    border-bottom-right-radius: 6px;
    background-color: #e8f0fe;
}

.icon-table-form-search i {
    color: #72737d;
}

.table-container {
    width: 96%;
    height: auto;
    margin: auto 2%;
    padding-bottom: 25px;
}

.table {
    color: #292a3aa8;
}

.table-container ul {
    margin: 0px;
    padding: 0px;
}

.table-container li {
    text-align: justify;
    list-style-type: none;
    margin-bottom: 10px;
}

.ul-point li {
    height: 30px;
    line-height: 30px;
    background-color: #eef2f8;
    margin-left: 20px;
    display: flex;
    justify-content: space-between;
    padding-left: 10px;
}

.table-group-icon {
    width: 100px;
    height: 25px;
    display: flex;
}

.group-icon {
    width: 25px;
    height: 25px;
    background-color: #eef2f8;
    border-radius: 6px;
    text-align: center;
    margin-right: 10px;
}

.table-group-icon a {
    text-decoration: none;
}

.table-group-icon i {
    color: #a7aeb8;
    font-size: 13px;
}
</style>

<body>
    @include('layouts.header-wrapper')
    <div class="container">
        @include('layouts.nav-bar')
        <div class="content">
            <div class="content-homepage">
                <div class="homepage-heading">
                    <i class="fa-solid fa-calendar"></i>
                    <span>Quản lý điểm số</span><br>
                    <span style="font-size:20px;margin-left:20px">{!!$title!!}</span>
                </div>
                @include('layouts.today')
            </div>
            <div class="homepage-container">
                <div class="table-top-bar">
                    @if(Session::has('success'))
                        <span style="color:#00ac69">{{Session::get('success')}}</span>
                    @else
                        <span>Bảng dữ liệu</span>
                    @endif
                </div>
                <div class="table-form-search">
                    <div class="table-select-show">
                        <form action="" method="get">
                            <select name="keys">
                                <option value="">Đang cập nhật</option>
                            </select>
                            <button type="submit">Hiển thị</button>
                        </form>
                    </div>
                    <div class="table-search-show">
                        <form action="" method="get">
                            <div class="input-table-form-search">
                                <input type="text" placeholder="Tìm kiếm" name="search">
                            </div>
                            <div class="icon-table-form-search">
                                <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="table-container">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width:5%">STT</th>
                                <th style="width:20%">Họ Tên</th>
                                <th style="width:16.5%">Tài Khoản</th>
                                <th style="width:58.5%">Đề thi</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{$stt++}}</td>
                                <td>{!! $user->fullname !!}</td>
                                <td>{!! $user->username !!}</td>
                                <td>
                                    @foreach($exams as $exam)
                                        @foreach($exam_activitys as $exam_activity)
                                            @if($user->id == $exam_activity->user_id && $exam->id == $exam_activity->exam_id)
                                                <ul>
                                                    <li><b>{!!$exam->exam_name!!}</b></li>
                                                    @foreach($exam_points as $exam_point)
                                                        @if($user->id == $exam_point->user_id && $exam->id == $exam_point->exam_id)
                                                        <ul class="ul-point">
                                                            <li><span>Điểm: {{$exam_point->point}} - Ngày làm đề: {{$exam_point->created_at->format('d-m-Y')}}</span></li>
                                                        </ul>
                                                        @endif
                                                    @endforeach
                                                </ul>
                                            @endif
                                        @endforeach
                                    @endforeach
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="pagination" style="float:right;margin-right:2%">
                    {!! $users->appends(request()->all())->links('pagination::bootstrap-4') !!}
                </div>
            </div>
        </div>
    </div>
</body>
</html>
@include('layouts.footer')