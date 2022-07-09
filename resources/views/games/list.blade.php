@extends('layouts.master')
@section('title', 'Games')
@section('content')
    <section class="bg-custom">
        <div class="container py-2">
            <div class="h1 text-center text-light" id="pageHeaderTitle">بازی هایی که به تازگی منتشر شده اند</div>
            <article class="postcard light yellow">
                <a class="postcard__img_link" href="#">
                    <img class="postcard__img" src="https://picsum.photos/501/501" alt="Image Title"/>
                </a>
                <div class="postcard__text text-right t-dark" dir="rtl">
                    <h1 class="postcard__title yellow"><a href="#">Devil May Cry</a></h1>
                    <div class="postcard__subtitle small">
                        <time datetime="2020-05-25 12:00:00">
                            <i class="fas fa-calendar-alt ml-2"></i>Mon, May 25th 2020
                        </time>
                    </div>
                    <div class="postcard__bar"></div>
                    <div class="postcard__preview-txt">بازی در حد نو میباشد و برای Play Station 4 میباشد که میتوانید با Far Cry هم تعویض کنید</div>
                    <ul class="postcard__tagbox">
                        <li class="tag__item"><i class="fas fa-tag ml-2"></i>PS5</li>
                        <li class="tag__item"><i class="fas fa-list ml-2"></i>Action</li>
                        <li class="tag__item play yellow">
                            <a href="#"><i class="fas fa-search ml-2"></i>مشاهده</a>
                        </li>
                    </ul>
                </div>
            </article>
        </div>
    </section>
@endsection
