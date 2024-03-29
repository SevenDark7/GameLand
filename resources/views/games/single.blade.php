@extends('layouts.master')

@section('title', 'Game')

@section('content')
    <section class="row justify-content-center py-5">
        <div class="col-12">
            <img src="/images/background2.jpg" alt="Single Game" class="w-100 single-image border border-primary">
        </div>
        <div class="col-8 text-center text-light single-box py-2" style="margin-top: -4rem">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h1 class="display-6">{{ $gameInfo->name }}</h1>
                </div>
                <dvi class="col-8">
                    <p class="lead">{{ $gameInfo->description }}</p>
                </dvi>
            </div>
        </div>
        <div class="col-12 py-4 text-right text-light bg-custom single-details mt-5" dir="rtl">
            <div class="container">
                <h2>{{ $gameInfo->name }}</h2>
            </div>
        </div>
        <div class="col-12 py-4 text-right text-dark game-single-details mb-5" dir="rtl">
            <div class="container">
                <ul class="p-0">
                    <li>
                        <h4 class="py-3 text-custom">توضیحات</h4>
                    </li>
                    <p class="lead">{{ $gameInfo->description }}</p>
                    <hr class="bg-custom">
                    <li>
                        <h4 class="py-3 text-custom">پلتفرم</h4>
                    </li>
                    <p class="lead">{{ $gameInfo->platform }}</p>
                    <hr class="bg-custom">
                    <li>
                        <h4 class="py-3 text-custom">شهرستان</h4>
                    </li>
                    <p class="lead">{{ $gameInfo->city->name . ' (' . $gameInfo->city->province->name . ')' }}</p>
                    <hr class="bg-custom">
                    <li>
                        <h4 class="py-3 text-custom">قیمت</h4>
                    </li>
                    <p class="lead">{{ number_format($gameInfo->price) }} ریال</p>
                    <hr class="bg-custom">
                </ul>
            </div>
        </div>

        @include('components.games.comment')
    </section>
@endsection
