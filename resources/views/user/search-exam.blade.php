@if(Session::has('id'))
    @foreach($exams as $exam)
        <a href="{{route('user.quiz-content' , $exam->id)}}">
            <div class="container-result">
                <div class="result-image">
                    <img src="{!!$exam->exam_image!!}">
                </div>
                <div class="result-text">
                    <div class="result-button" style="width:39px">
                        <span>QUIZ</span>
                    </div>
                    <div class="result-headding">
                        <span>{!!$exam->exam_name!!} - dành cho lớp: {!!$exam->exam_class!!}</span>
                    </div>
                </div>
            </div>
        </a>
    @endforeach
@else
    @foreach($exams as $exam)
        <a onclick="myFormLogin()">
            <div class="container-result">
                <div class="result-image">
                    <img src="{!!$exam->exam_image!!}">
                </div>
                <div class="result-text">
                    <div class="result-button" style="width:39px">
                        <span>QUIZ</span>
                    </div>
                    <div class="result-headding">
                        <span>{!!$exam->exam_name!!} - dành cho lớp: {!!$exam->exam_class!!}</span>
                    </div>
                </div>
            </div>
        </a>
    @endforeach
@endif