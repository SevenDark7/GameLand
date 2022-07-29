@extends('layouts.master')
@section('title', 'Blog')
@section('content')
    <section class="row justify-content-center py-5">
        <div class="col-11 py-3" style="border: 1px dashed #764AF1;">
            <!-- Jumbotron -->
            <div class="jumbotron text-center">
                <h3>{{ $blogInfo->title }}</h3>
                <p class="lead mt-3 w-75 text-nowrap m-auto" style="overflow: hidden; text-overflow: ellipsis"
                   dir="rtl">{{ $blogInfo->description }}</p>
            </div>
            <!-- Jumbotron -->

            <hr class="my-5 bg-custom">

            <img class="card-img-top" style="height: 20rem" src="{{ $blogInfo->image }}">
        </div>
        <div class="col-12 py-4 text-right text-light bg-custom single-details mt-5" dir="rtl">
            <div class="container">
                <h2>{{ $blogInfo->title }}</h2>
            </div>
        </div>
        <div class="col-12 py-4 text-right text-dark single-details mb-5" dir="rtl">
            <div class="container">
                <p class="lead text-justify" dir="rtl">{{ $blogInfo->description }}</p>
            </div>
        </div>
        @if(count($blogs) > 4)
            <div class="col-12">
                @include('components.blogs.similarContentSlider')
            </div>
        @endif
        @include('components.blogs.comment')
    </section>
@endsection
