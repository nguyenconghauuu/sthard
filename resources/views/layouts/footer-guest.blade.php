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
    function Index() {
        window.open("{{route('guest.index')}}", "_self");
    }

    function Quiz() {
        window.open("{{route('guest.quiz')}}", "_self");
    }

    function CourseAdvanced(){
        window.open("{{route('guest.course-advanced')}}", "_self");
    }

    function myFormLogin() {
        let element = document.getElementById('form-login');
        element.setAttribute('style', 'display:block');
    }

    function myFormLoginClose() {
        let element = document.getElementById('form-login');
        element.setAttribute('style', 'display:none');
    }

    function myFormLoginToRegister() {
        myFormRegister()
        myFormLoginClose();
    }

    function myFormRegister() {
        let element = document.getElementById('form-register');
        element.setAttribute('style', 'display:block');
    }

    function myFormRegisterClose() {
        let element = document.getElementById('form-register');
        element.setAttribute('style', 'display:none');
    }

    function myFormRegisterToLogin() {
        myFormLogin();
        myFormRegisterClose();
    }

    function myFormForgotPassword() {
        myFormLoginClose();
        let element = document.getElementById('form-forgot-password');
        element.setAttribute('style', 'display:block');
    }

    function myFormForgotPasswordClose() {
        let element = document.getElementById('form-forgot-password');
        element.setAttribute('style', 'display:none');
    }

    function Agree() {
        document.getElementById('notification').setAttribute('style', 'display:none');
    }

    if ('{{Session::has("register_success")}}' || '{{Session::has("actived_success")}}' ||
        '{{Session::has("actived_error")}}' || '{{Session::has("forgot_password")}}' || '{{Session::has("reset_password")}}'
        ) {
        document.getElementById('notification').setAttribute('style', 'display:block');
    }

    if ('{{$errors->has("email_address")}}') {
        myFormForgotPassword();
    }

    if ('{{$errors->has("username")}}' || '{{$errors->has("passcode")}}') {
        myFormLogin();
    }

    if ('{{$errors->has("fullname")}}' || '{{$errors->has("email")}}' || '{{$errors->has("user_name")}}' ||
        '{{$errors->has("pass_code")}}' || '{{$errors->has("passcode_comfirm")}}') {
        myFormRegister();
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