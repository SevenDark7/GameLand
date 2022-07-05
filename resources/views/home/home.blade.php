@extends('layouts.master')

@section('title', 'Homepage')

@section('content')
    <article class="descrip">
        <div class="first"><img src="/images/homeFlatImage.png" alt="GameShop"></div>
        <div class="secound">روزانه اخبار گسترده ای در زمینه صنعت گیم و بازی های متنوعی برای انواع کنسول های بازی از
            کمپانی های مختلف تولید و منتشر میشود.
            این موضوع باعث شده تا گیم لند با توجه به تعداد و علاقه قابل توجه گیمر های ایرانی به این صنعت، در راستای پوشش
            این اخبار و بازی ها گام بردارد و در استفاده
            و دسترسی راحت تر و سریع تر نقش خود را ایفا کند.
        </div>
    </article>
    <div id="demo" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <a href="#">
                    <img src="/images/Slide1.jpg" alt="Favorite" width="100%" height="500">
                    <div class="carousel-caption">
                        <h3>لیست بازی ها</h3>
                        <p>جهت ورود به صفحه بازی ها کلیک کنید</p>
                    </div>
                </a>
            </div>
            <div class="carousel-item">
                <a href="#">
                    <img src="/images/Slide2.jpg" alt="Most Visit" width="100%" height="500">
                    <div class="carousel-caption">
                        <h3>بیشترین بازدید</h3>
                        <p>جهت ورود به صفحه بازی ها با بیشترین بازدید کلیک کنید</p>
                    </div>
                </a>
            </div>
            <div class="carousel-item">
                <a href="#">
                    <img src="/images/Slide3.jpeg" alt="Favorite" width="100%" height="500">
                    <div class="carousel-caption">
                        <h3>علاقه مندی ها</h3>
                        <p>جهت ورود به صفحه بازی های مورد علاقه کلیک کنید</p>
                    </div>
                </a>
            </div>
        </div>
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>

    @include('home.recentBlogs')

@endsection
