@extends('layouts.master')
@section('title', 'Profile')

@section('content')
    <section class="container py-5">
        <div class="row my-5 user-panel" dir="rtl">
            <div class="col-12 col-xl-3 bg-custom">
                <a class="d-block text-right text-light py-3 border-bottom" href="#" id="addGame">افزودن آگهی</a>
                <a class="d-block text-right text-light py-3 border-bottom" href="#" id="myGame">آگهی های من</a>
                <a class="d-block text-right text-light py-3 border-bottom" href="#" id="setting">تنظیمات</a>
                <a class="d-block text-right text-light py-3" href="/logout" id="myGame">خروج</a>
            </div>
            <div class="col-12 col-xl-9 p-5" style="border: 1px solid #764AF1">

                @include('components.user.profile.addGame')

                @include('components.user.profile.userGames')

            </div>
        </div>
    </section>
@endsection
