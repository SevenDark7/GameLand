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
                <img class="card-img-top" src="{{ 'http://localhost/' . $blog->image }}" alt="Blog Image Cap">
                <div class="card-body">
                    <h5 class="card-title">{{ $blog->title }}</h5>
                    <p class="card-text">{{ $blog->description }}</p>
                    <p class="card-text"><small class="text-muted">{{ $blog->updated_at }}</small></p>
                </div>
            </div>
        @endforeach
    </div>
@endsection
