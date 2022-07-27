<nav class="navbar navbar-expand-lg navbar-dark bg-custom text-right" dir="rtl">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand text-left m-0 ml-md-3" dir="rtl" href="/">GameLand</a>
    <div class="collapse navbar-collapse text-right" dir="rtl" id="navbarTogglerDemo03">
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0 p-0">
            <li class="nav-item active">
                <a class="nav-link" href="/"> خانه<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/games">بازی ها</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/blogs">وبلاگ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/about">درباره ما</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/contact-us">تماس با ما</a>
            </li>
        </ul>
        <form action="/games" method="get" class="form-inline my-2 my-lg-0">
            @csrf
            <input class="form-control ml-sm-2" type="search" name="search" autocomplete="off" placeholder="جستجو" aria-label="Search">
            <button class="btn btn-outline-light my-2 my-sm-0" type="submit">جستجو</button>
        </form>
        @if(\Illuminate\Support\Facades\Auth::check())
            <span><a href="/profile" class="btn btn-outline-light mr-md-3">حساب کاربری</a></span>
        @else
            <span class="text-light mr-md-3"><a class="text-light" href="/login">ورود</a> / <a class="text-light" href="/register">ثبت نام</a></span>
        @endif
    </div>
</nav>
