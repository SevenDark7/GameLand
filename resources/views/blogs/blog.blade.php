@extends('layouts.master')

@section('title', 'Blog')

@section('content')
    <div class="container py-5">

        @if(count($blogs) < 1)
            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <h1 class="display-4 text-center" dir="rtl">محتوایی یافت نشد</h1>
                    <p class="lead text-center" dir="rtl">متاسفانه داده ای برای نمایش در صفحه مورد نظر وجود ندارد</p>
                </div>
            </div>
        @endif

        @foreach($blogs as $blog)
            <div class="card mb-3">
                <img class="card-img-top" style="height: 15rem" src="{{ $blog->image }}" alt="Blog Image Cap">
                <div class="card-body text-right">
                    <a class="h5 card-title text-right" href="{{ '/blogs/' . $blog->id }}">{{ $blog->title }}</a>
                    <hr style="background: #011627 !important;">
                    <p class="card-text text-justify" dir="rtl">{{ $blog->description }}</p>
                    <p class="card-text text-right"><small class="text-muted">{{ $blog->updated_at }}</small></p>
                    <a class="btn btn-primary" href="{{ '/blogs/' . $blog->id }}">مشاهده بیشتر</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
