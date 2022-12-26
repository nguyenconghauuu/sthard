@if(Session::has('id'))
    @foreach($courses as $course)
        @if($course->course_share == 1)
        <a href="{{route('user.course-content' , $course->id)}}">
            <div class="container-result">
                <div class="result-image">
                    <img src="{!!$course->course_image!!}">
                </div>
                <div class="result-text">
                    <div class="result-button">
                        <span>KHÓA HỌC</span>
                    </div>
                    <div class="result-headding">
                        <span>{!!$course->course_name!!} - dành cho lớp: {!!$course->course_class!!}</span>
                    </div>
                </div>
            </div>
        </a>
        @else
        <a href="{{route('user.course-advanced')}}">
            <div class="container-result">
                <div class="result-image">
                    <img src="{!!$course->course_image!!}">
                </div>
                <div class="result-text">
                    <div class="result-button" style="width:80px;background-color:rgba(255,164,2,.1)">
                        <i style="font-size:10px;color:#ffa402;margin-left:6px" class="fa-solid fa-bolt-lightning"></i>
                        <span style="margin:0;font-size:10px;color:#424242;font-weight:600;color:#ffa402">NÂNG CAO</span>
                    </div>
                    <div class="result-headding">
                        <span>{!!$course->course_name!!} - dành cho lớp: {!!$course->course_class!!}</span>
                    </div>
                </div>
            </div>
        </a>
        @endif
    @endforeach
@else
    @foreach($courses as $course)
        @if($course->course_share == 1)
        <a onclick="myFormLogin()">
            <div class="container-result">
                <div class="result-image">
                    <img src="{!!$course->course_image!!}">
                </div>
                <div class="result-text">
                    <div class="result-button">
                        <span>KHÓA HỌC</span>
                    </div>
                    <div class="result-headding">
                        <span>{!!$course->course_name!!} - dành cho lớp: {!!$course->course_class!!}</span>
                    </div>
                </div>
            </div>
        </a>
        @else
        <a onclick="myFormLogin()">
            <div class="container-result">
                <div class="result-image">
                    <img src="{!!$course->course_image!!}">
                </div>
                <div class="result-text">
                    <div class="result-button" style="width:80px;background-color:rgba(255,164,2,.1)">
                        <i style="font-size:10px;color:#ffa402;margin-left:6px" class="fa-solid fa-bolt-lightning"></i>
                        <span style="margin:0;font-size:10px;color:#424242;font-weight:600;color:#ffa402">NÂNG CAO</span>
                    </div>
                    <div class="result-headding">
                        <span>{!!$course->course_name!!} - dành cho lớp: {!!$course->course_class!!}</span>
                    </div>
                </div>
            </div>
        </a>
        @endif
    @endforeach
@endif