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

.form-reset-password{
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
    display: block;
}

.form-repassword {
    width: 420px;
    height: 320px;
    margin: 200px auto;
    background-color: #fff;
    border-radius: 8px;
    padding-top: 1px;
}

.repassword-text-topbar {
    width: 372px;
    height: 18px;
    margin: 20px auto 15px auto;
    line-height: 18px;
}

.repassword-text-topbar label {
    color: #9d9da4;
    font-size: 14px;
}

.form-group-repassword {
    width: 372px;
    height: 61px;
    margin: 0px auto 20px auto;
}

.form-group-repassword {
    font-weight: 400;
    font-size: 14px;
    color: #292a3a;
}

.form-group-repassword input {
    width: 372px;
    height: 40px;
    padding: 0 8px;
    font-size: 16px;
    border: 1px solid #9d9da4;
    border-radius: 8px;
    outline: none;
}

.form-group-repassword button {
    width: 70px;
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
</style>
<body>
    <div class="form-reset-password" id="form-reset-password">
        <div class="form-repassword">
            <form action="{{route('user.update-password' , $email_address)}}" method="post">
                @csrf
                <div class="repassword-text-topbar">
                    <label for="form-label">Cập nhật mật khẩu</label>
                </div>
                <div class="form-group-repassword">
                    <label for="form-label">Nhập mật khẩu mới</label>
                    <input class="form-control" type="password" name="passcode_new" value="{{old('passcode_new')}}">
                    @error('passcode_new')
                        <span style="font-size:10px;color:#e74a3b">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group-repassword">
                    <label for="form-label">Nhập lại mật khẩu mới</label>
                    <input class="form-control" type="password" name="passcode_new_comfirm" value="{{old('passcode_new_comfirm')}}">
                    @error('passcode_new_comfirm')
                        <span style="font-size:10px;color:#e74a3b">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group-repassword">
                    <button type="submit">Lưu</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>