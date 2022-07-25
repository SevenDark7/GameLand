<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GameLand - Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/master.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<body>
<section class="container user-auth h-100">
    @if($errors->all())
        <div class="alert alert-danger mt-5">
            <ol class="text-right" dir="rtl">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ol>
        </div>
    @endif
    <div class="row p-5">
        <div class="col-12 col-md-6 p-4 bg-custom">
            <img class="card-img-top" src="/images/homeFlatImage.png" alt="Register Form">
        </div>
        <div class="col-12 col-md-6 p-4 text-center"
             style="box-shadow: -5px 0 20px rgba(0,0,0,.5) ;border: 1px solid #764AF1;">
            <form class="text-center mb-5" action="{{ route('register') }}" method="POST" dir="rtl">
                @csrf
                <div class="form-group text-right">
                    <label for="mobile">تلفن همراه</label>
                    <input type="tel" name="mobile" class="form-control" aria-describedby="mobileHelp"
                           placeholder="شماره تلفن خود را وارد کنید">
                    <small id="mobileHelp" class="form-text text-muted">حریم خصوصی شما برای گیم لند محفوظ میباشد.</small>
                </div>
                <div class="form-group text-right">
                    <label for="username">نام کاربری</label>
                    <input type="text" name="username" class="form-control" aria-describedby="usernameHelp"
                           placeholder="نام کاربری را وارد کنید">
                    <small id="usernameHelp" class="form-text text-muted">نام کاربری باید انگلیسی و شامل حروف (A-Z) و
                        اعداد (9-0) باشد.</small>
                </div>
                <div class="form-group text-right">
                    <label for="password">رمز عبور</label>
                    <input type="password" name="password" class="form-control" aria-describedby="passwordHelp"
                           placeholder="رمز عبور را وارد کنید">
                    <small id="passwordHelp" class="form-text text-muted">رمز عبور حداقل باید دارای 6 کاراکتر
                        باشد.</small>
                </div>
                <button type="submit" class="btn btn-outline-custom">عضویت در سایت</button>
            </form>
            <p>قبلا ثبت نام کردید؟ <a class="text-custom" href="/login">وارد شوید</a></p>
        </div>
    </div>
</section>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>
</html>
