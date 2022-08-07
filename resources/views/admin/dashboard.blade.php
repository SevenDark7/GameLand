@extends('admin.layouts.master')

@section('contents')
    <section class="d-flex flex-column mr-3 bg-secondary" style="flex-basis: 35%">
        <div class="d-flex justify-content-center align-items-center py-3 border-bottom mb-3">
            <i class="material-icons mr-3 text-dark" style="font-size: 4em">airplay</i>
            <h3 class="text-dark">Menu</h3>
        </div>
        <section class="px-3" style="overflow-y: auto">
            @foreach($games as $game)
                <div class="card bg-dark text-light row justify-content-between wrapper text-right" dir="rtl">
                    <div class="card-title col-12">
                        <div class="row">
                            <div class="col-10">
                                <p><i class="fa fa-header text-custom" aria-hidden="true"></i> {{ $game->name }}</p>
                            </div>
                            <div class="col-2">
                                <div class="row">
                                    <div class="col-12">
                                        <form action="/games/{{ $game->slug }}" method="post">
                                            @method('PUT')
                                            @csrf
                                            <input type="hidden" value="{{ $game->name }}" name="name">
                                            <input type="hidden" value="{{ $game->platform }}" name="platform">
                                            <input type="hidden" value="{{ $game->genre }}" name="genre">
                                            <input type="hidden" value="{{ $game->description }}" name="description">
                                            <input type="hidden" value="{{ $game->address }}" name="address">
                                            <input type="hidden" value="{{ $game->image }}" name="image">
                                            <input type="hidden" value="{{ $game->price }}" name="price">
                                            <input type="hidden" value="{{ $game->city_id }}" name="city_id">
                                            <input type="hidden" value="1" name="status">
                                            <button type="submit" class="btn btn-success badge" style="width: 3rem">
                                                تایید
                                            </button>
                                        </form>
                                    </div>
                                    <div class="col-12">
                                        <form action="/games/{{ $game->slug }}" method="post">
                                            @method('PUT')
                                            @csrf
                                            <input type="hidden" value="{{ $game->name }}" name="name">
                                            <input type="hidden" value="{{ $game->platform }}" name="platform">
                                            <input type="hidden" value="{{ $game->genre }}" name="genre">
                                            <input type="hidden" value="{{ $game->description }}" name="description">
                                            <input type="hidden" value="{{ $game->address }}" name="address">
                                            <input type="hidden" value="{{ $game->image }}" name="image">
                                            <input type="hidden" value="{{ $game->price }}" name="price">
                                            <input type="hidden" value="{{ $game->city_id }}" name="city_id">
                                            <input type="hidden" value="0" name="status">
                                            <button type="submit" class="btn btn-info badge" style="width: 3rem">رد
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body col-12">
                        <div class="row">
                            <div class="col-10">
                                <p><i class="fa fa-comment text-custom" aria-hidden="true"></i> {{ $game->description }}</p>
                            </div>
                            <div class="col-2">
                                <div class="row">
                                    <div class="col-12">
                                        <a class="btn btn-warning badge">ویرایش</a>
                                    </div>
                                    <div class="col-12">
                                        <form action="/games/{{ $game->slug }}" method="post">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-danger badge" style="width: 3rem">حذف
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="bg-light">
            @endforeach
        </section>
    </section>
    <section class="d-flex flex-column bg-dark wrapper" style="flex-basis: 40%">
        <div class="d-flex justify-content-center align-items-center py-3 border-bottom">
            <i class="material-icons mr-3 text-primary" style="font-size: 4em">apps</i>
            <h3 class="text-light">Quick Access</h3>
        </div>
        @if($errors->any())
            <div class="alert alert-danger">
                <ul class="text-right" dir="auto">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <ul class="list-group list-unstyled" style="overflow-y: auto">
            <li class="list-group-item bg-dark border-white rounded-0 border-top-0 border-left-0">
                @include('components.admin.dashboard.newGame')
            </li>
            <li class="list-group-item bg-dark border-white rounded-0 border-top-0 border-left-0">
                @include('components.admin.dashboard.newInformation')
            </li>
            <li class="list-group-item bg-dark border-white rounded-0 border-top-0 border-left-0">
                @include('components.admin.dashboard.newBlog')
            </li>
        </ul>
    </section>
@endsection
