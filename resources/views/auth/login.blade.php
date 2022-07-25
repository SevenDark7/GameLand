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
            <img class="card-img-top" src="/images/homeFlatImage.png" alt="Login Form">
        </div>
        <div class="col-12 col-md-6 p-4 text-center"
             style="box-shadow: -5px 0 20px rgba(0,0,0,.5) ;border: 1px solid #764AF1;">
            <form class="text-center mb-5" action="{{ route('login') }}" method="POST" dir="rtl">
                @csrf
                <div class="form-group text-right">
                    <label for="username">نام کاربری</label>
                    <input type="text" name="username" class="form-control" placeholder="نام کاربری را وارد کنید">
                </div>
                <div class="form-group text-right">
                    <label for="password">رمز عبور</label>
                    <input type="password" name="password" class="form-control" placeholder="رمز عبور را وارد کنید">
                </div>
                <button type="submit" class="btn btn-outline-custom">ورود به حساب</button>
            </form>
            <p>حساب ندارید؟ <a class="text-custom" href="/register">ثبت نام کنید</a></p>
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
