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

.header {
    width: 100%;
    height: 64px;
    padding-top: 1px;
    position:fixed;
    top:0;
    z-index:10;
    background-color: #000;
}

.header_wrapper {
    width: 98%;
    height: 40px;
    margin: 11px auto;
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

.content {
    width: 98%;
    height: auto;
    margin: 0px auto;
    margin-top:64px;
}

.question {
    width: 100%;
    height:550px;
    margin: 0px auto;
    background-color: #461a42;
    border-radius:8px;
    padding-top:1px;
}

.question_content {
    width: 98%;
    height: auto;
    margin: 25px auto 25px auto;
    text-align:center;
}


.question_content p {
    font-size: 25px;
    color: #fff;
}

.question_option {
    width: 98%;
    height: auto;
    margin: 0px 0px 0px 1%;
    display:flex;
    justify-content: space-between;
}

.question_answer{
    width:24.5%;
    height:300px;
    border-radius:8px;
    padding:10px 0px 10px 10px;
    margin-bottom:10px;
    transition: all .3s ease;
    cursor: pointer;
}

.question_answer1{
    background-color:#2f6dae;
    box-shadow: 0 6px 0 0 #214e7c;
}

.question_answer1:hover{
    background-color:#347ac2;
}

.question_answer1 input{
    background-color: #2f6dae;
    outline:none;
    border:none;
}

.question_answer2{
    background-color:#2c9ca6;
    box-shadow: 0 6px 0 0 #1f6d74;
}

.question_answer2:hover{
    background-color: #31afba;
}

.question_answer2 input{
    background-color:#2c9ca6;
    outline:none;
    border:none;
}

.question_answer3{
    background-color:#eca82c;
    box-shadow: 0 6px 0 0 #c68612;
}

.question_answer3:hover{
    background-color: #eeb243;
}

.question_answer3 input{
    background-color:#eca82c;
    outline:none;
    border:none;
}

.question_answer4{
    background-color:#d4546a;
    box-shadow: 0 6px 0 0 #ba2f47;
}

.question_answer4:hover{
    background-color: #d9687c;
}

.question_answer4 input{
    background-color: #d4546a;
    outline:none;
    border:none;
}

.question_answer label{
    width:320px;
    height:290px;
    color: #fff;
    font-size:25px;
}

.control {
    width: 100%;
    height: 74px;
    margin: 12px auto;
    display: flex;
    justify-content: flex-end;
}

.control button{
    outline:none;
    border:none;
    width: 80px;
    height: 40px;
    background-color: #333333;
    border-radius: 8px;
    flex-shrink: 0;
    border: 0;
    transition: background-color .2s ease-out;
    text-align: center;
    color: #fff;
    font-size:15px;
}

.control button:hover {
    background-color: #545454;
}

.container_control{
    margin:10px 0px 0px 10px;
}

.container_control span{
    font-size:12px;
    color:#fff;
}

.control_button{
    width:60px;
    height:40px;
    background-color:#333333;
    border-radius:8px;
    flex-shrink: 0;
    border: 0;
    transition: background-color .2s ease-out;
    text-align:center;
    color:#fff;
}

.control_button:hover{
    background-color:#545454;
}

.control_button i{
    font-size:30px;
    margin-top:5px;
}

#button_submit{
    display:none;
}

