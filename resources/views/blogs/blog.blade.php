@extends('layouts.master')

@section('title', 'Blog')

@section('content')
    <div class="card-deck my-5">
        <div class="row" dir="rtl">
            @foreach($blogs as $blog)
                <div class="col-12 col-md-4 col-xl-3 mb-5">
                    <div class="card">
                        <img class="card-img-top" src="{{ $blog->image }}" alt="Card image cap">
                        <div class="card-body text-right">
                            <a class="card-title h5 text-right" href="{{ '/blogs/' . $blog->slug }}">{{ $blog->title }}</a>
                            <p class="card-text blog-body text-justify">{{ $blog->description }}</p>
                            <a class="btn btn-outline-custom" href="{{ '/blogs/' . $blog->slug }}">مشاهده</a>
                        </div>
                        <div class="card-footer text-right">
                            <small class="text-muted text-right">آخرین آپدیت: {{ jdate($blog->updated_at)->ago() }}</small>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
