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

    {{-- JS and CSS --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="flex flex-col items-center justify-center min-h-screen bg-grid">

    <div id="toast-container" class="fixed top-5 right-5 space-y-2 z-50">
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <x-toast type="error" :message="$error" />
            @endforeach
        @endif

        @foreach (['success', 'error', 'warning', 'info'] as $msg)
            @if (session($msg))
                <x-toast :type="$msg" :message="session($msg)" />
            @endif
        @endforeach
    </div>
    @yield('content')


<script>
        document.addEventListener('DOMContentLoaded', () => {
            const toasts = document.querySelectorAll('.toast');
            toasts.forEach((toast) => {
                setTimeout(() => {
                    toast.classList.add('opacity-0', 'transition', 'duration-500');
                    setTimeout(() => toast.remove(), 500);
                }, 7000);
            });
        });
    </script>
</body>

</html>
