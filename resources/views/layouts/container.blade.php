<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>@yield('title')</title>
    <link rel="apple-touch-icon" sizes="57x57" href="/assets/img/ic-logo.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/assets/img/ic-logo.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/assets/img/ic-logo.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/assets/img/ic-logo.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/assets/img/ic-logo.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/assets/img/ic-logo.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/assets/img/ic-logo.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/assets/img/ic-logo.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/img/ic-logo.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/assets/img/ic-logo.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/img/ic-logo.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/assets/img/ic-logo.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/img/ic-logo.png">
    <link rel="manifest" href="/assets/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/assets/img/ic-logo.png">
    <meta name="theme-color" content="#ffffff">
    <!-- Main styles for this application-->
    @include('layouts.styles')
</head>

<body>
    @include('layouts.sidebar')
    <div class="wrapper d-flex flex-column min-vh-100 bg-light">
        @include('layouts.header')
        <div class="body flex-grow-1 px-3">
            @include('layouts.alert')
            @yield('content')
        </div>
        @include('layouts.footer')
    </div>

    @include('layouts.script')
    @yield('additional-script')
</body>

</html>
