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
    width: 90%;
    height: auto;
    margin: 80px auto 0px auto;
}

.topic_name {
    width: 100%;
    height: 50px;
    line-height: 50px;
}

.topic_name i {
    font-size: 20px;
    color: #efa929;
}

.topic_name span {
    font-size: 22px;
    color: #292a3a;
    margin-left: 5px;
}

.course {
    width: 100%;
    height: auto;
    display: flex;
    flex-wrap: wrap;
    padding-bottom: 20px;
}

.container-course {
    width: 255px;
    height: 288px;
    background-color: #fff;
    border-radius: 7.5px;
    margin: 10px 18px 20px 0px;
    box-shadow: 0 0 0 1px rgb(0 0 0 / 5%), 0 3px 6px 1px rgb(0 0 0 / 5%);
    cursor: pointer;
}

.container-course:hover{
    transform: translateY(-0.3333333333rem);
    transition: transform 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

.container-course a {
    text-decoration: none;
}

.image-course {
    width: 255px;
    height: 160px;
}

.image-course img {
    width: 255px;
    height: 160px;
    border-top-left-radius: 7.5px;
    border-top-right-radius: 7.5px;
}

.btn-course {
    width: 70px;
    height: 25px;
    background-color: #f2f2f2;
    margin: 10px 0px 0px 10px;
    border-radius: 10px;
    line-height: 22px;
}

.btn-course span {
    font-size: 10px;
    color: #424242;
    font-weight: 600;
    margin-left: 6px;
    color: #8854c0;
}

.title-course {
    width: 230px;
    height: 50px;
    margin: 10px 0px 0px 12.5px;
    overflow: hidden;
    text-overflow: ellipsis;
}

.title-course span {
    font-size: 14px;
    color: #292a3a;
}

.note-course {
    width: 230px;
    height: 20px;
    margin: 0px 0px 0px 12.5px;
}

.note-course span {
    font-size: 11px;
    line-height: 20px;
    color: #6d6d6d;
}

.message{
    width:100%;
    height:238px;
}

.message span{
    color:#ea4335;
}

.footer {
    width: 100%;
    height: auto;
    background-color: #fff;
    padding-top: 1px;
}

.container-footer {
    width: 90%;
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
</style>

<body>
    @include('layouts.header-wrapper-user')
    <div class="content">
        <div class="topic_name">
            <i class="fa-solid fa-star"></i>
            <span>{!!$topic_name!!}</span>
        </div>

        <div class="course">
            @if($courses->first())
                @foreach($courses as $course)
                    @if($course->course_share == 1)
                        <div class="container-course">
                            <a href="{{route('user.course-content' , $course->id)}}">
                                <div class="image-course">
                                    <img src="{!!$course->course_image!!}">
                                </div>
                                <div class="btn-course">
                                    <span>KHÓA HỌC</span>
                                </div>
                                <div class="title-course">
                                    <span>{!!$course->course_title!!}</span>
                                </div>
                                <div class="note-course">
                                    <span>Dành cho lớp {!!$course->course_class!!}</span>
                                </div>
                            </a>
                        </div>
                    @endif
                @endforeach
            @else
                <div class="message">
                    <span>Nội dung đang được cập nhật...</span>
                </div>
            @endif
        </div>
    </div>
    @include('layouts.footer-user')
</body>
</html>