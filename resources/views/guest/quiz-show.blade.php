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

.header-nav-bar li:nth-child(3){
    border-bottom: 3px solid #8854c0;
}

.header-nav-bar li:nth-child(3) span{
    color: #8854c0;
}

.header-nav-bar li:nth-child(2){
    width: 180px;
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
    justify-content: space-around;
}

.btn-login-header {
    width: 45%;
    height: 32px;
    margin: 13px 0px 0px 0px;
    text-align: center;
    background-color: rgba(41, 42, 58, .1);
    cursor: pointer;
    border-radius: 4px;
    display: block;
}

.btn-login-header:hover {
    background-color: rgba(41, 42, 58, .15);
}

.btn-login-header span {
    line-height: 32px;
    color: #292a3a;
    font-weight: 600;
    text-decoration: none;
    font-size: 15px;
}

.btn-register-header {
    width: 45%;
    height: 32px;
    margin: 13px 0px 0px 0px;
    text-align: center;
    cursor: pointer;
    border-radius: 4px;
    background-color: #8854c0;
    display: block;
}

.btn-register-header:hover {
    background-color: #a076cc;
}

.btn-register-header span {
    line-height: 32px;
    color: #fff;
    font-weight: 600;
    text-decoration: none;
    font-size: 15px;
}

.form-login {
    width: 100%;
    height: 100%;
    background-color: rgba(9, 9, 9, .8);
    -webkit-transition: background-color .3s ease;
    transition: background-color .3s ease;
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    z-index: 100;
    display: none;
}

.container-form {
    width: 480px;
    height: auto;
    margin: 80px auto;
}

.form-image {
    width: 96%;
    height: 200px;
    margin: 0px auto 0px auto;
}

.form-image img {
    width: 100%;
    height: 200px;
    border-top-left-radius: 8px;
    border-top-right-radius: 8px;
}

.form-content {
    width: 100%;
    height: auto;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 2px 4px 0 rgb(0 0 0 / 50%);
    padding-top: 1px;
}

.form-group {
    width: 80%;
    height: 85px;
    margin: 0px auto 0px auto;
}

.form-group label {
    font-size: 13px;
    font-weight: 500;
    color: #6d6d6d;
}

.form-group input {
    border-radius: 4px;
    height: 40px;
    font-size: 15px;
    color: #292a3a;
}

.form-group button {
    margin-top: 25px;
    border-radius: 4px;
    height: 40px;
    font-size: 15px;
    cursor: pointer;
    background-color: #8854c0;
    color: #fff;
}

.form-group button:hover {
    color: #fff;
    background-color: #a076cc;
}

.error-message {
    width: 100%;
    height: 20px;
    line-height: 15px;
}

.error-message span {
    font-size: 10px;
    color: #e74a3b;
}

.forgot-password {
    font-size: 11px;
    color: #8854c0;
    font-weight: 600;
    cursor: pointer;
    margin-top: 5px;
}

.form-link {
    font-size: 14px;
    color: #6d6d6d;
    font-weight: 500;
}

.form-link a {
    text-decoration: none;
    color: #8854c0;
}

.form-close {
    width: 24px;
    height: 24px;
    background-color: #e5e5e5;
    float: right;
    top: 0;
    text-align: center;
    cursor: pointer;
    border-radius: 50%;
    margin: 10px 10px 0px 0px;
}

.form-close:hover {
    background-color: rgba(0, 0, 0, .2);
}

.form-close i {
    font-size: 14px;
    color: #8854c0;
}

.form-register {
    width: 100%;
    height: 100%;
    background-color: rgba(9, 9, 9, .8);
    -webkit-transition: background-color .3s ease;
    transition: background-color .3s ease;
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    z-index: 100;
    display: none;
}

.form-forgot-password {
    width: 100%;
    height: 100%;
    background-color: rgba(9, 9, 9, .8);
    -webkit-transition: background-color .3s ease;
    transition: background-color .3s ease;
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    z-index: 100;
    display: none;
}

.notification{
    width: 100%;
    height: 100%;
    background-color: rgba(9, 9, 9, .8);
    -webkit-transition: background-color .3s ease;
    transition: background-color .3s ease;
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    z-index: 100;
    display: none;
}

.actived {
    width: 420px;
    height: 160px;
    margin: 250px auto;
    background-color: #fff;
    border-radius: 8px;
    padding-top: 1px;
}

