@extends('layouts.master')

@section('title', 'Homepage')

@section('content')
    <article class="row justify-content-center align-items-center text-light bg-custom descrip">
        <div class="col-12 col-md-5"><img src="/images/homeFlatImage.png" alt="GameShop"></div>
        <div class="col-12 col-xl-7 home-descrip">روزانه اخبار گسترده ای در زمینه صنعت گیم و بازی های متنوعی برای انواع
            کنسول های بازی از
            کمپانی های مختلف تولید و منتشر میشود.
            این موضوع باعث شده تا گیم لند با توجه به تعداد و علاقه قابل توجه گیمر های ایرانی به این صنعت، در راستای پوشش
            این اخبار و بازی ها گام بردارد و در استفاده
            و دسترسی راحت تر و سریع تر نقش خود را ایفا کند.
        </div>
    </article>

    @include('components.home.slider')

    @include('components.home.recentBlogs')

    @include('components.home.gamesColumn')

@endsection
