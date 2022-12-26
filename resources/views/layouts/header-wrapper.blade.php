<div class="header">
    <div class="header-logo"><span>Admin SHard</span></div>
    <div class="header-search">
        <form action="">
            <div class="input-form-search">
                <input type="text" placeholder="Tìm kiếm">
            </div>
            <div class="btn-form-search">
                <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </div>
        </form>
    </div>
    <div class="header-options">
        <div class="header-message"><i class="fa-solid fa-envelope"></i></div>
        <div class="header-alert"><i class="fa-solid fa-bell"></i></div>
        <div onclick="myProfile()" class="header-image"><img class="image" src="{{asset('../template/image/Profile.png')}}" alt=""></div>
    </div>
    <div class="container-options" id="container-options">
        <div class="show-account">
            <span class="sp1">
                @if(Session::has('fullname'))
                    {!!Session::get('fullname')!!}
                @endif
            </span><br>
            <span class="sp2">
                @if(Session::has('email'))
                    {!!Session::get('email')!!}
                @endif
            </span>
        </div>
        <div class="show-options">
            <ul>
                <li><a href="{{route('admin.show-profile')}}"><i class="fa-solid fa-gear"></i><span>Thông tin</span></a></li>
                <li><a href="{{route('guest.index')}}"><i style="margin-left:2px" class="fa-solid fa-right-from-bracket"></i><span>Đăng xuất</span></a></li>
            </ul>
        </div>
    </div>
</div>