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

    <title>@yield('pageTitle') - Premoza</title>

    {{-- Icons --}}
    <link rel="shortcut icon" href="/assets/premoza/premoza-icon-min-round.png">
    <link rel="apple-touch-icon" href="/assets/premoza/premoza-icon-min-round.png">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">

    {{-- OpenGraph --}}
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="@yield('pageTitle') - Premoza" />
    <meta property="og:url" content="{{ $canonicalUrl }}/" />
    <meta property="og:site_name" content="Premoza" />
    <meta name="twitter:card" content="summary_large_image" />

    {{-- FontAwesome --}}
    <link rel="stylesheet" href="/assets/font-awesome/css/fontawesome.min.css" />
    <link rel="stylesheet" href="/assets/font-awesome/css/brands.min.css" />
    <link rel="stylesheet" href="/assets/font-awesome/css/solid.min.css" />

    {{-- Poppins Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">


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