<!DOCTYPE html>
<html lang="en">

<head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="@yield('title')">
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
    @include('layouts.styles')
</head>

<body>
    <div class="bg-light min-vh-100 d-flex flex-row align-items-center">
        @yield('content')
    </div>
    @include('layouts.script')
</body>

</html>
