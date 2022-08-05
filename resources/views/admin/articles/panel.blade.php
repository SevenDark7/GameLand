@extends('admin.layouts.master')

@section('contents')
    <section class="d-flex flex-column mr-3 bg-secondary" style="flex-basis: 35%">
        <div class="d-flex justify-content-center align-items-center py-3 border-bottom mb-3">
            <i class="material-icons mr-3 text-dark" style="font-size: 4em">airplay</i>
            <h3 class="text-dark">Menu</h3>
        </div>
        <ul class="nav nav-pills flex-column justify-content-start pl-5 border-bottom">
            <li class="drop-down text-light mb-3">
                <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">Home</button>
                <ul class="dropdown-menu list-unstyled fw-normal" style="cursor: pointer">
                    <li class="dropdown-item">Update Game</li>
                    <li class="dropdown-item">Delete Game</li>
                </ul>
            </li>
            <li class="drop-down text-light mb-3">
                <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">Dashboard</button>
                <ul class="dropdown-menu list-unstyled fw-bold" style="cursor: pointer">
                    <li class="dropdown-item">New Game</li>
                    <li class="dropdown-item">Comments</li>
                </ul>
            </li>
        </ul>
        <div class="dropdown justify-content-start mt-3 pl-5">
            <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">Account</button>
            <ul class="dropdown-menu list-unstyled fw-normal" style="cursor: pointer">
                <li class="dropdown-item text-success">New...</li>
                <li class="dropdown-item">Profile</li>
                <li class="dropdown-item">Setting</li>
                <li class="dropdown-item text-danger">Sign Out</li>
            </ul>
        </div>
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
                @include('components.admin.dashboard.newInformation')
            </li>
            <li class="list-group-item bg-dark border-white rounded-0 border-top-0 border-left-0">
                @include('components.admin.dashboard.newBlog')
            </li>
            <li class="list-group-item bg-dark border-white rounded-0 border-left-0">
                <form action="/admin/articles/update" method="post">
                    @csrf
                    <legend class="text-info">Update Game</legend>
                    <div class="form-group">
                        <label for="id" class="text-light">Game Name</label>
                        <input type="text" name="id" class="form-control" autocomplete="off"
                               placeholder="Enter The Name Of The Game To Edit">
                    </div>
                    <div class="d-flex justify-content-around">
                        <button type="submit" class="btn btn-sm w-25 btn-outline-success">Check</button>
                        <button type="reset" class="btn btn-sm w-25 btn-outline-danger">Cancel</button>
                    </div>
                </form>

                @if(isset($article))
                    <form action="/admin/articles/updated" method="post">
                        @csrf
                        <table class="table table-dark table-sm mt-3">
                            <tbody>
                            <tr>
                                <td><label for="New" class="text-light">Edited Name</label></td>
                                <td><input type="text" name="updatedName" class="form-control"
                                           value="{{ $article->id }}" autocomplete="off"
                                           placeholder="Enter The Edited Name Of The Game"></td>
                            </tr>
                            <tr>
                                <td><label for="New" class="text-light">Edited Platform</label></td>
                                <td><input type="text" name="updatedPlatform" class="form-control"
                                           value="{{ $article->platform }}" autocomplete="off"
                                           placeholder="Enter The Game Edited Platform"></td>
                            </tr>
                            <tr>
                                <td><label for="New" class="text-light">Edited Release</label></td>
                                <td><input type="text" name="updatedRelease" class="form-control"
                                           value="{{ $article->release }}" autocomplete="off"
                                           placeholder="Enter The Edited Release Date Of The Game"></td>
                            </tr>
                            <tr>
                                <td><label for="New" class="text-light">Edited Publisher</label></td>
                                <td><input type="text" name="updatedPublisher" class="form-control"
                                           value="{{ $article->publisher }}" autocomplete="off"
                                           placeholder="Enter The Edited Game Publisher"></td>
                            </tr>
                            <tr>
                                <td><label for="New" class="text-light">Edited Genre</label></td>
                                <td><input type="text" name="updatedGenre" class="form-control"
                                           value="{{ $article->genre }}" autocomplete="off"
                                           placeholder="Specify The Edited Genre Of The Game"></td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-around">
                            <button type="submit" class="btn btn-sm w-25 btn-outline-success">Edit</button>
                            <button type="reset" class="btn btn-sm w-25 btn-outline-danger">Cancel</button>
                        </div>
                    </form>
                @endif
            </li>
            <li class="list-group-item bg-dark border-white rounded-0 border-left-0">
                <form href="/admin/articles/delete" method="post">
                    <legend class="text-info">Delete Game</legend>
                    <div class="form-group">
                        <label for="New" class="text-light">Game Name</label>
                        <input type="text" name="delete" class="form-control" autocomplete="off"
                               placeholder="Enter The Name Of The Game To Delete">
                    </div>
                    <div class="d-flex justify-content-around">
                        <button type="submit" class="btn btn-sm w-25 btn-outline-success">Delete</button>
                        <button type="reset" class="btn btn-sm w-25 btn-outline-danger">Cancel</button>
                    </div>
                </form>
            </li>
        </ul>
    </section>
@endsection
