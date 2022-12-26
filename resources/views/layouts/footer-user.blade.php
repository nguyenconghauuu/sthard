<div class="footer">
    <div class="container-footer">
        <div class="footer-links">
            <ul>
                <li>Các môn chung</li>
                <li>Toán học</li>
                <li>Văn học</li>
                <li>Ngoại ngữ</li>
            </ul>
        </div>
        <div class="footer-links">
            <ul>
                <li>Khoa học tự nhiên</li>
                <li>Vật lý</li>
                <li>Hóa học</li>
                <li>Sinh học</li>
            </ul>
        </div>
        <div class="footer-links">
            <ul>
                <li>Khoa học xã hội</li>
                <li>Lịch sử</li>
                <li>Địa lý</li>
                <li>Giáo dục công dân</li>
            </ul>
        </div>
        <div class="footer-links">
            <ul>
                <li>Hỗ trợ</li>
                <li>Đăng nhập</li>
                <li>Đăng ký</li>
                <li>Tìm kiếm</li>
            </ul>
        </div>
    </div>
    <div class="footer-note">
        <span>studyhard.com.vn</span>
    </div>
</div>

<script type="text/javascript">
    function myProfile() {
        document.getElementById('container-options').classList.toggle('active');
    }

    function HomePage() {
        window.open("{{route('user.homepage')}}", "_self");
    }

    function CourseAdvanced(){
        window.open("{{route('user.course-advanced')}}", "_self");
    }

    function Quiz() {
        window.open("{{route('user.quiz')}}", "_self");
    }

    function Activity() {
        window.open("{{route('user.activity')}}", "_self");
    }

    $('.input-search-ajax').keyup(function () {
        var _text = $(this).val();
        if(_text != ''){
            $.ajax({
                url: "{{route('user.search-ajax-course')}}?search=" + _text,
                type: 'GET',
                success:function(course){
                    $('.search-ajax-result-course').show(500);
                    $('.search-ajax-result-course').html(course);
                }
            });
        }else{
            $('.search-ajax-result-course').hide();
        }
    });

    $('.input-search-ajax').keyup(function () {
        var _text = $(this).val();
        if(_text != ''){
            $.ajax({
                url: "{{route('user.search-ajax-exam')}}?search=" + _text,
                type: 'GET',
                success:function(exam){
                    $('.search-ajax-result-quiz').show(500);
                    $('.search-ajax-result-quiz').html(exam);
                }
            });
        }else{
            $('.search-ajax-result-quiz').hide();
        }
    });
</script>