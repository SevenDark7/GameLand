<div class="col-12 col-md-10 commentSection">
    @if($errors->all())
        <div class="alert alert-danger mt-5">
            <ol class="text-right" dir="rtl">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ol>
        </div>
    @endif
    <ul class="nav nav-tabs p-0" dir="rtl">
        <li class="nav-item" id="comments">
            <a class="nav-link text-custom" href="#">کامنت ها</a>
        </li>
        <li class="nav-item" id="addComment">
            <a class="nav-link text-custom" href="#">افزودن کامنت</a>
        </li>
    </ul>
    <div class="row" id="commentsBox">
        @if(count($gameInfo->comments) > 0)
            @foreach($gameInfo->comments as $comment)
                <div class="col-12 mt-2 text-custom text-right" dir="rtl">
                    <div class="jumbotron p-3 mb-3">
                        <h5>{{ $comment->user->username }}:</h5>
                        <p>{{ $comment->description }}</p>
                    </div>
                    <hr class="my-2 bg-custom">
                </div>
            @endforeach
        @else
            <div class="col-12 py-3 text-custom text-center comment">
                <h3>نظری برای آگهی ثبت نشده است</h3>
            </div>
        @endif
    </div>
    <div class="row" id="addCommentBox">
        <div class="col-12 py-3 text-dark text-right comment">
            <form action="/games/comment" method="post" enctype="multipart/form-data">
                @csrf
                @if(!\Illuminate\Support\Facades\Auth::check())
                    <div class="form-group">
                        <label for="username">نام کاربری</label>
                        <input type="text" class="form-control" name="username" dir="rtl" aria-describedby="userHelp"
                               placeholder="نام کاربری خود را وارد کنید">
                        <small id="emailHelp" class="form-text text-muted">توجه داشته باشید شما در این مرحله
                            باید وارد حساب کاربری خود شوید</small>
                    </div>
                    <div class="form-group">
                        <label for="password">رمز عبور</label>
                        <input type="password" dir="rtl" class="form-control" name="password"
                               placeholder="رمز عبور خود را وارد کنید">
                    </div>
                @endif
                <input type="hidden" name="game_id" value="{{ $gameInfo->id }}">
                <div class="form-group">
                    <label for="description">کامنت</label>
                    <textarea class="form-control" dir="rtl" name="description" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-outline-custom">ثبت نظر</button>
            </form>
        </div>
    </div>
</div>
