@extends('admin.articles.layouts.master')

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
                    <li class="dropdown-item">Delete Game</li>
                    <li class="dropdown-item">Update Game</li>
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
    <section class="d-flex flex-column bg-dark" style="flex-basis: 40%">
        <div class="d-flex justify-content-center align-items-center py-3 border-bottom mb-3">
            <i class="material-icons mr-3 text-primary" style="font-size: 4em">apps</i>
            <h3 class="text-light">Quick Access</h3>
        </div>
    </section>
@endsection
