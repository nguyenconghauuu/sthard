<div class="nav-bar my-custom-scrollbar">
    <div class="nav-top-bar"><span>QUẢN LÝ</span></div>
    <div class="nav-bar-main">
        <ul>
            <li><i class="fa-solid fa-chart-line"></i><a href="{{route('admin.homepage')}}"><span style="margin-left:2px">Bảng điều khiển</span></a></li>
        </ul>
    </div>

    <div class="nav-bar-main">
        <ul>
            <li onclick="mySlideShow()"><i class="fa-solid fa-display"></i><span style="margin-left:2px">Trình chiếu</span><i id="icons-8" style="margin-left:67px" class="fa-solid fa-angle-right"></i></li>
        </ul>
        <div class="nav-bar-group" id="nav-bar-slideshow">
            <li><a href="{{route('admin.create-slideshow')}}"><span>Thêm ảnh trình chiếu</span></a></li>
            <li><a href="{{route('admin.list-slideshow')}}"><span>Danh sách trình chiếu</span></a></li>
        </div>
    </div>

    <div class="nav-bar-main">
        <ul>
            <li onclick="myTopic()"><i class="fa-solid fa-layer-group"></i><span style="margin-left:2px">Chủ đề</span><i id="icons-2" style="margin-left:98px" class="fa-solid fa-angle-right"></i></li>
        </ul>
        <div class="nav-bar-group" id="nav-bar-topic">
            <li><a href="{{route('admin.create-topic')}}"><span>Thêm chủ đề</span></a></li>
            <li><a href="{{route('admin.list-topic')}}"><span>Danh sách chủ đề</span></a></li>
        </div>
    </div>

    <div class="nav-bar-main">
        <ul>
            <li onclick="myCourse()"><i class="fa-solid fa-chalkboard-user"></i><span style="margin-left:2px">Khóa học</span><i id="icons-3" style="margin-left:80px" class="fa-solid fa-angle-right"></i></li>
        </ul>
        <div class="nav-bar-group" id="nav-bar-course">
            <li><a href="{{route('admin.create-course')}}"><span>Thêm khóa học</span></a></li>
            <li><a href="{{route('admin.list-course')}}"><span>Danh sách khóa học</span></a></li>
            <li><a href="{{route('admin.list-content-course')}}"><span>Thêm nội dung</span></a></li>
        </div>
    </div>

    <div class="nav-bar-main">
        <ul>
            <li onclick="myListContent()"><i class="fa-solid fa-book-open-reader"></i><span style="margin-left:6px">Nội dung</span><i id="icons-4" style="margin-left:80px" class="fa-solid fa-angle-right"></i></li>
        </ul>
        <div class="nav-bar-group" id="nav-bar-listcontent">
            <li><a href="{{route('admin.list-overview-content-course')}}"><span>Tổng quan</span></a></li>
            <li><a href="{{route('admin.list-index-course')}}"><span>Bạn học được gì</span></a></li>
            <li><a href="{{route('admin.list-file-content-course')}}"><span>Nội dung khóa học</span></a></li>
        </div>
    </div>

    <div class="nav-bar-main">
        <ul>
            <li onclick="myExam()"><i class="fa-solid fa-circle-plus"></i><span style="margin-left:6px">Đề thi</span><i id="icons-6" style="margin-left:105px" class="fa-solid fa-angle-right"></i>
            </li>
        </ul>
        <div class="nav-bar-group" id="nav-bar-exam">
            <li><a href="{{route('admin.create-exam')}}"><span>Thêm đề thi</span></a></li>
            <li><a href="{{route('admin.list-exam')}}"><span>Danh sách đề thi</span></a></li>
        </div>
    </div>

    <div class="nav-bar-main">
        <ul>
            <li onclick="myQuestion()"><i class="fa-solid fa-circle-question"></i><span style="margin-left:6px">Câu hỏi</span><i id="icons-5" style="margin-left:93px" class="fa-solid fa-angle-right"></i></li>
        </ul>
        <div class="nav-bar-group" id="nav-bar-question">
            <li><a href="{{route('admin.create-question')}}"><span>Thêm câu hỏi</span></a></li>
            <li><a href="{{route('admin.list-question')}}"><span>Danh sách câu hỏi</span></a></li>
        </div>
    </div>

    <div class="nav-bar-main">
        <ul>
            <li onclick="myStats()"><i style="margin-left:1px" class="fa-solid fa-calendar"></i><span style="margin-left:6px">Thống kê</span><i id="icons-7" style="margin-left:80px" class="fa-solid fa-angle-right"></i></li>
        </ul>
        <div class="nav-bar-group" id="nav-bar-stats">
            <li><a href="{{route('admin.list-point')}}"><span>Điểm số</span></a></li>
            <li><span>Doanh thu</span></li>
        </div>
    </div>

    <div class="nav-bar-main">
        <ul>
            <li onclick="myAccount()"><i style="margin-left:2px" class="fa-solid fa-user"></i></i><span style="margin-left:5px">Thành viên</span><i id="icons-1" style="margin-left:67px" class="fa-solid fa-angle-right"></i></li>
        </ul>
        <div class="nav-bar-group" id="nav-bar-account">
            <li><a href="{{route('admin.create-account')}}"><span>Thêm thành viên</span></a></li>
            <li><a href="{{route('admin.list-account')}}"><span>Danh sách thành viên</span></a></li>
        </div>
    </div>
</div>