</style>
<body>
    <div class="header">
        <div class="header_wrapper">
            <div class="actions_wrapper">
                <div class="actions_wrapper_button">
                    <a href="{{route('user.quiz')}}">
                        <i class="fa-solid fa-chevron-left"></i>
                    </a>
                </div>
                <div class="actions_wrapper_text">
                    <span>{!!$exam_name!!} - Mức độ câu hỏi: <span>
                    @if($exam_level == 1)
                        Dễ
                    @elseif($exam_level == 2)
                        Trung bình
                    @else
                        Khó
                    @endif
                    </span></span>
                </div>
            </div>
            <div class="header_wrapper_navigation">
                <div class="wrapper_navigation_text">
                    <span>Thời gian làm bài: <span id="time"></span></span>
                </div>
                <div class="wrapper_navigation_text">
                    <span>Tổng số câu hỏi: {!!$number_question!!}</span>
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

    <div class="content">
        <form action="{{route('user.quiz-result' , $exam_id)}}" method="post">
        @csrf
        @if($questions->first())
            @foreach($questions as $question)
                @if($index < $number_question)
                    @if($question->id == $random[$index])
                    <div class="question" id="question-{{$stt}}">
                        <div class="question_content">
                            <p class="text-break">Câu {!!$stt++!!}: {!!$question->question_content!!}<span style="color:#461a42">{!!$index++!!}</span></p>
                        </div>
                        <input type="hidden" name="sum_question" value="{{$stt}}">
                        <div class="question_option">
                            <div class="question_answer question_answer1">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="{{$question->id}}1" name="question{{$stt}}" id="question{{$stt}}-1">
                                    <label for="question{{$stt}}-1" class="form-check-label">{!!$question->answer_a!!}</label>
                                </div>
                            </div>

                            <div class="question_answer question_answer2">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="{{$question->id}}2" name="question{{$stt}}" id="question{{$stt}}-2">
                                    <label for="question{{$stt}}-2" class="form-check-label">{!!$question->answer_b!!}</label>
                                </div>
                            </div>

                            <div class="question_answer question_answer3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="{{$question->id}}3" name="question{{$stt}}" id="question{{$stt}}-3">
                                    <label for="question{{$stt}}-3" class="form-check-label">{!!$question->answer_c!!}</label>
                                </div>
                            </div>
                            
                            <div class="question_answer question_answer4">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="{{$question->id}}4" name="question{{$stt}}" id="question{{$stt}}-4">
                                    <label for="question{{$stt}}-4" class="form-check-label">{!!$question->answer_d!!}</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                @endif
            @endforeach
        @endif
        
        <div class="control">
            <div class="container_control">
                <div class="control_button" onclick="myBack()">
                    <i class="fa-solid fa-caret-left"></i>
                </div>
                <span style="margin-left:6px">Quay lại</span>
            </div>

            <div class="container_control" id="button_next">
                <div class="control_button" onclick="myNext()">
                    <i class="fa-solid fa-caret-right"></i>
                </div>
                <span style="margin-left:18px">Tiếp</span>
            </div>

            <div class="container_control" id="button_submit">
                <button type="submit">Nộp bài</button>
            </div>
        </div>
        </form>
    </div>
</body>
</html>

<script type="text/javascript">
    let time = '{{$exam_time}}';
    let minute = time - 1;
    let second = 60;
    let count = time * second;
    function CountDown() { 
      if(second >= 0){
        if (second < 10) {
          second = "0"+second;
        }
        document.getElementById('time').innerHTML = minute + ":" + second;
        second--;
        count--;
        }
        if(second <= -1){
            second = 59;
            minute--;
          if (minute < 10) {
            minute = "0"+minute;
          }
        }
        if (count < 0) {
            document.querySelector("#button_submit").click();
            clearInterval(countdown);
        }
      }
    const countdown= setInterval(CountDown,1000);
    CountDown();
    
    let question_id = '{{$stt}}' - 1;
    let index = 1;
    for(let i = 2 ; i <= question_id ; i++){
        let id = 'question-'.concat(i);
        document.getElementById(id).setAttribute('style' , 'display:none');
    }

    function myNext(){
        index++;
        if(index >= question_id) index = question_id;
        let id_after = 'question-'.concat(index);
        let id_before = 'question-'.concat(index - 1);
        document.getElementById(id_after)?.setAttribute('style','display:block');
        document.getElementById(id_before)?.setAttribute('style','display:none');
        if(index == question_id){
            document.getElementById('button_submit').setAttribute('style' , 'display:block');
            document.getElementById('button_next').setAttribute('style' , 'display:none');
        }else{
            document.getElementById('button_submit').setAttribute('style' , 'display:none');
            document.getElementById('button_next').setAttribute('style' , 'display:block');
        }
    }

    function myBack(){
        index--;
        if(index <= 1) index = 1;
        let id_after = 'question-'.concat(index);
        let id_before = 'question-'.concat(index + 1);
        document.getElementById(id_after)?.setAttribute('style','display:block');
        document.getElementById(id_before)?.setAttribute('style','display:none');
        document.getElementById('button_submit').setAttribute('style' , 'display:none');
        document.getElementById('button_next').setAttribute('style' , 'display:block');
    }
</script>