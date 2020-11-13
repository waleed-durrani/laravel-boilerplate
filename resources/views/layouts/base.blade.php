<!doctype html>
<html lang="{{ htmlLang() }}" @langrtl dir="rtl" @endlangrtl>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ appName() }} | @yield('title')</title>
    <meta name="description" content="@yield('meta_description', appName())">
    <meta name="author" content="@yield('meta_author', 'Anthony Rappa')">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('meta')

    <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
    <livewire:styles />
    <link href="{{ mix('css/app.css') }}" rel="stylesheet" />

    @stack('styles')
    @include('includes.partials.ga')
</head>
<body class="font-sans antialiased">
    @yield('content')

    <livewire:scripts />
    <script src="{{ mix('js/manifest.js') }}"></script>
    <script src="{{ mix('js/vendor.js') }}"></script>
    <script src="{{ mix('js/app.js') }}"></script>

    @stack('scripts')
</body>
</html>
