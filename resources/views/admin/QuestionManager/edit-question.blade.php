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
    width: 96%;
    height: auto;
    background-color: #fff;
    margin: -85px 0px 0px 2%;
    border-radius: 6px;
    padding-bottom: 40px;
}

.form-group-top-bar {
    width: 100%;
    height: 58px;
    background-color: #f8f8f9;
    border-top-left-radius: 6px;
    border-top-right-radius: 6px;
    border-bottom: 1px solid #c9c9c9;
}

.form-group-top-bar span {
    color: #a7afbd;
    font-weight: 500;
    font-size: 18px;
    line-height: 58px;
    margin-left: 20px;
}

.form-group-container {
    width: 96%;
    height: auto;
    background-color: #fff;
    margin: 25px auto 0px auto;
    border-radius: 6px;
    border: 4px solid #e0e5ec;
    display: flex;
    padding-top: 20px;
    padding-bottom: 20px;
    flex-wrap: wrap;
}

.form-group {
    width: 45%;
    height: 90px;
    margin: 0px 2.5% 10px 2.5%;
}

.form-group label {
    color: #292a3aa8;
    font-size: 16px;
}

.form-group input {
    width: 100%;
    height: 44px;
    border: 1px solid #c5ccd6;
    color: #292a3aa8;
    text-align: left;
}

.form-group textarea{
    color: #292a3aa8;
}

.form-group select {
    width: 100%;
    height: 44px;
    border: 1px solid #c5ccd6;
    color: #292a3aa8;
}

.alert-error {
    width: 100%;
    height: 20px;
    margin-top: 1px;
    line-height: 10px;
}

.alert-error span {
    font-size: 11px;
    color: #e81500;
}

.form-button {
    width: 96%;
    height: 40px;
    margin: 25px auto 0px auto;
    display: flex;
    justify-content: flex-end;
}

.form-button a {
    text-decoration: none;
}
</style>

<body>
    @include('layouts.header-wrapper')
    <div class="container">
        @include('layouts.nav-bar')
        <div class="content">
            <div class="content-homepage">
                <div class="homepage-heading">
                    <i class="fa-solid fa-circle-question"></i>
                    <span>Qu???n l?? c??u h???i</span><br>
                    <span style="font-size:20px;margin-left:20px">{!!$title!!}</span>
                </div>
                @include('layouts.today')
            </div>

            <div class="homepage-container">
                <div class="form-group-top-bar">
                    @if(Session::has('success'))
                        <span style="color:#00ac69">{{Session::get('success')}}</span>
                    @else
                        <span>Form Controls</span>
                    @endif
                </div>
                <form action="{{route('admin.update-question' , $questions->id)}}" method="post">
                    @csrf
                    <div class="form-group-container">
                        <div class="form-group">
                            <label for="form-label">Ch???n ????? thi</label>
                            <input style="background-color:#e8f0fe" class="form-control" type="button" name="exam_name" value="{{$questions->Exam->exam_name}}">
                        </div>

                        <div class="form-group">
                            <label for="form-label">M???c ????? c??u h???i</label>
                            @if($questions->question_level == 1)
                                <input style="background-color:#e8f0fe" class="form-control" type="button" name="exam_name" value="D???">
                            @elseif($questions->question_level == 2)
                                <input style="background-color:#e8f0fe" class="form-control" type="button" name="exam_name" value="Trung b??nh">
                            @else
                                <input style="background-color:#e8f0fe" class="form-control" type="button" name="exam_name" value="Kh??">
                            @endif
                        </div>

                        <div class="form-group" style="width:100%">
                            <label for="form-label">N???i dung c??u h???i</label>
                            <textarea class="form-control" name="question_content">{!!$questions->question_content!!}</textarea>
                            <div class="alert-error">
                                @error('question_content')
                                    <span>{!!$message!!}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group" style="width:100%">
                            <label for="form-label">????p ??n A</label>
                            <input class="form-control" name="answer_a" value="{!!$questions->answer_a!!}"></input>
                            <div class="alert-error">
                                @error('answer_a')
                                    <span>{!!$message!!}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group" style="width:100%">
                            <label for="form-label">????p ??n B</label>
                            <input class="form-control" name="answer_b" value="{!!$questions->answer_b!!}"></input>
                            <div class="alert-error">
                                @error('answer_b')
                                    <span>{!!$message!!}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group" style="width:100%">
                            <label for="form-label">????p ??n C</label>
                            <input class="form-control" name="answer_c" value="{!!$questions->answer_c!!}"></input>
                            <div class="alert-error">
                                @error('answer_c')
                                    <span>{!!$message!!}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group" style="width:100%">
                            <label for="form-label">????p ??n D</label>
                            <input class="form-control" name="answer_d" value="{!!$questions->answer_d!!}"></input>
                            <div class="alert-error">
                                @error('answer_d')
                                    <span>{!!$message!!}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group" style="width:100%">
                            <label for="form-label">????p ??n ????ng</label>
                            <select class="form-select" name="result">
                            @if($questions->result == 1){
                                    <option value="1" style="background-color:#1cc88a;color:#fff">????p ??n A</option>
                                    <option value="2">????p ??n B</option>
                                    <option value="3">????p ??n C</option>
                                    <option value="4">????p ??n D</option>
                                }
                                @endif

                                @if($questions->result == 2){
                                    <option value="2" style="background-color:#1cc88a;color:#fff">????p ??n B</option>
                                    <option value="1">????p ??n A</option>
                                    <option value="3">????p ??n C</option>
                                    <option value="4">????p ??n D</option>
                                }
                                @endif

                                @if($questions->result == 3){
                                    <option value="3" style="background-color:#1cc88a;color:#fff">????p ??n C</option>
                                    <option value="1">????p ??n A</option>
                                    <option value="2">????p ??n B</option>
                                    <option value="4">????p ??n D</option>
                                }
                                @endif

                                @if($questions->result == 4){
                                    <option value="4" style="background-color:#1cc88a;color:#fff">????p ??n D</option>
                                    <option value="1">????p ??n A</option>
                                    <option value="2">????p ??n B</option>
                                    <option value="3">????p ??n C</option>
                                }
                                @endif
                            </select>
                        </div>
                    </div>
                    <div class="form-button">
                        <button type="submit" class="btn btn-primary">C???p nh???t c??u h???i</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
@include('layouts.footer')