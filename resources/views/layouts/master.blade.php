<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gaming - @yield('title')</title>
    <link rel="stylesheet" href="/css/master.css">
    <link rel="stylesheet" href="/fonts/icon.css">
</head>
<body>
    @include('layouts.header')

    <section class="content">

        @yield('content')

    </section>

    {{-- @include('layouts.footer') --}}

    <script src="/js/jquery-3.6.0.min.js"></script>
    <script src="/js/master.js"></script>
</body>
</html>
