<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    {{-- Icon --}}
    <link rel="icon" href="{{ asset('images/logo_solo.svg') }}" type="image/png">

    {{-- Tailwind --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Remixed Icons --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="flex flex-col items-center justify-center min-h-screen bg-grid">

@yield('content')



</body>

</html>
