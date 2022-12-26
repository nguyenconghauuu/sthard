<div class="homepage-today">
    <div class="homepage-today-date">
        <i class="fa-solid fa-calendar-day"></i>
        <span>{!!Session::has('day') ? Session::get('day') : ''!!}, ngày {!!Session::has('today') ? Session::get('today') : ''!!}</span>
    </div>
</div>