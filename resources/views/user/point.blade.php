<!DOCTYPE html>
<html lang="en">
@include('layouts.header')
<style>
html,
body {
    margin: 0px;
    padding: 0px;
    font-family: 'Montserrat', sans-serif;
    background-color: #000;
}

.main-action-section {
    width: 480px;
    height: 300px;
    background-color: #0e0e0e;
    margin: 150px auto;
    border-radius: 8px;
    padding-top: 1px;
}

.main-action-section a{
    text-decoration:none;
}

.point_content {
    width: 432px;
    height: 80px;
    margin: 25px auto 10px auto;
    text-align: center;
    font-size: 24px;
    color: #fafafa;
    border-radius: 8px;
    background-color: #313131;
    padding: 5px 0px 5px 0px;
}

.action-section {
    width: 432px;
    height: 44.8px;
    border-radius: 8px;
    color: #fafafa;
    border: none;
    margin: 0px auto 10px auto;
    text-align: center;
    line-height: 44.8px;
    cursor: pointer;
    transition: all .3s ease;
}

.action-section i {
    font-size: 18px;
    margin-right: 5px;
}

.action-section span {
    font-size: 18px;
}

.button_play {
    background-color: #00c985;
    box-shadow: 0 4px 0 0 #00a06a;
}

.button_play:hover {
    background-color: #34d49d;
}

.button_review_quiz {
    background-color: #8854c0;
    box-shadow: 0 4px 0 #6c4298;
}

.button_review_quiz:hover {
    background-color: #a076cc;
}

.button_exit {
    background-color: #d4546a;
    box-shadow: 0 4px 0 0 #ba2f47;
}

.button_exit:hover {
    background-color: #d9687c;
}
</style>

<body>
    <div class="main-action-section">

        <div class="point_content">
            <span>Điểm của bạn</span><br>
            <span>{!!$point!!}/{!!$sum!!}</span>
        </div>

        <a href="{{route('user.quiz-content' , $exam_id)}}">
            <div class="action-section button_play">
                <i class="fa-solid fa-play"></i>
                <span>Làm lại đề thi</span>
            </div>
        </a>

        <a href="{{route('user.quiz-review' , $exam_id)}}">
            <div class="action-section button_review_quiz">
                <i class="fa-solid fa-circle-question"></i>
                <span>Xem lại đề thi</span>
            </div>
        </a>

        <a href="{{route('user.quiz')}}">
            <div class="action-section button_exit">
                <span>Thoát</span>
            </div>
        </a>
    </div>
</body>
</html>