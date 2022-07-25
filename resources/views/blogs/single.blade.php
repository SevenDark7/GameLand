@extends('layouts.master')

@section('content')
    <div class="row justify-content-center py-5">
        <div class="col-11 py-3" style="border: 1px dashed #764AF1;">
            <!-- Jumbotron -->
            <div class="jumbotron text-center">
                <h3>{{ $blogInfo->title }}</h3>
                <p class="lead mt-3 w-75 text-nowrap m-auto" style="overflow: hidden; text-overflow: ellipsis" dir="rtl">{{ $blogInfo->description }}</p>
            </div>
            <!-- Jumbotron -->

            <hr class="my-5 bg-custom">

            <img class="card-img-top" style="height: 20rem" src="{{ $blogInfo->image }}">
        </div>
    </div>
    <div class="container mb-3">
        <div class="row single-blog-body">
            <div class="col-12 text-right">
                <h4>{{ $blogInfo->title }}</h4>
            </div>
            <div class="col-12">
                <p class="lead text-justify" dir="rtl">{{ $blogInfo->description }}</p>
            </div>
        </div>
    </div>
    @include('components.blogs.similarContentSlider')
@endsection