.actived-text {
    width: 372px;
    height: 40px;
    margin: 20px auto 15px auto;
    line-height: 18px;
}

.actived-text span {
    color: #9d9da4;
    font-size: 14px;
}

.actived-button {
    width: 372px;
    height: 61px;
    margin: 0px auto 30px auto;
}

.actived-button button {
    width: 80px;
    height: 42px;
    margin-top: 20px;
    background-color: #fceed5;
    color: #efa929;
    font-weight: 700;
    font-size: 14px;
    border: none;
    border-radius: 4px;
    float: right;
}

.content {
    width: 90%;
    height: auto;
    margin: 80px auto 0px auto;
}

.topic-name {
    width: 100%;
    height: 50px;
    line-height: 50px;
}

.topic-name i {
    font-size: 20px;
    color: #efa929;
}

.topic-name span {
    font-size: 22px;
    color: #292a3a;
    margin-left: 5px;
}

.topic-name a {
    float: right;
    width: 103px;
    height: 30px;
    font-size: 14px;
    line-height: 15px;
    border-radius: 4px;
    background-color: rgba(136, 84, 192, .1);
    color: #8854c0;
    font-weight: 600;
    margin-top: 10px;
}

.topic-name a:hover {
    background-color: rgba(136, 84, 192, .2);
    color: #8854c0;
}

.quiz {
    width: 100%;
    height: auto;
    display: flex;
    flex-wrap: wrap;
    padding-bottom: 20px;
}

.container-quiz {
    width: 255px;
    height: 224px;
    background-color: #fff;
    border-radius: 7.5px;
    margin: 10px 18px 20px 0px;
    box-shadow: 0 0 0 1px rgb(0 0 0 / 5%), 0 3px 6px 1px rgb(0 0 0 / 5%);
    cursor: pointer;
}

.container-quiz:hover{
    transform: translateY(-0.3333333333rem);
    transition: transform 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

.container-quiz a {
    text-decoration: none;
}

.image-quiz {
    width: 255px;
    height: 120px;
}

.image-quiz img {
    width: 255px;
    height: 120px;
    border-top-left-radius: 7.5px;
    border-top-right-radius: 7.5px;
}

.btn-quiz {
    width: 42px;
    height: 25px;
    background-color: #f2f2f2;
    margin: 10px 0px 0px 10px;
    border-radius: 10px;
    line-height: 22px;
}

.btn-quiz span {
    font-size: 10px;
    color: #424242;
    font-weight: 600;
    margin-left: 7px;
    color: #8854c0;
}

.title-quiz {
    width: 230px;
    height: 30px;
    margin: 10px 0px 0px 12.5px;
    overflow: hidden;
    text-overflow: ellipsis;
}

.title-quiz span {
    font-size: 14px;
    color: #292a3a;
}

.note-quiz {
    width: 230px;
    height: 20px;
    margin: 0px 0px 0px 12.5px;
}

.note-quiz span {
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
    margin:45px 0px 0px 0px;
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
    @include('layouts.header-wrapper-guest')
    <div class="content">
        <div class="topic-name">
            <i class="fa-solid fa-star"></i>
            <span>{!!$topic_name!!}</span>
        </div>

        <div class="quiz">
            @if($exams->first())
            @foreach($exams as $exam)
                <div class="container-quiz">
                    <a onclick="myFormLogin()">
                        <div class="image-quiz">
                            <img src="{!!$exam->exam_image!!}">
                        </div>
                        <div class="btn-quiz">
                            <span>QUIZ</span>
                        </div>
                        <div class="title-quiz">
                            <span>{!!$exam->exam_title!!}</span>
                        </div>
                        <div class="note-quiz">
                            <span>Dành cho lớp {!!$exam->exam_class!!} . {!!$exam->number_question!!} câu hỏi . <span>
                            @if($exam->exam_level == 1)
                                Dễ
                            @elseif($exam->exam_level == 2)
                                Trung bình
                            @else
                                Khó
                            @endif
                            </span></span>
                        </div>
                    </a>
                </div>
            @endforeach
            @else
                <div class="message">
                    <span>Nội dung đang được cập nhật...</span>
                </div>
            @endif
        </div>
    </div>
    @include('layouts.footer-guest')
</body>
</html>