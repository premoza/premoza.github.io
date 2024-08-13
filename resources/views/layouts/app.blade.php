<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="index, follow">

    @php
    $canonicalUrl = url()->current();
    @endphp
    <link rel="canonical" href="{{ $canonicalUrl }}">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('pageTitle') - Freight</title>

    {{-- Icons --}}
    <!--
    <link rel="shortcut icon" href="">
    <link rel="apple-touch-icon" href="">
    <link rel="icon" href="" type="image/x-icon">
    -->

    {{-- OpenGraph --}}
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="@yield('pageTitle') - Freight" />
    <meta property="og:url" content="{{ $canonicalUrl }}/" />
    <meta property="og:site_name" content="Freight" />
    <meta name="twitter:card" content="summary_large_image" />

    {{-- Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">

    {{-- Scripts --}}
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div id="app">
        {{-- Nav --}}
        @include('layouts.nav')

        {{-- Content --}}
        <main class="py-4">
            @yield('content')
        </main>

        {{-- Footer --}}
        @include('layouts.footer')
    </div>

</body>

</html>