@extends('layouts.master')

@section('title', 'Singe-Game')

@section('content')
    <section class="row justify-content-center py-5">
        <div class="col-12">
            <img src="/images/background2.jpg" alt="Single Game" class="w-100 single-image border border-light">
        </div>
        <div class="col-8 text-center single-box py-2" style="margin-top: -4rem">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h1 class="display-6">{{ $gameInfo->name }}</h1>
                </div>
                <dvi class="col-8">
                    <p class="lead">{{ $gameInfo->description }}</p>
                </dvi>
            </div>
        </div>
        <div class="col-12 col-md-10 text-light py-4 text-right border single-details border-light my-5" dir="rtl">
            <ul>
                <li>
                    <h2>{{ $gameInfo->name }}</h2>
                </li>
                <li>
                    <p class="lead">{{ $gameInfo->description }}</p>
                </li>
            </ul>
        </div>

        @include('components.games.comment')
    </section>
@endsection
