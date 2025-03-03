<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>

<body class="fullscreen">
    <div class="d-flex flex-column flex-md-row h-100 align-items-center default-bg-dark">
        <!-- Left Section (Hidden on Mobile) -->
        <div class="flex-col w-50 d-none d-md-block text-center">
            <img class="my-5" src="{{ asset('logo_light.png') }}" width="30%" height="auto" alt="">
            <h1 class="text-center"><span>Nyanumba</span></h1>
            <h1 class="text-center"><span>Codes</span></h1>
        </div>

        <!-- Right Section (Takes full width on mobile) -->
        <div class="flex-col w-100 w-md-50 bg-secondary h-100 p-5">
            <div class="font-sans text-gray-900 antialiased my-auto">
                {{ $slot }}
                <h2 class="text-center"> {{ $header ?? '' }}</h2>
            </div>
        </div>
    </div>

    @livewireScripts
</body>

</html>
