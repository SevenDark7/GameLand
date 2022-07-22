<div class="col-12 col-md-10 commentSection">
    <ul class="nav nav-tabs">
        <li class="nav-item" id="comments">
            <a class="nav-link text-light" href="#">کامنت ها</a>
        </li>
        <li class="nav-item" id="addComment">
            <a class="nav-link text-light" href="#">افزودن کامنت</a>
        </li>
    </ul>
    <div class="row" id="commentsBox">
        <div class="col-12 py-3 text-light comment">
            <h3>Title</h3>
            <p class="lead">Description</p>
        </div>
    </div>
    <div class="row" id="addCommentBox">
        <div class="col-12 py-3 text-light text-right comment">
            <form action="#" method="post">
                @if(!\Illuminate\Support\Facades\Auth::check())
                    <div class="form-group">
                        <label for="username">نام کاربری</label>
                        <input type="text" class="form-control" id="username" dir="rtl" aria-describedby="userHelp"
                               placeholder="نام کاربری خود را وارد کنید">
                        <small id="emailHelp" class="form-text text-muted">توجه داشته باشید شما در این مرحله
                            باید وارد حساب کاربری خود شوید</small>
                    </div>
                    <div class="form-group">
                        <label for="password">رمز عبور</label>
                        <input type="password" dir="rtl" class="form-control" id="password"
                               placeholder="رمز عبور خود را وارد کنید">
                    </div>
                @endif
                <div class="form-group">
                    <label for="comment">کامنت</label>
                    <textarea class="form-control" dir="rtl" id="comment" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">ثبت نظر</button>
            </form>
        </div>
    </div>
</div>
