@php
$mainClasses = "";
if (request()->routeIs('login')
    || request()->routeIs('register')
    || request()->routeIs('password.request')
    || request()->routeIs('password.reset')
    || request()->routeIs('verification.notice')
    || request()->routeIs('verification.verify')
    || request()->routeIs('password.confirm')
    ) {
    $mainClasses .= 'form-signin';
}
@endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Scire Panel') }}</title>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body class="py-5">
        <div class="container">
            @include('layouts.header')

            <!-- Page Content -->
            <main {{ $attributes->merge(['class' => $mainClasses]) }}>
                {{ $slot }}
            </main>
        </div>
    </body>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</html>
