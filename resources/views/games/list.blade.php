@extends('layouts.master')
@section('title', 'Games')
@section('content')

    <div class="container py-2">
        <div class="text-center text-custom" id="pageHeaderTitle">آگهی هایی که به تازگی منتشر شده اند</div>

        @foreach($games as $key => $game)
            @if($key % 2 == 0)
                <article class="postcard light blue">
                    <a class="postcard__img_link" href="{{ '/games/' . $game->slug }}">
                        <img class="postcard__img" src="https://picsum.photos/1000/1000" alt="Image Title"/>
                    </a>
                    <div class="postcard__text t-dark text-right" dir="rtl">
                        <h1 class="postcard__title blue"><a
                                href="{{ '/games/' . $game->slug }}">{{ $game->name }}</a>
                        </h1>
                        <div class="postcard__subtitle small">
                            <time datetime="2020-05-25 12:00:00">
                                <i class="fas fa-calendar-alt ml-2"></i>{{ jdate($game->release)->format('Y-m-d') }}
                            </time>
                        </div>
                        <div class="postcard__bar"></div>
                        <div class="postcard__preview-txt">{{ $game->description }}</div>
                        <ul class="postcard__tagbox">
                            <li class="tag__item"><i class="fas fa-tag ml-2"></i>{{ $game->platform }}</li>
                            <li class="tag__item"><i class="fas fa-list ml-2"></i>{{ $game->genre }}</li>
                            <li class="tag__item"><i class="fas fa-time ml-2"></i>{{ jdate($game->created_at)->ago() }}
                            </li>
                            <li class="tag__item play blue">
                                <a href="{{ '/games/' . $game->slug }}"><i class="fas fa-search ml-2"></i>مشاهده</a>
                            </li>
                        </ul>
                    </div>
                </article>
            @else
                <article class="postcard light blue">
                    <a class="postcard__img_link" href="{{ '/games/' . $game->slug }}">
                        <img class="postcard__img" src="https://picsum.photos/501/500" alt="Image Title"/>
                    </a>
                    <div class="postcard__text t-dark text-right" dir="rtl">
                        <h1 class="postcard__title blue"><a href="{{ '/games/' . $game->slug }}">{{ $game->name }}</a>
                        </h1>
                        <div class="postcard__subtitle small">
                            <time datetime="2020-05-25 12:00:00">
                                <i class="fas fa-calendar-alt ml-2"></i>{{ jdate($game->release)->format('Y-m-d') }}
                            </time>
                        </div>
                        <div class="postcard__bar"></div>
                        <div class="postcard__preview-txt">{{ $game->description }}</div>
                        <ul class="postcard__tagbox">
                            <li class="tag__item"><i class="fas fa-tag ml-2"></i>{{ $game->platform }}</li>
                            <li class="tag__item"><i class="fas fa-list ml-2"></i>{{ $game->genre }}</li>
                            <li class="tag__item"><i class="fas fa-time ml-2"></i>{{ jdate($game->created_at)->ago() }}
                            </li>
                            <li class="tag__item play blue">
                                <a href="{{ '/games/' . $game->slug }}"><i class="fas fa-search ml-2"></i>مشاهده</a>
                            </li>
                        </ul>
                    </div>
                </article>
            @endif
        @endforeach
    </div>
@endsection
