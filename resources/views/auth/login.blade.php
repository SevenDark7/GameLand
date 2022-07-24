<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/fonts/icon.css">
</head>
<body>

    <section class="container">
        <main>
            <img src="/images/log.png" alt="Login">
        </main>
        <aside>
            <p>Login Your Account</p>
            <form action="/login" method="post">
                @csrf
                <div class="inpt">
                    <div class="user">
                        <i class="material-icons">person</i>
                        <input type="text" name="username" id="username" dir="auto" autocomplete="off" placeholder="Username" autofocus>
                    </div>
                    <div class="pass">
                        <i class="material-icons">lock</i>
                        <input type="password" name="password" id="password" dir="auto" autocomplete="off" placeholder="Password">
                    </div>
                    <div class="phone">
                        <i class="material-icons">phone</i>
                        <input type="tel" name="phone" id="phone" dir="ltr" autocomplete="off" placeholder="Phone Number" value=09 pattern="09[0-9]{9}" title="The phone number entry rule must be maintained and start with 09 and consist of 11 characters">
                    </div>
                </div>
                <div class="btn">
                    <button type="reset" id="cnl" class="butn cncl">Cancel</button>
                    <button type="submit" id="lgn" class="butn lgin">Login</button>
                </div>
            </form>
            <a href="#" id="forget">Forgot password?</a>
            <h3>Don't have an account? <a href="#" id="sign">Sign up</a></h3>
        </aside>
    </section>

    <div class="panel">
        <h4 id="sub">ورود به سایت</h4>
        <h5 id="txt">ورود با موفقیت انجام شد</h5>
    </div>

    <script src="/js/jquery-3.6.0.min.js"></script>
    <script src="/js/index.js"></script>
</body>
</html>
