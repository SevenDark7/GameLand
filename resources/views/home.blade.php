@extends('layouts.master')

@section('title', 'Homepage')

@section('content')
    <article class="descrip">
        <div class="first"><img src="/images/console.gif" alt="GameShop"></div>
        <div class="secound">روزانه اخبار وسیعی از بازی های انواع کنسول ها در جهان منتشر میشود،
            از آنجایی که در کشورمان گیمر های زیادی علاقه مند بر دریافت بروز این اطلاعات دارند، گیم شاپ قصد دارد تا
            کاملترین و جدیدترین اخبار گیمینگ را در اختیار علاقه مندان این حرفه قرار دهد تا بازیکنان بتوانند با بالاترین
            اطلاعات در زمینه های مختلف به کار و حرفه خود ادامه دهند و لایق بهترین ها باشند.
        </div>
    </article>
    <article class="select">
        <div class='profile cntnt'>
            <img src="/images/profile.jpg" alt="Profile">
            <h4>پروفایل کاربری</h4>
            <p>برای ورود به پنل کاربری خود کلیک کنید</p>
        </div>
        <div class='favorites cntnt'>
            <img src="/images/favorite.jpg" alt="FavoriteGames">
            <h4>بازی های محبوب</h4>
            <p>برای ورود به لیست بازی های مورد علاقه کاربران کلیک کنید</p>
        </div>
        <div class="list cntnt">
            <img src="/images/list.jpg" alt="GamesList">
            <h4>لیست بازی ها</h4>
            <p>برای ورود به لیست بازی ها کلیک کنید</p>
        </div>
    </article>
@endsection
